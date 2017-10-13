<?php

class ClDeletePP 
{
    static $already_ran = false;
  function FnDeletePP($bean, $event, $arguments)
  {
    if(self::$already_ran == true) return;
    self::$already_ran = true;
    $id = $bean->id;    
    $query = "
    SELECT sco_ordencompra_sco_plandepagossco_ordencompra_ida as oc_id
    FROM sco_ordencompra_sco_plandepagos_c
    where sco_ordencompra_sco_plandepagossco_plandepagos_idb = '".$id."'";
    $results = $bean->db->query($query, true);
    $row = $bean->db->fetchByAssoc($results);
    $id_oc =$row['oc_id'];    
    
    $querydp = "UPDATE sco_plandepagos
    SET deleted = 1 WHERE id = '$id'";
    $objdp = $bean->db->query($querydp, true); 

    $queryrel = "UPDATE sco_ordencompra_sco_plandepagos_c 
    SET deleted = 1 WHERE sco_ordencompra_sco_plandepagossco_plandepagos_idb = '$id'";
    $objrel = $bean->db->query($queryrel, true);

    $querypp = "SELECT SUM(ppg_porc) as sumapor
    FROM sco_plandepagos as pp
    INNER JOIN sco_ordencompra_sco_plandepagos_c as rpp
    ON pp.id = rpp.sco_ordencompra_sco_plandepagossco_plandepagos_idb
    WHERE pp.deleted = 0 AND rpp.deleted = 0
    AND sco_ordencompra_sco_plandepagossco_ordencompra_ida = '".$id_oc."';";
    $objpp = $bean->db->query($querypp, true);    
    $rowpp = $bean->db->fetchByAssoc($objpp);  
    $descto = $rowpp['sumapor'];
    if($descto == null){
        $descto = 0;  
        $queryoc = "UPDATE sco_ordencompra
        SET orc_aux1 = $descto WHERE id = '$id_oc';";
        $objoc = $bean->db->query($queryoc, true); 
    }else{
        $queryoc = "UPDATE sco_ordencompra
        SET orc_aux1 = $descto WHERE id = '$id_oc';";
        $objoc = $bean->db->query($queryoc, true);     
    }
    
  }
}
?>
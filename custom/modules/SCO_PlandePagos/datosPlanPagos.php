<?php

class CldatosPP 
{
  function Fndatospp($bean, $event, $arguments)
  {
    $id = $bean->id;
    $query = "
    SELECT 
    sco_ordencompra_sco_plandepagossco_ordencompra_ida as oc_id
    FROM sco_ordencompra_sco_plandepagos_c
    where 
    sco_ordencompra_sco_plandepagossco_plandepagos_idb = '".$id."'";
    $results = $bean->db->query($query, true);
    $row = $bean->db->fetchByAssoc($results);
    
    $beanoc = BeanFactory::getBean('SCO_OrdenCompra', $row['oc_id']);
    $tot = $beanoc->orc_importet;

    $valor = $tot * ($bean->ppg_porc / 100);
    $bean->ppg_monto = $valor;
    $bean->name = $bean->ppg_fecha;
    $bean->ppg_hito = $bean->ppg_tipo;

    $bean->save();
  } 
}
?>
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
    $id_oc =$row['oc_id'];
    $beanoc = BeanFactory::getBean('SCO_OrdenCompra', $row['oc_id']);
    $tot = $beanoc->orc_tototal;
    $mon_oc = $beanoc->orc_tcmoneda;

    $valor = $tot * ($bean->ppg_porc / 100);
    $bean->ppg_monto = $valor;
    $bean->name = $bean->ppg_fecha;
    $bean->ppg_hito = $bean->ppg_tipo;
    $bean->currency_id = $mon_oc;

    $querypor = "
    SELECT sum(ppg_porc) as sum_por FROM sco_plandepagos as pp 
    INNER JOIN sco_ordencompra_sco_plandepagos_c as ocppidba
    ON ocppidba.sco_ordencompra_sco_plandepagossco_plandepagos_idb = pp.id
    WHERE ocppidba.sco_ordencompra_sco_plandepagossco_ordencompra_ida = '".$id_oc."'";
    $respor = $bean->db->query($querypor, true);
    $rowpor = $bean->db->fetchByAssoc($respor);
    if($rowpor['sum_por'] <= 100){
        $bean->ppg_porc =$rowpor['sum_por'] ;
        $bean->save();
    }else{
        echo "<script>alert('asd');</script>";
    }
  }
}
?>
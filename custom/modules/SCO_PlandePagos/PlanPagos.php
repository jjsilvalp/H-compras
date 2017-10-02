<?php

class PlanPagos 
{
  function Fndatospp($bean, $event, $arguments)
  {
    /*$id = $bean->id;    
    $query = "
    SELECT sco_ordencompra_sco_plandepagossco_ordencompra_ida as oc_id
    FROM sco_ordencompra_sco_plandepagos_c
    where sco_ordencompra_sco_plandepagossco_plandepagos_idb = '".$id."'";
    $results = $bean->db->query($query, true);
    $row = $bean->db->fetchByAssoc($results);
    $id_oc =$row['oc_id'];*/

    $bean->load_relationship('sco_ordencompra_sco_plandepagos');
    $relatedBeans = $bean->sco_ordencompra_sco_plandepagos->getBeans();
    reset($relatedBeans);
    $parentBean = current($relatedBeans);
    $idoc = $parentBean->id;

    $query = "SELECT sco_ordencompra_sco_productossco_productos_idb as idp
    FROM sco_ordencompra_sco_productos_c 
    WHERE sco_ordencompra_sco_productossco_ordencompra_ida = '$idoc'
    AND deleted = 0;";
    $objoc = $bean->db->query($query, true);    
    $row = $bean->db->fetchByAssoc($results);
    //obteniendo plan de pagos
    $beanp = BeanFactory::getBeans('SCO_Productos', $row['idp']);  
    $tot = $beanp->pro_aux1;

    $valor = $tot * ($bean->ppg_porc / 100);
    $bean->ppg_monto = $valor;
    $bean->name = $bean->ppg_fecha;
    $bean->ppg_hito = $bean->ppg_tipo;
    $bean->ppg_moneda = $mon_oc;

    $bean->save();
  }
}
?>
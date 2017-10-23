<?php

class PlanPagos 
{
    static $already_ran = false;
    
  function Fndatospp($bean, $event, $arguments)
  {
    if(self::$already_ran == true) return;
    self::$already_ran = true;
    $id = $bean->id;    
    $bean->load_relationship('sco_ordencompra_sco_plandepagos');
    $relatedBeans = $bean->sco_ordencompra_sco_plandepagos->getBeans();
    reset($relatedBeans);
    $parentBean = current($relatedBeans);
    $id_oc = $parentBean->id;

    $beanoc = BeanFactory::getBean('SCO_OrdenCompra', $id_oc);
    $tot = $beanoc->orc_importet;
    $mon_oc = $beanoc->orc_tcmoneda;    

    $valor = $tot * ($bean->ppg_porc / 100);
    $bean->ppg_monto = $valor;
    $bean->name = $bean->ppg_fecha;
    $bean->ppg_hito = $bean->ppg_tipo;
    $bean->ppg_moneda = $mon_oc;

    $querypp = "SELECT SUM(ppg_porc) as sumapor
    FROM sco_plandepagos as pp
    INNER JOIN sco_ordencompra_sco_plandepagos_c as rpp
    ON pp.id = rpp.sco_ordencompra_sco_plandepagossco_plandepagos_idb
    WHERE pp.deleted = 0 AND rpp.deleted = 0
    AND sco_ordencompra_sco_plandepagossco_ordencompra_ida = '".$id_oc."';";
    $objpp = $bean->db->query($querypp, true);    
    $rowpp = $bean->db->fetchByAssoc($objpp);
    
    $sumatotal = $rowpp['sumapor'] + $bean->ppg_porc;
    if($sumatotal > 100){            
        echo "<script>alert('La suma de los % del Plan de Pagos no debe ser mayor que 100 %');</script>";
        exit();
    }else{        
        if($bean->ppg_porc == 0){  
            echo "<script>alert('".$bean->ppg_porc." representa ningun valor');</script>";
            exit();         
        }else{            
            $bean->save(); 
        }
    }
  }
}
?>
<?php

class PlanPagos 
{
  function Fndatospp($bean, $event, $arguments)
  {
    $id = $bean->id;    
    $query = "
    SELECT sco_ordencompra_sco_plandepagossco_ordencompra_ida as oc_id
    FROM sco_ordencompra_sco_plandepagos_c
    where sco_ordencompra_sco_plandepagossco_plandepagos_idb = '".$id."'";
    $results = $bean->db->query($query, true);
    $row = $bean->db->fetchByAssoc($results);
    $id_oc =$row['oc_id'];

    $beanoc = BeanFactory::getBean('SCO_OrdenCompra', $row['oc_id']);
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

    if($bean->ppg_porc < 100){       
        $resto = $rowpp['sumapor'] + $bean->ppg_porc;
        if($resto <= 100){    
            if($resto <> 0){   
                $bean->save();
            }else{
                echo "<script>alert('".$resto." representa ningun valor');</script>";
                exit();
            }
        }else{
            echo "<script>alert('La suma de los % no debe ser mayor que 100');</script>";
            exit();
        }
    }else{      
        echo "<script>alert('El % ".$bean->ppg_porc." no debe ser mayor a 100');</script>";
        exit();
    }
  }
}
?>
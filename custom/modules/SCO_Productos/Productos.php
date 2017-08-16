<?php

class Productos 
{
	function Fnproductos($bean, $event, $arguments) 
        {
      	//obtiene datos proyecto
      	$idpy = $bean->sco_proyectosco_sco_productossco_proyectosco_ida;
      	$beanpy = BeanFactory::getBean('SCO_ProyectosCO', $idpy);
      	$pynom = $beanpy->name;
      	$pycor = $beanpy->proyc_correlativo;
      	#Obteniedno id de la relacion 
      	$id_pc = $bean->sco_productos_sco_productoscomprassco_productoscompras_ida;
      	#Query para obtener campos de Productos Compra
      	$beanpc = BeanFactory::getBean("SCO_ProductosCompras",$id_pc);
        $bean->pro_descripcion = $beanpc->proge_nompro." ".$beanpc->proge_descripcion;
        $bean->pro_unidad = $beanpc->proge_unidad;
        $bean->pro_nombre = $beanpc->proge_nompro;
        $bean->name = $beanpc->name;
        $bean->pro_nomproyco = $pynom;
		#Operaciones matematicas para el calculo del precio total
        if($bean->pro_preciound == ""){  
	        $bean->pro_preciound = $beanpc->proge_preciounid;    	
	        if($bean->pro_preciound >= "0"){
			        switch (trim($bean->pro_tipodesc)) {
			        	case '1':
			        			$st = $bean->pro_preciound  * $bean->pro_cantidad;
			        			$d = $st * $bean->pro_descuento;
			        			$bean->pro_subtotal = $st -($d / 100);
			        			$bean->pro_valor = $st - $bean->pro_subtotal;
			        			$bean->pro_procentaje = $bean->pro_descuento;
			        		break;
			        	case '2':
			        			$st = $bean->pro_preciound  * $bean->pro_cantidad;		   
			        			$bean->pro_subtotal = $st - $bean->pro_descuento;
			        			$bean->pro_valor = $bean->pro_descuento;
			        			$bean->pro_procentaje = ($bean->pro_descuento * 100)/$st;
			        		break;
			        	default:
			       				$bean->pro_subtotal = $bean->pro_preciound  * $bean->pro_cantidad;
			        		break;
			        }
	        }
    	}else{
    		if($bean->pro_preciound >= "0"){
			        switch (trim($bean->pro_tipodesc)) {
			        	case '1':
			        			$st = $bean->pro_preciound  * $bean->pro_cantidad;
			        			$d = $st * $bean->pro_descuento;
			        			$bean->pro_subtotal = $st -($d / 100);
			        			$bean->pro_valor = $st - $bean->pro_subtotal;
			        			$bean->pro_procentaje = $bean->pro_descuento;
			        		break;
			        	case '2':
			        			$st = $bean->pro_preciound  * $bean->pro_cantidad;		   
			        			$bean->pro_subtotal = $st - $bean->pro_descuento;
			        			$bean->pro_valor = $bean->pro_descuento;
			        			$bean->pro_procentaje = ($bean->pro_descuento * 100)/$st;
			        		break;
			        	default:
			       				$bean->pro_subtotal = $bean->pro_preciound  * $bean->pro_cantidad;
			        		break;
			        }
	        }
    	}
        $bean->save();
 	  }

 	function FnDeproductos($bean, $event, $arguments) 
 	{
 		#Obteniendo Id OC
        #$id_p = $bean->id;        
		$bean->load_relationship('sco_ordencompra_sco_productos');
	    $relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
	    reset($relatedBeans);
	    $parentBean = current($relatedBeans);
	    $idoc = $parentBean->id;
		#Recorriendo Productos
		$beanoc = BeanFactory::getBean('SCO_OrdenCompra', $idoc);
		$beanoc->load_relationship('sco_ordencompra_sco_productos');
	    $sumaprod = 0;
	    $relatedBeanspr = $beanoc->sco_ordencompra_sco_productos->getBeans();
	    foreach ($relatedBeanspr as $prod ) {
	    	$sumaprod += $prod->pro_subtotal;
	    }
	    $beanoc->orc_importet = $sumaprod;
	    $beanoc->orc_tototal = $sumaprod;
	    $beanoc->save(); 
 	}

 	function FnNomOC($bean, $event, $arguments) 
 	{
 		//id de oc
 		#$id_p = $bean->id;      
		$bean->load_relationship('sco_ordencompra_sco_productos');
	    $relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
	    reset($relatedBeans);
	    $parentBean = current($relatedBeans);
	    $idoc = $parentBean->id;
	    //consulta identificador proyectos	    
	    $query2 = "
	    SELECT DISTINCT
		po.name, 
		po.proyc_correlativo
		FROM sco_ordencompra_sco_productos_c ocpr, 
		sco_productos pr, 
		sco_proyectosco_sco_productos_c prpr, 
		sco_proyectosco po
		WHERE ocpr.deleted = 0 
		AND ocpr.sco_ordencompra_sco_productossco_productos_idb = pr.id 
		AND prpr.sco_proyectosco_sco_productossco_productos_idb = pr.id
		AND prpr.sco_proyectosco_sco_productossco_proyectosco_ida = po.id 
		AND ocpr.sco_ordencompra_sco_productossco_ordencompra_ida = '$idoc'";
		$obj = $bean->db->query($query2, true);	   
	    $nom = "";
	    $cnt_obj = 0;
	    while($row = $bean->db->fetchByAssoc($obj))
	      {
	        //recorre elementos
	        #$nom .= $row["name"] . "_" . $row["proyc_correlativo"] . " - ";
	        $nom .= $row["name"] . "_";
	        $cnt_obj++;
	      }
	    if($cnt_obj > 0)
	    {
	    	$beanoc = BeanFactory::getBean('SCO_OrdenCompra', $idoc);
		    $beanoc->name = $nom;
		    $beanoc->save();
	    }
 	}

 	function FnActualizaPP($bean, $event, $arguments) 
 	{
 		#Obteniendo Id OC
        #$id_p = $bean->id;      
		$bean->load_relationship('sco_ordencompra_sco_productos');
	    $relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
	    reset($relatedBeans);
	    $parentBean = current($relatedBeans);
	    $idoc = $parentBean->id;
	    #Obtenieno Monto total en la Orden de compra
	    $beanoc = BeanFactory::getBean('SCO_OrdenCompra', $idoc);
	    $tot_oc = $beanoc->orc_tototal;
	    $mon_oc = $beanoc->orc_tcmoneda;
	    //obteniendo plan de pagos
	    $beanoc->load_relationship('sco_ordencompra_sco_plandepagos');
	    $relatedBeanspp = $beanoc->sco_ordencompra_sco_plandepagos->getBeans();
	    foreach ($relatedBeanspp as $beanrelpp) {
	    	$pp_porc = $beanrelpp->ppg_porc;
	        $pp_impact = $tot_oc * $pp_porc / 100;
	        $beanrelpp->ppg_monto = $pp_impact;
	        $beanrelpp->currency_id = $mon_oc;
	        $beanrelpp->save();
	    }	               
 	}
}
?>
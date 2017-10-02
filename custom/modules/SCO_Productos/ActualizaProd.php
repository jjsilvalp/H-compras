<?php 
/*
class Clprodedit 
{
	function Fnprodedit($bean, $event, $arguments){

 		if(empty($bean->description) == TRUE){
      	$beanpc = BeanFactory::getBean('SCO_ProductosCompras',$bean->sco_productos_sco_productoscomprassco_productoscompras_ida);
      	$bean->pro_descripcion = $beanpc->proge_nompro." ".$beanpc->proge_descripcion;
	    $bean->pro_unidad = $beanpc->proge_unidad;
	    $bean->pro_nombre = $beanpc->proge_nompro;
	    $bean->name = $beanpc->name;
	    $bean->pro_nomproyco = $bean->sco_proyectosco_sco_productos_name;

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
	    exit();
	  }

 	}
*/
}
 ?>
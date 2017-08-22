<?php

class ClProductos 
{
	function Fnproductos($bean, $event, $arguments) 
    {
    if(empty($bean->description) == TRUE){
	  
	  }else{
	  	 	$prod = $bean->description;
	  	 	$prod = str_replace("[[", "", $prod);
	  	 	$prod = str_replace("]]", "", $prod);
		    $prod = str_replace("&quot;","",$prod);		    		    
		    $prod = str_replace("[", "", $prod);
		    $prod = str_replace("],", "|", $prod);
		    $filas = explode("|", $prod);		    	
		    $cnt_filas = count($filas);

		    $bean->load_relationship('sco_ordencompra_sco_productos');
	    	$relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
	    	reset($relatedBeans);
	    	$parentBean = current($relatedBeans);
	    	$idoc = $parentBean->id;

		    for ($i=0; $i<$cnt_filas; $i++)
		    {
		      $textfila = $filas[$i];
		      $fila = explode(",", $textfila);
		      $idpc = $fila[0];
		      $cant = $fila[3];
		      $prec = $fila[4];
		      $dscp = $fila[5];
		      $dscv = $fila[6];
		      $stot = $fila[7];
		      $idpo = $fila[8];
	   		
		      $query = "SELECT id, name, proge_nompro, proge_descripcion FROM sco_productoscompras WHERE deleted = 0 AND name = '$idpc'";
		      $results = $GLOBALS['db']->query($query, true);
		      $row = $GLOBALS['db']->fetchByAssoc($results);

		      $query1 = "SELECT id, name FROM sco_proyectosco WHERE deleted = 0 AND name = '$idpo'";
		      $results1 = $GLOBALS['db']->query($query1, true);
		      $row1 = $GLOBALS['db']->fetchByAssoc($results1);

		      $beanp = BeanFactory::newBean('SCO_Productos');		      
		      $beanp->sco_productos_sco_productoscomprassco_productoscompras_ida = $row['id'];
		      $beanp->name= $row['name'];
		      $beanp->pro_cantidad = $cant;
		      $beanp->pro_preciound = $prec;
		      $beanp->pro_tipodesc = "1";
		      $beanp->pro_procentaje = $dscp;
		      $beanp->pro_descuento = $dscv;
		      $beanp->pro_subtotal = $stot;
		      $beanp->pro_descripcion = $row['proge_nompro']." ".$row['proge_descripcion'];
		      $beanp->sco_proyectosco_sco_productossco_proyectosco_ida = $row1['id'];
		      $beanp->pro_nomproyco = $row1['name'];
		      $beanp->sco_ordencompra_sco_productos_name = $idoc;
		      $beanp->save();			  	
		    }
	  	}
 	}

 	/*function Fnprodedit($bean, $event, $arguments){
 		//obtiene datos proyecto
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
 	}*/
}
?>
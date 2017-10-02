<?php 

class ClDeproductos 
{
	static $already_ran = false;
	function FnDeproductos($bean, $event, $arguments) 
 	{ 		
	if(self::$already_ran == true) return;
    self::$already_ran = true;
 		#Obteniendo Id OC
        /*$id_p = $bean->id;    
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
	    $beanoc->save(); */

	    $bean->load_relationship('sco_ordencompra_sco_productos');
	    $relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
	    reset($relatedBeans);
	    $parentBean = current($relatedBeans);
	    $idoc = $parentBean->id;

	    $queryoc = "DELETE FROM sco_productos_co WHERE pro_idco='$idoc';";	    
	    $objoc = $bean->db->query($queryoc, true);

	    $date = date("d-m-y");
	    $arr1 = $bean->description;
  	 	$arr1 = str_replace("[[", "", $arr1);
  	 	$arr1 = str_replace("]]", "", $arr1);
	    	    		    
	    $arr1 = str_replace("[", "", $arr1);
	    $arr1 = str_replace("],", "|", $arr1);
	    $arr1 = str_replace("&quot;","",$arr1);	
	    $arr2 = explode("|", $arr1);	
	    $arridoc = array_pop($arr2);
	    $arrprec = array_pop($arr2);
	    $arrprec = explode(",", $arrprec);

	    for ($i=0; $i<count($arr2); $i++)
		{
		    $textfila = $arr2[$i];
		    $fila = explode(",", $textfila);
		    $idpc = $fila[0];
		    $descr = $fila[1];
		    $unid = $fila[2];
		    $cant = $fila[3];
		    $prec = $fila[4];
		    $dscp = $fila[5];
		    $dscv = $fila[6];
		    $stot = $fila[7];
		    $idpo = $fila[8];			    
		    $idproy = $fila[9];	
		    $idpro = $fila[10];		  
	    $query ="INSERT INTO sco_productos_co (id, deleted, pro_nombre, pro_descripcion, pro_unidad, pro_cantidad, pro_preciounid, pro_descval, pro_descpor, pro_fecha, pro_nomproyco, pro_idco, pro_idproy, pro_idpro) VALUES (UUid(),'0','$idpc','$descr','$unid','$cant','$prec','$dscv','$dscp','$date','$idpo','$idoc','$idproy','$idpro');";
	    $obj = $bean->db->query($query, true);
	    }	

	    $queryproy = "SELECT DISTINCT(pro_nomproyco) as name FROM sco_productos_co WHERE pro_idco ='$idoc';";
	    $objproy = $bean->db->query($queryproy, true);
	    while($row = $bean->db->fetchByAssoc($objproy))
	      {
	        $nom .= $row["name"] . "_";
	      }
	    $beanoc = BeanFactory::getBean('SCO_OrdenCompra', $idoc);
	    $beanoc->name = $nom;
	    $beanoc->save();
 	}
}
 ?>
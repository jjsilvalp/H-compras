<?php 

class ClNomOC
{
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
}

 ?>
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
      	$query = "
      	SELECT name, proge_preciounid, proge_descripcion, proge_unidad, proge_nompro
      	FROM sco_productoscompras
      	WHERE id = '$id_pc'";
		$results = $bean->db->query($query, true);
        $row = $bean->db->fetchByAssoc($results);
        $bean->pro_descripcion = $row["proge_descripcion"];
        $bean->pro_unidad = $row["proge_unidad"];
        $bean->pro_nombre = $row["proge_nompro"];
        $bean->name = $row["name"];
        $bean->pro_nomproyco = $pynom;

        #Query para obtener campos de Proveedor
        $query0 = "
        SELECT prov.name as nom_prov 
		FROM sco_proveedor as prov
		INNER JOIN sco_proveedor_sco_productoscompras_c as provpc
		on prov.id = provpc.sco_proveedor_sco_productoscomprassco_proveedor_ida
		INNER JOIN sco_productoscompras as pc
		on pc.id = provpc.sco_proveedor_sco_productoscomprassco_productoscompras_idb
		WHERE pc.id = '$id_pc' and provpc.deleted = '0' ";
        $res = $bean->db->query($query0, true);
        $rown = $bean->db->fetchByAssoc($res);
        #$bean->name = $rown['nom_prov'];

		#Operaciones matematicas para el calculo del precio total
        if($bean->pro_preciound == ""){  
	        $bean->pro_preciound = $row["proge_preciounid"];    	
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
        $id_p = $bean->id;
	    $que = "
	    SELECT sco_ordencompra_sco_productossco_ordencompra_ida as idoc
	    FROM sco_ordencompra_sco_productos_c  as ocp
	    WHERE ocp.sco_ordencompra_sco_productossco_productos_idb = '$id_p'";
	    $query1 = $bean->db->query($que, true);
	    $sco = $bean->db->fetchByAssoc($query1);
	    $idoc = $sco["idoc"];

	    #Obtenieno Monto total de productos
	    $query2 = "
	    SELECT 
		sum(pr.pro_subtotal) as tot 
		FROM sco_ordencompra_sco_productos_c ocpr, 
		sco_productos pr
		WHERE 
		ocpr.deleted = 0 and
		pr.id = ocpr.sco_ordencompra_sco_productossco_productos_idb and
		ocpr.sco_ordencompra_sco_productossco_ordencompra_ida = '$idoc'";
		$obj = $bean->db->query($query2, true);
	    $cco = $bean->db->fetchByAssoc($obj);
	    $ou = $cco["tot"];
	    $beanoc = BeanFactory::getBean('SCO_OrdenCompra', $idoc);
	    $beanoc->orc_importet = $ou;
	    $beanoc->orc_tototal = $ou;
	    $beanoc->save();                         
 	}

 	function FnNomOC($bean, $event, $arguments) 
 	{
 		//nombre de oc
 		$id_p = $bean->id;
	    $que = "
	    SELECT sco_ordencompra_sco_productossco_ordencompra_ida as idoc
	    FROM sco_ordencompra_sco_productos_c  as ocp
	    WHERE ocp.sco_ordencompra_sco_productossco_productos_idb = '$id_p'";
	    $query1 = $bean->db->query($que, true);
	    $sco = $bean->db->fetchByAssoc($query1);
	    $idoc = $sco['idoc'];

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
	        $nom .= $row["name"] . "_" . $row["proyc_correlativo"] . " - ";
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
        $id_p = $bean->id;
	    $que = "
	    SELECT sco_ordencompra_sco_productossco_ordencompra_ida as idoc
	    FROM sco_ordencompra_sco_productos_c  as ocp
	    WHERE ocp.sco_ordencompra_sco_productossco_productos_idb = '$id_p'";
	    $query1 = $bean->db->query($que, true);
	    $sco = $bean->db->fetchByAssoc($query1);
	    $idoc = $sco['idoc'];

	    #Obtenieno Monto total en la Orden de compra
	    $beanoc = BeanFactory::getBean('SCO_OrdenCompra', $idoc);
	    $tot_oc = $beanoc->orc_tototal;
	    $mon_oc = $beanoc->orc_tcmoneda;

	    //obteniendo plan de pagos
	    $con = "
		SELECT 
		sco_ordencompra_sco_plandepagossco_plandepagos_idb, 
		sco_ordencompra_sco_plandepagossco_ordencompra_ida 
		FROM sco_ordencompra_sco_plandepagos_c
		WHERE 
		deleted = 0
		and sco_ordencompra_sco_plandepagossco_ordencompra_ida = '$idoc'";
	    $cons = $bean->db->query($con, true);
	    while($row = $bean->db->fetchByAssoc($cons))
	      {
	        //recorre elementos
	        $idpp = $row["sco_ordencompra_sco_plandepagossco_plandepagos_idb"];
	        $beanpp = BeanFactory::getBean('SCO_PlandePagos', $idpp);
	        $pp_porc = $beanpp->ppg_porc;
	        $pp_impact = $tot_oc * $pp_porc / 100;
	        $beanpp->ppg_monto = $pp_impact;
	        $beanpp->currency_id = $mon_oc;
	        $beanpp->save();
	      }                      
 	}
}
?>
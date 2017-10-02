<?php

class ClProductos 
{	
	#static $already_ran = false;
	function Fnproductos($bean, $event, $arguments) 
    {
 	#if(self::$already_ran == true) return;
    #self::$already_ran = true;
    /*
    	$bean->load_relationship('sco_ordencompra_sco_productos');
	    $relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
	    reset($relatedBeans);
	    $parentBean = current($relatedBeans);
	    $idoc = $parentBean->id;
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
		    /*$bean->load_relationship('sco_ordencompra_sco_productos');
	    	$relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
	    	reset($relatedBeans);
	    	$parentBean = current($relatedBeans);
	    	$idoc = $parentBean->id;*//*
	    	echo "<script>console.log('22');</script>";
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
	   		
		      $query = "SELECT id, name, proge_nompro, proge_descripcion, proge_unidad FROM sco_productoscompras WHERE deleted = 0 AND name = '$idpc'";
		      $results = $GLOBALS['db']->query($query, true);
		      $row = $GLOBALS['db']->fetchByAssoc($results);
		      
		      $query1 = "SELECT id, name FROM sco_proyectosco WHERE deleted = 0 AND name = '$idpo'";
		      $results1 = $GLOBALS['db']->query($query1, true);
		      $row1 = $GLOBALS['db']->fetchByAssoc($results1);

		      $beanp = BeanFactory::newBean('SCO_Productos', $idoc);		      
		      $beanp->sco_productos_sco_productoscomprassco_productoscompras_ida = $row['id'];
		      $beanp->name = $row['name'];
		      $beanp->pro_cantidad = $cant;
		      $beanp->pro_preciound = $prec;
		      $beanp->pro_tipodesc = "1";
		      $beanp->pro_procentaje = $dscp;
		      $beanp->pro_descuento = $dscv;
		      $beanp->pro_unidad = $row['proge_unidad'];
		      $beanp->pro_subtotal = $stot;
		      $beanp->pro_descripcion = $row['proge_nompro']." ".$row['proge_descripcion'];		      
		      $beanp->sco_proyectosco_sco_productossco_proyectosco_ida = $row1['id'];
		      $beanp->pro_nomproyco = $row1['name'];		      
		      $beanp->sco_ordencompra_sco_productos_name = $idoc;
		      $beanp->save();			  	
		    }
	  	}*/			
	  	$bdpro = "
	    CREATE TABLE sco_productos_co (
		  id VARCHAR(100) NULL,
		  deleted INT NULL,
		  pro_nombre VARCHAR(250) NULL,
		  pro_descripcion VARCHAR(500) NULL,
		  pro_unidad VARCHAR(100) NULL,
		  pro_cantidad INT NULL,
		  pro_preciounid DECIMAL NULL,
		  pro_descval DECIMAL NULL,
		  pro_descpor DECIMAL NULL,
		  pro_fecha DATETIME NULL,
		  pro_nomproyco VARCHAR(45) NULL,
		  pro_idco VARCHAR(45)NULL,
		  pro_idproy VARCHAR(45)NULL,
		  pro_idpro VARCHAR(100) NULL,
		  pro_tipocotiza VARCHAR(100)NULL,
		  PRIMARY KEY (id))
		ENGINE = InnoDB
		DEFAULT CHARACTER SET = utf8
		COLLATE = utf8_bin;
	    ";
	    #$bdp = $bean->db->query($bdpro, true);

	  	$bean->load_relationship('sco_ordencompra_sco_productos');
	    $relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
	    reset($relatedBeans);
	    $parentBean = current($relatedBeans);
	    $idoc = $parentBean->id;
		
		$query1 = "
			UPDATE sco_productos  
			SET deleted = 1 
			WHERE id 
			in(SELECT sco_ordencompra_sco_productossco_productos_idb FROM sco_ordencompra_sco_productos_c
			WHERE deleted = 0 and sco_ordencompra_sco_productossco_ordencompra_ida = '$idoc')
			and deleted = 0;
			";
		$obj1 = $bean->db->query($query1, true);	

	    $query2 = "
	    	UPDATE sco_ordencompra_sco_productos_c 
			SET deleted = 1 
			WHERE sco_ordencompra_sco_productossco_ordencompra_ida = '$idoc';
			";
		$obj2 = $bean->db->query($query2, true);	

		$bean->save();

 	}
}
?>
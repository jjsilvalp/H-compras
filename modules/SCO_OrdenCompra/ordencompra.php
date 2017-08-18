<?php  
if(!defined('sugarEntry'))define('sugarEntry', true);
require_once('data/BeanFactory.php');
require_once('include/entryPoint.php');
	
	$id = $_GET['id'];  
	$beanoc = BeanFactory::getBean('SCO_OrdenCompra', $id);
	$num = $_GET['num'];
	switch ($num) {
		case "1":
			$beanoc->orc_estado = 2; 
			break;	
		case "2":
			$beanoc->orc_estado = 2; 
			break;	
		case "3":
			$beanoc->orc_estado = 3;  
			$GLOBALS['db'];
		    $db = DBManagerFactory::getInstance();
		    $query = "
		    	SELECT DISTINCT proy.id as idproy FROM sco_proyectosco as proy
				INNER JOIN sco_proyectosco_sco_productos_c as proypro
				ON proy.id = proypro.sco_proyectosco_sco_productossco_proyectosco_ida
				INNER JOIN sco_productos as p
				ON p.id = proypro.sco_proyectosco_sco_productossco_productos_idb
				INNER JOIN sco_ordencompra_sco_productos_c as ocp
				ON ocp.sco_ordencompra_sco_productossco_productos_idb = p.id
				WHERE p.deleted <> 1 AND ocp.sco_ordencompra_sco_productossco_ordencompra_ida = '$id'";
			$result = $GLOBALS['db']->query($query, true);
			while($row = $GLOBALS['db']->fetchByAssoc($result))
			{
			    $idproy = $row['idproy'];
			    $beanproy = BeanFactory::getBean('SCO_ProyectosCO', $idproy);	
				$correl = $beanproy->proyc_correlativo + 1;						
				$beanproy->proyc_correlativo = $correl;
				$beanproy->save();
				$nombreoc .= $beanproy->proyc_tipo.$beanproy->name."_".$correl." - ";
			}
		    $beanoc->name = trim($nombreoc, ' - ');
			break;	
		case "4":
			$beanoc->orc_estado = 4;  
			break;	
		case "5":
			$beanoc->orc_estado = 5; 
			break;	
		case "6":
			$beanoc->orc_estado = 1;  
			break;		
		default:
			break;
	}
    
	$beanoc->save();
?> 
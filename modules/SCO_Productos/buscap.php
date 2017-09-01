<?php 
if(!defined('sugarEntry'))define('sugarEntry', true);
require_once('data/BeanFactory.php');
require_once('include/entryPoint.php');

	$nomp = $_GET['nomp'];
	$query = "SELECT id, name, proge_nompro, proge_descripcion, proge_unidad, proge_preciounid
	FROM sco_productoscompras 
	WHERE deleted = 0 AND name = '$nomp'";
  	$results = $GLOBALS['db']->query($query, true);
  	$row = $GLOBALS['db']->fetchByAssoc($results);
	echo json_encode($row);	
 ?>
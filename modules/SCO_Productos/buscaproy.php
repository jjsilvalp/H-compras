<?php 
if(!defined('sugarEntry'))define('sugarEntry', true);
require_once('data/BeanFactory.php');
require_once('include/entryPoint.php');

	$nomproy = $_GET['nomproy'];
	$query = "SELECT id, name 
	FROM sco_proyectosco 
	WHERE deleted = 0 
	AND name = '$nomproy'";
  	$results = $GLOBALS['db']->query($query, true);
  	$row = $GLOBALS['db']->fetchByAssoc($results);
	echo json_encode($row);
 ?>
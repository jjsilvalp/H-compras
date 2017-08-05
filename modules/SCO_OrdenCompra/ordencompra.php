<?php  
	$id = $_GET['id'];  
	$num = $_GET['num'];
	$focus = new SCO_OrdenCompra();  
	$focus->retrieve($id);
	if($num == "1"){
		$focus->orc_estado = 2;
		$focus->save(); 
	}
	if($num == "2"){
		$focus->orc_estado = 2;
		$focus->save(); 
	}
	if($num == "3"){
		$focus->orc_estado = 3; 
		$focus->save(); 
	}
	if($num == "4"){
		$focus->orc_estado = 4; 
		$focus->save(); 
	}
	if($num == "5"){
		$focus->orc_estado = 5; 
		$focus->save(); 
	}
	if($num == "6"){
		$focus->orc_estado = 1; 
		$focus->save(); 
	}
?> 
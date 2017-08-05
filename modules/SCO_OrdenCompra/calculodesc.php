<?php 
	$id = $_GET['id'];  
	$desc_por = $_GET['desc_por'];
	$desc_val = $_GET['desc_val'];
	$tipo = $_GET['tipo'];
	$focus = new SCO_OrdenCompra();  
	$focus->retrieve($id);
	if($tipo == 1){
		$focus->orc_descpor = $desc_por;		
		$desc_por = $desc_por * $focus->orc_importet /100;	
		$focus->orc_descvalor = $desc_por;				
		$focus->orc_tototal = $focus->orc_importet - $desc_por;
		$focus->save(); 
	}
	if($tipo == 2){
		$focus->orc_descvalor = $desc_val;
		$desc_val_p = $desc_val * 100 / $focus->orc_importet;
		$focus->orc_descpor = $desc_val_p;		
		$focus->orc_tototal = $focus->orc_importet - $desc_val;
		$focus->save(); 
	}
 ?>
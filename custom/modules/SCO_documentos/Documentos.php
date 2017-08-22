<?php 

class Documentos 
{
	function Fndocs($bean, $event, $arguments) 
	{				
		if (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false)
        {            
		$bean->name = $bean->filename;				
		//documento cotizacion
		$bean->load_relationship('sco_ordencompra_sco_documentos');
	    $relatedBeans = $bean->sco_ordencompra_sco_documentos->getBeans();
	    reset($relatedBeans);
	    $parentBean = current($relatedBeans);
	    $idoc = $parentBean->id;

    	$beanoc = BeanFactory::getBean('SCO_OrdenCompra', $idoc);
		if ($bean->doc_tipo == 1){    		
    		$cotiza = explode(".", $bean->filename);
    		$beanoc->orc_cotizacion = $cotiza[0];
			$beanoc->save();
    	}
    	if($bean->doc_tipo == 2){
    		$cotiza = explode(".", $bean->filename);
    		$beanoc->orc_cotizacion = $cotiza[0];
    		$beanoc->orc_estado = 1;
			$beanoc->save();
    	}  
    	$bean->ignore_update_c = true; 	
    	$bean->save();    
        }
	}		
}
 ?>
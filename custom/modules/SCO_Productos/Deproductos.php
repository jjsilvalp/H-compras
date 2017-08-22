<?php 

class ClDeproductos 
{
	
	function FnDeproductos($bean, $event, $arguments) 
 	{
 		#Obteniendo Id OC
        #$id_p = $bean->id;    
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
	    $beanoc->save(); 
 	}
}
 ?>
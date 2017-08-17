<?php 

class Documentos 
{
	function Fndocs($bean, $event, $arguments) 
	{		
		
		$bean->name = $bean->filename;				
		//documento cotizacion
		$bean->load_relationship('sco_ordencompra_sco_documentos');
	    $relatedBeans = $bean->sco_ordencompra_sco_documentos->getBeans();
	    reset($relatedBeans);
	    $parentBean = current($relatedBeans);
	    $idoc = $parentBean->id;

    	$beanoc = BeanFactory::getBean('SCO_OrdenCompra', $idoc);
    	if ($bean->description === false){
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
	    	$bean->save(false);
    	}
	}	

	function Fncreafol($bean, $event, $arguments) 
	{
		$id = $bean->id;
		$query = "
    	SELECT 
		sco_ordencompra_sco_documentossco_ordencompra_ida as oc_id
		FROM sco_ordencompra_sco_documentos_c
		where 
		sco_ordencompra_sco_documentossco_documentos_idb = '".$id."'";
    	$results = $bean->db->query($query, true);
    	$row = $bean->db->fetchByAssoc($results);

    	$beanoc = BeanFactory::getBean('SCO_OrdenCompra', $row['oc_id']);

		$Anio = date('Y');
		$mes = date('m');
		$nombre = $beanoc->name;

		$OKMAuth = new SoapClient('http://192.168.1.85:8080/OpenKM/services/OKMAuth?wsdl');
		$OKMFolder = new SoapClient('http://192.168.1.85:8080/OpenKM/services/OKMFolder?wsdl');
    	$loginResp = $OKMAuth->login(array('user' => 'okmAdmin', 'password' => 'admin'));
    	$token = $loginResp->return;

    	$rutaa = '/okm:root/OrdenesCompras/'.$Anio;
    	$creaCarpeta = $OKMFolder->createSimple(array('token' => $token, 'fldPath' => $rutaa));

    	$rutam = '/okm:root/OrdenesCompras/'.$Anio.'/'.$mes;
    	$creaCarpeta = $OKMFolder->createSimple(array('token' => $token, 'fldPath' => $rutam));
    	
    	$rutaoc = '/okm:root/OrdenesCompras/'.$Anio.'/'.$mes.'/'.$nombre;
    	$creaCarpeta = $OKMFolder->createSimple(array('token' => $token, 'fldPath' => $rutaoc));

    	$OKMAuth->logout($token);
	}

	function Fnscargaarch($bean, $event, $arguments) 
	{
		//$preAdded = $_POST['preAdded'];
		//$GLOBALS['log']->debug("jjsc ".serialize($bean));
	}
}
 ?>
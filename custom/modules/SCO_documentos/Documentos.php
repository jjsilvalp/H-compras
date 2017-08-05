<?php 

class Documentos 
{
	function Fndocs($bean, $event, $arguments) 
	{		
		$bean->name = $bean->filename;		
		$id = $bean->id;
		//documento cotizacion
		if ($bean->doc_tipo == 15)
		{
    		$query = "
    		SELECT 
			sco_ordencompra_sco_documentossco_ordencompra_ida as oc_id
			FROM sco_ordencompra_sco_documentos_c
			where 
			sco_ordencompra_sco_documentossco_documentos_idb = '".$id."'";
    		$results = $bean->db->query($query, true);
    		$row = $bean->db->fetchByAssoc($results);
    
    		$beanoc = BeanFactory::getBean('SCO_OrdenCompra', $row['oc_id']);

    		$cotiza = explode(".", $bean->filename);
    		$beanoc->orc_cotizacion = $cotiza[0];
    		$beanoc->save();
    		$bean->save();
    	}
    	
    	if($bean->doc_tipo == 16){
			$dir = "/opt/bitnami/apps/suitecrm/htdocs/5598-upload/".$id;
			$archivo = fopen($dir, "r");

			echo "<script>console.log('".$beanoc->id."');</script>";


			$sql = "SELECT id FROM sco_ordencompra_sco_productos_c WHERE deleted = 0";
			$result = $GLOBALS['db']->query($sql);
			while($row_r_oc = $GLOBALS['db']->fetchByAssoc($result) ){
			    echo "<script>console.log('".$row_r_oc['id']."')</script>";
			}

			while (($datos = fgetcsv($archivo, 1000, ",")) !== FALSE) {		    				  
			    $beanproge = BeanFactory::newBean('SCO_ProductosCompras');
			    $beanproge->name = $datos[0];
			    $beanproge->proge_nompro = $datos[1];
			    $beanproge->proge_categoria = $datos[2];
			    $beanproge->proge_tipopro = $datos[3];
			    $beanproge->proge_descripcion = $datos[4];
			    $beanproge->proge_preciounid = $datos[5];
			    $beanproge->proge_codaio = $datos[6];
			    $beanproge->proge_negociacion = $datos[8];
			    #proveedor id relacion
			    $beanproge->sco_proveedor_sco_productoscompras_name = 2;

			    #echo "<script>console.log('".$beanpc->id."');</script>";

			    $beanpro = BeanFactory::newBean('SCO_Productos');
			    $beanpro->sco_productos_sco_productoscompras_name = $beanproge->id;
			    $beanpro->name = $beanproge->name;
			    $beanpro->pro_descripcion = $beanproge->proge_descripcion;
			    $beanpro->pro_preciound = $beanproge->proge_preciounid;			    
			    $beanpro->pro_cantidad = $datos[9];
			    #productos compras id relacion
			    $beanpro->sco_productos_sco_productoscompras_name = 2;
			    #proyectos id relacion
			    $beanpro->sco_proyectosco_sco_productos_name = 2;				
			    #$beanproge->save();

			    #echo '<script>console.log("'.$datos[0].$datos[1].$datos[2].$datos[3].$datos[4].$datos[5].$datos[6].$datos[7].'")</script>';
			    #$bean->save();    
		    }
		    echo "<script>alert('Importacion de datos correcta');</script>";
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
		$preAdded = $_POST['preAdded'];
		$GLOBALS['log']->debug("jjsc ".serialize($bean));
	}
}
 ?>
<?php
class ClDeletepro
{
  function FnDeletepro($bean, $event, $arguments) 
  {
    $idp = $bean->id;
    $query = "
    	UPDATE sco_productos 
    	SET deleted = 1 
    		WHERE id = '$idp'";
    $obj = $bean->db->query($query, true);	   
    $query2 = "
    	UPDATE sco_proyectosco_sco_productos_c 
    	SET deleted = 1 
    	WHERE sco_proyectosco_sco_productossco_productos_idb = '$idp'";
    $obj2 = $bean->db->query($query2, true);
  	
	$bean->load_relationship('sco_ordencompra_sco_productos');
    $relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
    reset($relatedBeans);
    $parentBean = current($relatedBeans);
    $idoc = $parentBean->id;
    $query3 = "
    	SELECT sum(p.pro_subtotal) as subtotal
		FROM sco_productos as p 
		INNER JOIN sco_ordencompra_sco_productos_c as ocp
		ON ocp.sco_ordencompra_sco_productossco_productos_idb = p.id
		WHERE ocp.sco_ordencompra_sco_productossco_ordencompra_ida = '$idoc'
		AND p.deleted = 0";
	$obj3 = $bean->db->query($query3, true);
	while($row = $bean->db->fetchByAssoc($obj3))
	  {
	  	$subtotal = $row['subtotal'];	
	  }

	$query4 = "
		UPDATE sco_ordencompra 
		SET orc_tototal = '$subtotal', orc_importet = '$subtotal' 
		WHERE id = '$idoc' ";
	$obj4 = $bean->db->query($query4, true);
  }
}
?>

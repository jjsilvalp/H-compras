<?php 
class Clcontap 
{
	static $ult_rid = "";

  	function Fncontap($bean, $event, $arguments) 
  	{
  		$pro_id = $bean->sco_proveedor_sco_ordencomprasco_proveedor_ida;
    	$pro_re = $bean->orc_region;

	    $con = "
		SELECT 
		di.contact_id_c,
		co.title, 
		co.phone_mobile, 
		co.phone_work, 
		co.primary_address_street,
		em.email_address 
		from sco_proveedor_sco_distribuidor_c pd 
		inner join sco_distribuidor di on (pd.sco_proveedor_sco_distribuidorsco_distribuidor_idb = di.id) 
		inner join contacts co on (di.contact_id_c = co.id)
		inner join email_addr_bean_rel er on (co.id = er.bean_id) 
		inner join email_addresses em on (em.id = er.email_address_id)
		where 
		pd.deleted = 0
		and pd.sco_proveedor_sco_distribuidorsco_proveedor_ida = '$pro_id' 
		and di.dis_region = '$pro_re'
		and di.dis_principal = 1
		and er.primary_address = 1
	    ";
	    $results = $GLOBALS['db']->query($con, true);
	    $row = $GLOBALS['db']->fetchByAssoc($results);
	    $con_id = $row["contact_id_c"];

	    if(self::$ult_rid == $bean->id) return;
    	self::$ult_rid = $bean->id;

	    $bean->contact_id_c = $row["contact_id_c"];
	    $bean->orc_protelefono = $row["phone_work"];
	    $bean->orc_promovil = $row["phone_mobile"];
	    $bean->orc_procargo = $row["title"];
	    $bean->orc_proemail = $row["email_address"];
	    $bean->orc_prodireccion = $row["primary_address_street"];
	    $bean->save();
  	}
}
?>
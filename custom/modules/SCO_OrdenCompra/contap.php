<?php 

class Clcontap 
{
	#static $ult_rid = "";
	static $already_ran = false;

  	function Fncontap($bean, $event, $arguments) 
  	{
  		if(self::$already_ran == true) return;
    	self::$already_ran = true;
  		$pro_id = $bean->sco_ordencompra_contactscontacts_ida;
    	#$pro_re = $bean->orc_region;

	    /*$con = "
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
	    ";*/
	    $con = "
	    SELECT 
	    co.id,
	    co.title, 
		co.phone_mobile, 
		co.phone_work, 
		co.primary_address_street,
		em.email_address 
		FROM contacts as co 
		inner join email_addr_bean_rel as er 
		on (co.id = er.bean_id) 
		inner join email_addresses em 
		on (em.id = er.email_address_id)
		where er.primary_address = 1
		AND co.id = '$pro_id' ";
	    $results = $GLOBALS['db']->query($con, true);
	    $row = $GLOBALS['db']->fetchByAssoc($results);
	    #$con_id = $row["id"];

	    #if(self::$ult_rid == $bean->id) return;
    	#self::$ult_rid = $bean->id;
	    $bean->orc_propercon = $bean->sco_ordencompra_contacts_name;
	    $bean->orc_protelefono = $row["phone_work"];
	    $bean->orc_promovil = $row["phone_mobile"];
	    $bean->orc_procargo = $row["title"];
	    $bean->orc_proemail = $row["email_address"];
	    $bean->orc_prodireccion = $row["primary_address_street"];
	    $bean->save();
  	}
}
?>
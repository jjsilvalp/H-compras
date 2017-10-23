<?php 
class Clclonar 
{
	static $ult_rid = "";
	static $already_ran = false;

  function Fnclonar($bean, $event, $arguments) 
  {
    if(self::$already_ran == true) return;
    self::$already_ran = true;
    $idoc_cl = $bean->sco_ordencompra_id_c;
    $nomoc_cl= $bean->orc_occ;

    if(!empty($idoc_cl)){
    	//Consulta para obtener los campos de la OC
	    $query = "SELECT * 
		FROM sco_ordencompra as oc
		INNER JOIN sco_proveedor_sco_ordencompra_c as ocpv
		ON oc.id = ocpv.sco_proveedor_sco_ordencomprasco_ordencompra_idb
		INNER JOIN sco_ordencompra_contacts_c as occo
		ON occo.sco_ordencompra_contactssco_ordencompra_idb = oc.id
		WHERE oc.deleted = 0
		AND oc.id = '$idoc_cl'";
	    $obj = $bean->db->query($query, true);    
	    $row = $bean->db->fetchByAssoc($obj);

	    $bean->name = "COPIA_".$row["name"];
	    $bean->orc_tipo = $row["orc_tipo"];
	    $bean->orc_tipoo = $row["orc_tipoo"];
	    #$bean->orc_fechaord = $row["orc_fechaord"];
	    $bean->orc_solicitado = $row["orc_solicitado"];
	    $bean->user_id1_c = $row["user_id1_c"];
	    $bean->sco_proveedor_sco_ordencompra_name = $row["sco_proveedor_sco_ordencompra_name"];
	    $bean->sco_proveedor_sco_ordencomprasco_proveedor_ida = $row["sco_proveedor_sco_ordencomprasco_proveedor_ida"];
	    $bean->sco_ordencompra_contacts_name = $row["sco_ordencompra_contacts_name"];    
	    $bean->sco_ordencompra_contactscontacts_ida = $row["sco_ordencompra_contactscontacts_ida"];
	    $bean->orc_tcinco = $row["orc_tcinco"];
	    $bean->orc_tclugent = $row["orc_tclugent"];
	    $bean->orc_tcforpag = $row["orc_tcforpag"];
	    $bean->orc_tcgarantia = $row["orc_tcgarantia"];
	    $bean->orc_tcmoneda = $row["orc_tcmoneda"];
	    $bean->orc_tcmulta = $row["orc_tcmulta"];
	    $bean->orc_tccertor = $row["orc_tccertor"];

	    $bean->sco_ordencompra_id_c = '';
    	$bean->orc_occ = '';
	 	$bean->save();	 	
	 	$idoc = $bean->id;  
	  	//Relacion OC con SCO_Contactos 	
	    $query2 = "SELECT * 
			FROM sco_contactos as co
			INNER JOIN sco_ordencompra_sco_contactos_c as occo
			ON co.id = occo.sco_ordencompra_sco_contactossco_contactos_idb
			WHERE co.deleted = 0 
			AND occo.deleted = 0
			AND occo.sco_ordencompra_sco_contactossco_ordencompra_ida = '".$idoc_cl."' ";
	    $obj2 = $bean->db->query($query2, true);
	    while($row2 = $bean->db->fetchByAssoc($obj2)){
	    	$new_idocco =  create_guid();
	        $query3 = "INSERT INTO sco_ordencompra_sco_contactos_c
				(id,deleted,date_modified,sco_ordencompra_sco_contactossco_ordencompra_ida,sco_ordencompra_sco_contactossco_contactos_idb)
				VALUES
				('".$new_idocco."',".$row2['deleted'].",'".$row2['date_modified']."','".$idoc."','".$row2['sco_ordencompra_sco_contactossco_contactos_idb']."');
	        ";
	        $obj3 = $bean->db->query($query3, true);
	    }
	  	//Relacion de OC con SCO_Aprobadores
	    $query6 ="SELECT * 
		FROM sco_aprobadores as ap
		INNER JOIN sco_ordencompra_sco_aprobadores_c as ocap
		ON ap.id = ocap.sco_ordencompra_sco_aprobadoressco_aprobadores_idb
		WHERE ocap.sco_ordencompra_sco_aprobadoressco_ordencompra_ida = '".$idoc_cl."'; ";	
		$obj6 = $bean->db->query($query6, true);
		while($row6 = $bean->db->fetchByAssoc($obj6)){	
			$new_idocap =  create_guid();
			$query7 = "INSERT INTO sco_ordencompra_sco_aprobadores_c
				(id, date_modified,deleted,sco_ordencompra_sco_aprobadoressco_ordencompra_ida,sco_ordencompra_sco_aprobadoressco_aprobadores_idb)
				VALUES
				('".$new_idocap."','".$row6['date_modified']."','".$row6['deleted']."','".$idoc."','".$row6['sco_ordencompra_sco_aprobadoressco_aprobadores_idb']."');";
	        $obj7 = $bean->db->query($query7, true);
		}
		//Relacion de OC con SCO_PlandePagos y Modulo Plan de pagos
		$query4 = "SELECT * 
		FROM sco_plandepagos as pp
		INNER JOIN sco_ordencompra_sco_plandepagos_c as ocpp
		ON pp.id = ocpp.sco_ordencompra_sco_plandepagossco_plandepagos_idb
		WHERE ocpp.deleted = 0 
		AND pp.deleted = 0 
		AND ocpp.sco_ordencompra_sco_plandepagossco_ordencompra_ida = 'c7d112b6-a01e-ced5-e7cf-59e7f0dc05bc';";
		$obj4 = $bean->db->query($query4, true);
		while($row4 = $bean->db->fetchByAssoc($obj4)){
			$new_idocpp =  create_guid();
			$new_idpp = create_guid();
			$query5 = "INSERT INTO sco_ordencompra_sco_plandepagos_c
			(id, date_modified,deleted,sco_ordencompra_sco_plandepagossco_ordencompra_ida,sco_ordencompra_sco_plandepagossco_plandepagos_idb)
			VALUES
			('".$new_idocpp."','".$row4['date_modified']."','".$row4['deleted']."','".$idoc."','".$new_idpp."');";
			$obj5 = $bean->db->query($query5, true);

			$query1 = "INSERT INTO sco_plandepagos
			(id,name,date_modified,modified_user_id,created_by,deleted,ppg_fecha,ppg_tipo,ppg_hito,ppg_porc,ppg_monto,ppg_moneda)
			VALUES
			('".$new_idpp."','".$row4['name']."','".$row4['date_modified']."','".$row4['modified_user_id']."','".$row4['created_by']."','".$row4['deleted']."','".$row4['ppg_fecha']."','".$row4['ppg_tipo']."','".$row4['ppg_hito']."','".$row4['ppg_porc']."','".$row4['ppg_monto']."','".$row4['ppg_moneda']."');
			";
			$obj1 = $bean->db->query($query1, true);
		}
		//Relacion de OC con SCO_Productos y Modulo de Productos
		$query8 = "SELECT * 
		FROM sco_productos as p 
		INNER JOIN sco_ordencompra_sco_productos_c as ocp
		ON p.id = ocp.sco_ordencompra_sco_productossco_productos_idb
		WHERE p.deleted = 0
		AND ocp.deleted = 0
		AND sco_ordencompra_sco_productossco_ordencompra_ida = '".$idoc_cl."';";
		$obj8 = $bean->db->query($query8, true);
		while($row8 = $bean->db->fetchByAssoc($obj8)){
			$new_idocp = create_guid();
			$new_idp = create_guid();
			$query9 = "INSERT INTO sco_ordencompra_sco_productos_c
			(id, date_modified, deleted, sco_ordencompra_sco_productossco_ordencompra_ida, sco_ordencompra_sco_productossco_productos_idb)
			VALUES
			('".$new_idocp."','".$row8['date_modified']."',".$row8['deleted'].",'".$idoc."','".$new_idp."')";
			$obj9 = $bean->db->query($query9, true);

			$query10 = "INSERT INTO sco_productos
			(id,name,date_entered,date_modified,modified_user_id,created_by,description,deleted,pro_subtotal,pro_valor,pro_procentaje,pro_aux1)
			VALUES
			('".$new_idp."','".$row8['name']."','".$row8['date_entered']."','".$row8['date_modified']."','".$row8['modified_user_id']."','".$row8['created_by']."','".$row8['description']."','".$row8['deleted']."','".$row8['pro_subtotal']."','".$row8['pro_valor']."','".$row8['pro_procentaje']."','".$row8['pro_aux1']."');";
			$obj10 = $bean->db->query($query10, true);
		}
 	}
  }
}
?>
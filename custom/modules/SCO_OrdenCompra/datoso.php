<?php
class Cldatoso 
{
  static $already_ran = false;

	function Fndatoso($bean, $event, $arguments) 
  {
    if(self::$already_ran == true) return;
    self::$already_ran = true;
    //Copia datos facturacion en datos envio
    $op_comp = $bean->orc_decop;
    if ($op_comp == '1')
    {
      #Codigo Suprimir de acuerdo al campo estalecido po el backend
      $bean->orc_denomemp = $bean->orc_dfnomemp;
      $bean->orc_dedireccion = $bean->orc_dfdireccion;
      $bean->orc_detelefono = $bean->orc_dftelefono;
      $bean->orc_defax = $bean->orc_dffax;
      $bean->orc_depobox = $bean->orc_dfpobox;
      $bean->orc_depais = $bean->orc_dfpais;
    }
    //pobla datos proveedor
    $sel_prov = $bean->sco_proveedor_sco_ordencomprasco_proveedor_ida;
    $bean_prov = BeanFactory::getBean('SCO_Proveedor', $sel_prov);
    $bean->orc_pronomemp = $bean_prov->name;
    $bean->orc_procodaio = $bean_prov->prv_codaio;
    //$bean->orc_promovil = $bean_prov->prv_movil;
    //$bean->orc_proemail = $bean_prov->prv_email;
    //$bean->orc_protelefono = $bean_prov->prv_tel;
    //$bean->orc_prodireccion = $bean_prov->prv_direc;
    #MOdificaion
    $bean->orc_nomcorto = $bean_prov->prv_monr;
    //pobla datos usuario
    $sel_ususol = $bean->user_id1_c;
    $bean_ususol = BeanFactory::getBean('Users', $sel_ususol);
    $bean->orc_division = $bean_ususol->iddivision_c;
    $bean->orc_regional = $bean_ususol->idregional_c;

      //pobla usuario actual logeado
    global $current_user;
    $bean->user_id_c = $current_user->id;
    $bean->assigned_user_id = $current_user->id;
    $bean->save();
  }
}
?>
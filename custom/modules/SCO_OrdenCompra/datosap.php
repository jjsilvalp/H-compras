<?php 
class Cldatosap 
{
  function Fndatosap($bean, $event, $arguments) 
  {
    $div = $bean->orc_division;
    $reg = $bean->orc_regional;
    $ido = $bean->id;

    $query = "SELECT count(*) as cantidad 
      FROM sco_ordencompra_sco_aprobadores_c 
      where sco_ordencompra_sco_aprobadoressco_ordencompra_ida = '$ido'
      and deleted = 0";
    $results = $GLOBALS['db']->query($query, true);
    $row = $GLOBALS['db']->fetchByAssoc($results);

    if ($row["cantidad"] == 0)  
    {
      $query = "SELECT u.id 
      FROM sco_cnf_aprobadores ca
      inner join users u on (u.user_name=ca.name)
      where ca.cnfapro_div = '".$div."'
      and ca.deleted = 0";

      $results = $GLOBALS['db']->query($query, true);
      while($row = $GLOBALS['db']->fetchByAssoc($results))
      {
        //crea proveedor 
        $contactoBean = BeanFactory::newBean('SCO_Aprobadores');
        $contactoBean->sco_ordencompra_sco_aprobadoressco_ordencompra_ida = $bean->id;
        $contactoBean->user_id_c = $row["id"];
        $contactoBean->save();
      }
    }
  }
}
?>
<?php

class Clcorrelativo 
{
  //static $already_ran = false;
  static $cnt_reg = 11;
  static $ult_rid = "";

  function Fncorrelativo($bean, $event, $arguments)
  {
    #Obteniendo Id OC
    $id_p = $bean->id;      
    $bean->load_relationship('sco_ordencompra_sco_aprobadores');
    $relatedBeans = $bean->sco_ordencompra_sco_aprobadores->getBeans();
    reset($relatedBeans);
    $parentBean = current($relatedBeans);
    $idoc = $parentBean->id;

    #Obteniendo el ultimo valor
    $query = "SELECT max(ap.apr_correlativo) as ultimo
      FROM sco_aprobadores ap
      inner join sco_ordencompra_sco_aprobadores_c apr on (ap.id = apr.sco_ordencompra_sco_aprobadoressco_aprobadores_idb)
      where apr.deleted = 0
      and apr.sco_ordencompra_sco_aprobadoressco_ordencompra_ida = '$idoc'";
    $results = $GLOBALS['db']->query($query, true);
    $row = $GLOBALS['db']->fetchByAssoc($results);

    if(self::$ult_rid == $bean->id) return;
    self::$ult_rid = $bean->id;

    if($row['ultimo'] == null)
    {
      self::$cnt_reg = 11;
    }else
    {
      self::$cnt_reg = $row['ultimo'] + 1;
      $salto = self::$cnt_reg % 10;
      if($salto == 8)
      {
        self::$cnt_reg = $row['ultimo'] + 4;
      }
    }
    
    //llena correlativo
    $bean->apr_correlativo = self::$cnt_reg;
  
    $bean->save();
  } 
}
?>

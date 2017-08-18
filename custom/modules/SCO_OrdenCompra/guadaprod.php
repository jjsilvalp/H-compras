<?php
class ClguardadatosO 
{
  static $already_ran = false;

  function Fnguardapro($bean, $event, $arguments) 
  {
  	if(self::$already_ran == true) return;
    self::$already_ran = true;

    $prod = $bean->orc_productos;
    $prod = str_replace("&quot;","",$prod);
    $prod = str_replace("[[", "", $prod);
    $prod = str_replace("]]", "", $prod);
    $prod = str_replace("[", "", $prod);
    $prod = str_replace("],", "|", $prod);
    $filas = explode("|", $prod);
    $cnt_filas = count($filas);
    for ($i=0; $i<$cnt_filas; $i++)
    {
      $textfila = $filas[$i];
      $fila = explode(",", $textfila);

      $idpc = $fila[0];
      $cant = $fila[3];
      $prec = $fila[4];
      $dscp = $fila[5];
      $dscv = $fila[6];
      $idpo = $fila[8];

      $query = "SELECT id FROM sco_productoscompras WHERE deleted = 0 AND name = '$idpc'";
      $results = $GLOBALS['db']->query($query, true);
      $row = $GLOBALS['db']->fetchByAssoc($results);

      $query1 = "SELECT id FROM sco_proyectosco WHERE deleted = 0 AND name = '$idpo'";
      $results = $GLOBALS['db']->query($query1, true);
      $row1 = $GLOBALS['db']->fetchByAssoc($results1);

      $beanprod = BeanFactory::newBean('SCO_Productos');
      	//$fila[0] = substr(substr($fila[0],1),0,-1);
      $beanprod->sco_productos_sco_productoscomprassco_productoscompras_ida = $row['id'];
      $beanprod->pro_cantidad = $cant;
      $beanprod->pro_preciound = $prec;
      $beanprod->pro_tipodesc = "1";
      $beanprod->pro_procentaje = $dscp;
      $beanprod->pro_descuento = $dscv;
      $beanprod->sco_proyectosco_sco_productossco_proyectosco_ida = $row1['id'];
      $beanprod->save();
    }
    $bean->orc_productos = "";
    $bean->save();
  }
}
?>
<?php
class Clactproducto
{
  function Fnactproducto() 
  {
    $idoc = $GLOBALS['_POST']['record'];
    
    if($GLOBALS['app']->controller->action == "EditView")
    {
      $bean = BeanFactory::getBean('SCO_OrdenCompra', $idoc);
      $bean->load_relationship('sco_ordencompra_sco_productos');
      $relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
      foreach ($relatedBeans as $producto) 
      {
        $idpr = $producto->id;
        $producto->deleted = 1;
        $producto->save();
      }
    }
  }
}
?>

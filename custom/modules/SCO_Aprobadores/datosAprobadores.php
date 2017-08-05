<?php

class CldatosA 
{
  function Fndatosa($bean, $event, $arguments)
  {
    //llena datos de proveedor
    $user_id = $bean->user_id_c;
    $bean_user = BeanFactory::getBean('Users', $user_id);
    $bean->name = $bean_user->user_name;
    $bean->apr_titulo = $bean_user->title;
    $bean->save();
  } 
}
?>

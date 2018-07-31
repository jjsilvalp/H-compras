<?php
$module_name = 'SCO_Contactos';
$listViewDefs [$module_name] = 
array (
  'CON_NOMBRE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CON_NOMBRE',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CON_CARGO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CON_CARGO',
    'width' => '10%',
    'default' => true,
  ),
  'CON_EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CON_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'CON_ROL' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'Rol',
    'width' => '10%',
    'default' => true,
  ),
);
?>

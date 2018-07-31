<?php
$module_name = 'SCO_ProyectosCO';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PROYC_NOMPROY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_NOMPROY',
    'width' => '10%',
    'default' => true,
  ),
  'PROYC_DESCRIPCION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PROYC_DESCRIPCION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'PROYC_TIPO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_TIPO',
    'width' => '10%',
    'default' => true,
  ),
  'PROYC_CENTCOST' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_CENTCOST',
    'width' => '10%',
    'default' => true,
  ),
  'PROYC_CENBEN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_CENBEN',
    'width' => '10%',
    'default' => true,
  ),
  'PROYC_CODSAP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROYC_CODSAP ',
    'width' => '10%',
    'default' => true,
  ),
  'PROYC_ESTADO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PROYC_ESTADO',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'PROYC_CORRELATIVO' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PROYC_CORRELATIVO',
    'width' => '10%',
  ),
  'PROYC_DIVISION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PROYC_DIVISION',
    'width' => '10%',
    'default' => false,
  ),
);
?>

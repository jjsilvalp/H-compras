<?php
$module_name = 'SCO_ProductosDespachos';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'prdes_descripcion' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRDES_DESCRIPCION',
        'width' => '10%',
        'default' => true,
        'name' => 'prdes_descripcion',
      ),
      'prdes_cantidad' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PRDES_CANTIDAD',
        'width' => '10%',
        'default' => true,
        'name' => 'prdes_cantidad',
      ),
      'prdes_unidad' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PRDES_UNIDAD',
        'width' => '10%',
        'default' => true,
        'name' => 'prdes_unidad',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>

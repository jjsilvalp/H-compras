<?php
$module_name = 'SCO_ProyectosCO';
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
      'proyc_descripcion' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_PROYC_DESCRIPCION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'proyc_descripcion',
      ),
      'proyc_tipo' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROYC_TIPO',
        'width' => '10%',
        'default' => true,
        'name' => 'proyc_tipo',
      ),
      'proyc_codsap' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROYC_CODSAP ',
        'width' => '10%',
        'default' => true,
        'name' => 'proyc_codsap',
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
      'proyc_nomproy' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROYC_NOMPROY',
        'width' => '10%',
        'default' => true,
        'name' => 'proyc_nomproy',
      ),
      'proyc_descripcion' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_PROYC_DESCRIPCION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'proyc_descripcion',
      ),
      'proyc_tipo' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROYC_TIPO',
        'width' => '10%',
        'default' => true,
        'name' => 'proyc_tipo',
      ),
      'proyc_cenben' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROYC_CENBEN',
        'width' => '10%',
        'default' => true,
        'name' => 'proyc_cenben',
      ),
      'proyc_centcost' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROYC_CENTCOST',
        'width' => '10%',
        'default' => true,
        'name' => 'proyc_centcost',
      ),
      'proyc_codsap' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROYC_CODSAP ',
        'width' => '10%',
        'default' => true,
        'name' => 'proyc_codsap',
      ),
      'proyc_division' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PROYC_DIVISION',
        'width' => '10%',
        'default' => true,
        'name' => 'proyc_division',
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

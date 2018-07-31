<?php
$module_name = 'SCO_ProductosCompras';
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
      'proge_descripcion' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_PROGE_DESCRIPCION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'proge_descripcion',
      ),
      'iddivision_c' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_IDDIVISION_C',
        'width' => '10%',
        'default' => true,
        'name' => 'iddivision_c',
      ),
      'sco_proveedor_sco_productoscompras_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRAS_FROM_SCO_PROVEEDOR_TITLE',
        'id' => 'SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRASSCO_PROVEEDOR_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sco_proveedor_sco_productoscompras_name',
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

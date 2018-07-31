<?php
$module_name = 'SCO_ProductosDespachos';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'prdes_descripcion',
            'label' => 'LBL_PRDES_DESCRIPCION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prdes_cantidad',
            'label' => 'LBL_PRDES_CANTIDAD',
          ),
          1 => 
          array (
            'name' => 'prdes_unidad',
            'label' => 'LBL_PRDES_UNIDAD',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>

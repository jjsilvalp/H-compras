<?php
$module_name = 'SCO_ProductosDespachos';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prdes_descripcion',
            'label' => 'LBL_PRDES_DESCRIPCION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'prdes_unidad',
            'label' => 'LBL_PRDES_UNIDAD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'prdes_cantidad',
            'label' => 'LBL_PRDES_CANTIDAD',
          ),
          1 => 
          array (
            'name' => 'sco_productoscompras_sco_productosdespachos_name',
          ),
        ),
      ),
    ),
  ),
);
?>

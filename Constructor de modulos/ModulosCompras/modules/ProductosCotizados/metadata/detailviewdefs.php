<?php
$module_name = 'SCO_ProductosCotizados';
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
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pro_descripcion',
            'studio' => 'visible',
            'label' => 'LBL_PRO_DESCRIPCION',
          ),
          1 => 
          array (
            'name' => 'pro_unidad',
            'label' => 'LBL_PRO_UNIDAD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pro_cantidad',
            'label' => 'LBL_PRO_CANTIDAD',
          ),
          1 => 
          array (
            'name' => 'pro_cantresivida',
            'label' => 'LBL_PRO_CANTRESIVIDA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pro_preciounid',
            'label' => 'LBL_PRO_PRECIOUNID',
          ),
          1 => 
          array (
            'name' => 'pro_canttrans',
            'label' => 'LBL_PRO_CANTTRANS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'pro_subtotal',
            'label' => 'LBL_PRO_SUBTOTAL',
          ),
          1 => 
          array (
            'name' => 'pro_saldos',
            'label' => 'LBL_PRO_SALDOS',
          ),
        ),
      ),
    ),
  ),
);
?>

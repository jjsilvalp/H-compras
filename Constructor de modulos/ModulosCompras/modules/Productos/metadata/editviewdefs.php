<?php
$module_name = 'SCO_Productos';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pro_nombre',
            'label' => 'LBL_PRO_NOMBRE',
          ),
          1 => 
          array (
            'name' => 'pro_cantidad',
            'label' => 'LBL_PRO_CANTIDAD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pro_unidad',
            'label' => 'LBL_PRO_UNIDAD',
          ),
          1 => 
          array (
            'name' => 'pro_preciound',
            'label' => 'LBL_PRO_PRECIOUND',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pro_fechaprev',
            'label' => 'LBL_PRO_FECHAPREV',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'pro_descuento',
            'label' => 'LBL_PRO_DESCUENTO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'pro_descripcion',
            'label' => 'LBL_PRO_DESCRIPCION',
          ),
          1 => 
          array (
            'name' => 'pro_subtotal',
            'label' => 'LBL_PRO_SUBTOTAL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>

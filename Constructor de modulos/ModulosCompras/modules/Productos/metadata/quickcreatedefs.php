<?php
$module_name = 'SCO_Productos';
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
          0 => 
          array (
            'name' => 'sco_productos_sco_productoscompras_name',
            'label' => 'LBL_SCO_PRODUCTOS_SCO_PRODUCTOSCOMPRAS_FROM_SCO_PRODUCTOSCOMPRAS_TITLE',
          ),
          1 => 
          array (
            'name' => 'pro_procentaje',
            'label' => 'LBL_PRO_PROCENTAJE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pro_valor',
            'label' => 'LBL_PRO_VALOR',
          ),
          1 => 
          array (
            'name' => 'pro_subtotal',
            'label' => 'LBL_PRO_SUBTOTAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pro_aux1',
            'label' => 'LBL_PRO_AUX1',
          ),
          1 => 
          array (
            'name' => 'sco_proyectosco_sco_productos_name',
            'label' => 'LBL_SCO_PROYECTOSCO_SCO_PRODUCTOS_FROM_SCO_PROYECTOSCO_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>

<?php
$module_name = 'SCO_Despachos';
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
            'name' => 'des_cantconten',
            'label' => 'LBL_DES_CANTCONTEN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'des_prioridad',
            'studio' => 'visible',
            'label' => 'LBL_DES_PRIORIDAD',
          ),
          1 => 
          array (
            'name' => 'des_observaciones',
            'studio' => 'visible',
            'label' => 'LBL_DES_OBSERVACIONES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'des_origen',
            'label' => 'LBL_DES_ORIGEN',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'des_modtra',
            'studio' => 'visible',
            'label' => 'LBL_DES_MODTRA',
          ),
          1 => 
          array (
            'name' => 'sco_embarque_sco_despachos_name',
            'label' => 'LBL_SCO_EMBARQUE_SCO_DESPACHOS_FROM_SCO_EMBARQUE_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'des_diasllegada',
            'label' => 'LBL_DES_DIASLLEGADA',
          ),
          1 => 
          array (
            'name' => 'sco_despachos_sco_ordencompra_name',
          ),
        ),
      ),
    ),
  ),
);
?>

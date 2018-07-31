<?php
$module_name = 'SCO_Despachos';
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
            'name' => 'des_prioridad',
            'label' => 'LBL_DES_PRIORIDAD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'des_orig',
            'studio' => 'visible',
            'label' => 'LBL_DES_ORIG',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'des_modtra',
            'studio' => 'visible',
            'label' => 'LBL_DES_MODTRA',
          ),
          1 => 
          array (
            'name' => 'des_diasllegada',
            'label' => 'LBL_DES_DIASLLEGADA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'des_peso',
            'label' => 'LBL_DES_PESO',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'des_volumen',
            'label' => 'LBL_DES_VOLUMEN',
          ),
          1 => 
          array (
            'name' => 'des_observaciones',
            'studio' => 'visible',
            'label' => 'LBL_DES_OBSERVACIONES',
          ),
        ),
      ),
    ),
  ),
);
?>

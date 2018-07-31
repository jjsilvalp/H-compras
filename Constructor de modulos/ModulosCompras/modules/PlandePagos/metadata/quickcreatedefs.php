<?php
$module_name = 'SCO_PlandePagos';
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
            'name' => 'ppg_fecha',
            'label' => 'LBL_PPG_FECHA',
          ),
          1 => 
          array (
            'name' => 'ppg_tipo',
            'studio' => 'visible',
            'label' => 'LBL_PPG_TIPO',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'ppg_porc',
            'label' => 'LBL_PPG_PORC',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'ppg_monto',
            'label' => 'LBL_PPG_MONTO',
          ),
        ),
      ),
    ),
  ),
);
?>

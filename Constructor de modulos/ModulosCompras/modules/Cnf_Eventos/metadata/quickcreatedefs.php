<?php
$module_name = 'SCO_Cnf_Eventos';
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
            'name' => 'cnfev_diastrans',
            'label' => 'LBL_CNFEV_DIASTRANS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cnfev_modtrans',
            'label' => 'LBL_CNFEV_MODTRANS',
          ),
          1 => 
          array (
            'name' => 'cnfev_evento',
            'studio' => 'visible',
            'label' => 'LBL_CNFEV_EVENTO',
          ),
        ),
      ),
    ),
  ),
);
?>

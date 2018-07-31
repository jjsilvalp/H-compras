<?php
$module_name = 'SCO_Cnf_Eventos';
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
      'cnfev_modtrans' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CNFEV_MODTRANS',
        'width' => '10%',
        'default' => true,
        'name' => 'cnfev_modtrans',
      ),
      'cnfev_evento' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_CNFEV_EVENTO',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'cnfev_evento',
      ),
      'cnfev_diastrans' => 
      array (
        'type' => 'int',
        'label' => 'LBL_CNFEV_DIASTRANS',
        'width' => '10%',
        'default' => true,
        'name' => 'cnfev_diastrans',
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

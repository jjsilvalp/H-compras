<?php
$module_name = 'SCO_Cnf_Eventos';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CNFEV_MODTRANS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CNFEV_MODTRANS',
    'width' => '10%',
    'default' => true,
  ),
  'CNFEV_EVENTO' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_CNFEV_EVENTO',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'CNFEV_DIASTRANS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CNFEV_DIASTRANS',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
);
?>

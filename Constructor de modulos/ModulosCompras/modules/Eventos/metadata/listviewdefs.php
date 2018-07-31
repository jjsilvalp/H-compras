<?php
$module_name = 'SCO_Eventos';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'EVE_TIEMPOEST' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EVE_TIEMPOEST',
    'width' => '10%',
    'default' => true,
  ),
  'EVE_FECHAPLAN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EVE_FECHAPLAN',
    'width' => '10%',
    'default' => true,
  ),
  'EVE_FECHARE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EVE_FECHARE',
    'width' => '10%',
    'default' => true,
  ),
  'EVE_FECHANUEVO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EVE_FECHANUEVO',
    'width' => '10%',
    'default' => true,
  ),
  'SCO_EMBARQUE_SCO_EVENTOS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_EMBARQUE_SCO_EVENTOS_FROM_SCO_EMBARQUE_TITLE',
    'id' => 'SCO_EMBARQUE_SCO_EVENTOSSCO_EMBARQUE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
);
?>

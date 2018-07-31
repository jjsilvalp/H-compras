<?php
$module_name = 'SCO_Riesgo';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'RIE_PRIORIDAD' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RIE_PRIORIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'RIE_PROB' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RIE_PROB',
    'width' => '10%',
    'default' => true,
  ),
  'RIE_IMPACT' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RIE_IMPACT ',
    'width' => '10%',
    'default' => true,
  ),
  'RIE_FECHAVEN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_RIE_FECHAVEN',
    'width' => '10%',
    'default' => true,
  ),
  'RIE_PLANMINI' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_RIE_PLANMINI',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'RIE_PLANCONT' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_RIE_PLANCONT',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'RIE_DESCDES' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_RIE_DESCDES',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'RIE_DESEN' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_RIE_DESEN',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'RIE_PROP' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_RIE_PROP',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'RIE_ASIGNADO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_RIE_ASIGNADO',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
);
?>

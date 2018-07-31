<?php
$module_name = 'SCO_PlandePagos';
$listViewDefs [$module_name] = 
array (
  'PPG_FECHA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PPG_FECHA',
    'width' => '10%',
    'default' => true,
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CURRENCY_ID',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PPG_TIPO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PPG_TIPO',
    'width' => '10%',
  ),
  'PPG_MONTO' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PPG_MONTO',
    'width' => '10%',
    'default' => true,
  ),
  'PPG_PORC' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PPG_PORC',
    'width' => '10%',
    'default' => true,
  ),
  'SCO_ORDENCOMPRA_SCO_PLANDEPAGOS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_ORDENCOMPRA_SCO_PLANDEPAGOS_FROM_SCO_ORDENCOMPRA_TITLE',
    'id' => 'SCO_ORDENCOMPRA_SCO_PLANDEPAGOSSCO_ORDENCOMPRA_IDA',
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
  'PPG_HITO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PPG_HITO',
    'width' => '10%',
    'default' => false,
  ),
);
?>

<?php
$module_name = 'SCO_Despachos';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DES_FECHACREA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DES_FECHACREA',
    'width' => '10%',
    'default' => true,
  ),
  'DES_ORIGEN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DES_ORIGEN',
    'width' => '10%',
    'default' => true,
  ),
  'DES_MODTRANS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DES_MODTRANS',
    'width' => '10%',
    'default' => true,
  ),
  'DES_DIASLLEGADA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DES_DIASLLEGADA',
    'width' => '10%',
    'default' => true,
  ),
  'DES_PRIORIDAD' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DES_PRIORIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'DES_PESO' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_DES_PESO',
    'width' => '10%',
    'default' => true,
  ),
  'DES_VOLUMEN' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_DES_VOLUMEN',
    'width' => '10%',
    'default' => true,
  ),
  'SCO_DESPACHOS_SCO_ORDENCOMPRA_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_DESPACHOS_SCO_ORDENCOMPRA_FROM_SCO_ORDENCOMPRA_TITLE',
    'id' => 'SCO_DESPACHOS_SCO_ORDENCOMPRASCO_ORDENCOMPRA_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'SCO_EMBARQUE_SCO_DESPACHOS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_EMBARQUE_SCO_DESPACHOS_FROM_SCO_EMBARQUE_TITLE',
    'id' => 'SCO_EMBARQUE_SCO_DESPACHOSSCO_EMBARQUE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DES_EST' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DES_EST',
    'width' => '10%',
  ),
  'DES_OBSERVACIONES' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DES_OBSERVACIONES',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'DES_DIASTRANS' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_DES_DIASTRANS',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'DES_PEDIDOSAP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DES_PEDIDOSAP',
    'width' => '10%',
    'default' => false,
  ),
);
?>

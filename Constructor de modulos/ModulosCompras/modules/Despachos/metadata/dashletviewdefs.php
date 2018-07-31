<?php
$dashletData['SCO_DespachosDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'sco_despachos_sco_ordencompra_name' => 
  array (
    'default' => '',
  ),
  'sco_embarque_sco_despachos_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['SCO_DespachosDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'des_fechacrea' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DES_FECHACREA',
    'width' => '10%',
    'default' => true,
  ),
  'des_prioridad' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DES_PRIORIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'des_orig' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DES_ORIG',
    'width' => '10%',
    'default' => true,
  ),
  'des_diasllegada' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DES_DIASLLEGADA',
    'width' => '10%',
    'default' => true,
  ),
  'des_modtra' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DES_MODTRA',
    'width' => '10%',
    'default' => true,
  ),
  'des_est' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DES_EST',
    'width' => '10%',
  ),
  'sco_despachos_sco_ordencompra_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_DESPACHOS_SCO_ORDENCOMPRA_FROM_SCO_ORDENCOMPRA_TITLE',
    'id' => 'SCO_DESPACHOS_SCO_ORDENCOMPRASCO_ORDENCOMPRA_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'sco_embarque_sco_despachos_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_EMBARQUE_SCO_DESPACHOS_FROM_SCO_EMBARQUE_TITLE',
    'id' => 'SCO_EMBARQUE_SCO_DESPACHOSSCO_EMBARQUE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);

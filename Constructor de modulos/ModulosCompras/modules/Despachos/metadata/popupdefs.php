<?php
$popupMeta = array (
    'moduleMain' => 'SCO_Despachos',
    'varName' => 'SCO_Despachos',
    'orderBy' => 'sco_despachos.name',
    'whereClauses' => array (
  'des_diastrans' => 'sco_despachos.des_diastrans',
  'sco_despachos_sco_ordencompra_name' => 'sco_despachos.sco_despachos_sco_ordencompra_name',
  'des_fechacrea' => 'sco_despachos.des_fechacrea',
  'des_est' => 'sco_despachos.des_est',
  'des_origen' => 'sco_despachos.des_origen',
  'des_modtrans' => 'sco_despachos.des_modtrans',
  'iddivision_c' => 'sco_despachos.iddivision_c',
),
    'searchInputs' => array (
  6 => 'des_diastrans',
  8 => 'sco_despachos_sco_ordencompra_name',
  11 => 'des_fechacrea',
  12 => 'des_est',
  13 => 'des_origen',
  14 => 'des_modtrans',
  15 => 'iddivision_c',
),
    'searchdefs' => array (
  'des_fechacrea' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DES_FECHACREA',
    'width' => '10%',
    'name' => 'des_fechacrea',
  ),
  'des_est' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DES_EST',
    'width' => '10%',
    'name' => 'des_est',
  ),
  'des_diastrans' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DES_DIASTRANS',
    'width' => '10%',
    'name' => 'des_diastrans',
  ),
  'sco_despachos_sco_ordencompra_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_DESPACHOS_SCO_ORDENCOMPRA_FROM_SCO_ORDENCOMPRA_TITLE',
    'id' => 'SCO_DESPACHOS_SCO_ORDENCOMPRASCO_ORDENCOMPRA_IDA',
    'width' => '10%',
    'name' => 'sco_despachos_sco_ordencompra_name',
  ),
  'des_origen' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DES_ORIGEN',
    'width' => '10%',
    'name' => 'des_origen',
  ),
  'des_modtrans' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DES_MODTRANS',
    'width' => '10%',
    'name' => 'des_modtrans',
  ),
  'iddivision_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_IDDIVISION_C',
    'width' => '10%',
    'name' => 'iddivision_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'DES_ORIGEN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DES_ORIGEN',
    'width' => '10%',
    'default' => true,
    'name' => 'des_origen',
  ),
  'DES_MODTRANS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DES_MODTRANS',
    'width' => '10%',
    'default' => true,
    'name' => 'des_modtrans',
  ),
  'DES_DIASTRANS' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_DES_DIASTRANS',
    'width' => '10%',
    'name' => 'des_diastrans',
  ),
  'DES_OBSERVACIONES' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DES_OBSERVACIONES',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'des_observaciones',
  ),
  'DES_EST' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DES_EST',
    'width' => '10%',
    'name' => 'des_est',
  ),
  'SCO_DESPACHOS_SCO_ORDENCOMPRA_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_DESPACHOS_SCO_ORDENCOMPRA_FROM_SCO_ORDENCOMPRA_TITLE',
    'id' => 'SCO_DESPACHOS_SCO_ORDENCOMPRASCO_ORDENCOMPRA_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'sco_despachos_sco_ordencompra_name',
  ),
  'DES_PEDIDOSAP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DES_PEDIDOSAP',
    'width' => '10%',
    'default' => true,
    'name' => 'des_pedidosap',
  ),
),
);

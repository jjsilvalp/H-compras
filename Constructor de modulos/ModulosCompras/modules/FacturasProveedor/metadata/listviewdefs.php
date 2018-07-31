<?php
$module_name = 'SCO_FacturasProveedor';
$OBJECT_NAME = 'SCO_FACTURASPROVEEDOR';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'FPV_FECHAFACTURA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FPV_FECHAFACTURA',
    'width' => '10%',
    'default' => true,
  ),
  'FPV_FECHAVENC' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FPV_FECHAVENC',
    'width' => '10%',
    'default' => true,
  ),
  'FPV_IMPORTE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_FPV_IMPORTE',
    'width' => '10%',
    'default' => true,
  ),
  'FPV_DESCRIPCION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FPV_DESCRIPCION',
    'width' => '10%',
    'default' => true,
  ),
  'FPV_TIPO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FPV_TIPO',
    'width' => '10%',
    'default' => true,
  ),
  'FPV_MONEDA' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FPV_MONEDA',
    'width' => '10%',
    'default' => true,
  ),
  'FPV_ESTADO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FPV_ESTADO',
    'width' => '10%',
    'default' => true,
  ),
  'SCO_EMBARQUE_SCO_FACTURASPROVEEDOR_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_EMBARQUE_SCO_FACTURASPROVEEDOR_FROM_SCO_EMBARQUE_TITLE',
    'id' => 'SCO_EMBARQUE_SCO_FACTURASPROVEEDORSCO_EMBARQUE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
);
?>

<?php
$module_name = 'SCO_OrdenCompra';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'sco_proveedor_sco_ordencompra_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SCO_PROVEEDOR_SCO_ORDENCOMPRA_FROM_SCO_PROVEEDOR_TITLE',
        'id' => 'SCO_PROVEEDOR_SCO_ORDENCOMPRASCO_PROVEEDOR_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sco_proveedor_sco_ordencompra_name',
      ),
      'orc_fechaord' => 
      array (
        'type' => 'date',
        'label' => 'LBL_ORC_FECHAORD',
        'width' => '10%',
        'default' => true,
        'name' => 'orc_fechaord',
      ),
      'orc_importet' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_ORC_IMPORTET',
        'width' => '10%',
        'default' => true,
        'name' => 'orc_importet',
      ),
      'orc_estado' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'default' => true,
        'label' => 'LBL_ORC_ESTADO',
        'width' => '10%',
        'name' => 'orc_estado',
      ),
      'orc_solicitado' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ORC_SOLICITADO',
        'id' => 'USER_ID1_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'orc_solicitado',
      ),
      'orc_dfnomemp' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ORC_DFNOMEMP',
        'width' => '10%',
        'name' => 'orc_dfnomemp',
      ),
      'orc_dfnit' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ORC_DFNIT',
        'width' => '10%',
        'name' => 'orc_dfnit',
      ),
      'orc_dfpais' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ORC_DFPAIS',
        'width' => '10%',
        'name' => 'orc_dfpais',
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

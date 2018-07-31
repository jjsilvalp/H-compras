<?php
$module_name = 'SCO_Despachos';
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
      'des_origen' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DES_ORIGEN',
        'width' => '10%',
        'default' => true,
        'name' => 'des_origen',
      ),
      'des_modtrans' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DES_MODTRANS',
        'width' => '10%',
        'default' => true,
        'name' => 'des_modtrans',
      ),
      'des_est' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_DES_EST',
        'width' => '10%',
        'name' => 'des_est',
      ),
      'sco_despachos_sco_ordencompra_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SCO_DESPACHOS_SCO_ORDENCOMPRA_FROM_SCO_ORDENCOMPRA_TITLE',
        'id' => 'SCO_DESPACHOS_SCO_ORDENCOMPRASCO_ORDENCOMPRA_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sco_despachos_sco_ordencompra_name',
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
      'des_origen' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DES_ORIGEN',
        'width' => '10%',
        'default' => true,
        'name' => 'des_origen',
      ),
      'des_pedidosap' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DES_PEDIDOSAP',
        'width' => '10%',
        'default' => true,
        'name' => 'des_pedidosap',
      ),
      'des_observaciones' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DES_OBSERVACIONES',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'des_observaciones',
      ),
      'des_diastrans' => 
      array (
        'type' => 'int',
        'default' => true,
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
        'default' => true,
        'name' => 'sco_despachos_sco_ordencompra_name',
      ),
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'current_user_only',
      ),
      'sco_embarque_sco_despachos_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SCO_EMBARQUE_SCO_DESPACHOS_FROM_SCO_EMBARQUE_TITLE',
        'id' => 'SCO_EMBARQUE_SCO_DESPACHOSSCO_EMBARQUE_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sco_embarque_sco_despachos_name',
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

<?php
$module_name = 'SCO_Aprobadores';
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
      'apr_titulo' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_APR_TITULO',
        'width' => '10%',
        'default' => true,
        'name' => 'apr_titulo',
      ),
      'apr_fecha' => 
      array (
        'type' => 'date',
        'label' => 'LBL_APR_FECHA',
        'width' => '10%',
        'default' => true,
        'name' => 'apr_fecha',
      ),
      'apr_casopm' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_APR_CASOPM',
        'width' => '10%',
        'default' => true,
        'name' => 'apr_casopm',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
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

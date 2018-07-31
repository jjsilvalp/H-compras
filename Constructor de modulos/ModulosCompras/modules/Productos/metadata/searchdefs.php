<?php
$module_name = 'SCO_Productos';
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
      'pro_codaio' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRO_CODAIO',
        'width' => '10%',
        'default' => true,
        'name' => 'pro_codaio',
      ),
      'pro_tipopro' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PRO_TIPOPRO',
        'width' => '10%',
        'default' => true,
        'name' => 'pro_tipopro',
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
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'pro_codaio' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRO_CODAIO',
        'width' => '10%',
        'default' => true,
        'name' => 'pro_codaio',
      ),
      'assigned_user_id' => 
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
        'default' => true,
        'width' => '10%',
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

<?php
$module_name = 'SCO_Contactos';
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
      'con_cargo' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CON_CARGO',
        'width' => '10%',
        'default' => true,
        'name' => 'con_cargo',
      ),
      'con_movil' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CON_MOVIL',
        'width' => '10%',
        'default' => true,
        'name' => 'con_movil',
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
      'con_cargo' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CON_CARGO',
        'width' => '10%',
        'default' => true,
        'name' => 'con_cargo',
      ),
      'con_telefono' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CON_TELEFONO',
        'width' => '10%',
        'default' => true,
        'name' => 'con_telefono',
      ),
      'con_email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CON_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'con_email',
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

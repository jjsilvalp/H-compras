<?php
$module_name = 'SCO_Eventos';
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
      'eve_fechaplan' => 
      array (
        'type' => 'date',
        'label' => 'LBL_EVE_FECHAPLAN',
        'width' => '10%',
        'default' => true,
        'name' => 'eve_fechaplan',
      ),
      'eve_fechare' => 
      array (
        'type' => 'date',
        'label' => 'LBL_EVE_FECHARE',
        'width' => '10%',
        'default' => true,
        'name' => 'eve_fechare',
      ),
      'eve_fechanuevo' => 
      array (
        'type' => 'date',
        'label' => 'LBL_EVE_FECHANUEVO',
        'width' => '10%',
        'default' => true,
        'name' => 'eve_fechanuevo',
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
      'eve_fechaplan' => 
      array (
        'type' => 'date',
        'label' => 'LBL_EVE_FECHAPLAN',
        'width' => '10%',
        'default' => true,
        'name' => 'eve_fechaplan',
      ),
      'eve_fechare' => 
      array (
        'type' => 'date',
        'label' => 'LBL_EVE_FECHARE',
        'width' => '10%',
        'default' => true,
        'name' => 'eve_fechare',
      ),
      'eve_fechanuevo' => 
      array (
        'type' => 'date',
        'label' => 'LBL_EVE_FECHANUEVO',
        'width' => '10%',
        'default' => true,
        'name' => 'eve_fechanuevo',
      ),
      'eve_tiempoest' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EVE_TIEMPOEST',
        'width' => '10%',
        'default' => true,
        'name' => 'eve_tiempoest',
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
      'sco_embarque_sco_eventos_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SCO_EMBARQUE_SCO_EVENTOS_FROM_SCO_EMBARQUE_TITLE',
        'id' => 'SCO_EMBARQUE_SCO_EVENTOSSCO_EMBARQUE_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sco_embarque_sco_eventos_name',
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

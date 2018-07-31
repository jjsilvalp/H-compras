<?php
$module_name = 'SCO_Eventos';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'eve_tiempoest',
            'label' => 'LBL_EVE_TIEMPOEST',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'eve_fechaplan',
            'label' => 'LBL_EVE_FECHAPLAN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'eve_fechare',
            'label' => 'LBL_EVE_FECHARE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'eve_estado',
            'label' => 'LBL_EVE_ESTADO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sco_embarque_sco_eventos_name',
            'label' => 'LBL_SCO_EMBARQUE_SCO_EVENTOS_FROM_SCO_EMBARQUE_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>

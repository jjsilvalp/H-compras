<?php
$module_name = 'SCO_Eventos';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sco_embarque_sco_eventos_name',
          ),
        ),
      ),
    ),
  ),
);
?>

<?php
$module_name = 'SCO_Eventos';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          1 => 
          array (
            'name' => 'eve_estado',
            'studio' => 'visible',
            'label' => 'LBL_EVE_ESTADO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'eve_fechanuevo',
            'label' => 'LBL_EVE_FECHANUEVO',
          ),
          1 => 
          array (
            'name' => 'sco_embarque_sco_eventos_name',
          ),
        ),
      ),
    ),
  ),
);
?>

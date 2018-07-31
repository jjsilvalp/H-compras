<?php
$module_name = 'SCO_Contactos';
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
          0 => 
          array (
            'name' => 'con_nombre',
            'studio' => 'visible',
            'label' => 'LBL_CON_NOMBRE',
          ),
          1 => 
          array (
            'name' => 'con_rol',
            'label' => 'LBL_CON_ROL',
          ),
        ),
      ),
    ),
  ),
);
?>

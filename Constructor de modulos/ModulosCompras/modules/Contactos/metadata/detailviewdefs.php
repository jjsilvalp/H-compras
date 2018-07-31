<?php
$module_name = 'SCO_Contactos';
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
      'syncDetailEditViews' => true,
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
            'studio' => 'visible',
            'label' => 'Rol',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'con_cargo',
            'label' => 'LBL_CON_CARGO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'con_movil',
            'label' => 'LBL_CON_MOVIL',
          ),
          1 => 
          array (
            'name' => 'sco_ordencompra_sco_contactos_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'con_telefono',
            'label' => 'LBL_CON_TELEFONO',
          ),
          1 => 
          array (
            'name' => 'con_email',
            'label' => 'LBL_CON_EMAIL',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>

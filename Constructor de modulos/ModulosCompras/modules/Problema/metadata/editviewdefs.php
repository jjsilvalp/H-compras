<?php
$module_name = 'SCO_Problema';
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
          1 => 
          array (
            'name' => 'prl_discu',
            'studio' => 'visible',
            'label' => 'LBL_PRL_DISCU',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prl_fechav',
            'label' => 'LBL_PRL_FECHAV',
          ),
          1 => 
          array (
            'name' => 'prl_reso',
            'studio' => 'visible',
            'label' => 'LBL_PRL_RESO',
          ),
        ),
      ),
    ),
  ),
);
?>

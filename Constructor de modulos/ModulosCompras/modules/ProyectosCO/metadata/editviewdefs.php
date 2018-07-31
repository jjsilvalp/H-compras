<?php
$module_name = 'SCO_ProyectosCO';
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
            'name' => 'proyc_codsap',
            'label' => 'LBL_PROYC_CODSAP ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'proyc_nomproy',
            'label' => 'LBL_PROYC_NOMPROY',
          ),
          1 => 
          array (
            'name' => 'proyc_division',
            'studio' => 'visible',
            'label' => 'LBL_PROYC_DIVISION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'proyc_descripcion',
            'studio' => 'visible',
            'label' => 'LBL_PROYC_DESCRIPCION',
          ),
          1 => 
          array (
            'name' => 'proyc_estado',
            'studio' => 'visible',
            'label' => 'LBL_PROYC_ESTADO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'proyc_tipo',
            'label' => 'LBL_PROYC_TIPO',
          ),
          1 => 
          array (
            'name' => 'proyc_centcost',
            'label' => 'LBL_PROYC_CENTCOST',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'proyc_cenben',
            'label' => 'LBL_PROYC_CENBEN',
          ),
        ),
      ),
    ),
  ),
);
?>

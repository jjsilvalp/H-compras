<?php
$module_name = 'SCO_Aprobadores';
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
          0 => 
          array (
            'name' => 'apr_nombre',
            'studio' => 'visible',
            'label' => 'LBL_APR_NOMBRE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'apr_titulo',
            'label' => 'LBL_APR_TITULO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'apr_aprueba',
            'studio' => 'visible',
            'label' => 'LBL_APR_APRUEBA',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'apr_fecha',
            'label' => 'LBL_APR_FECHA',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'apr_comenta',
            'studio' => 'visible',
            'label' => 'LBL_APR_COMENTA',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'sco_ordencompra_sco_aprobadores_name',
          ),
        ),
      ),
    ),
  ),
);
?>
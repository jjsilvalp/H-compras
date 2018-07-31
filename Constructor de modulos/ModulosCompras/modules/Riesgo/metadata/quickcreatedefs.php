<?php
$module_name = 'SCO_Riesgo';
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
          1 => 
          array (
            'name' => 'rie_planmini',
            'studio' => 'visible',
            'label' => 'LBL_RIE_PLANMINI',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rie_prioridad',
            'studio' => 'visible',
            'label' => 'LBL_RIE_PRIORIDAD',
          ),
          1 => 
          array (
            'name' => 'rie_plancont',
            'studio' => 'visible',
            'label' => 'LBL_RIE_PLANCONT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'rie_fechaven',
            'label' => 'LBL_RIE_FECHAVEN',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'rie_estado',
            'studio' => 'visible',
            'label' => 'LBL_RIE_ESTADO',
          ),
          1 => 
          array (
            'name' => 'rie_des',
            'studio' => 'visible',
            'label' => 'LBL_RIE_DES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'rie_prob',
            'label' => 'LBL_RIE_PROB',
          ),
          1 => 
          array (
            'name' => 'rie_descdes',
            'studio' => 'visible',
            'label' => 'LBL_RIE_DESCDES',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'rie_impact',
            'label' => 'LBL_RIE_IMPACT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
<?php
$module_name = 'SCO_Embarque';
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
            'name' => 'emb_cantcont',
            'label' => 'LBL_EMB_CANTCONT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'emb_origen',
            'studio' => 'visible',
            'label' => 'LBL_EMB_ORIGEN',
          ),
          1 => 
          array (
            'name' => 'emb_porespacio',
            'label' => 'LBL_EMB_PORESPACIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'emb_modtra',
            'studio' => 'visible',
            'label' => 'LBL_EMB_MODTRA',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'emb_diastran',
            'label' => 'LBL_EMB_DIASTRAN',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>

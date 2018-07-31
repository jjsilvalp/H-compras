<?php
$module_name = 'SCO_Embarque';
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
          0 => 
          array (
            'name' => 'emb_fechacrea',
            'label' => 'LBL_EMB_FECHACREA',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'emb_cantcont',
            'label' => 'LBL_EMB_CANTCONT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'emb_orig',
            'label' => 'LBL_EMB_ORIG',
          ),
          1 => 
          array (
            'name' => 'emb_porespacio',
            'label' => 'LBL_EMB_PORESPACIO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'emb_transp',
            'label' => 'LBL_EMB_TRANSP',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'emb_diastran',
            'label' => 'LBL_EMB_DIASTRAN',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'emb_peso',
            'label' => 'LBL_EMB_PESO',
          ),
          1 => 
          array (
            'name' => 'emb_estado',
            'studio' => 'visible',
            'label' => 'LBL_EMB_ESTADO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'emb_volumen',
            'label' => 'LBL_EMB_VOLUMEN',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>

<?php
$module_name = 'SCO_Problema';
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
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
            'name' => 'prl_estado',
            'label' => 'LBL_PRL_ESTADO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'prl_fechav',
            'label' => 'LBL_PRL_FECHAV',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'prl_proba',
            'studio' => 'visible',
            'label' => 'LBL_PRL_PROBA',
          ),
          1 => 
          array (
            'name' => 'prl_reso',
            'studio' => 'visible',
            'label' => 'LBL_PRL_RESO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'sco_eventos_sco_problema_name',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>

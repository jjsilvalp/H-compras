<?php
$module_name = 'SCO_Despachos';
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
          1 => 
          array (
            'name' => 'des_fechacrea',
            'label' => 'LBL_DES_FECHACREA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'des_origen',
            'label' => 'LBL_DES_ORIGEN',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'des_modtrans',
            'label' => 'LBL_DES_MODTRANS',
          ),
          1 => 
          array (
            'name' => 'des_prioridad',
            'studio' => 'visible',
            'label' => 'LBL_DES_PRIORIDAD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'des_diasllegada',
            'label' => 'LBL_DES_DIASLLEGADA',
          ),
          1 => 
          array (
            'name' => 'des_observaciones',
            'studio' => 'visible',
            'label' => 'LBL_DES_OBSERVACIONES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'des_est',
            'studio' => 'visible',
            'label' => 'LBL_DES_EST',
          ),
          1 => 
          array (
            'name' => 'sco_embarque_sco_despachos_name',
            'label' => 'LBL_SCO_EMBARQUE_SCO_DESPACHOS_FROM_SCO_EMBARQUE_TITLE',
          ),
        ),
        5 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'sco_despachos_sco_ordencompra_name',
          ),
        ),
      ),
    ),
  ),
);
?>

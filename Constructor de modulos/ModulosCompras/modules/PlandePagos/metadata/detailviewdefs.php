<?php
$module_name = 'SCO_PlandePagos';
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ppg_fecha',
            'label' => 'LBL_PPG_FECHA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ppg_tipo',
            'studio' => 'visible',
            'label' => 'LBL_PPG_TIPO',
          ),
          1 => 
          array (
            'name' => 'ppg_porc',
            'label' => 'LBL_PPG_PORC',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sco_ordencompra_sco_plandepagos_name',
          ),
          1 => 
          array (
            'name' => 'ppg_monto',
            'label' => 'LBL_PPG_MONTO',
          ),
        ),
      ),
    ),
  ),
);
?>

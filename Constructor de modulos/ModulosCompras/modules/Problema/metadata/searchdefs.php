<?php
$module_name = 'SCO_Problema';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'prl_fechav' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PRL_FECHAV',
        'width' => '10%',
        'default' => true,
        'name' => 'prl_fechav',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'prl_asig' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PRL_ASIG',
        'id' => 'USER_ID1_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'prl_asig',
      ),
      'prl_prop' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PRL_PROP',
        'id' => 'USER_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'prl_prop',
      ),
      'prl_estado' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRL_ESTADO',
        'width' => '10%',
        'default' => true,
        'name' => 'prl_estado',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'prl_cat' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRL_CAT',
        'width' => '10%',
        'default' => true,
        'name' => 'prl_cat',
      ),
      'prl_fechav' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PRL_FECHAV',
        'width' => '10%',
        'default' => true,
        'name' => 'prl_fechav',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>

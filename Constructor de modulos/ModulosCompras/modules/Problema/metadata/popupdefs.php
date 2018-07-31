<?php
$popupMeta = array (
    'moduleMain' => 'SCO_Problema',
    'varName' => 'SCO_Problema',
    'orderBy' => 'sco_problema.name',
    'whereClauses' => array (
  'name' => 'sco_problema.name',
  'prl_prop' => 'sco_problema.prl_prop',
  'prl_asig' => 'sco_problema.prl_asig',
  'prl_estado' => 'sco_problema.prl_estado',
  'prl_cat' => 'sco_problema.prl_cat',
  'prl_pri' => 'sco_problema.prl_pri',
  'prl_fechav' => 'sco_problema.prl_fechav',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'prl_prop',
  5 => 'prl_asig',
  6 => 'prl_estado',
  7 => 'prl_cat',
  8 => 'prl_pri',
  9 => 'prl_fechav',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'prl_prop' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRL_PROP',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'prl_prop',
  ),
  'prl_asig' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRL_ASIG',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'prl_asig',
  ),
  'prl_estado' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRL_ESTADO',
    'width' => '10%',
    'name' => 'prl_estado',
  ),
  'prl_cat' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRL_CAT',
    'width' => '10%',
    'name' => 'prl_cat',
  ),
  'prl_pri' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRL_PRI',
    'width' => '10%',
    'name' => 'prl_pri',
  ),
  'prl_fechav' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PRL_FECHAV',
    'width' => '10%',
    'name' => 'prl_fechav',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'PRL_PROP' => 
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
  'PRL_ASIG' => 
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
  'PRL_ESTADO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRL_ESTADO',
    'width' => '10%',
    'default' => true,
    'name' => 'prl_estado',
  ),
  'PRL_CAT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRL_CAT',
    'width' => '10%',
    'default' => true,
    'name' => 'prl_cat',
  ),
  'PRL_FECHAV' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PRL_FECHAV',
    'width' => '10%',
    'default' => true,
    'name' => 'prl_fechav',
  ),
),
);

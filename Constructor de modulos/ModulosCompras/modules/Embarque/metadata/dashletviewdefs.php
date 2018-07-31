<?php
$dashletData['SCO_EmbarqueDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Limberg Alcon Espejo',
  ),
);
$dashletData['SCO_EmbarqueDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'emb_fechacrea' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EMB_FECHACREA',
    'width' => '10%',
    'default' => true,
  ),
  'emb_origen' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_EMB_ORIGEN',
    'width' => '10%',
    'default' => true,
  ),
  'emb_modtra' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_EMB_MODTRA',
    'width' => '10%',
    'default' => true,
  ),
  'emb_cantcont' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMB_CANTCONT',
    'width' => '10%',
    'default' => true,
  ),
  'emb_porespacio' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMB_PORESPACIO',
    'width' => '10%',
    'default' => true,
  ),
  'emb_peso' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EMB_PESO',
    'width' => '10%',
    'default' => true,
  ),
  'emb_volumen' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EMB_VOLUMEN',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);

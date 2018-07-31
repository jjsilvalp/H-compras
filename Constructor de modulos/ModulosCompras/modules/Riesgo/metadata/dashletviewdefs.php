<?php
$dashletData['SCO_RiesgoDashlet']['searchFields'] = array (
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
$dashletData['SCO_RiesgoDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'rie_impact' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RIE_IMPACT ',
    'width' => '10%',
    'default' => true,
  ),
  'rie_estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RIE_ESTADO',
    'width' => '10%',
    'default' => true,
  ),
  'rie_planmini' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_RIE_PLANMINI',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'rie_plancont' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_RIE_PLANCONT',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'rie_desen' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_RIE_DESEN',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'rie_descdes' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_RIE_DESCDES',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'sco_eventos_sco_riesgo_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_EVENTOS_SCO_RIESGO_FROM_SCO_EVENTOS_TITLE',
    'id' => 'SCO_EVENTOS_SCO_RIESGOSCO_EVENTOS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
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

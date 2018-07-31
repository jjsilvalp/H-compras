<?php
$module_name='SCO_Riesgo';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'rie_prioridad' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_RIE_PRIORIDAD',
      'width' => '10%',
      'default' => true,
    ),
    'rie_impact' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_RIE_IMPACT ',
      'width' => '10%',
      'default' => true,
    ),
    'rie_prob' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_RIE_PROB',
      'width' => '10%',
      'default' => true,
    ),
    'rie_des' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_RIE_DES',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'rie_fechaven' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_RIE_FECHAVEN',
      'width' => '10%',
      'default' => true,
    ),
    'ries_a_prob' => 
    array (
      'vname' => 'Convertir Problema',
      'widget_class' => 'SubPanelRiesgobtn',
      'width' => '5%',
      'default' => true,
    ),
  ),
);
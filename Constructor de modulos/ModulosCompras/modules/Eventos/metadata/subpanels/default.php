<?php
$module_name='SCO_Eventos';
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
    'eve_tiempoest' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_EVE_TIEMPOEST',
      'width' => '10%',
      'default' => true,
    ),
    'eve_fechaplan' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_EVE_FECHAPLAN',
      'width' => '10%',
      'default' => true,
    ),
    'fechare' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_EVE_FECHARE',
      'widget_class' => 'SubPanelFechasEvento',
      'width' => '22%',
      'default' => true,
    ),
    'fechanuevo' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_EVE_FECHANUEVO',
      'widget_class' => 'SubPanelFechasEvento2',
      'width' => '10%',
      'default' => true,
    ),
    'alertas' => 
    array (
      'vname' => 'Alertas',
      'widget_class' => 'SubPanelEventoAlertasRP',
      'width' => '5%',
      'default' => true,
    ),
    'estado' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'default' => true,
      'vname' => 'LBL_EVE_ESTADO',
      'widget_class' => 'SubPanelEventoEstado',
      'width' => '10%',
    ),
  ),
);
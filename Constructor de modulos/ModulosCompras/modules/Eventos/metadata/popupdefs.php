<?php
$popupMeta = array (
    'moduleMain' => 'SCO_Eventos',
    'varName' => 'SCO_Eventos',
    'orderBy' => 'sco_eventos.name',
    'whereClauses' => array (
  'name' => 'sco_eventos.name',
  'eve_fechaplan' => 'sco_eventos.eve_fechaplan',
  'eve_fechanuevo' => 'sco_eventos.eve_fechanuevo',
  'eve_fechare' => 'sco_eventos.eve_fechare',
  'eve_estado' => 'sco_eventos.eve_estado',
  'sco_embarque_sco_eventos_name' => 'sco_eventos.sco_embarque_sco_eventos_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'eve_fechaplan',
  5 => 'eve_fechanuevo',
  6 => 'eve_fechare',
  7 => 'eve_estado',
  8 => 'sco_embarque_sco_eventos_name',
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
  'eve_fechaplan' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EVE_FECHAPLAN',
    'width' => '10%',
    'name' => 'eve_fechaplan',
  ),
  'eve_fechanuevo' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EVE_FECHANUEVO',
    'width' => '10%',
    'name' => 'eve_fechanuevo',
  ),
  'eve_fechare' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EVE_FECHARE',
    'width' => '10%',
    'name' => 'eve_fechare',
  ),
  'eve_estado' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EVE_ESTADO',
    'width' => '10%',
    'name' => 'eve_estado',
  ),
  'sco_embarque_sco_eventos_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_EMBARQUE_SCO_EVENTOS_FROM_SCO_EMBARQUE_TITLE',
    'id' => 'SCO_EMBARQUE_SCO_EVENTOSSCO_EMBARQUE_IDA',
    'width' => '10%',
    'name' => 'sco_embarque_sco_eventos_name',
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
  'EVE_FECHAPLAN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EVE_FECHAPLAN',
    'width' => '10%',
    'default' => true,
    'name' => 'eve_fechaplan',
  ),
  'EVE_FECHARE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EVE_FECHARE',
    'width' => '10%',
    'default' => true,
    'name' => 'eve_fechare',
  ),
  'EVE_TIEMPOEST' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EVE_TIEMPOEST',
    'width' => '10%',
    'default' => true,
    'name' => 'eve_tiempoest',
  ),
  'EVE_FECHANUEVO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EVE_FECHANUEVO',
    'width' => '10%',
    'default' => true,
    'name' => 'eve_fechanuevo',
  ),
  'SCO_EMBARQUE_SCO_EVENTOS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_EMBARQUE_SCO_EVENTOS_FROM_SCO_EMBARQUE_TITLE',
    'id' => 'SCO_EMBARQUE_SCO_EVENTOSSCO_EMBARQUE_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'sco_embarque_sco_eventos_name',
  ),
),
);

<?php
$popupMeta = array (
    'moduleMain' => 'SCO_Contactos',
    'varName' => 'SCO_Contactos',
    'orderBy' => 'sco_contactos.name',
    'whereClauses' => array (
  'name' => 'sco_contactos.name',
  'con_telefono' => 'sco_contactos.con_telefono',
  'con_rol' => 'sco_contactos.con_rol',
  'con_movil' => 'sco_contactos.con_movil',
  'con_cargo' => 'sco_contactos.con_cargo',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'con_telefono',
  5 => 'con_rol',
  6 => 'con_movil',
  7 => 'con_cargo',
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
  'con_telefono' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CON_TELEFONO',
    'width' => '10%',
    'name' => 'con_telefono',
  ),
  'con_rol' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CON_ROL',
    'width' => '10%',
    'name' => 'con_rol',
  ),
  'con_movil' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CON_MOVIL',
    'width' => '10%',
    'name' => 'con_movil',
  ),
  'con_cargo' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CON_CARGO',
    'width' => '10%',
    'name' => 'con_cargo',
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
  'CON_EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CON_EMAIL',
    'width' => '10%',
    'default' => true,
    'name' => 'con_email',
  ),
  'CON_MOVIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CON_MOVIL',
    'width' => '10%',
    'default' => true,
    'name' => 'con_movil',
  ),
  'CON_TELEFONO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CON_TELEFONO',
    'width' => '10%',
    'default' => true,
    'name' => 'con_telefono',
  ),
  'CON_CARGO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CON_CARGO',
    'width' => '10%',
    'default' => true,
    'name' => 'con_cargo',
  ),
),
);

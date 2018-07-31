<?php
$popupMeta = array (
    'moduleMain' => 'SCO_documentos',
    'varName' => 'SCO_documentos',
    'orderBy' => 'sco_documentos.name',
    'whereClauses' => array (
  'name' => 'sco_documentos.name',
  'doc_tipo' => 'sco_documentos.doc_tipo',
  'doc_descipcion' => 'sco_documentos.doc_descipcion',
  'doc_fecha' => 'sco_documentos.doc_fecha',
  'sco_ordencompra_sco_documentos_name' => 'sco_documentos.sco_ordencompra_sco_documentos_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'doc_tipo',
  5 => 'doc_descipcion',
  6 => 'doc_fecha',
  7 => 'sco_ordencompra_sco_documentos_name',
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
  'doc_tipo' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DOC_TIPO',
    'width' => '10%',
    'name' => 'doc_tipo',
  ),
  'doc_descipcion' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DOC_DESCIPCION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'doc_descipcion',
  ),
  'doc_fecha' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DOC_FECHA',
    'width' => '10%',
    'name' => 'doc_fecha',
  ),
  'sco_ordencompra_sco_documentos_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_ORDENCOMPRA_SCO_DOCUMENTOS_FROM_SCO_ORDENCOMPRA_TITLE',
    'id' => 'SCO_ORDENCOMPRA_SCO_DOCUMENTOSSCO_ORDENCOMPRA_IDA',
    'width' => '10%',
    'name' => 'sco_ordencompra_sco_documentos_name',
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
  ),
  'DOC_TIPO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DOC_TIPO',
    'width' => '10%',
  ),
  'DOC_FECHA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DOC_FECHA',
    'width' => '10%',
    'default' => true,
  ),
  'DOC_DESCIPCION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DOC_DESCIPCION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'SCO_ORDENCOMPRA_SCO_DOCUMENTOS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SCO_ORDENCOMPRA_SCO_DOCUMENTOS_FROM_SCO_ORDENCOMPRA_TITLE',
    'id' => 'SCO_ORDENCOMPRA_SCO_DOCUMENTOSSCO_ORDENCOMPRA_IDA',
    'width' => '10%',
    'default' => true,
  ),
),
);

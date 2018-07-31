<?php
$module_name = 'SCO_DocumentoDespacho';
$_object_name = 'sco_documentodespacho';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
          0 => 'document_name',
          1 => 'uploadfile',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sco_embarque_sco_documentodespacho_name',
          ),
          1 => 'description',
        ),
      ),
    ),
  ),
);
?>

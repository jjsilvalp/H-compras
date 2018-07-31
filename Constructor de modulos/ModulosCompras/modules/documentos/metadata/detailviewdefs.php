<?php
$module_name = 'SCO_documentos';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
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
          0 => 
          array (
            'name' => 'doc_tipo',
            'studio' => 'visible',
            'label' => 'LBL_DOC_TIPO',
          ),
          1 => 
          array (
            'name' => 'filename',
            'comment' => 'File name associated with the note (attachment)',
            'label' => 'LBL_FILENAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'doc_descipcion',
            'studio' => 'visible',
            'label' => 'LBL_DOC_DESCIPCION',
          ),
          1 => 
          array (
            'name' => 'sco_ordencompra_sco_documentos_name',
          ),
        ),
      ),
    ),
  ),
);
?>

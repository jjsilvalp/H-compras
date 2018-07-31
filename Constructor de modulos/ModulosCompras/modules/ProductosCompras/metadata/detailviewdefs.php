<?php
$module_name = 'SCO_ProductosCompras';
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
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
          0 => 'name',
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'proge_nompro',
            'label' => 'LBL_PROGE_NOMPRO',
          ),
          1 => 
          array (
            'name' => 'proge_codaio',
            'label' => 'LBL_PROGE_CODAIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'proge_descripcion',
            'studio' => 'visible',
            'label' => 'LBL_PROGE_DESCRIPCION',
          ),
          1 => 
          array (
            'name' => 'proge_tipopro',
            'label' => 'LBL_PROGE_TIPOPRO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'proge_unidad',
            'label' => 'LBL_PROGE_UNIDAD',
          ),
          1 => 
          array (
            'name' => 'proge_preciounid',
            'label' => 'LBL_PROGE_PRECIOUNID',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'proge_categoria',
            'label' => 'LBL_PROGE_CATEGORIA',
          ),
          1 => 
          array (
            'name' => 'sco_proveedor_sco_productoscompras_name',
            'label' => 'LBL_SCO_PROVEEDOR_SCO_PRODUCTOSCOMPRAS_FROM_SCO_PROVEEDOR_TITLE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'proge_fotografia',
            'studio' => 'visible',
            'label' => 'LBL_PROGE_FOTOGRAFIA',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>

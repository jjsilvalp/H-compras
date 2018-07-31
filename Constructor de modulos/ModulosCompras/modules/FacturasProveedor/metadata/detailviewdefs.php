<?php
$module_name = 'SCO_FacturasProveedor';
$_object_name = 'sco_facturasproveedor';
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
            'name' => 'fpv_fechafactura',
            'label' => 'LBL_FPV_FECHAFACTURA',
          ),
          1 => 
          array (
            'name' => 'fpv_importe',
            'label' => 'LBL_FPV_IMPORTE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fpv_fechavenc',
            'label' => 'LBL_FPV_FECHAVENC',
          ),
          1 => 
          array (
            'name' => 'fpv_tipo',
            'studio' => 'visible',
            'label' => 'LBL_FPV_TIPO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fpv_moneda',
            'studio' => 'visible',
            'label' => 'LBL_FPV_MONEDA',
          ),
          1 => 
          array (
            'name' => 'fpv_descripcion',
            'label' => 'LBL_FPV_DESCRIPCION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fpv_estado',
            'studio' => 'visible',
            'label' => 'LBL_FPV_ESTADO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sco_embarque_sco_facturasproveedor_name',
          ),
        ),
      ),
    ),
  ),
);
?>

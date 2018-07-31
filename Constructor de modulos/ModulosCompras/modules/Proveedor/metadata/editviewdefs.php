<?php
$module_name = 'SCO_Proveedor';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
        'FOTOGRAFIA / LOGO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'DATOS DEL BANCO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'DATOS DE PAGO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prv_tipo',
            'studio' => 'visible',
            'label' => 'LBL_PRV_TIPO',
          ),
          1 => 
          array (
            'name' => 'prv_codaio',
            'label' => 'LBL_PRV_CODAIO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'prv_sitioweb',
            'label' => 'LBL_PRV_SITIOWEB',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'prv_monr',
            'label' => 'LBL_PRV_MONR',
          ),
          1 => 
          array (
            'name' => 'prv_tel',
            'label' => 'LBL_PRV_TEL',
          ),
        ),
        3 => 
        array (
          1 => 
          array (
            'name' => 'prv_movil',
            'label' => 'LBL_PRV_MOVIL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'prv_direc',
            'label' => 'LBL_PRV_DIREC',
          ),
          1 => 
          array (
            'name' => 'prv_fax',
            'label' => 'LBL_PRV_FAX',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'prv_ciudad',
            'label' => 'LBL_PRV_CIUDAD',
          ),
          1 => 
          array (
            'name' => 'prv_email',
            'label' => 'LBL_PRV_EMAIL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'prv_codpos',
            'label' => 'LBL_PRV_CODPOS',
          ),
          1 => 
          array (
            'name' => 'prv_idioma',
            'studio' => 'visible',
            'label' => 'LBL_PRV_IDIOMA',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'prv_estado',
            'studio' => 'visible',
            'label' => 'LBL_PRV_ESTADO',
          ),
          1 => 
          array (
            'name' => 'prv_division',
            'studio' => 'visible',
            'label' => 'LBL_PRV_DIVISION',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'prv_pais',
            'label' => 'LBL_PRV_PAIS',
          ),
          1 => 
          array (
            'name' => 'prv_tipooro',
            'studio' => 'visible',
            'label' => 'LBL_PRV_TIPOORO',
          ),
        ),
      ),
      'Fotografia / Logo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prv_fot_foto',
            'studio' => 'visible',
            'label' => 'LBL_PRV_FOT_FOTO',
          ),
        ),
      ),
      'Datos del Banco' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prv_tipobanco',
            'studio' => 'visible',
            'label' => 'LBL_PRV_TIPOBANCO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prv_dbpnban',
            'label' => 'LBL_PRV_DBPNBAN',
          ),
          1 => 
          array (
            'name' => 'prv_dbpncuenta',
            'label' => 'LBL_PRV_DBPNCUENTA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'prv_dbpenombreb',
            'label' => 'LBL_PRV_DBPENOMBREB',
          ),
          1 => 
          array (
            'name' => 'prv_dbpenombrei',
            'label' => 'LBL_PRV_DBPENOMBREI',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'prv_dbdirb',
            'label' => 'LBL_PRV_DBDIRB',
          ),
          1 => 
          array (
            'name' => 'prv_dbdiri',
            'label' => 'LBL_PRV_DBDIRI',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'prv_dbswib',
            'label' => 'LBL_PRV_DBSWIB',
          ),
          1 => 
          array (
            'name' => 'prv_dbswii',
            'label' => 'LBL_PRV_DBSWII',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'prv_dbabab',
            'label' => 'LBL_PRV_DBABAB',
          ),
          1 => 
          array (
            'name' => 'prv_dbabai',
            'label' => 'LBL_PRV_DBABAI',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'prv_dbibanb',
            'label' => 'LBL_PRV_DBIBANB',
          ),
          1 => 
          array (
            'name' => 'prv_dbibani',
            'label' => 'LBL_PRV_DBIBANI',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'prv_dbctab',
            'label' => 'LBL_PRV_DBCTAB',
          ),
          1 => 
          array (
            'name' => 'prv_dbctai',
            'label' => 'LBL_PRV_DBCTAI',
          ),
        ),
      ),
      'Datos de Pago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prv_dpconpag',
            'studio' => 'visible',
            'label' => 'LBL_PRV_DPCONPAG',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prv_dprubro',
            'studio' => 'visible',
            'label' => 'LBL_PRV_DPRUBRO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'prv_dpclasepro',
            'studio' => 'visible',
            'label' => 'LBL_PRV_DPCLASEPRO ',
          ),
        ),
      ),
    ),
  ),
);
?>

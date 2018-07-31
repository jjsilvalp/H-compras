<?php
$module_name = 'SCO_OrdenCompra';
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
        'PROVEEDOR' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'DATOS DE ENVIO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'TERMINOS DE COMPRA' => 
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
            'name' => 'orc_verco',
            'label' => 'LBL_ORC_VERCO',
          ),
          1 => 
          array (
            'name' => 'orc_occ',
            'studio' => 'visible',
            'label' => 'LBL_ORC_OCC',
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
            'name' => 'orc_tipo',
            'studio' => 'visible',
            'label' => 'LBL_ORC_TIPO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'orc_fechaord',
            'label' => 'LBL_ORC_FECHAORD',
          ),
          1 => 
          array (
            'name' => 'orc_tipoo',
            'studio' => 'visible',
            'label' => 'LBL_ORC_TIPOO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'orc_observaciones',
            'studio' => 'visible',
            'label' => 'LBL_ORC_OBSERVACIONES',
          ),
          1 => 
          array (
            'name' => 'orc_solicitado',
            'studio' => 'visible',
            'label' => 'LBL_ORC_SOLICITADO',
          ),
        ),
      ),
      'Proveedor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sco_proveedor_sco_ordencompra_name',
          ),
          1 => 
          array (
            'name' => 'sco_ordencompra_contacts_name',
            'label' => 'LBL_SCO_ORDENCOMPRA_CONTACTS_FROM_CONTACTS_TITLE',
          ),
        ),
      ),
      'Datos de Envio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'orc_decop',
            'label' => 'LBL_ORC_DECOP',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'orc_denomemp',
            'label' => 'LBL_ORC_DENOMEMP',
          ),
          1 => 
          array (
            'name' => 'orc_detelefono',
            'label' => 'LBL_ORC_DETELEFONO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'orc_defax',
            'label' => 'LBL_ORC_DEFAX',
          ),
          1 => 
          array (
            'name' => 'orc_dedireccion',
            'label' => 'LBL_ORC_DEDIRECCION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'orc_depobox',
            'label' => 'LBL_ORC_DEPOBOX',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'orc_depais',
            'label' => 'LBL_ORC_DEPAIS',
          ),
          1 => '',
        ),
      ),
      'Terminos de Compra' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'orc_tcinco',
            'studio' => 'visible',
            'label' => 'LBL_ORC_TCINCO',
          ),
          1 => 
          array (
            'name' => 'orc_tcmoneda',
            'studio' => 'visible',
            'label' => 'LBL_ORC_TCMONEDA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'orc_tclugent',
            'label' => 'LBL_ORC_TCLUGENT',
          ),
          1 => 
          array (
            'name' => 'orc_tcmulta',
            'label' => 'LBL_ORC_TCMULTA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'orc_tiempo',
            'label' => 'LBL_ORC_TIEMPO',
          ),
          1 => 
          array (
            'name' => 'orc_tccertor',
            'label' => 'LBL_ORC_TCCERTOR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'orc_tcforpag',
            'label' => 'LBL_ORC_TCFORPAG',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'orc_tcgarantia',
            'label' => 'LBL_ORC_TCGARANTIA',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>

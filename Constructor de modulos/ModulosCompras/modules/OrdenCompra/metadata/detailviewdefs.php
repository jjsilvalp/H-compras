<?php
$module_name = 'SCO_OrdenCompra';
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
        'PROVEEDOR' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'DATOS PARA FACTURACIóN' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'DATOS PARA ENVIO DE FACTURACIóN' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'TERMINOS DE COMPRA' => 
        array (
          'newTab' => true,
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
          0 => 'name',
          1 => 
          array (
            'name' => 'orc_tipoo',
            'studio' => 'visible',
            'label' => 'LBL_ORC_TIPOO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'orc_fechaord',
            'label' => 'LBL_ORC_FECHAORD',
          ),
          1 => 
          array (
            'name' => 'orc_responsable',
            'studio' => 'visible',
            'label' => 'LBL_ORC_RESPONSABLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'orc_fechaent',
            'label' => 'LBL_ORC_FECHAENT',
          ),
          1 => 
          array (
            'name' => 'orc_solicitado',
            'studio' => 'visible',
            'label' => 'LBL_ORC_SOLICITADO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'orc_tipo',
            'studio' => 'visible',
            'label' => 'LBL_ORC_TIPO',
          ),
          1 => 
          array (
            'name' => 'orc_division',
            'studio' => 'visible',
            'label' => 'LBL_ORC_DIVISION',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'orc_regional',
            'studio' => 'visible',
            'label' => 'LBL_ ORC_REGIONAL',
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
            'name' => 'orc_procodaio',
            'label' => 'LBL_ORC_PROCODAIO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'orc_nomcorto',
            'label' => 'LBL_ORC_NOMCORTO',
          ),
          1 => 
          array (
            'name' => 'orc_protelefono',
            'label' => 'LBL_ORC_PROTELEFONO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'orc_promovil',
            'label' => 'LBL_ORC_PROMOVIL',
          ),
          1 => 
          array (
            'name' => 'sco_ordencompra_contacts_name',
            'label' => 'LBL_SCO_ORDENCOMPRA_CONTACTS_FROM_CONTACTS_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'orc_proemail',
            'label' => 'LBL_ORC_PROEMAIL',
          ),
          1 => 
          array (
            'name' => 'orc_prodireccion',
            'label' => 'LBL_ORC_PRODIRECCION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'orc_procargo',
            'label' => 'LBL_ORC_PROCARGO',
          ),
          1 => 
          array (
            'name' => 'orc_pronomemp',
            'label' => 'LBL_ORC_PRONOMEMP',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'orc_calidad',
            'label' => 'LBL_ORC_CALIDAD',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'orc_precio',
            'label' => 'LBL_ORC_PRECIO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'orc_tiempo',
            'label' => 'LBL_ORC_TIEMPO',
          ),
        ),
      ),
      'Datos para Facturación' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'orc_dfnomemp',
            'label' => 'LBL_ORC_DFNOMEMP',
          ),
          1 => 
          array (
            'name' => 'orc_dftelefono',
            'label' => 'LBL_ORC_DFTELEFONO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'orc_dffax',
            'label' => 'LBL_ORC_DFFAX	',
          ),
          1 => 
          array (
            'name' => 'orc_dfdireccion',
            'label' => 'LBL_ORC_DFDIRECCION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'orc_dfnit',
            'label' => 'LBL_ORC_DFNIT',
          ),
          1 => 
          array (
            'name' => 'orc_dfpobox',
            'label' => 'LBL_ORC_DFPOBOX',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'orc_dfpais',
            'label' => 'LBL_ORC_DFPAIS',
          ),
        ),
      ),
      'Datos para envio de Facturación' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'orc_decop',
            'label' => 'LBL_ORC_DECOP',
          ),
          1 => 
          array (
            'name' => 'orc_detelefono',
            'label' => 'LBL_ORC_DETELEFONO',
          ),
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
            'name' => 'orc_dedireccion',
            'label' => 'LBL_ORC_DEDIRECCION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'orc_defax',
            'label' => 'LBL_ORC_DEFAX',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'orc_depobox',
            'label' => 'LBL_ORC_DEPOBOX',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'orc_depais',
            'label' => 'LBL_ORC_DEPAIS',
          ),
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
            'name' => 'orc_tcforpag',
            'label' => 'LBL_ORC_TCFORPAG',
          ),
          1 => 
          array (
            'name' => 'orc_tcgarantia',
            'label' => 'LBL_ORC_TCGARANTIA',
          ),
        ),
      ),
    ),
  ),
);
?>

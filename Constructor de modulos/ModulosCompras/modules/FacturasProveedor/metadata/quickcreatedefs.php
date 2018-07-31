<?php
$module_name = 'SCO_FacturasProveedor';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
          1 => 
          array (
            'name' => 'uploadfile',
            'customCode' => '{if $fields.id.value!=""}
            				{assign var="type" value="hidden"}
            		 		{else}
            		 		{assign var="type" value="file"}
            		  		{/if}
            		  		<input name="uploadfile" type = {$type} size="30" maxlength="" onchange="setvalue(this);" value="{$fields.filename.value}">{$fields.filename.value}',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
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
      ),
    ),
  ),
);
?>

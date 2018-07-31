<?php
$module_name = 'SCO_Proveedor';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'prv_monr' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRV_MONR',
        'width' => '10%',
        'default' => true,
        'name' => 'prv_monr',
      ),
      'prv_codaio' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRV_CODAIO',
        'width' => '10%',
        'default' => true,
        'name' => 'prv_codaio',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'prv_monr' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRV_MONR',
        'width' => '10%',
        'default' => true,
        'name' => 'prv_monr',
      ),
      'prv_codaio' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRV_CODAIO',
        'width' => '10%',
        'default' => true,
        'name' => 'prv_codaio',
      ),
      'prv_dbdiri' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRV_DBDIRI',
        'width' => '10%',
        'default' => true,
        'name' => 'prv_dbdiri',
      ),
      'prv_pais' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRV_PAIS',
        'width' => '10%',
        'default' => true,
        'name' => 'prv_pais',
      ),
      'prv_direc' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRV_DIREC',
        'width' => '10%',
        'default' => true,
        'name' => 'prv_direc',
      ),
      'prv_calificacion' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PRV_CALIFICACION',
        'width' => '10%',
        'default' => true,
        'name' => 'prv_calificacion',
      ),
      'prv_tipo' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PRV_TIPO',
        'width' => '10%',
        'name' => 'prv_tipo',
      ),
      'prv_dpconpag' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'default' => true,
        'label' => 'LBL_PRV_DPCONPAG',
        'width' => '10%',
        'name' => 'prv_dpconpag',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>

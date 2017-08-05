<?php
/*************************************
Project: Logic Hooks Manifest
Original Dev: Juan Jose Silva, 07 2017

Desc: Manifest file for installing logic hook

The contents of this file are governed by the GNU General Public License (GPL).
A copy of said license is available here: http://www.gnu.org/copyleft/gpl.html
This code is provided AS IS and WITHOUT WARRANTY OF ANY KIND.
necesita actualizacion...
*************************************/

global $sugar_config;

$upload_dir = $sugar_config['upload_dir'];
$manifest = array(
 'acceptable_sugar_versions' => array(
  'regex_matches' => array(
   0 => '6\.*'
  ),
 ),
 'acceptable_sugar_flavors' => array(
  0 => 'CE',
  1 => 'PRO',
  2 => 'ENT',
 ), 
 'name'    => 'Logic Hook Compras',
 'description'  => 'Logic Hook Compras installation package.',
 'is_uninstallable' => true,
 'author'   => 'jsilva',
 'published_date' => 'July 25, 2017',
 'version'   => '1.0.0',
 'type'    => 'module',
 );
 
$installdefs = array(
 'id'  => 'APR_LogicHook',
 'mkdir' => array(
     array('path' => 'custom/modules/SCO_Aprobadores'),
     array('path' => 'custom/modules/SCO_Contactos'),
     array('path' => 'custom/modules/SCO_documentos'),
     array('path' => 'custom/modules/SCO_OrdenCompra'),
     array('path' => 'custom/modules/SCO_PlandePagos'),
     array('path' => 'custom/modules/SCO_Productos'),
     array('path' => 'custom/modules/SCO_Proveedor'),
    ), 
 'copy' => array(
     array(
      'from' => '<basepath>/custom/modules/SCO_Aprobadores/datosAprobadores.php',
      'to'   => 'custom/modules/SCO_Aprobadores/datosAprobadores.php',
     ),
     array(
      'from' => '<basepath>/custom/modules/SCO_Contactos/datosContactos.php',
      'to'   => 'custom/modules/SCO_Contactos/datosContactos.php',
     ),
     array(
      'from' => '<basepath>/custom/modules/SCO_documentos/Documentos.php',
      'to'   => 'custom/modules/SCO_documentos/Documentos.php',
     ),
     array(
      'from' => '<basepath>/custom/modules/SCO_OrdenCompra/datosOrdenCompra.php',
      'to'   => 'custom/modules/SCO_OrdenCompra/datosOrdenCompra.php',
     ),
     array(
      'from' => '<basepath>/custom/modules/SCO_OrdenCompra/jquery.jexcel.css',
      'to'   => 'custom/modules/SCO_OrdenCompra/jquery.jexcel.css',
     ),
     array(
      'from' => '<basepath>/custom/modules/SCO_OrdenCompra/jquery.jexcel.js',
      'to'   => 'custom/modules/SCO_OrdenCompra/jquery.jexcel.js',
     ),
     array(
      'from' => '<basepath>/custom/modules/SCO_PlandePagos/datosPlanPagos.php',
      'to'   => 'custom/modules/SCO_PlandePagos/datosPlanPagos.php',
     ),
     array(
      'from' => '<basepath>/custom/modules/SCO_Productos/Productos.php',
      'to'   => 'custom/modules/SCO_Productos/Productos.php',
     ),
     array(
      'from' => '<basepath>/custom/modules/SCO_Proveedor/ProveedorView.php',
      'to'   => 'custom/modules/SCO_Proveedor/ProveedorView.php',
     ),
    ),
 'logic_hooks' => array(
      array(
       'module'  => 'SCO_Aprobadores',
       'hook'    => 'after_save',
       'order'   => 1,
       'description' => 'datosAprobadores',
       'file'   => 'custom/modules/SCO_Aprobadores/datosAprobadores.php',
       'class'   => 'CldatosA',
       'function'  => 'Fndatosa',
      ),
      array(
       'module'  => 'SCO_Contactos',
       'hook'    => 'after_save',
       'order'   => 1,
       'description' => 'datosContactos',
       'file'   => 'custom/modules/SCO_Contactos/datosContactos.php',
       'class'   => 'CldatosC',
       'function'  => 'Fndatosc',
      ),
      array(
       'module'  => 'SCO_documentos',
       'hook'    => 'before_save',
       'order'   => 1,
       'description' => 'documentooc',
       'file'   => 'custom/modules/SCO_documentos/Documentos.php',
       'class'   => 'Documentos',
       'function'  => 'Fndocs',
      ),
      array(
       'module'  => 'SCO_documentos',
       'hook'    => 'before_save',
       'order'   => 77,
       'description' => 'creafolokm',
       'file'   => 'custom/modules/SCO_documentos/Documentos.php',
       'class'   => 'Documentos',
       'function'  => 'Fncreafol',
      ),
      array(
       'module'  => 'SCO_documentos',
       'hook'    => 'before_save',
       'order'   => 77,
       'description' => 'cargaarchokm',
       'file'   => 'custom/modules/SCO_documentos/Documentos.php',
       'class'   => 'Documentos',
       'function'  => 'Fnscargaarch',
      ),
      array(
       'module'  => 'SCO_OrdenCompra',
       'hook'    => 'before_save',
       'order'   => 1,
       'description' => 'datosOrdenCompra',
       'file'   => 'custom/modules/SCO_OrdenCompra/datosOrdenCompra.php',
       'class'   => 'CldatosO',
       'function'  => 'Fndatoso',
      ),
      array(
       'module'  => 'SCO_OrdenCompra',
       'hook'    => 'before_save',
       'order'   => 1,
       'description' => 'contactos',
       'file'   => 'custom/modules/SCO_OrdenCompra/datosOrdenCompra.php',
       'class'   => 'CldatosO',
       'function'  => 'Fndatosco',
      ),
      array(
       'module'  => 'SCO_OrdenCompra',
       'hook'    => 'before_save',
       'order'   => 1,
       'description' => 'aprobadores',
       'file'   => 'custom/modules/SCO_OrdenCompra/datosOrdenCompra.php',
       'class'   => 'CldatosO',
       'function'  => 'Fndatosap',
      ),
      array(
       'module'  => 'SCO_OrdenCompra',
       'hook'    => 'after_ui_frame',
       'order'   => 1,
       'description' => 'vistas de orden de compra con js',
       'file'   => 'custom/modules/SCO_OrdenCompra/datosOrdenCompra.php',
       'class'   => 'CldatosO',
       'function'  => 'fnview',
      ),
      array(
       'module'  => 'SCO_PlandePagos',
       'hook'    => 'after_save',
       'order'   => 1,
       'description' => 'datosPP',
       'file'   => 'custom/modules/SCO_PlandePagos/datosPlanPagos.php',
       'class'   => 'CldatosPP',
       'function'  => 'Fndatospp',
      ),
      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'before_save',
       'order'   => 1,
       'description' => 'Productos',
       'file'   => 'custom/modules/SCO_Productos/Productos.php',
       'class'   => 'Productos',
       'function'  => 'Fnproductos',
      ),
      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'before_save',
       'order'   => 2,
       'description' => 'Productos a',
       'file'   => 'custom/modules/SCO_Productos/Productos.php',
       'class'   => 'Productos',
       'function'  => 'FnDeproductos',
      ),
      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'before_save',
       'order'   => 3,
       'description' => 'nombreoc',
       'file'   => 'custom/modules/SCO_Productos/Productos.php',
       'class'   => 'Productos',
       'function'  => 'FnNomOC',
      ),
      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'after_relationship_delete',
       'order'   => 1,
       'description' => 'DeProductos',
       'file'   => 'custom/modules/SCO_Productos/Productos.php',
       'class'   => 'Productos',
       'function'  => 'FnDeproductos',
      ),
      array(
       'module'  => 'SCO_Proveedor',
       'hook'    => 'after_ui_frame',
       'order'   => 1,
       'description' => 'vistas de proveedor con js',
       'file'   => 'custom/modules/SCO_Proveedor/ProveedorView.php',
       'class'   => 'ProveedorView',
       'function'  => 'fnview',
      ),
    ),    
 );
   
?>
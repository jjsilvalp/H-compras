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
     array('path' => 'custom/modules/SCO_Distribuidor'),
     array('path' => 'custom/modules/SCO_documentos'),
     array('path' => 'custom/modules/SCO_OrdenCompra'),
     array('path' => 'custom/modules/SCO_PlandePagos'),
     array('path' => 'custom/modules/SCO_Productos'),
     array('path' => 'custom/modules/SCO_Proveedor'),
    ), 
 'copy' => array(
      array(
        'from' => '<basepath>/custom/modules/SCO_Aprobadores/correlativo.php',
        'to'   => 'custom/modules/SCO_Aprobadores/correlativo.php',
      ),
      array(
        'from' => '<basepath>/custom/modules/SCO_Aprobadores/datosAprobadores.php',
        'to'   => 'custom/modules/SCO_Aprobadores/datosAprobadores.php',
      ),

      array(
        'from' => '<basepath>/custom/modules/SCO_Contactos/datosContactos.php',
        'to'   => 'custom/modules/SCO_Contactos/datosContactos.php',
      ),

      array(
        'from' => '<basepath>/custom/modules/SCO_Distribuidor/nomdist.php',
        'to'   => 'custom/modules/SCO_Distribuidor/nomdist.php',
      ),

      array(
        'from' => '<basepath>/custom/modules/SCO_documentos/creafol.php',
        'to'   => 'custom/modules/SCO_documentos/creafol.php',
      ),
      array(
        'from' => '<basepath>/custom/modules/SCO_documentos/Documentos.php',
        'to'   => 'custom/modules/SCO_documentos/Documentos.php',
      ),

      array(
        'from' => '<basepath>/custom/modules/SCO_OrdenCompra/contap.php',
        'to'   => 'custom/modules/SCO_OrdenCompra/contap.php',
      ),
      array(
        'from' => '<basepath>/custom/modules/SCO_OrdenCompra/controller.php',
        'to'   => 'custom/modules/SCO_OrdenCompra/controller.php',
      ),
      array(
        'from' => '<basepath>/custom/modules/SCO_OrdenCompra/datosap.php',
        'to'   => 'custom/modules/SCO_OrdenCompra/datosap.php',
      ),
      array(
        'from' => '<basepath>/custom/modules/SCO_OrdenCompra/datosco.php',
        'to'   => 'custom/modules/SCO_OrdenCompra/datosco.php',
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
        'from' => '<basepath>/custom/modules/SCO_OrdenCompra/viewoc.php',
        'to'   => 'custom/modules/SCO_OrdenCompra/viewoc.php',
      ),
     
      array(
        'from' => '<basepath>/custom/modules/SCO_PlandePagos/datosPlanPagos.php',
        'to'   => 'custom/modules/SCO_PlandePagos/datosPlanPagos.php',
      ),

      array(
        'from' => '<basepath>/custom/modules/SCO_Productos/ActualizaPP.php',
        'to'   => 'custom/modules/SCO_Productos/ActualizaPP.php',
      ),
      array(
        'from' => '<basepath>/custom/modules/SCO_Productos/Deletepro.php',
        'to'   => 'custom/modules/SCO_Productos/Deletepro.php',
      ),
      array(
        'from' => '<basepath>/custom/modules/SCO_Productos/NomOC.php',
        'to'   => 'custom/modules/SCO_Productos/NomOC.php',
      ),
      array(
        'from' => '<basepath>/custom/modules/SCO_Productos/Productos.php',
        'to'   => 'custom/modules/SCO_Productos/Productos.php',
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
       'module'  => 'SCO_Aprobadores',
       'hook'    => 'after_save',
       'order'   => 2,
       'description' => 'correlativoAprobadores',
       'file'   => 'custom/modules/SCO_Aprobadores/correlativo.php',
       'class'   => 'Clcorrelativo',
       'function'  => 'Fncorrelativo',
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
       'module'  => 'SCO_Distribuidor',
       'hook'    => 'before_save',
       'order'   => 1,
       'description' => 'Distribuidor',
       'file'   => 'custom/modules/SCO_Distribuidor/nomdist.php',
       'class'   => 'Clnomdist',
       'function'  => 'Fnnomdist',
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
       'module'  => 'SCO_OrdenCompra',
       'hook'    => 'after_save',
       'order'   => 1,
       'description' => 'datosOrdenCompra',
       'file'   => 'custom/modules/SCO_OrdenCompra/datoso.php',
       'class'   => 'Cldatoso',
       'function'  => 'Fndatoso',
      ),
      array(
       'module'  => 'SCO_OrdenCompra',
       'hook'    => 'after_save',
       'order'   => 2,
       'description' => 'datosContactos',
       'file'   => 'custom/modules/SCO_OrdenCompra/datosco.php',
       'class'   => 'Cldatosco',
       'function'  => 'Fndatosco',
      ),
      array(
       'module'  => 'SCO_OrdenCompra',
       'hook'    => 'after_save',
       'order'   => 3,
       'description' => 'datosAprobadores',
       'file'   => 'custom/modules/SCO_OrdenCompra/datosap.php',
       'class'   => 'Cldatosap',
       'function'  => 'Fndatosap',
      ),
      array(
       'module'  => 'SCO_OrdenCompra',
       'hook'    => 'after_save',
       'order'   => 4,
       'description' => 'contactosAprobadores',
       'file'   => 'custom/modules/SCO_OrdenCompra/contap.php',
       'class'   => 'Clcontap',
       'function'  => 'Fncontap',
      ),
      array(
       'module'  => 'SCO_OrdenCompra',
       'hook'    => 'after_ui_frame',
       'order'   => 1,
       'description' => 'vistas de orden de compra con js',
       'file'   => 'custom/modules/SCO_OrdenCompra/viewoc.php',
       'class'   => 'Clviewoc',
       'function'  => 'Fnviewoc',
      ),

      array(
       'module'  => 'SCO_PlandePagos',
       'hook'    => 'before_save',
       'order'   => 1,
       'description' => 'datosPP',
       'file'   => 'custom/modules/SCO_PlandePagos/PlanPagos.php',
       'class'   => 'ClPlanPagos',
       'function'  => 'Fndatospp',
      ),

      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'before_save',
       'order'   => 1,
       'description' => 'Productos',
       'file'   => 'custom/modules/SCO_Productos/Productos.php',
       'class'   => 'ClProductos',
       'function'  => 'FnProductos',
      ),
      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'before_save',
       'order'   => 2,
       'description' => 'Productos a',
       'file'   => 'custom/modules/SCO_Productos/Deproductos.php',
       'class'   => 'ClDeproductos',
       'function'  => 'FnDeproductos',
      ),
      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'before_save',
       'order'   => 3,
       'description' => 'nombreoc',
       'file'   => 'custom/modules/SCO_Productos/NomOC.php',
       'class'   => 'ClNomOC',
       'function'  => 'FnNomOC',
      ),
      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'before_save',
       'order'   => 4,
       'description' => 'actualizapp',
       'file'   => 'custom/modules/SCO_Productos/ActualizaPP.php',
       'class'   => 'ClActualizaPP',
       'function'  => 'FnActualizaPP',
      ),
      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'after_relationship_delete',
       'order'   => 2,
       'description' => 'Deactualizapp',
       'file'   => 'custom/modules/SCO_Productos/ActualizaPP.php',
       'class'   => 'ClActualizaPP',
       'function'  => 'FnActualizaPP',
      ),
      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'after_relationship_delete',
       'order'   => 3,
       'description' => 'Deactualizapp nom oc',
       'file'   => 'custom/modules/SCO_Productos/NomOC.php',
       'class'   => 'ClNomOC',
       'function'  => 'FnNomOC',
      ),
      array(
       'module'  => 'SCO_Productos',
       'hook'    => 'after_relationship_delete',
       'order'   => 4,
       'description' => 'Deletepro',
       'file'   => 'custom/modules/SCO_Productos/Deletepro.php',
       'class'   => 'ClDeletepro',
       'function'  => 'FnDeletepro',
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
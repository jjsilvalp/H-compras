<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
	die ( 'Not A Valid Entry Point' );

require_once ('include/MVC/View/views/view.edit.php');

class SCO_ProductosViewEdit extends ViewEdit {

	function SCO_ProductosViewEdit() {
		parent::ViewEdit ();
		$this->useForSubpanel = true;
	}

 	function display(){
    echo "<script>$('#list_subpanel_sco_ordencompra_sco_productos').append('sdasdasd')</script>";
 		echo '
 		<style>
    #Default_SCO_Productos_Subpanel{
      background: #ggg;
      margin: 5px;
    }
    .btn-verde{ background:#449d44;}
    #Default_SCO_Productos_Subpanel table{
      background: #ggg;
      padding: 10px;
    }
    #Default_SCO_Productos_Subpanel tr{
        display: inline;
    } 
    #Default_SCO_Productos_Subpanel tr td{
       display: inline;
    }
    #Default_SCO_Productos_Subpanel input{
       display: inline;
       size:5;
    }
    #Default_SCO_Productos_Subpanel #pro_fechaprev{
       width: 80px;
    }
    #Default_SCO_Productos_Subpanel #pro_cantidad{
       width: 50px;
    }
    #Default_SCO_Productos_Subpanel #pro_cantidadr{
       width: 50px;
    }
    #Default_SCO_Productos_Subpanel #pro_cantidadt{
       width: 50px;
    }
    #Default_SCO_Productos_Subpanel #pro_preciound{
       width: 50px;
    }
    #Default_SCO_Productos_Subpanel #pro_descuento_c{
       width: 50px;
    }
    #form_SubpanelQuickCreate_SCO_Productos{
      background: #eee;
      border: 1px solid #ccc;;
    }
    tr input{
      width: 70px;
    }     
     #sco_productos_sco_productoscompras_name{
       display:inline-block;
     }
     #btn_sco_productos_sco_productoscompras_name{
       display:inline-block;
     }
     #btn_clr_sco_productos_sco_productoscompras_name{
       display:inline-block;
     }  
     .boton {
          background-color: #3C8DBC;
          border: none;
          color: #fff;
          cursor: pointer;
          font-size: 1.1em !important;
          padding: 5px 8px 5px 8px;
          margin-bottom: 2px;
      }
      .proserv{
          margin-right: 5px;
          margin-left: 5px;
          float:left;
      }
      </style>
 		';
		echo '<script>
			$("#pro_tipodesc_label").hide();
 			$("#SCO_Productos_subpanel_cancel_button").hide();
 			$("#SCO_Productos_subpanel_save_button").hide();
 			$(".dcQuickEdit #SCO_Productos_subpanel_full_form_button").hide();
 			function convRes() {
 				//var url = "index.php?module=' . $this->module . '&action=action_mod";
 				var url = "index.php?module=SCO_ProductosCompras&action=EditView";
                window.open(url, "", "width=990,height=650");
                //location.reload();
            }
 			
	 		</script>';
	 		echo "<input type=\"submit\" class=\"button\" onClick=\"convRes();\" value=\"Crear Nuevo Producto\">";
	 		parent::display();
 	}
}

?>
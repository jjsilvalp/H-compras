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
    echo "<script src='modules/SCO_Productos/views/jquery.validate.min.js'></script>";
    echo '
    <script>
      $.validator.addMethod("alfanumOespacio", function(value, element) {
        return /^[ a-z0-9áéíóúüñ]*$/i.test(value);
      });
      $.validator.addMethod("num", function(value, element) {
          return /^[ 0-9 .]*$/i.test(value);
      });
      $("#form_SubpanelQuickCreate_SCO_Productos").validate({
        highlight: function(element, errClass) {
          $("input[type=\"text\"]").popover("show");
        },
        unhighlight: function(element, errClass) {
          $("input[type=\"text\"]").popover("hide");
        },
        rules: {
          name: {
              alfanumOespacio: true,
              required: true,
          },
          pro_cantidad: {
            num : true,
            required: true,
          },
          pro_descuento: {
            num : true,
            required: true,
          },
        },
        messages: {
          name: "Ingrese sólo letras, números o espacios",
          pro_cantidad: "Ingrese sólo valores numéricos",
          pro_descuento: "Ingrese sólo valores numéricos",
        },
        tooltip_options: {
        pro_cantidad: {trigger:"focus"},
        pro_descuento: {placement:"right",html:true}
        }
      });
      $("input[type=\"text\"]").keypress(function(){
        if($(this).val() != ""){
          $("input[type=\"submit\"]").removeAttr("disabled");
        }
      }); 
    </script>';
 		echo '
 		<style>
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel{
        background: #eee;
        margin: 5px;
      }
      #form_SubpanelQuickCreate_SCO_Productos .btn-verde{ background:#449d44;}
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel table{
        background: #eee;
        padding: 10px;
      }
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel tr{
          display: inline;
      } 
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel tr td{
         display: inline;
      }
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel input{
        display: inline;
        size:5;
      }
      #form_SubpanelQuickCreate_SCO_Productos  #Default_SCO_Productos_Subpanel #pro_fechaprev{
        width: 80px;
      }
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel #pro_cantidad{
        width: 50px;
      }
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel #pro_cantidadr{
        width: 50px;
      }
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel #pro_cantidadt{
        width: 50px;
      }
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel #pro_preciound{
        width: 50px;
      }
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel #pro_descuento_c{
        width: 50px;
      }
      #form_SubpanelQuickCreate_SCO_Productos{
        background: #eee;
        border: 1px solid #ccc;;
      }
      #form_SubpanelQuickCreate_SCO_Productos tr input{
        width: 70px;
      }     
      #form_SubpanelQuickCreate_SCO_Productos #sco_productos_sco_productoscompras_name{
        display:inline-block;
      }
      #form_SubpanelQuickCreate_SCO_Productos #btn_sco_productos_sco_productoscompras_name{
        display:inline-block;
      }
      #form_SubpanelQuickCreate_SCO_Productos  #btn_clr_sco_productos_sco_productoscompras_name{
        display:inline-block;
      }  
      #form_SubpanelQuickCreate_SCO_Productos .boton {
        background-color: #3C8DBC;
        border: none;
        color: #fff;
        cursor: pointer;
        font-size: 1.1em !important;
        padding: 5px 8px 5px 8px;
        margin-bottom: 2px;
      }
      #form_SubpanelQuickCreate_SCO_Productos .proserv{
        margin-right: 5px;
        margin-left: 5px;
        float:left;
      }
    }
      </style>
 		';		
	 	echo "<input type=\"submit\" class=\"button\" onClick=\"convRes();\" value=\"Crear Nuevo Producto\">";
	 	parent::display();
    echo '
    <script>
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
 	}
}

?>

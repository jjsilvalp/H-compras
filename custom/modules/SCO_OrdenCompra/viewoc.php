<?php 
class Clviewoc
{
  function Fnviewoc()
  {     
    switch ($GLOBALS['app']->controller->action) 
    {
      case "EditView":  
        $js = "
            <script>
            function ocudaenv()
            {
            if($('#orc_decop')[0].checked)
            {
              $('#orc_denomemp_label').hide();
              $('#orc_denomemp').hide();
              $('#orc_defax_label').hide();
              $('#orc_defax').hide();
              $('#orc_depobox_label').hide();
              $('#orc_depobox').hide();
              $('#orc_depais_label').hide();
              $('#orc_depais').hide();
              $('#orc_detelefono_label').hide();
              $('#orc_detelefono').hide();
              $('#orc_dedireccion_label').hide();
              $('#orc_dedireccion').hide();
            } else {
              $('#orc_denomemp_label').fadeIn();
              $('#orc_denomemp').fadeIn();
              $('#orc_defax_label').fadeIn();
              $('#orc_defax').fadeIn();
              $('#orc_depobox_label').fadeIn();
              $('#orc_depobox').fadeIn();
              $('#orc_depais_label').fadeIn();
              $('#orc_depais').fadeIn();
              $('#orc_detelefono_label').fadeIn();
              $('#orc_detelefono').fadeIn();
              $('#orc_dedireccion_label').fadeIn();
              $('#orc_dedireccion').fadeIn();
            }  
            }

            //$('#orc_productos_label').hide();
            //$('#orc_productos').hide();
            $('#orc_denomemp_label').hide();
            $('#orc_denomemp').hide();
            $('#orc_defax_label').hide();
            $('#orc_defax').hide();
            $('#orc_depobox_label').hide();
            $('#orc_depobox').hide();
            $('#orc_depais_label').hide();
            $('#orc_depais').hide();
            $('#orc_detelefono_label').hide();
            $('#orc_detelefono').hide();
            $('#orc_dedireccion_label').hide();
            $('#orc_dedireccion').hide();
            $('#orc_decop').change(ocudaenv);           
            </script>";       
        echo $js;
      break;
    }
  }
}
?>
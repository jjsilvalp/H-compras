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

            $('#orc_occ').prop('disabled', true);
            $('#btn_orc_occ').prop('disabled', true);
            $('#detailpanel_1 input[type=checkbox]').change(function () {
            if($(this).is(':checked')){
              $('#orc_occ').prop('disabled', false);
              $('#btn_orc_occ').prop('disabled', false);
              $('#orc_observaciones').prop('disabled', true);
              $('#orc_fechaord').prop('disabled', true);
              $('#orc_tipo').prop('disabled', true);
              $('#orc_tipoo').prop('disabled', true);
              $('#orc_solicitado').prop('disabled', true);
              $('#btn_orc_solicitado').prop('disabled', true);
              $('#sco_proveedor_sco_ordencompra_name').prop('disabled', true);
              $('#btn_sco_proveedor_sco_ordencompra_name').prop('disabled', true);
              $('#sco_ordencompra_contacts_name').prop('disabled', true);
              $('#btn_sco_ordencompra_contacts_name').prop('disabled', true);
              $('#orc_decop').prop('disabled', true);
              $('#orc_tcinco').prop('disabled', true);
              $('#orc_tclugent').prop('disabled', true);
              $('#orc_tcforpag').prop('disabled', true);
              $('#orc_tcgarantia').prop('disabled', true);
              $('#orc_tcmoneda').prop('disabled', true);
              $('#orc_tcmulta').prop('disabled', true);
              $('#orc_tccertor').prop('disabled', true);
            }else{
              $('#orc_occ').prop('disabled', true);
              $('#btn_orc_occ').prop('disabled', true);
              $('#orc_observaciones').prop('disabled', false);
              $('#orc_fechaord').prop('disabled', false);
              $('#orc_tipo').prop('disabled', false);
              $('#orc_tipoo').prop('disabled', false);
              $('#orc_solicitado').prop('disabled', false);
              $('#btn_orc_solicitado').prop('disabled', false);
              $('#sco_proveedor_sco_ordencompra_name').prop('disabled', false);
              $('#btn_sco_proveedor_sco_ordencompra_name').prop('disabled', false);
              $('#sco_ordencompra_contacts_name').prop('disabled', false);
              $('#btn_sco_ordencompra_contacts_name').prop('disabled', false);
              $('#orc_decop').prop('disabled', false);
              $('#orc_tcinco').prop('disabled', false);
              $('#orc_tclugent').prop('disabled', false);
              $('#orc_tcforpag').prop('disabled', false);
              $('#orc_tcgarantia').prop('disabled', false);
              $('#orc_tcmoneda').prop('disabled', false);
              $('#orc_tcmulta').prop('disabled', false);
              $('#orc_tccertor').prop('disabled', false);
            }
            });
            </script>";
        echo "<style> :disabled{ backgorund:rgb(235, 235, 228); color:#aaa;} input[type='text']:disabled { background: rgb(235, 235, 228); color:#aaa;} select:disabled{ background: rgb(235, 235, 228); color:#aaa;} </style>";       
        echo $js;
        
      break;
    }
  }
}
?>
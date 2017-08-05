<?php

class CldatosO 
  {
    function Fndatoso($bean, $event, $arguments) 
    {
      //precargar datos de facturacion
      #$bean->orc_dfnomemp = "Sociedad Comercial e Industrial Hansa Ltda.";
      #$bean->orc_dfdireccion = "Calle Mercado Nro. 1004";
      #$bean->orc_dfnit = "1020343027";
      #$bean->orc_dftelefono = "(591-2) 214 9000";
      #$bean->orc_dffax = "(591-2) 211 2264";
      #$bean->orc_dfpobox = "Box 10800";
      #$bean->orc_dfpais = "La Paz - Bolivia";

      //Copia datos facturacion en datos envio
      $op_comp = $bean->orc_decop;
      if ($op_comp == '1')
      {
        #Codigo Suprimir de acuerdo al campo estalecido po el backend
        $bean->orc_denomemp = $bean->orc_dfnomemp;
        $bean->orc_dedireccion = $bean->orc_dfdireccion;
        $bean->orc_detelefono = $bean->orc_dftelefono;
        $bean->orc_defax = $bean->orc_dffax;
        $bean->orc_depobox = $bean->orc_dfpobox;
        $bean->orc_depais = $bean->orc_dfpais;
      }
      //pobla datos proveedor
      $sel_prov = $bean->sco_proveedor_sco_ordencomprasco_proveedor_ida;
      $bean_prov = BeanFactory::getBean('SCO_Proveedor', $sel_prov);
      $bean->orc_pronomemp = $bean_prov->name;
      $bean->orc_procodaio = $bean_prov->prv_codaio;
      $bean->orc_promovil = $bean_prov->prv_movil;
      $bean->orc_proemail = $bean_prov->prv_email;
      $bean->orc_protelefono = $bean_prov->prv_tel;
      $bean->orc_prodireccion = $bean_prov->prv_direc;
      #MOdificaion
      $bean->orc_nomcorto = $bean_prov->prv_monr;
      //pobla datos usuario
      $sel_ususol = $bean->user_id1_c;
      $bean_ususol = BeanFactory::getBean('Users', $sel_ususol);
      $bean->orc_division = $bean_ususol->iddivision_c;
      $bean->orc_regional = $bean_ususol->idregional_c;

      //pobla usuario actual logeado
      global $current_user;
      $bean->user_id_c = $current_user->id;
      $bean->save();
    }
  
  function Fndatosco($bean, $event, $arguments) 
    {
      $div = $bean->orc_division;
      $reg = $bean->orc_regional;

      $query = "SELECT count(*) as cantidad 
        FROM sco_ordencompra_sco_contactos_c
        where sco_ordencompra_sco_contactossco_ordencompra_ida = '".$bean->id."'
        and deleted = 0";
      $results = $GLOBALS['db']->query($query, true);
      $row = $GLOBALS['db']->fetchByAssoc($results);

      if ($row["cantidad"] == 0 )
        {
      $query = "SELECT u.id, cc.cnfco_te 
      FROM sco_cnf_contactos cc
      inner join users u on (u.user_name=cc.name)
      where cc.cnfco_div = '".$div."'
      and cc.cnfco_reg = '".$reg."'
      and cc.deleted = 0";

      $results = $GLOBALS['db']->query($query, true);
      while($row = $GLOBALS['db']->fetchByAssoc($results))
      {
        //crea contacto
        $contactoBean = BeanFactory::newBean('SCO_Contactos');
        $contactoBean->sco_ordencompra_sco_contactossco_ordencompra_ida = $bean->id;
        $contactoBean->user_id_c = $row["id"];
        $contactoBean->con_rol = $row["cnfco_te"];
        $contactoBean->save();
      }
        }
    }

  function Fndatosap($bean, $event, $arguments) 
    {
      $div = $bean->orc_division;
      $reg = $bean->orc_regional;

      $query = "SELECT count(*) as cantidad 
        FROM sco_ordencompra_sco_aprobadores_c 
        where sco_ordencompra_sco_aprobadoressco_ordencompra_ida = '".$bean->id."'
        and deleted = 0";
      $results = $GLOBALS['db']->query($query, true);
      $row = $GLOBALS['db']->fetchByAssoc($results);

      if ($row["cantidad"] == 0)  
      {
        $query = "SELECT u.id 
        FROM sco_cnf_aprobadores ca
        inner join users u on (u.user_name=ca.name)
        where ca.cnfapro_div = '".$div."'
        and ca.deleted = 0";

        $results = $GLOBALS['db']->query($query, true);
        while($row = $GLOBALS['db']->fetchByAssoc($results))
          {
            //crea proveedor 
            $contactoBean = BeanFactory::newBean('SCO_Aprobadores');
            $contactoBean->sco_ordencompra_sco_aprobadoressco_ordencompra_ida = $bean->id;
            $contactoBean->user_id_c = $row["id"];
            $contactoBean->save();
          }
        }
    }

  function fnview()
  {
    switch ($GLOBALS['app']->controller->action) 
    {
      case "EditView":  
        $js = "<script>
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
        $('#orc_decop').change(function(){
                if($('#orc_decop')[0].checked){
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
                }else{
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
            });           
        </script>";

        echo "
        <script src=\"custom/modules/SCO_OrdenCompra/jquery.jexcel.js\"></script>
            <link rel=\"stylesheet\" href=\"custom/modules/SCO_OrdenCompra/jquery.jexcel.css\" type=\"text/css\" />         
          <script>
          $('#SAVE_FOOTER').click(function(){
          });

           $('#detailpanel_5').append(\"<tr><td><div id='my'></div></td></tr>\");

            data = [
                ['', '', '0'],
            ];
            update = function (obj, cel, row) {
              function checkPos(pos) {
                  return pos == producto;
              }

              val = $('#my').jexcel('getValue', $(row));
              var col = $(cel).prop('id').split('-')[0];

            if(col == 3 || col == 4){
              var row = $(cel).prop('id').split('-')[1];
              //alert($(cel).prop('id'));
              var cant = $('#3-'+row).text();
              var prec = $('#4-'+row).text();
              var tot = cant * prec;
              $('#7-'+row).text(tot);
              $('#5-'+row).text('');
              $('#6-'+row).text('');

            }
            
              var row = $(cel).prop('id').split('-')[1];      
              var cant = $('#3-'+row).text();
              var prec = $('#4-'+row).text();
              var tot = cant * prec;  
            if(col == 5){
                                
              var des_por = $('#5-'+row).text();              
              $('#6-'+row).text((tot * des_por)/100);
              var des_val = $('#6-'+row).text();
              var tot_t = tot - des_val;
              $('#7-'+row).text(tot_t);
            }
            if (col == 6) {                          
              var des_val = $('#6-'+row).text();              
              $('#5-'+row).text((des_val * 100)/tot);
              
              var des_val = $('#6-'+row).text();
              var tot_t = tot - des_val;
              $('#7-'+row).text(tot_t);
            }
            //alert($(cel).prop('id').split('-')[1]); 
            
            }

            $('#my').jexcel({
              data:data, 
              onchange:update,
              colHeaders: ['Cod Prov','Descripcion', 'Unidad','Cantidad', 'Prec Uni','Desc %','Desc Valor', 'Sub Total', 'Proy / CO'],
              colWidths: [ 200, 300, 100, 100, 100, 100, 100, 150,150 ],
              columns: [
                  { type: 'text'},
                  { type: 'text'},
                  { type: 'text'},
                  { type: 'text'},
                  { type: 'text'},
                  { type: 'text'},
                  { type: 'text'},
                  { type: 'text'},
                ]
            });

            </script>        
        ";
        echo $js;
      break;
    }
  }

  }

?>
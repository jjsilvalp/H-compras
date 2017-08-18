<?php 
class Clviewoc
{
  function Fnviewoc()
  { 
    $idoc = $GLOBALS['_POST']['record'];

    $bean = BeanFactory::getBean('SCO_OrdenCompra', $idoc);
    $bean->load_relationship('sco_ordencompra_sco_productos');
    $relatedBeans = $bean->sco_ordencompra_sco_productos->getBeans();
    $datos = "";
    foreach ($relatedBeans as $producto) 
    {
      $datos .= "[";
      $datos .= "'" . $producto->name . "',";
      $datos .= "'" . $producto->pro_descripcion . "',";
      $datos .= "'" . $producto->pro_unidad . "',";
      $datos .= $producto->pro_cantidad . ",";
      $datos .= $producto->pro_preciound . ",";
      $datos .= $producto->pro_procentaje . ",";
      $datos .= $producto->pro_descuento . ",";
      $datos .= $producto->pro_subtotal . ",";
      $datos .= "'" . $producto->pro_nomproyco . "'";
      $datos .= "],";
    }
    
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
        echo "
            <script src=\"custom/modules/SCO_OrdenCompra/jquery.jexcel.js\"></script>
            <link rel=\"stylesheet\" href=\"custom/modules/SCO_OrdenCompra/jquery.jexcel.css\" type=\"text/css\" />         
            <script>
            function act_prod()
            {
              var txt_prod = JSON.stringify($('#my').jexcel('getData'));
              $('#orc_productos').text(txt_prod);
            }
            $('#SAVE_FOOTER').focus(act_prod);
            $('#SAVE_HEADER').focus(act_prod);

            $('#detailpanel_5').append(\"<tr><td><div id='my'></div></td></tr>\");

            data = [ $datos ];

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
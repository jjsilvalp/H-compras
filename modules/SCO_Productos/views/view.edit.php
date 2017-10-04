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
    echo '<style>
      .nav-tabs>li>a { 
        border-color: rgba(0,60,121,0.40);
      }
      .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
        color: #fff;
        background-color: rgba(0,60,121,0.40);  
        border: 1px solidrgba(0,60,121,0.40);  
      }
      .tab-content>.active {
          background-color: rgba(0,60,121,0.40); 
      }
      .nav-tabs>li>a:hover {
        border-color: rgba(0,60,121,1); 
        background-color: rgba(0,60,121,1); 
        color: #fff;
      }

      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel{
        background: #fff;
        margin: 5px;
      }
      #form_SubpanelQuickCreate_SCO_Productos .btn-verde{ background:#449d44;}
      #form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel table{
        background: #fff;
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
        background: #fff;
        border: 1px solid #ddd;;
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
      //#form_SubpanelQuickCreate_SCO_Productos #Default_SCO_Productos_Subpanel{display:none;}
      //#description{display:none;}</style>';
    echo "<input type=\"submit\" class=\"button\" onClick=\"convRes();\" value=\"Crear Nuevo Producto\">";
    parent::display();
     echo '
    <script>
      $("#SCO_Productos_subpanel_cancel_button").hide();
      $("#SCO_Productos_subpanel_save_button").hide();
      $(".dcQuickEdit #SCO_Productos_subpanel_full_form_button").hide();
      function convRes() {
        var url = "index.php?module=SCO_ProductosCompras&action=EditView";
        window.open(url, "", "width=990,height=650");
        //location.reload();
      }
    </script>';        
    echo "<script>
      var htmljs = '';
      htmljs += '<div><table width=\"100%\" class=\"panelContainer\" id=\"tablet\"><tbody>';
      htmljs += '<tr><td><button type=\"button\" onclick=\"insertarProductos()\" class=\"btn btn-default btn-xs\">Agregar Producto</button></td>';
      htmljs += '<td><button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"insertarServicio()\">Agregar Servicio</button></td>';
      htmljs += '<td><!--<button type=\"hidden\" class=\"btn btn-default btn-xs\" onclick=\"insertarNuevoProd()\">Nuevo Producto</button>--></td><td></td></tr>';
      htmljs += '<tr><td scope=\"col\" width=\"12.5%\"><div><span>Subtotal</span></td><td><input style=\"width:100px;\"type=\"text\" name=\"subtotal\" id=\"subtotal\" readonly=\"readonly\"></div></td><td></td><td></td></tr>';
      htmljs += '<tr><td scope=\"col\" width=\"12.5%\"><div><span >Descuento valor</span></td><td><input style=\"width:100px;\"type=\"text\" name=\"decval\" id=\"decval\" onblur=\"descvalor();\"><span></div></td><td></td><td></td></tr>';
      htmljs += '<tr><td scope=\"col\" width=\"12.5%\"><div><span >Descuento %</span></td><td><input style=\"width:100px;\"type=\"text\" name=\"descpor\" id=\"descpor\" onblur=\"descporc();\"><span></div></td><td></td><td></td></tr>';
      htmljs += '<tr><td scope=\"col\" width=\"12.5%\"><div><span >total</span></td><td><input style=\"width:100px;\"type=\"text\" name=\"total\" id=\"total\" readonly=\"readonly\"><span></div></td><td></td><td></td></tr></tbody></table>';
      htmljs += '</div>';
    </script>";
    
    echo "      
      <script src=\"custom/modules/SCO_OrdenCompra/jquery.jexcel.js?".time()."\"></script>
      <script src=\"modules/SCO_Productos/productos.js?".time()."\"></script>
      <script src=\"modules/SCO_Productos/items.js?".time()."\"></script>
      <link rel=\"stylesheet\" href=\"custom/modules/SCO_OrdenCompra/jquery.jexcel.css?".time()."\" type=\"text/css\" />  
      <script>
      $('#form_SubpanelQuickCreate_SCO_Productos_tabs').append(\"<div role='tabpanel'><ul class='nav nav-tabs' role='tablist'><li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'> Carga Individual </a></li><li role='presentation'><a href='#tab' aria-controls='tab' role='tab' data-toggle='tab'> Carga Masiva </a></li></ul><div class='tab-content'><div role='tabpanel' class='tab-pane active' id='home'>.<div class='yui-navset detailview_tabs yui-navset-top'><div class='yui-content'><div class='detail view  detail508 expanded'><form id='formPro'><table class='panelContainer' cellspacing='1'><table id='idprod' ></table><table id='idser'></table><table id='idnewpro' ></table><div id='findiv'></div></table></form></div></div></div></div><div role='tabpanel' class='tab-pane' id='tab'>.<div class='yui-navset detailview_tabs yui-navset-top'><div class='yui-content'><div class='detail view  detail508 expanded'><table class='panelContainer' cellspacing='1'><div id='my'></div><div id='tabmy'></div></table></div></div></div></div></div></div>\");
      $('#findiv').append(htmljs);
      insertarProductos();

      //////////////////////////////////////////////
      //Formulario de carga masiva con Formato Excel
      //////////////////////////////////////////////
      var idoc2 = $('#form_SubpanelQuickCreate_SCO_Productos input[name=\"relate_id\"]').val();
      //var idoc1= '".$idoc."'; 
      var subto = 0;        
      var despor = 0;
      var desval = 0;
      var total = 0;

      var cont = 0;
      data = [];
      $('#list_subpanel_sco_ordencompra_sco_productos .list tbody tr td').each(function(){
      if(cont == 7){
        var a = $(this).text();
        var b = a.split('|');
        //alert(b[0]);
        data = b[0];
        var c = b[1].split(',');
        subto = c[0];        
        despor = c[2];
        desval = c[1];
        total = c[3];
        cont++;        
      }else{
          cont++;
        }
      });
      update = function (obj, cel, row) {
        function checkPos(pos) {
            return pos == producto;
        }      

        val = $('#my').jexcel('getValue', $(row));
        var col = $(cel).prop('id').split('-')[0];

        if(col == 0){
          var row = $(cel).prop('id').split('-')[1];
          //$('#0-'+row).on('keydown',openProductPopup()); 
        }

        if(col == 3 || col == 4){
          var row = $(cel).prop('id').split('-')[1];
          //alert($(cel).prop('id'));
          var cant = $('#3-'+row).text();
          var prec = $('#4-'+row).text();
          var tot = cant * prec;
          $('#7-'+row).text(tot.toFixed(2));
          $('#5-'+row).text('0.00');
          $('#6-'+row).text('0.00');          
        }
        
          var row = $(cel).prop('id').split('-')[1];      
          var cant = $('#3-'+row).text();
          var prec = $('#4-'+row).text();
          var tot = cant * prec;                   

        if(col == 5){
          var des_por = $('#5-'+row).text();  
          var des_val = (tot * des_por)/100;           
          $('#6-'+row).text(des_val.toFixed(2));
          var des_val = $('#6-'+row).text();
          var tot_t = tot - des_val;
          $('#7-'+row).text(tot_t.toFixed(2));          
        }
        if (col == 6) {                        
          var des_val = $('#6-'+row).text();  
          var des_por = (des_val * 100)/tot;           
          $('#5-'+row).text(des_por.toFixed(2));
          
          var des_val = $('#6-'+row).text();
          var tot_t = tot - des_val;
          $('#7-'+row).text(tot_t.toFixed(2));          
        }

        //if($('#name').text().match($('#8-'+row).text()) == null){
          if($('#8-'+row).text() != '' && col == 8){
            buscaproy($('#8-'+row).text(), row);
          }else{
            $('#8-'+row).css({'background':'#FFF','color':'#000'}); 
          }   
        //}  

        if($('#0-'+row).text() != '' && col == 0){
          buscap($('#0-'+row).text(), row);
        }
      
        var b = '';
        var c = 0;
        for(var a=0; a<$('#my tbody tr').length; a++){
          b = $('#7-'+[a]).text();
          c = parseFloat(b) + c;
        }
        console.log($('#my tbody tr').length);
        $('#pro_subto').val(c.toFixed(2));
        $('#pro_total').val(c.toFixed(2));
      }

      $('#my').jexcel({
        data:data, 
        onchange:update,
        colHeaders: ['Cod Prov','Descripcion', 'Unidad','Cantidad', 'Prec Uni','Desc %','Desc Valor', 'Sub Total', 'Proy / CO','idproy','idpro','tipoproy'],
        colWidths: [ 150, 300, 100, 80, 80, 80, 80, 80, 100, 50, 50, 50 ],
        columns: [
            { type: 'text'},            
            { type: 'text', readOnly:false},
            { type: 'text', readOnly:true},
            { type: 'text'},
            { type: 'text'},
            { type: 'text'},
            { type: 'text'},
            { type: 'text', readOnly:true},
            { type: 'text'},
            { type: 'hidden'},
            { type: 'hidden'},
            { type: 'hidden'},
          ]
      });      
      $('#9-0').css('display','none');
      var htmlto = '';
      htmlto += '<div><table width=\"100%\" class=\"panelContainer\" id=\"tablet\"><tbody>';
      htmlto += '<tr><td scope=\"col\" width=\"12.5%\">Subtotal: </td><td><input type=\"text\" name=\"pro_subto\" id=\"pro_subto\" style=\"width:100px; \" value=\"'+subto+'\" disabled></td></tr>';
      htmlto += '<tr><td scope=\"col\" width=\"12.5%\">Descuento valor: </td><td><input type=\"text\" name=\"pro_descval\" id=\"pro_descval\" style=\"width:100px;\"value=\"'+desval+'\"></td></tr>';
      htmlto += '<tr><td scope=\"col\" width=\"12.5%\">Descuento %: </td><td><input type=\"text\" name=\"pro_descpor\" id=\"pro_descpor\" style=\"width:100px;\" value=\"'+despor+'\"></td></tr>';
      htmlto += '<tr><td scope=\"col\" width=\"12.5%\">Total: </td><td><input type=\"text\"style=\"width:100px;\" name=\"pro_total\" id=\"pro_total\" value=\"'+total+'\" disabled></td></tr>';
      htmlto += '</tbody></table></div>';
      $('#tabmy').append(htmlto);    

      $('#pro_descval').on('blur', function(){
        var a = $(this).val() / $('#pro_subto').val();  
        var v = a * 100 ;

        $('#pro_descpor').val(v.toFixed(2)); 
        var t = $('#pro_subto').val() - $(this).val();       
        $('#pro_total').val(t.toFixed(2));        

      });
      $('#pro_descpor').on('blur', function(){
        var a = $('#pro_subto').val() * $(this).val();          
        var b = a / 100;
        $('#pro_descval').val(b.toFixed(2));
        var t = $('#pro_subto').val() - b;
        $('#pro_total').val(t.toFixed(2));     
      });      

      function act_prod(){
        var txt_prod = JSON.stringify($('#my').jexcel('getData'));
        $('#description').text(txt_prod + '|'+$('#pro_subto').val()+','+$('#pro_descval').val()+','+$('#pro_descpor').val()+','+$('#pro_total').val()+'|'+idoc2);        

        $('#pro_subtotal').val($('#pro_subto').val());
        $('#pro_procentaje').val($('#pro_descpor').val());
        $('#pro_valor').val($('#pro_descval').val());        
        $('#pro_aux1').val($('#pro_total').val());
      }

      var arrp = new Array();
      var arrs = new Array();
      function act_prod2() {
        var pr = $(\"#formPro input[name^='pro_nombre']\");          
        var ds = $(\"#formPro textarea[name^='pro_descripcion']\");
        var uni = $(\"#formPro input[name^='pro_unidad']\");
        var can = $(\"#formPro input[name^='pro_cant']\");
        var pre = $(\"#formPro input[name^='pro_precio']\");
        var dv = $(\"#formPro input[name^='pro_descpor']\");
        var dp = $(\"#formPro input[name^='pro_descval']\");
        var to = $(\"#formPro input[name^='pro_total']\");
        var pry = $(\"#formPro input[name^='pory_cod']\");
        var pryid = $(\"#formPro input[name^='proy_id']\");
        var prid = $(\"#formPro input[name^='producto_id']\");
        var tproy = $(\"#formPro input[name^='tipo_proy']\");

        for(var i = 0; i < pr.length; i++ ){            
          var arrpro = [];
          arrpro.push(pr[i].value);    
          arrpro.push(ds[i].value);
          arrpro.push(uni[i].value);
          arrpro.push(can[i].value);
          arrpro.push(pre[i].value);
          arrpro.push(dv[i].value);
          arrpro.push(dp[i].value);
          arrpro.push(to[i].value);
          arrpro.push(pry[i].value);
          arrpro.push(pryid[i].value);
          arrpro.push(prid[i].value);
          arrpro.push(tproy[i].value);   
          arrp[i] = arrpro;                                 
        }   
        console.log(arrp);

        $('#description').text(JSON.stringify(arrp)+ '|'+$('#subtotal').val()+','+$('#decval').val()+','+$('#descpor').val()+','+$('#total').val()+'|'+idoc2);
        console.log(JSON.stringify(arrp)+ '|'+$('#subtotal').val()+','+$('#decval').val()+','+$('#descpor').val()+','+$('#total').val()+'|'+idoc2);
        $('#pro_subtotal').val($('#subtotal').val());
        $('#pro_procentaje').val($('#descpor').val());
        $('#pro_valor').val($('#decval').val());        
        $('#pro_aux1').val($('#total').val());
      }

      $('.nav-tabs li').on('click',function(){
        $('#description').text('');
      });
      $('.action_buttons #SCO_Productos_subpanel_save_button').on('mousemove',function(){
        if($('#home.tab-pane').hasClass('active')){
          act_prod2();
        }else if($('#tab.tab-pane').hasClass('active')){
          act_prod();
        }
      });
      $('.action_buttons #SCO_Productos_subpanel_save_button').on('focus',function(){
        if($('#home.tab-pane').hasClass('active')){
          act_prod2();
        }else if($('#tab.tab-pane').hasClass('active')){
          act_prod();
        }
      });
      $('#pro_descpor').keypress(function(e){      
        if(e.which == 13){
          if($('#home.tab-pane').hasClass('active')){
            act_prod2();
          }else if($('#tab.tab-pane').hasClass('active')){
            act_prod();
          }
        }
      });
      $('#pro_descval').keypress(function(e){      
        if(e.which == 13){
          if($('#home.tab-pane').hasClass('active')){
            act_prod2();
          }else if($('#tab.tab-pane').hasClass('active')){
            act_prod();
          }
        }
      });

      //$('.action_buttons #SCO_Productos_subpanel_save_button').attr('disabled', true);
      $('.action_buttons #SCO_Productos_subpanel_cancel_button').on('click',function(){
        $('#idpro').fadeIn();
      });
      </script>
    ";
  }
}
?>

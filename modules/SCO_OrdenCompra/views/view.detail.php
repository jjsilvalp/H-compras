<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class SCO_OrdenCompraViewDetail extends ViewDetail {
	
 	function SCO_OrdenCompraViewDetail(){
 		parent::ViewDetail();
 		#$this->useForSubpanel = true;
 	}
 	 public function preDisplay()
    {
        parent::preDisplay();
    }
 	function display(){ 
 		$estado = $this->bean->orc_estado; 		
 		$id = $this->bean->id;
 		
 		$arr_estado = array(1 => 'En curso',2=>'Borrador ', 3 =>'Solicitar AprobaciÃ³n ', 4 => 'Aprobado ' ,5 => 'Cacelado ', 6 =>'Cerrado ');
		$st ='<style>	
			.gris{color: #ccc;}
			.gris:hover{color: #ccc;}
			.single{display: none;}
			#sugar_action_button, .sugar_action_button{display: none;}
			#whole_subpanel_sco_ordencompra_sco_productos tbody td a {pointer-events: none; cursor: default;}
			#whole_subpanel_sco_ordencompra_sco_contactos tbody td a {pointer-events: none; cursor: default;}
			#whole_subpanel_sco_ordencompra_sco_aprobadores	tbody td a {pointer-events: none; cursor: default;}
			#whole_subpanel_sco_ordencompra_sco_plandepagos	tbody td a {pointer-events: none; cursor: default;}
			</style>'; 			
 		#script para cambio de estados 			
 		echo '
 		<script>
		 	function showreport(num)
		 	{
		 		var url1 = "http://hannacbdp01/ReportServer_HANNACBDPI01/Pages/ReportViewer.aspx?%2fDivision+99+-+Administracion+y+Finanzas%2fCompras%2fSistemaCompras%2foc_qas&idoc='.$this->bean->id.'&ejec="+num+"&rs:Command=Render&rc:Toolbar=false";
		 		window.open(url1,"","width=1220,height=650");
		 	}
		 	function imprimir()
		 	{
		 		var url2 = "http://hannacbdp01/ReportServer_HANNACBDPI01/Pages/ReportViewer.aspx?%2fDivision+99+-+Administracion+y+Finanzas%2fCompras%2fSistemaCompras%2foc_qas&idoc='.$this->bean->id.'&ejec='.time().'&rs:Command=Render&rc:Toolbar=False&rs:Format=PDF&rc:MarginTop=1cm&rc:MarginRight=1cm&rc:MarginBottom=1cm&rc:MarginLeft=1cm";
		 		window.open(url2,"","");
		 	}
		</script>';
		echo "
		<script>
		 	function estado(est){
		 		var id = '".$this->bean->id."';
		 		var num = est;
		 		$.ajax({
		 			type: 'get',
		 			url: 'index.php?to_pdf=true&module=SCO_OrdenCompra&action=ordencompra&id='+id,
		 			data: {num},
		 			success: function() {
		            	console.log('conexion exitosa, num = '+num);
		            	//window.parent.location.href='';
		            	location.reload(true);		    
		        	}
		        });
		 	}
		</script>";	
		echo "<script>	
		var htmlpro = '';
		htmlpro += '<table id=\"idpro\" class=\"table table-hover\">';
		htmlpro += '<thead>';
		htmlpro += '	<tr>';
		htmlpro += '<th>Cod Pro</th><th>Descripcion</th><th>Unidad</th><th>Cantidad</th><th>Prec Uni</th><th>Desc %</th><th>Desc valor</th><th>Sub total</th><th>Proy C/O</th>';
		htmlpro += '	</tr>';
		htmlpro += '</thead>';
		htmlpro += '<tbody id=\"valtr\">';
		htmlpro += '</tbody>';
		htmlpro += '</table>';

		window.onload = function(){			
		var b = [];
		var cont = 0;
	    $('#list_subpanel_sco_ordencompra_sco_productos .list tbody tr td').each(function(){
	    if(cont == 7){
	      var a = $(this).text();
	      b = a.split('|');	      
	      cont++;        
	    }else{cont++;}
	    });	
	    
		var c = b[0].replace(/['\"]+/g, \"'\");   
	    c = c.replace(/','/g,'*');
	    c = c.replace('[[','');
	    c = c.replace(']]','');
	    c = c.replace(/'/g,'');
	    c = c.split('],[');
	    
	    var d = '';var fila = '';
	    for(var i = 0 ; i < c.length;i++){
	    	d = c[i].split('*');	
	    	var celda = '';
	    	for(var j = 0; j< d.length - 3;j++){
	    		celda += '<td>'+d[j]+'</td>';	     	
	    	}
	    	fila += '<tr>'+celda+'</tr>';	    	
	    }
	    var c2 = b[1];
       	c2 = c2.split(',');
        var htmlpro = '';
		htmlpro += '<table id=\"idpro\" class=\"table table-bordered\">';
		htmlpro += '<thead>';
		htmlpro += '	<tr>';
		htmlpro += '<th>Cod Pro</th><th>Descripcion</th><th>Unidad</th><th>Cantidad</th><th>Prec Uni</th><th>Desc %</th><th>Desc valor</th><th>Sub total</th><th>Proy C/O</th>';
		htmlpro += '	</tr>';
		htmlpro += '</thead>';
		htmlpro += '<tbody>';
		htmlpro += fila;
		htmlpro += '</tbody>';
		htmlpro += '<tfoot>';
		htmlpro += '<tr>';
		htmlpro += '<td>SubTotal</td><td>'+c2[0]+'</td>';
		htmlpro += '</tr>';
		htmlpro += '<tr>';
		htmlpro += '<td>Descuento Valor</td><td>'+c2[1]+' </td>';
		htmlpro += '</tr>';
		htmlpro += '<tr>';
		htmlpro += '<td>Descuento %</td><td>'+c2[2]+' %</td>';
		htmlpro += '</tr>';
		htmlpro += '<tr>';
		htmlpro += '<td>Total</td><td>'+c2[3]+'</td>';
		htmlpro += '</tr>';
		htmlpro += '</table>';	    
		
        $('#list_subpanel_sco_ordencompra_sco_productos #sco_ordencompra_sco_productos_nuevo_button').on('click',function(){
			$('#idpro').fadeOut();
		});
		
	    $('#list_subpanel_sco_ordencompra_sco_productos .list').hide();
	    $('#list_subpanel_sco_ordencompra_sco_productos').append(htmlpro);
		//alert('DOM CARGADO');			
        $('.subnav li a').text('Quitar');		
        $('#sco_ordencompra_sco_productos_remove_1').text('Quitar');
        $('#sco_ordencompra_sco_productos_remove_2').text('Quitar');
        $('#sco_ordencompra_sco_productos_remove_3').text('Quitar');
        $('#sco_ordencompra_sco_productos_remove_4').text('Quitar');
        $('#sco_ordencompra_sco_productos_remove_5').text('Quitar');
        $('#sco_ordencompra_sco_productos_remove_6').text('Quitar');
        $('#sco_ordencompra_sco_productos_remove_7').text('Quitar');
        $('#sco_ordencompra_sco_productos_remove_8').text('Quitar');
        $('#sco_ordencompra_sco_productos_remove_9').text('Quitar');
        $('#sco_ordencompra_sco_productos_remove_10').text('Quitar');   
		};
		
		var b = [];
		var cont = 0;
	    $('#list_subpanel_sco_ordencompra_sco_productos .list tbody tr td').each(function(){
	    if(cont == 7){
	      var a = $(this).text();
	      b = a.split('|');	      
	      cont++;        
	    }else{cont++;}
	    });	    
	    //alert(b[0]);
	    var c = b[0].replace(/['\"]+/g, \"'\");	    
	    c = c.replace(/','/g,'*');
	    c = c.replace('[[','');
	    c = c.replace(']]','');
	    c = c.replace(/'/g,'');
	    c = c.split('],[');
	    
	    var d = ''; var fila = '';
	    for(var i = 0 ; i < c.length;i++){
	    	d = c[i].split('*');	
	    	var celda = '';
	    	for(var j = 0; j< d.length - 3;j++){
	    		celda += '<td>'+d[j]+'</td>';	     	
	    	}
	    	fila += '<tr>'+celda+'</tr>';	    	
	    }
       	var c2 = b[1];
       	c2 = c2.split(',');
        var htmlpro = '';
		htmlpro += '<table id=\"idpro\" class=\"table table-bordered\">';
		htmlpro += '<thead>';
		htmlpro += '	<tr>';
		htmlpro += '<th>Cod Pro</th><th>Descripcion</th><th>Unidad</th><th>Cantidad</th><th>Prec Uni</th><th>Desc %</th><th>Desc valor</th><th>Sub total</th><th>Proy C/O</th>';
		htmlpro += '	</tr>';
		htmlpro += '</thead>';
		htmlpro += '<tbody>';
		htmlpro += fila;
		htmlpro += '</tbody>';
		htmlpro += '<tfoot>';
		htmlpro += '<tr>';
		htmlpro += '<td>SubTotal</td><td>'+c2[0]+'</td>';
		htmlpro += '</tr>';
		htmlpro += '<tr>';
		htmlpro += '<td>Descuento Valor</td><td>'+c2[1]+' </td>';
		htmlpro += '</tr>';
		htmlpro += '<tr>';
		htmlpro += '<td>Descuento %</td><td>'+c2[2]+' %</td>';
		htmlpro += '</tr>';
		htmlpro += '<tr>';
		htmlpro += '<td>Total</td><td>'+c2[3]+'</td>';
		htmlpro += '</tr>';
		htmlpro += '</table>';

        $('#list_subpanel_sco_ordencompra_sco_productos #sco_ordencompra_sco_productos_nuevo_button').on('click',function(){
			$('#idpro').fadeOut();
		});		
	    $('#list_subpanel_sco_ordencompra_sco_productos .list').hide();
	    $('#list_subpanel_sco_ordencompra_sco_productos').append(htmlpro);
		$('.subnav li a').text('Quitar');
	    $('#sco_ordencompra_sco_productos_remove_1').text('Quitar');
	    $('#sco_ordencompra_sco_productos_remove_2').text('Quitar');
	    $('#sco_ordencompra_sco_productos_remove_3').text('Quitar');
	    $('#sco_ordencompra_sco_productos_remove_4').text('Quitar');
	    $('#sco_ordencompra_sco_productos_remove_5').text('Quitar');
	    $('#sco_ordencompra_sco_productos_remove_6').text('Quitar');
	    $('#sco_ordencompra_sco_productos_remove_7').text('Quitar');
	    $('#sco_ordencompra_sco_productos_remove_8').text('Quitar');
	    $('#sco_ordencompra_sco_productos_remove_9').text('Quitar');
	    $('#sco_ordencompra_sco_productos_remove_10').text('Quitar');
		</script>";		
        echo "<script src=\"modules/SCO_Productos/jquery.bdt.min.js?".time()."\"></script>";
        echo "<script>$('#idpro').bdt();</script>";
        echo "<style>#list_subpanel_sco_ordencompra_sco_productos .list{display:none;}</style>";
 		switch ($estado) {
 			case '1': 			 	 	
 				echo "<a class=\"btn btn-success btn-sm\" onClick=\"imprimir();\">Descargar</a>
 					  <a class=\"btn btn-sm btn-success\" onClick=\"showreport(Math.random());\" value=\"Ver Reporte\">Ver Reporte</a>
 					<style>
 						#whole_subpanel_sco_ordencompra_sco_documentos tbody td a {pointer-events: none; cursor: default;}
 					</style>
 					<script>//$('#btn-estados').hide();
 					$('#desc_por').prop('disabled', true);
 					$('#desc_val').prop('disabled', true);</script>";		
 				parent::display();  				
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody>
 					<tr>
 						<td width="12.5%" scope="col">		
		 					Estado Actual:
		 				</td>
		 				<td>
		 					'.$arr_estado[1].'
		 				</td>
		 				<td width="12.5%" >	
		 				<input type="button" id="btn-estados" class="btn btn-sm btn-success" onClick="estado(2);" value="'.$arr_estado[2].'">					
						</td>
						<td class="" type="enum" field="orc_regional" width="65%">	 
						</td>
		 			</tr>		 					 					 			
		 			</tbody></table>
	 				 </div></div></div>';
	 			echo $js.$st;
 				break;
 			case '2':
 				echo "<a class=\"btn btn-success btn-sm\" onClick=\"imprimir();\">Descargar</a>
 					  <a class=\"btn btn-sm btn-success\" onClick=\"showreport(Math.random());\" value=\"Ver Reporte\">Ver Reporte</a>";		
 				parent::display();   						
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody>
 					<tr>
 						<td width="12.5%" scope="col">		
		 					Estado Actual:
		 				</td>
		 				<td>
		 					'.$arr_estado[2].'
		 				</td>
		 				<td width="12.5%" >	
		 				<input type="button" id="btn-estados" class="btn btn-sm btn-success" onClick="estado(3);" value="'.$arr_estado[3].'">					
						</td>
						<td class="" type="enum" field="orc_regional" width="65%">	 
						</td>
		 			</tr>		 					 					 			
		 			</tbody></table>
	 				 </div></div></div>';
 				break;
 			case '3': 		
				echo "<a class=\"btn btn-success btn-sm\" onClick=\"imprimir();\">Descargar</a>
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport(Math.random());\" value=\"Ver Reporte\">Ver Reporte</a>";	 				
 				parent::display();  				
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody>
 					<tr>
 						<td width="12.5%" scope="col">		
		 					Estado Actual:
		 				</td>
		 				<td>
		 					'.$arr_estado[3].'
		 				</td>
		 				<td width="12.5%" >	
		 									
						</td>
						<td class="" type="enum" field="orc_regional" width="65%">	 
						</td>
		 			</tr>		 					 					 			
		 			</tbody></table>
	 				 </div></div></div>';
	 			echo $js.$st."<style>#list_subpanel_sco_ordencompra_sco_documentos .sugar_action_button{display:block;}</style>";	
 				break;
 			case '4':
				echo "<a class=\"btn btn-success btn-sm\" onclick=\"imprimir()\">Descargar</a>
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport(Math.random());\" value=\"Ver Reporte\">Ver Reporte</a>";	 				
 				parent::display();  				
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody>
 					<tr>
 						<td width="12.5%" scope="col">		
		 					Estado Actual:
		 				</td>
		 				<td>
		 					'.$arr_estado[4].'
		 				</td>
		 				<td width="12.5%" >	
		 				<input type="button" id="btn-estados" class="btn btn-sm btn-success" onClick="estado(6);" value="'.$arr_estado[6].'">					
						</td>
						<td class="" type="enum" field="orc_regional" width="70%">	 
						</td>
		 			</tr>		 					 					 			
		 			</tbody></table>
	 				 </div></div></div>';
	 			 echo $js.$st."<script>$('#list_subpanel_sco_ordencompra_sco_documentos .sugar_action_button').show();</script>";	
 				break;
 			case '5':
				echo "<a class=\"btn btn-success btn-sm\" onclick=\"imprimir()\">Descargar</a>
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport(Math.random());\" value=\"Ver Reporte\">Ver Reporte</a>";	 				
 				parent::display();  				
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody>
 					<tr>
 						<td width="12.5%" scope="col">		
		 					Estado Actual:
		 				</td>
		 				<td>
		 					'.$arr_estado[5].'
		 				</td>
		 				<td width="12.5%" >	
				
						</td>
						<td class="" type="enum" field="orc_regional" width="70%">	 
						</td>
		 			</tr>		 					 					 			
		 			</tbody></table>
	 				 </div></div></div>';	
	 			echo $js.$st;	
 				break;
 			case '6':
				echo "<a class=\"btn btn-success btn-sm\" onclick=\"imprimir()\">Descargar</a>
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport(Math.random());\" value=\"Ver Reporte\">Ver Reporte</a>";	
 				echo $st.$js;	
 				parent::display();  				
 			echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody>
 					<tr>
 						<td width="12.5%" scope="col">		
		 					Estado Actual:
		 				</td>
		 				<td>
		 					'.$arr_estado[6].'
		 				</td>
		 				<td width="12.5%" >	
		 				<input type="button" id="btn-estados" class="btn btn-sm btn-success" onClick="estado(3);" value="'.$arr_estado[6].'">					
						</td>
						<td class="" type="enum" field="orc_regional" width="70%">	 
						</td>
		 			</tr>		 					 					 			
		 			</tbody></table>
	 				 </div></div></div>';
	 			echo $js.$st;	
 				break;
 			default: 			
 				parent::display();
 				break;
 		} 		
 	}
}
?>

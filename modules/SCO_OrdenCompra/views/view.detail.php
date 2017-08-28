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
 		$arr_estado = array(1 => 'En curso',2=>'Borrador ', 3 =>'Solicitar Aprobación ', 4 => 'Aprobado ' ,5 => 'Cacelado ', 6 =>'Cerrado ');
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
		 	function showreport()
		 	{
		 		var url1 = "http://hannacbdp01/ReportServer_HANNACBDPI01/Pages/ReportViewer.aspx?/Division+99+-+Administracion+y+Finanzas/Cobranzas/Autorizacion+de+Cr%C3%A9ditos/oc&idoc='.$this->bean->id.'&rs:Command=Render&rc:Toolbar=false";
		 		window.open(url1,"","width=1220,height=650");
		 	}
		 	function imprimir()
		 	{
		 		var url2 = "http://hannacbdp01/ReportServer_HANNACBDPI01/Pages/ReportViewer.aspx?/Division+99+-+Administracion+y+Finanzas/Cobranzas/Autorizacion+de+Cr%C3%A9ditos/oc&idoc='.$this->bean->id.'&rs:Command=Render&rc:Toolbar=False&rs:Format=PDF&rc:MarginTop=1cm&rc:MarginRight=1cm&rc:MarginBottom=1cm&rc:MarginLeft=1cm";
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
		 	function calc(tipo){
		 		var id = '".$this->bean->id."';
		 		var desc_val = $('#desc_val').val();
		 		var desc_por = $('#desc_por').val();
		 		$.ajax({
		 			type: 'get',
		 			url: 'index.php?to_pdf=true&module=SCO_OrdenCompra&action=calculodesc&id='+id,
		 			data: {desc_val,desc_por,tipo},
		 			success: function(data) {
		 				//debugger;
		 				var res = jQuery.parseJSON(data);      				        				
        				arreglocadena = res.split(',');     		
		            	//location.reload();
		            		var html = '';
							html += '<table class=\"table table-bordered \"> ';
							html += '	<tbody> ';
							html += '		<tr> ';
							html += '			<td><label>Importe Total : </label></td> ';
							html += '			<td>'+arreglocadena[0]+'</td> ';
							html += '		</tr> ';
							html += '		<tr> ';
							html += '			<td><label>Descuento % : </label></td> ';
							html += '			<td><input type=\"text\" name=\"desc_val\" id=\"desc_por\" placeholder=\"Ingrese descuento\" value=\"'+arreglocadena[1]+'\" onblur=\"calc(1)\"></td> ';
							html += '		</tr> ';
							html += '		<tr> ';
							html += '			<td><label>Descuento Valor : </label></td> ';
							html += '			<td><input type=\"text\" name=\"desc_val\" id=\"desc_val\" placeholder=\"Ingrese descuento\" value=\"'+arreglocadena[2]+'\" onblur=\"calc(2)\"></td> ';
							html += '		</tr> ';
							html += '		<tr> ';
							html += '			<td><label>Total : </label></td> ';
							html += '<td>'+arreglocadena[3]+'</td> 	';
							html += '		</tr> ';
							html += '	</tbody> ';
							html += '</table> ';
						$('.col-xs-4').html(html);
		        	}
		        });
			    
		 	}
		 </script>";
		echo "<script>	
		var htmldesc = '<hr style=\"height: 0px; margin-top:-1px; margin-bottom:-1px;\">';
			htmldesc += '<div class=\"row\" style=\"margin-bottom:-20px;\">';
			htmldesc += '<div class=\"col-xs-4 col-sm-offset-0\">';
			htmldesc += '<table class=\"table table-bordered \"> ';
			htmldesc += '	<tbody> ';
			htmldesc += '		<tr> ';
			htmldesc += '			<td><label>Importe Total : </label></td> ';
			htmldesc += '			<td>".$this->bean->orc_importet."</td> ';
			htmldesc += '		</tr> ';
			htmldesc += '		<tr> ';
			htmldesc += '			<td><label>Descuento % : </label></td> ';
			htmldesc += '			<td><input type=\"text\" name=\"desc_val\" id=\"desc_por\" placeholder=\"Ingrese descuento\" value=\"".$this->bean->orc_descpor."\" onblur=\"calc(1)\"></td> ';
			htmldesc += '		</tr> ';
			htmldesc += '		<tr> ';
			htmldesc += '			<td><label>Descuento Valor : </label></td> ';
			htmldesc += '			<td><input type=\"text\" name=\"desc_val\" id=\"desc_val\" placeholder=\"Ingrese descuento\" value=\"".$this->bean->orc_descvalor."\" onblur=\"calc(2)\"></td> ';
			htmldesc += '		</tr> ';
			htmldesc += '		<tr> ';
			htmldesc += '			<td><label>Total : </label></td> ';
			htmldesc += '<td>".$this->bean->orc_tototal."</td> 	';
			htmldesc += '		</tr> ';
			htmldesc += '	</tbody> ';
			htmldesc += '</table> ';
			htmldesc += '</div>';
		window.onload = function(){
			//alert('DOM CARGADO');			
			$('#list_subpanel_sco_ordencompra_sco_productos').append(htmldesc);		
		}
		$('#list_subpanel_sco_ordencompra_sco_productos').append(htmldesc);
		
		</script>";
 		switch ($estado) {
 			case '1': 			 	 	
 				echo "<a class=\"btn btn-success btn-sm\" onClick=\"imprimir();\">Descargar</a>
 					  <a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>
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
 					  <a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>";		
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
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>";	 				
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
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>";	 				
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
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>";	 				
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
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>";	
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

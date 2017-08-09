<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class SCO_OrdenCompraViewDetail extends ViewDetail {
	
 	function SCO_OrdenCompraViewDetail(){
 		parent::ViewDetail();
 		$this->useForSubpanel = true;
 	}
 	 public function preDisplay()
    {
        parent::preDisplay();
    }
 	function display(){ 
 		$estado = $this->bean->orc_estado; 		
 		$id = $this->bean->id;
 		$arr_estado = array(1 => 'En curso',2=>'Borrado ', 3 =>'Pendiente de Aprobación ', 4 => 'Aprobado ' ,5 => 'Cacelado ', 6 =>'Cerrado ');
		$js = '
		<script>
			//$("ul .sugar_action_button").hide();
			//$(".single").hide();
			//$("tbody td a").bind("click", false);
			//$("td a").addClass("gris");	
		</script>';
		$st ='<style>
			.gris{color: #ccc;}
			.gris:hover{color: #ccc;}
			#sugar_action_button, .sugar_action_button{
			display: none;}
			tbody td a {pointer-events: none; cursor: default;}
			</style>'; 			
 		#script para cambio de estados 			
 		echo '
 		<script>
		 	function showreport(){
		 		var url1 = "http://hannacbdp01/ReportServer_HANNACBDPI01/Pages/ReportViewer.aspx?/Division+99+-+Administracion+y+Finanzas/Cobranzas/Autorizacion+de+Cr%C3%A9ditos/oc&idoc='.$this->bean->id.'&rs:Command=Render&rc:Toolbar=false";
		 		window.open(url1,"","width=1220,height=650");
		 	}
		 	function imprimir(){
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
		 			success: function() {
		            	location.reload();
		            	console.log(tipo);
		        	}  
		        });
		 	}
		 </script>";	
 		switch ($estado) {
 			case '1': 			 	 	
 				echo "
 					<a class=\"btn btn-success btn-sm\" onclick=\"imprimir()\">Imprimir</a>
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>
 					<script>
 						$(\"#sco_ordencompra_sco_productos_nuevo_button\").click();
 					</script>";		
 				parent::display();  				
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody>
 					<tr>
 						<td width="12.5%" scope="col">		
		 					<label for="">Importe Total: </label>
		 				</td>
		 				<td>
		 					'.$this->bean->orc_importet.'
		 				</td>
		 				<td width="12.5%" scope="col">
							Estado Actual:
						</td>
						<td class="" type="enum" field="orc_regional" width="37.5%">
							'.$arr_estado[1].'
						</td>
		 			</tr>
		 			<tr>	
	 					<td scope="col">
	 						<label for="">Descuento %: </label>
	 						</td>
	 					<td>
		 					<input type="text" name="desc_por" id="desc_por" placeholder="Ingrese descuento" value="'.$this->bean->orc_descpor.'">
		 					<button type="submit" onClick="calc(1)" class="btn btn-sm btn-success" >Realizar</button>
		 				</td>
		 				<td scope="col">Cambiar Estado a :</td>
		 				<td>
		 					<input type="button" id="btn-estados" class="btn btn-sm btn-success" onClick="estado(2);" value="'.$arr_estado[2].'">
		 				</td>
		 			</tr>
		 			<tr>
	 					<td width="12.5%" scope="col">			
	 						<label for="">Descuento Valor: </label>
	 					</td>
	 					<td>
	 						<input type="text" name="desc_val" id="desc_val" placeholder="Ingrese descuento" value="'.$this->bean->orc_descvalor.'">
		 					<button type="submit" onClick="calc(2)" class="btn btn-sm btn-success" >Realizar</button>
	 					</td>
	 					<td></td>
	 					<td></td>
		 			</tr>
		 			<tr>	
		 				<td width="12.5%" scope="col">Total</td>
		 				<td>'.$this->bean->orc_tototal.'</td> 
		 				<td></td><td></td>
		 			</tr>
		 			</tbody></table>
	 				 </div></div></div>';
 				break;
 			case '2':
 				echo "<a class=\"btn btn-success btn-sm\" onclick=\"imprimir()\">Descargar</a>
 					  <a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>
 					  <script>$(\"#sco_ordencompra_sco_productos_nuevo_button\").click();</script>";		
 				parent::display();  				
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody>
 					<tr>
 						<td width="12.5%" scope="col">		
		 					<label for="">Importe Total: </label>
		 				</td>
		 				<td>
		 					'.$this->bean->orc_importet.'
		 				</td>
		 				<td width="12.5%" scope="col">
							Estado Actual:
						</td>
						<td class="" type="enum" field="orc_regional" width="37.5%">
							'.$arr_estado[2].'
						</td>
		 			</tr>
		 			<tr>	
	 					<td scope="col">
	 						<label for="">Descuento %: </label>
	 						</td>
	 					<td>
		 					<input type="text" name="desc_por" id="desc_por" placeholder="Ingrese descuento" value="'.$this->bean->orc_descpor.'">
		 					<button type="submit" onClick="calc(1)" class="btn btn-sm btn-success" >Realizar</button>
		 				</td>
		 				<td scope="col">Cambiar Estado a :</td>
		 				<td>
		 					<input type="button" id="btn-estados" class="btn btn-sm btn-success" onClick="estado(3);" value="'.$arr_estado[3].'">
		 				</td>
		 			</tr>
		 			<tr>
	 					<td width="12.5%" scope="col">			
	 						<label for="">Descuento Valor: </label>
	 					</td>
	 					<td>
	 						<input type="text" name="desc_val" id="desc_val" placeholder="Ingrese descuento" value="'.$this->bean->orc_descvalor.'">
		 					<button type="submit" onClick="calc(2)" class="btn btn-sm btn-success" >Realizar</button>
	 					</td>
	 					<td></td>
	 					<td></td>
		 			</tr>
		 			<tr>	
		 				<td width="12.5%" scope="col">Total</td>
		 				<td>'.$this->bean->orc_tototal.'</td> 
		 				<td></td><td></td>
		 			</tr>
		 			</tbody></table>
	 				 </div></div></div>';
 				break;
 			case '3': 		
				echo "
					<a class=\"btn btn-success btn-sm\" onclick=\"imprimir()\">Descargar</a>
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>
 					";	 				
 				parent::display();  				
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody>
 					<tr>
 						<td width="12.5%" scope="col">		
		 					<label for="">Importe Total: </label>
		 				</td>
		 				<td>
		 					'.$this->bean->orc_importet.'
		 				</td>
		 				<td width="12.5%" scope="col">
							Estado Actual:
						</td>
						<td class="" type="enum" field="orc_regional" width="37.5%">
							'.$arr_estado[3].'
						</td>
		 			</tr>
		 			<tr>	
	 					<td scope="col">
	 						<label for="">Descuento %: </label>
	 						</td>
	 					<td>
		 					<input type="text" name="desc_por" id="desc_por" placeholder="Ingrese descuento" value="'.$this->bean->orc_descpor.'">
		 					<button type="submit" onClick="calc(1)" class="btn btn-sm btn-success" >Realizar</button>
		 				</td>
		 				<td scope="col">Cambiar Estado a :</td>
		 				<td>
		 					<input type="button" id="btn-estados" class="btn btn-sm btn-success" onClick="estado(4);" value="'.$arr_estado[4].'">
		 				</td>
		 			</tr>
		 			<tr>
	 					<td width="12.5%" scope="col">			
	 						<label for="">Descuento Valor: </label>
	 					</td>
	 					<td>
	 						<input type="text" name="desc_val" id="desc_val" placeholder="Ingrese descuento" value="'.$this->bean->orc_descvalor.'">
		 					<button type="submit" onClick="calc(2)" class="btn btn-sm btn-success" >Realizar</button>
	 					</td>
	 					<td></td>
	 					<td></td>
		 			</tr>
		 			<tr>	
		 				<td width="12.5%" scope="col">Total</td>
		 				<td>'.$this->bean->orc_tototal.'</td> 
		 				<td></td><td></td>
		 			</tr>
		 			</tbody></table>
	 				 </div></div></div>';
	 			echo $js.$st."<script>$('#list_subpanel_sco_ordencompra_sco_documentos .sugar_action_button').show();</script>";	
 				break;
 			case '4':
				echo "<a class=\"btn btn-success btn-sm\" onclick=\"imprimir()\">Descargar</a>
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>";	 				
 				parent::display();  				
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody><tr>
 					<td width="12.5%" scope="col">				
		 					<label for="">Importe Total: </label>
		 					</td>
		 					<td>
		 					'.$this->bean->orc_importet.'
		 					</td>
		 					<td width="12.5%" scope="col">
								Etado Actual:
								</td>
								<td class="" type="enum" field="orc_regional" width="37.5%">
								'.$arr_estado[4].'
								</td>
		 					</tr>
		 					<tr>	
		 					<td scope="col">
		 						<label for="">Descuento Total: </label>
		 						</td>
		 					<td>
		 					<input type="text" id="desc" placeholder="Ingrese descuento">
		 					<button type="submit" onclick="calc()" class="btn btn-sm btn-success" >Realizar Descuento</button>
		 				</td><td scope="col">Cambiar Estado a :</td><td><input type="button" id="btn-estados" class="btn btn-sm btn-success" onClick="estado(6);" value="'.$arr_estado[6].'"></td>
		 				</tr></tr>
		 				<tr>
		 					<td width="12.5%" scope="col">			
		 					<label for="">Total: </label>
		 					</td>
		 					<td>
		 					'.$this->bean->orc_desctotal.'
		 					</td><td></td><td></td>
		 				</tr></tbody></table>
	 				 </div></div></div>';
	 			 echo $js.$st."<script>$('#list_subpanel_sco_ordencompra_sco_documentos .sugar_action_button').show();</script>";	
 				break;
 			case '5':
				echo "<a class=\"btn btn-success btn-sm\" onclick=\"imprimir()\">Descargar</a>
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>";	 				
 				parent::display();  				
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody><tr>
 					<td width="12.5%" scope="col">			
		 					<label for="">Importe Total: </label>
		 					</td>
		 					<td>
		 					'.$this->bean->orc_importet.'
		 					</td>
		 					<td width="12.5%" scope="col">
								Estado Actual:
								</td>
								<td class="" type="enum" field="orc_regional" width="37.5%">
								'.$arr_estado[5].'
								</td>
		 					</tr>
		 					<tr>	
		 					<td scope="col">
		 						<label for="">Descuento Total: </label>
		 						</td>
		 					<td>
		 					<input type="text" id="desc" placeholder="Ingrese descuento">
		 					<button type="submit" onclick="calc()" class="btn btn-sm btn-success" >Realizar Descuento</button>
		 				</td><td scope="col">Cambiar Estado a :</td><td><input type="button" id="btn-estados" class="btn btn-sm btn-success" onClick="estado(1);" value="'.$arr_estado[1].'"></td>
		 				</tr></tr>
		 				<tr>
		 					<td width="12.5%" scope="col">			
		 					<label for="">Total: </label>
		 					</td>
		 					<td>
		 					'.$this->bean->orc_desctotal.'
		 					</td><td></td><td></td>
		 				</tr></tbody></table>
	 				 </div></div></div>';	
	 			echo $js.$st;	
 				break;
 			case '6':
				echo "<a class=\"btn btn-success btn-sm\" onclick=\"imprimir()\">Descargar</a>
 					<a class=\"btn btn-sm btn-success\" onClick=\"showreport();\" value=\"Ver Reporte\">Ver Reporte</a>";	
 				echo $st.$js;	
 				parent::display();  				
 				echo '<div class="yui-navset detailview_tabs yui-navset-top"><div class="yui-content"><div class="detail view  detail508 expanded">
 					<table class="panelContainer" cellspacing="1"><tbody><tr>
 					<td width="12.5%" scope="col">			
		 					<label for="">Importe Total: </label>
		 					</td>
		 					<td>
		 					'.$this->bean->orc_importet.'
		 					</td>
		 					<td width="12.5%" scope="col">
								Estado Actual:
								</td>
								<td class="" type="enum" field="orc_regional" width="37.5%">
								'.$arr_estado[6].'
								</td>
		 					</tr>
		 					<tr>	
		 					<td scope="col">
		 						<label for="">Descuento Total: </label>
		 						</td>
		 					<td>
		 					<input type="text" id="desc" placeholder="Ingrese descuento">
		 					<button type="submit" onclick="calc()" class="btn btn-sm btn-success" >Realizar Descuento</button>
		 				</td><td scope="col">Cambiar Estado a :</td><td><input type="button" id="btn-estados" class="btn btn-sm btn-success" onClick="estado(6);" value="'.$arr_estado[6].'"></td>
		 				</tr></tr>
		 				<tr>
		 					<td width="12.5%" scope="col">			
		 					<label for="">Total: </label>
		 					</td>
		 					<td>
		 					'.$this->bean->orc_desctotal.'
		 					</td><td></td><td></td>
		 				</tr></tbody></table>
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

<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
  die ( 'Not A Valid Entry Point' );

require_once ('include/MVC/View/views/view.edit.php');
require_once('data/BeanFactory.php');
require_once('include/entryPoint.php');

class SCO_PlandePagosViewEdit extends ViewEdit {

  function SCO_PlandePagosViewEdit() {
    parent::ViewEdit ();
    $this->useForSubpanel = true;
  }

  function display($bean){  
  	$js = "<script>
  		//Cargando el precio total del modulo de productos  		
  		var b = [];
		var cont = 0;
  		$('#list_subpanel_sco_ordencompra_sco_productos .list tbody tr td').each(function(){
	    if(cont == 0){
	      var a = $(this).text();
	      b = a.split('|');
	      cont++;
	    }else{cont++;}
	    });
	    var tot = b[1].split(',');
  		var total = tot[3];
  		$('#ppg_monto').on('blur', function (){
  			var b = $(this).val() * 100 / total;
  			$('#ppg_porc').val(b.toFixed(2));
  		});
  		$('#ppg_porc').on('blur', function (){
  			var a = $(this).val() * total / 100;
  			$('#ppg_monto').val(a.toFixed(2));
  		});
  		$('#ppg_porc').on('blur', function(){
  			if($(this).val() > 100){  				  			
  				$(this).val((100).toFixed(2));
  			}else if($(this).val() <= 0){
  				$(this).val((0).toFixed(2));
  			}
  		});
  		$('#ppg_monto').on('blur', function(){
			if($(this).val() <= 0){
  				$(this).val((0).toFixed(2));
  			}
  		});
  	</script>";
  	echo "<style>#SCO_PlandePagos_subpanel_full_form_button{display:none;}</style>";
  	echo $js;
  	parent::display();
  }
}
?>
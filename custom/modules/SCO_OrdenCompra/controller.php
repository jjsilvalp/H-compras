<?php 

class SCO_OrdenCompraController extends SugarController {  

	function action_SubPanelViewer() {          
		require_once 'include/SubPanel/SubPanelViewer.php';    

		if ($_REQUEST['subpanel'] == 'sco_ordencompra_sco_documentos'){   		         
			$js = "<script>
			alert(".$sed.");
				window.location.reload(); 
			</script> "; 
			echo $js;                           
		}
		if ($_REQUEST['subpanel'] == 'sco_ordencompra_sco_productos'){             
			$js = "<script>
				window.location.reload(); 
			</script> "; 
			echo $js;                           
		}
	}
}
?>

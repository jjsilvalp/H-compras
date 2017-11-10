<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('data/BeanFactory.php');
require_once('include/entryPoint.php');

class SugarWidgetSubPanelDespachos extends SugarWidgetField
{
    function displayList($layout_def)
    {  
     $html = '<style>
     .cuadrado{width: 45px; height: 45px; background:#FFFFFF; float: left; margin-right: 5px; border-radius: 15%; padding: 4px; border:solid 2px #CCC;} 
     .cuadrado:hover{background:rgba(0,0,100,0.2);}   
      @keyframes latidos {
                    from { transform: none; }
                    50% { transform: scale(1.1); }
                    to { transform: none; }
                } 
     </style>';
     $id = $layout_def['fields']['ID'];     
     
      $beand = BeanFactory::getBean('SCO_Despachos', $id);
      $campo = $beand->des_estado;
      $dt = $beand->des_diastrans;
      $html .="<script>function alerta(a){ alert(a);}</script>";      
     switch ($campo) {
        case 'Activo':         
          switch ($dt){ 
            case '0':                            
             $html .= '<div id="cero" class="cuadrado" style="background:#ff0000; color:#FFF; display: inline-block; animation: latidos 2s infinite; transform-origin: center; cursor:pointer;" onclick="alerta('.$dt.')">Hito '.$dt.'</div>';
             $html .= '<div id="uno" class="cuadrado">Hito 1</div>';
             $html .= '<div id="dos" class="cuadrado">Hito 2</div>';
             $html .= '<div id="tres" class="cuadrado">Hito 3</div>';
             $html .= '<div id="cuatro" class="cuadrado">Hito 4</div>';
             $html .= '<div id="cinco" class="cuadrado">Hito 5</div>';
             return $html;
             break;
            case '1':                         
             $html .= '<div id="cero" class="cuadrado">Hito 0</div>';
             $html .= '<div id="uno" class="cuadrado" style="background:#ff0000; color:#FFF; display: inline-block; animation: latidos 2s infinite; transform-origin: center; cursor:pointer;"" onclick="alerta('.$dt.')">Hito '.$dt.'</div>';
             $html .= '<div id="dos" class="cuadrado">Hito 2</div>';
             $html .= '<div id="tres" class="cuadrado">Hito 3</div>';
             $html .= '<div id="cuatro" class="cuadrado">Hito 4</div>';
             $html .= '<div id="cinco" class="cuadrado">Hito 5</div>';
             return $html;
             break;  
            case '2':                          
             $html .= '<div id="cero" class="cuadrado">Hito 0</div>';
             $html .= '<div id="uno" class="cuadrado">Hito 1</div>';
             $html .= '<div id="dos" class="cuadrado" style="background:#20c900; color:#FFF; display: inline-block; animation: latidos 2s infinite; transform-origin: center; cursor:pointer;"" onclick="alerta('.$dt.')">Hito '.$dt.'</div>';
             $html .= '<div id="tres" class="cuadrado">Hito 3</div>';
             $html .= '<div id="cuatro" class="cuadrado">Hito 4</div>';
             $html .= '<div id="cinco" class="cuadrado">Hito 5</div>';
             return $html;
             break;
            case '3':                          
             $html .= '<div id="cero" class="cuadrado">Hito 0</div>';
             $html .= '<div id="uno" class="cuadrado">Hito 1</div>';
             $html .= '<div id="dos" class="cuadrado">Hito 2</div>';
             $html .= '<div id="tres" class="cuadrado" style="background:#ffde00; color:#FFF; display: inline-block; animation: latidos 2s infinite; transform-origin: center; cursor:pointer;"" onclick="alerta('.$dt.')">Hito '.$dt.'</div>';
             $html .= '<div id="cuatro" class="cuadrado">Hito 4</div>';
             $html .= '<div id="cinco" class="cuadrado">Hito 5</div>';
             return $html;
             break; 
            case '4':                         
             $html .= '<div id="cero" class="cuadrado">Hito 0</div>';
             $html .= '<div id="uno" class="cuadrado">Hito 1</div>';
             $html .= '<div id="dos" class="cuadrado">Hito 2</div>';
             $html .= '<div id="tres" class="cuadrado">Hito 2</div>';
             $html .= '<div id="cuatro" class="cuadrado" style="background:#20c900; color:#FFF; display: inline-block; animation: latidos 2s infinite; transform-origin: center; cursor:pointer;"" onclick="alerta('.$dt.')">Hito '.$dt.'</div>';             
             $html .= '<div id="cinco" class="cuadrado">Hito 5</div>';
             return $html;
             break;  
            case '5':                          
             $html .= '<div id="cero" class="cuadrado">Hito 0</div>';
             $html .= '<div id="uno" class="cuadrado">Hito 1</div>';
             $html .= '<div id="dos" class="cuadrado">Hito 2</div>';
             $html .= '<div id="tres" class="cuadrado">Hito 3</div>';
             $html .= '<div id="cuatro" class="cuadrado">Hito 4</div>';
             $html .= '<div id="cinco" onclick="alerta('.$dt.')" class="cuadrado" style="background:#20c900; color:#FFF; display: inline-block; animation: latidos 2s infinite; transform-origin: center; cursor:pointer;"" >Hito '.$dt.'</div>';
             return $html;
             break;
           }
          break;   
        default:
             break;
     }
     #return $html;
    }

}

?>
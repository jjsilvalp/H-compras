<?php 
$hook_version = 1; 
$hook_array = Array(); 

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'Distribuidor', 'custom/modules/SCO_Distribuidor/nomdist.php','Clnomdist', 'Fnnomdist');

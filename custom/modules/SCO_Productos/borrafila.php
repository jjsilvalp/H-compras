<?php
/*class Clborrafila
{
  function Fnborrafila($bean, $event, $arguments) 
  {
    $query = "
      SET sql_safe_updates=0, sql_select_limit=1000, max_join_size=1000000;
      UPDATE sco_ordencompra_sco_productos_c 
      SET deleted = 1 
      WHERE sco_ordencompra_sco_productossco_productos_idb in (SELECT id
        FROM sco_productos 
        WHERE name = '' and deleted = 0);
      SET sql_safe_updates=1, sql_select_limit=1000, max_join_size=1000000;
      ";
    $results = $GLOBALS['db']->query($query, true);

    $query2 = "
      SET sql_safe_updates=0, sql_select_limit=1000, max_join_size=1000000;
      UPDATE sco_productos SET deleted = 1 WHERE name = '' and deleted = 0;
      SET sql_safe_updates=1, sql_select_limit=1000, max_join_size=1000000; 
    ";
    $results = $GLOBALS['db']->query($query2, true);
  }
}*/
?>
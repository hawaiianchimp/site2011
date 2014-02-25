<?php

/**
 * Database
 * 
 * includes all database functions
 *
 * @author Sean Burke
 */
function db_connect(){
   $result = mysql_pconnect('sql204.byethost22.com', 'b22_4136288', 'monkey');
   if (!$result)
      return false;
   if (!mysql_select_db('b22_4136288_test'))
      return false;

   return $result;
}

function db_result_to_array($result){
   $res_array = array();

   for ($count=0; $row = @mysql_fetch_array($result); $count++)
     $res_array[$count] = $row;

   return $res_array;
}

?>
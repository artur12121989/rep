<?php
$link =myql_connect("localhost","root","");
if($link){
      mysql_select_db("bibloteca",$link);
}
?>

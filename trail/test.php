<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

$arr = array("element1","element2");
// $arr['name'] = "response";
echo $_GET['callback']."(".json_encode($arr).");";
?>

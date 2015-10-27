<?php
header('Access-Control-Allow-Origin: *');
require 'config.php';
$con = new mysqli($host, $user, $password, $dbname);
if ($con -> connect_error){
    echo 'cannot access database';
}
//echo 'access database';

$sql="select id,branch_name from branch";
$result = $con -> query($sql);
if ($result){
    $rs = $result->fetch_all(MYSQLI_ASSOC);
    echo ' { " items " :'.json_encode($rs).' } ';
}
$con->set_charset("utf8");
$con->close();
?>

<?php 
class DB 
{
    
}
$host = "127.0.0.1";
$user = "root";
$password = "Nani1995";
$database = "Test_1";
$connect = new mysqli($host,$user,$password,$database);

public function getBySql($sql, $connect)
{
    $return = $connect->query($sql);
}
    

?>
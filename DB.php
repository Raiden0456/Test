<?php 

$connect = new mysqli("127.0.0.1", "root", "Nani1995", "Test_1");
function getBySql($sql)
{
    global $connect;
    $return = $connect->query($sql);
    if ($return)
        return $return;
    else 
        return 'Ошибка соединения';
}
function getObjectsSql($sql)
{
    global $connect;
    $result = getBySql($sql, $connect);
    $objects = [];
    while ($obj = mysqli_fetch_object($result)) {
        $objects[] = $obj;
    }
    $result->free_result();
    return $objects;
}


?>
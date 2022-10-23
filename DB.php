<?php 

function getBySql($sql, $connect)
{
    $return = $connect->query($sql);
    if ($return)
        return $return;
    else 
        return 'Ошибка соединения';
}
function getObjectsSql($sql, $connect)
{
    $result = getBySql($sql, $connect);
    $objects = [];
    while ($obj = mysqli_fetch_object($result)) {
        $objects[] = $obj;
    }
    $result->free_result();
    return $objects;
}


?>
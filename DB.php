<?php 

function getBySql($sql, $connect)
{
    $return = $connect->query($sql);
    if ($return)
        return $return;
    else 
        return 'Ошибка соединения';
}


?>
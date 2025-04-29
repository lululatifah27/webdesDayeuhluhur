<?php

    $data = mysqli_connect("localhost", "root", "", "dbdayeuhluur");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>
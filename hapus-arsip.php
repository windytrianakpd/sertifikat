<?php

include "config/koneksi.php";

$id = $_POST['id'];

$query = "delete from surat where id = ".$id;
$result = mysqli_query($db,$query);

if(!$result){
    die('SQL Error: ' . mysqli_error($db));
}else{
    header('Location: index.php?status=sukses');
}

<?php
    require 'function.php';

    $id = $_GET['id'];

    $data = query("SELECT * FROM task WHERE id = '$id'")[0];

    if(hapus($id,  $data) > 0){
        echo '<script>alert("Task Berhasil Dihapus")</script>';
        header('Location: index.php');
    }else{
        echo '<script>alert("Task Gagal Dihapus")</script>';
    }
?>
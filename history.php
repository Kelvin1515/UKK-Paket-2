<?php
    require 'function.php';

    $task = query("SELECT * FROM history ORDER BY id ASC");

    if(isset($_POST['search'])){
        $task = cari2($_POST['cari2']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> History </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1> History </h1>
        <form action="" method="POST" class="form-search">
            <h2> Daftar Task </h2>
            <input type="text" name="cari2" id="cari2" placeholder="Masukkan Kata Kunci...">
            <button type="submit" name="search"> Cari </button>
        </form>
        <div class="table-history">
            <table>
                <tr class="top">
                    <th> ID </th>
                    <th> Task Name </th>
                    <th> Status </th>
                    <th> Priority </th>
                    <th> Due Date </th>
                    <th> Due Time </th>
                    <th> Detail </th>
                </tr>
                <?php
                    if(empty($task)){
                        echo '<tr><th colspan="7"> Data Tidak Ditemukan </th></tr>';
                    }
                    foreach($task AS $data):
                ?>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['task_name'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td><?= $data['priority'] ?></td>
                    <td><?= $data['due_date'] ?></td>
                    <td><?= $data['due_time'] ?></td>
                    <td><?= $data['detail'] ?></td>
                </tr>
                <?php
                    endforeach
                ?>
            </table>
        </div>
        <div class="form-link"> 
            <button onclick="document.location.href='index.php'"> Home </button>
        </div>
    </div>
</body>
</html>
<?php
    require 'function.php';

    $task = query("SELECT * FROM task ORDER BY due_date DESC");

    if(isset($_POST['search'])){
        $task = cari1($_POST['cari1']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> To Do List </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1> To Do List </h1>
        <form action="tambah.php">
            <button type="submit" name="submit"> Tambah Task </button>
        </form>
        <form action="" method="POST" class="form-search">
            <h2> Daftar Task </h2>
            <input type="text" name="cari1" id="cari1" placeholder="Masukkan Kata Kunci...">
            <button type="submit" name="search"> Cari </button>
        </form>
        <div class="table-index">
            <table>
                <tr class="top">
                    <th> Task Name </th>
                    <th> Status </th>
                    <th> Priority </th>
                    <th> Due Date </th>
                    <th> Aksi </th>
                </tr>
                <?php
                    if(empty($task)){
                        echo '<tr><th colspan="5"> Data Tidak Ditemukan </th></tr>';
                    }
                    
                    foreach($task AS $data):
                    
                    if($data['status'] == 'No Stated'){
                ?>
                <tr>
                    <td><?= $data['task_name'] ?></td>
                    <td class="status1"><?= $data['status'] ?></td>
                    <td><?= $data['priority'] ?></td>
                    <td><?= $data['due_date'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $data['id'] ?>"> Edit | </a>
                        <a href="view.php?id=<?= $data['id'] ?>"> View | </a>
                        <a href="hapus.php?id=<?= $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Task Ini?')"> Hapus </a>
                    </td>
                </tr>
                <?php
                    }elseif($data['status'] == 'In Progress'){
                ?>
                <tr>
                    <td><?= $data['task_name'] ?></td>
                    <td class="status2"><?= $data['status'] ?></td>
                    <td><?= $data['priority'] ?></td>
                    <td><?= $data['due_date'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $data['id'] ?>"> Edit | </a>
                        <a href="view.php?id=<?= $data['id'] ?>"> View | </a>
                        <a href="hapus.php?id=<?= $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Task Ini?')"> Hapus </a>
                    </td>
                </tr>
                <?php
                    }elseif($data['status'] == 'Post Poned'){
                ?>
                <tr>
                    <td><?= $data['task_name'] ?></td>
                    <td class="status3"><?= $data['status'] ?></td>
                    <td><?= $data['priority'] ?></td>
                    <td><?= $data['due_date'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $data['id'] ?>"> Edit | </a>
                        <a href="view.php?id=<?= $data['id'] ?>"> View | </a>
                        <a href="hapus.php?id=<?= $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Task Ini?')"> Hapus </a>
                    </td>
                </tr>
                <?php
                    }elseif($data['status'] == 'Canceled'){
                ?>
                <tr>
                    <td><?= $data['task_name'] ?></td>
                    <td class="status4"><?= $data['status'] ?></td>
                    <td><?= $data['priority'] ?></td>
                    <td><?= $data['due_date'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $data['id'] ?>"> Edit | </a>
                        <a href="view.php?id=<?= $data['id'] ?>"> View | </a>
                        <a href="hapus.php?id=<?= $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Task Ini?')"> Hapus </a>
                    </td>
                </tr>
                <?php
                    }

                    endforeach
                ?>
            </table>
        </div>
        <div class="form-link">
            <button onclick="document.location.href='history.php'"> History </button>
        </div>
    </div>
</body>
</html>
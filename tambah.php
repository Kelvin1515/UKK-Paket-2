<?php
    require 'function.php';

    if(isset($_POST['submit'])){
        if(tambah($_POST) > 0){
            echo '<script>alert("Task Berhasil Ditambah")</script>';
            header('Location: index.php');
        }else{
            echo '<script>alert("Task Gagal Ditambah")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tambah Task </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1> Tambah Task </h1>
        <form action="" method="POST">
            <div>
                <label for="task_name"> Task Name </label>
                <input type="text" name="task_name" id="task_name" placeholder="Task Name" required>
            </div>
            <div>
                <label for="status"> Status </label>
                <select name="status" id="status">
                    <option value="No Stated"> No Stated </option>
                    <option value="In Progress"> In Progress </option>
                    <option value="Post Poned"> Post Poned </option>
                    <option value="Canceled"> Canceled </option>
                </select>
            </div>
            <div>
                <label for="priority"> Priority </label>
                <select name="priority" id="priority">
                    <option value="Rendah"> Rendah </option>
                    <option value="Sedang"> Sedang </option>
                    <option value="Tinggi"> Tinggi </option>
                </select>
            </div>
            <div>
                <label for="due_date"> Due Date </label>
                <input type="date" name="due_date" id="due_date" value="<?= date('Y-m-d') ?>" required>
            </div>
            <div>
                <button type="submit" name="submit"> Tambah Task</button>
            </div>
        </form>
        <div class="form-link">
            <button onclick="document.location.href='index.php'"> Back </button>
        </div>
    </div>
</body>
</html>
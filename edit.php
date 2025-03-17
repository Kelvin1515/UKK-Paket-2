<?php
    require 'function.php';

    $id = $_GET['id'];

    $data = query("SELECT * FROM task WHERE id = '$id'")[0];

    if(isset($_POST['submit'])){
        if(edit($_POST) > 0){
            echo '<script>alert("Task Berhasil Diedit")</script>';
            header('Location: index.php');
        }else{
            echo '<script>alert("Task Gagal Diedit")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit Task </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1> Edit Task </h1>
        <form action="" method="POST">
            <div>
                <label for="task_name"> Task Name </label>
                <input type="text" name="task_name" id="task_name" value="<?= $data['task_name'] ?>" required>
            </div>
            <div>
                <label for="status"> Status </label>
                <select name="status" id="status">
                    <option value="No Stated" <?php if($data['status'] == 'No Stated') echo 'selected' ?>> No Stated </option>
                    <option value="In Progress" <?php if($data['status'] == 'In Progress') echo 'selected' ?>> In Progress </option>
                    <option value="Post Poned" <?php if($data['status'] == 'Post Poned') echo 'selected' ?>> Post Poned </option>
                    <option value="Canceled" <?php if($data['status'] == 'Canceled') echo 'selected' ?>> Canceled </option>
                </select>
            </div>
            <div>
                <label for="priority"> Priority </label>
                <select name="priority" id="priority">
                    <option value="Rendah" <?php if($data['priority'] == 'Rendah') echo 'selected' ?>> Rendah </option>
                    <option value="Sedang" <?php if($data['priority'] == 'Sedang') echo 'selected' ?>> Sedang </option>
                    <option value="Tinggi" <?php if($data['priority'] == 'Tinggi') echo 'selected' ?>> Tinggi </option>
                </select>
            </div>
            <div>
                <label for="due_date"> Due Date </label>
                <input type="date" name="due_date" id="due_date" value="<?= $data['due_date'] ?>" required>
            </div>
            <div>
                <button type="submit" name="submit"> Edit Task</button>
            </div>
        </form>
        <div class="form-link">
            <button onclick="document.location.href='index.php'"> Back </button>
        </div>
    </div>
</body>
</html>
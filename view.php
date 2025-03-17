<?php
    require 'function.php';

    $id = $_GET['id'];

    $data = query("SELECT * FROM task WHERE id = '$id'")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> View Task </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1> View Task </h1>
            <table>
                <tr>
                    <th> ID </th>
                    <th> Task Name </th>
                    <th> Status </th>
                    <th> Priority </th>
                    <th> Due Date </th>
                    <th> Due Time </th>
                </tr>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['task_name'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td><?= $data['priority'] ?></td>
                    <td><?= $data['due_date'] ?></td>
                    <td><?= $data['due_time'] ?></td>
                </tr>
            </table>
        <div class="form-link"> 
            <button onclick="document.location.href='index.php'"> Back </button>
        </div>
    </div>
</body>
</html>
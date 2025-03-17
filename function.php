<?php
    $conn = mysqli_connect("localhost", "root", "", "UKK_todolist");

    function query($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row =  mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function cari1($data){

        $query = "SELECT * FROM task WHERE task_name LIKE '%$data%' OR status LIKE '%$data%' OR priority LIKE '%$data%' OR due_date LIKE '%$data%' ORDER BY due_date DESC";

        return query($query);
    }

    function cari2($data){

        $query = "SELECT * FROM history WHERE task_name LIKE '%$data%' OR status LIKE '%$data%' OR priority LIKE '%$data%' OR due_date LIKE '%$data%' OR detail LIKE '%$data%' ORDER BY due_date ASC";

        return query($query);
    }

    function tambah($data){
        global $conn;

        $task_name = htmlspecialchars($data['task_name']);
        $status = htmlspecialchars($data['status']);
        $priority = htmlspecialchars($data['priority']);
        $due_date = htmlspecialchars($data['due_date']);

        $query = "INSERT INTO task VALUES ('', '$task_name', '$status', '$priority', '$due_date', current_time())";
        mysqli_query($conn, $query);

        $query = "INSERT INTO history VALUES ('', '$task_name', '$status', '$priority', '$due_date', current_time(), 'Added')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function edit($data){
        global $conn;

        $id = $_GET['id'];
        $task_name = htmlspecialchars($data['task_name']);
        $status = htmlspecialchars($data['status']);
        $priority = htmlspecialchars($data['priority']);
        $due_date = htmlspecialchars($data['due_date']);

        $query = "UPDATE task SET task_name = '$task_name', status = '$status', priority = '$priority', due_date = '$due_date' WHERE id = '$id'";
        mysqli_query($conn, $query);

        $query = "INSERT INTO history VALUES ('', '$task_name', '$status', '$priority', '$due_date', current_time(), 'Edited')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id, $data){
        global $conn;

        $id = $_GET['id'];
        $task_name = htmlspecialchars($data['task_name']);
        $status = htmlspecialchars($data['status']);
        $priority = htmlspecialchars($data['priority']);
        $due_date = htmlspecialchars($data['due_date']);

        $query = "DELETE FROM task WHERE id = '$id'";
        mysqli_query($conn, $query);

        $query = "INSERT INTO history VALUES ('', '$task_name', '$status', '$priority', '$due_date', current_time(), 'Deleted')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>
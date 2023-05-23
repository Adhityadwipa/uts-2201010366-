<?php

    include '../config.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM tbmahasiswa WHERE id='$id'";
    $return = mysqli_query($conn, $sql);

    header("Location: data_mahasiswa.php");

?>
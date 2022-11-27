<?php
    include('connector.php');
    $id=$_GET['id'];
    $gambar = mysqli_query($conn, "SELECT foto_mobil FROM table_user WHERE id_mobil = $id");
    $gmbr = mysqli_fetch_assoc($gambar);

    unlink("../asset/".$gmbr['foto_mobil']);

    $query = "DELETE FROM table_user WHERE id_mobil = $id";
    $result = mysqli_query($conn, $query);

    header('Location: ../index.php?page=mycar');

?>
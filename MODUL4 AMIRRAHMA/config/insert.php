<?php
    include ('connector.php');
    $mobil = ($_POST["mobil"]);
    $nama = ($_POST["nama"]);
    $merk = ($_POST["merk"]);
    $tanggal = ($_POST["tanggal"]);
    $deskripsi = ($_POST["deskripsi"]);
    $foto = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $statusbayar = ($_POST["statusbayar"]);
    move_uploaded_file($foto_tmp, '../asset/'.$foto);
    $query = "INSERT INTO table_user (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$mobil', '$nama', '$merk', '$tanggal', '$deskripsi', '$foto', '$statusbayar')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('Location: ../index.php?page=mycar');
    } else {
        echo 'Gagal input data';
    }
?>

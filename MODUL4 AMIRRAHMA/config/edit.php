<?php
    include ('connector.php');
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $mobil = ($_POST["mobil"]);
        $nama = ($_POST["nama"]);
        $merk = ($_POST["merk"]);
        $tanggal = ($_POST["tanggal"]);
        $deskripsi = ($_POST["deskripsi"]);
        $foto = $_FILES['foto']['name'];
        $foto_tmp = $_FILES['foto']['tmp_name'];
        $statusbayar = ($_POST["statusbayar"]);
        if ($foto_tmp) {
            move_uploaded_file($foto_tmp, '../asset/'.$foto);
            $query = "UPDATE table_user SET nama_mobil = '$mobil', pemilik_mobil = '$nama', merk_mobil = '$merk', tanggal_beli = '$tanggal', deskripsi = '$deskripsi', foto_mobil = '$foto', status_pembayaran = '$statusbayar' WHERE id_mobil = $id";
            $result = mysqli_query($conn, $query);
        } else {
            $query = "UPDATE table_user SET nama_mobil = '$mobil', pemilik_mobil = '$nama', merk_mobil = '$merk', tanggal_beli = '$tanggal', deskripsi = '$deskripsi', status_pembayaran = '$statusbayar' WHERE id_mobil = $id";
            $result = mysqli_query($conn, $query);
        }
        header('Location: ../index.php?page=mycar');
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
  <?php 
    include 'config/connector.php';
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM table_user WHERE id_mobil=$id");
    $read = mysqli_fetch_assoc($result);
  ?>
    <section>
      <div class="container text-justify" style="margin-top:60px">
      <div class="row">
      <div class="col">
          <h1>
          <?= $read['nama_mobil'] ?>
          </h1>
          <p> detail mobil <b><?= $read['nama_mobil'] ?></b></p>
          <img src="asset/<?= $read['foto_mobil'] ?>" style="width:450px;padding-top:30px;" alt="">
      </div>
      <div class="col">
        <fieldset disabled="disabled">
        <form method="post">
        <div class="mb-3">
      <label for="mobil" class="form-label">
        <br><h5>Nama Mobil</h5>
      </label>
      <input type="text" class="form-control" value="<?=$read['nama_mobil']?>" name="mobil" id="mobil">
    </div>
        <div class="mb-3">
      <label for="nama" class="form-label">
        <h5>Nama Pemilik</h5>
      </label>
      <input type="text" class="form-control" value="<?=$read['pemilik_mobil']?>" name="nama" id="nama" >
    </div>
        <div class="mb-3">
      <label for="merk" class="form-label">
        <h5>merk</h5>
      </label>
      <input type="text" class="form-control" value="<?=$read['merk_mobil']?>" name="merk" id="merk">
    </div>
        <div class="mb-3">
      <label for="tanggal" class="form-label">
        <h5>tanggal beli</h5>
      </label>
      <input type="date" class="form-control" value="<?=$read['tanggal_beli']?>" id="tanggal" name="tanggal">
    </div>
        <div class="mb-3">
      <label for="deskripsi" class="form-label">
        <h5>Deskripsi</h5>
      </label>
      <textarea  class="form-control" id="deskripsi" value="" name="deskripsi" style="height:200px"><?php echo $read['deskripsi'] ?></textarea>
    </div>
        <div class="mb-3">
      <label for="foto" class="form-label">
      <h5>Foto</h5>
      </label>
        <input class="form-control" type="file" value="<?=$read['foto_mobil']?>" id="foto" name="foto">
        <p>Mobil: <b> <?=$read['foto_mobil']?> </b></p>
    </div>
        <h5>Status Pembayaran</h5>
        <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" value="" name="statusbayar" id="lunas" value="Lunas" checked>
      <label class="form-check-label" for="lunas">Lunas</label>
    </div>
        <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="statusbayar" id="belumlunas" value="Belum Lunas">
      <label class="form-check-label" for="belumlunas">Belum Lunas</label>
    </div>
    <br>
    <br>
    </fieldset>
      <a class="btn btn-primary booking-cta" href="index.php?page=edit&id=<?= $read['id_mobil'] ?>" name="submit">
        edit
      </a>                    
        </form>
        </div>
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
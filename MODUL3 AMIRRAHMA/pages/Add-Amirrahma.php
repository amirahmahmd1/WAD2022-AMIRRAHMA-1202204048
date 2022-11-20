<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
  <section id="navbar">
  <nav class="navbar navbar-expand-lg bg-primary ">
    <div class="container">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="Home-Amirrahma.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">MyCar</a>
        </li>
        </ul>
        </div>
        </div>
        </section>

    <section id="isiaddcar" style="padding-left:60px;margin:60px;">
        <h1>
        Tambah Mobil
        </h1>
        <p>
        Tambah Mobil baru anda ke list show room
        </p>

        <form action="" method="post">
        <div class="mb-3" style="margin-right:20%">
                <label for="mobil" class="form-label"><h1>Nama Mobil</h1></label>
                <input type="text" class="form-control" name="mobil" id="mobil" placeholder="Ayla">
        </div>
        <div class="mb-3" style="margin-right:20%">
            <label for="nama" class="form-label"><h1>Nama Pemilik</h1></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Amirrahma - 1202204048">
        </div>
        <div class="mb-3" style="margin-right:20%">
            <label for="merk" class="form-label"><h1>Merk</h1></label>
            <input type="text" class="form-control" name="merk" id="merk" placeholder="Daihatsu">
        </div>
        <div class="mb-3" style="margin-right:20%">
            <label for="tanggal" class="form-label"><h1>Tanggal Beli</h1></label>
            <input type="date" class="form-control" name="tanggal" id="tanggal">
        </div>
        <div class="mb-3" style="margin-right:20%">
            <label for="deskripsi" class="form-label"><h1>Deskripsi</h1></label>
            <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" style="height:140px" placeholder="The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with 
a high level of comfort and the ideal qualities to make it your daily driver. 
The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp.
With a long range of up to 591 kilometres* and five spacious full-sized seats,
it is the perfect companion for any journey."></textarea>
        </div>
        <div class="mb-3" style="margin-right:20%">
            <label for="foto" class="form-label"><h1>Foto</h1></label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>

        <h1>Status Pembayaran</h1>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="lunas" id="lunas" value="Lunas">
        <label class="form-check-label" for="inlineRadio1">Lunas</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="belumlunas" id="belumlunas" value="Belum Lunas">
        <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
        </div>

        <br><br>
        <a href="ListCar-Amirrahma.php"><button type="submit" name="submit" class="btn btn-primary">
            Selesai
        </button>
        </a>    
    </section>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
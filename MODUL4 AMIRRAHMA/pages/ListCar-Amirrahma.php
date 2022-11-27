<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Car</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <section id="isishowroom" style="padding-left:60px;margin:60px;">
    <h1>
      My Show Room
    </h1>
    <p class="fw-light">
      List Show Room Amirrahma - 1202204048
    </p>
    <div class="container text-center">
      <div class="row row-cols-3">
        <?php
        include("config/connector.php");
        $result = mysqli_query($conn, 'SELECT * FROM table_user');
        if ($result) {
          while ($judulcolumn = mysqli_fetch_array($result)) {
        ?>
            <div class="col">
              <div class="card" style="width:250px;margin-top:20px">
                <img src="asset/<?php echo $judulcolumn['foto_mobil']; ?>" style="height:180px" class="card-img-top img-card" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $judulcolumn['nama_mobil'] ?></h5>
                  <p class="card-text">
                    <?php
                    if (strlen($judulcolumn['deskripsi']) > 21) {
                      echo substr($judulcolumn['deskripsi'], 0, 21) . "...";
                    } else {
                      echo $judulcolumn['deskripsi'];
                    }
                    ?>
                  </p>
                  <div class="btn-container">
                    <a href="index.php?page=detail&id=<?= $judulcolumn['id_mobil'] ?>" class="btn btn-primary rounded-pill">Detail</a>
                    <a href="config/delete.php?id=<?= $judulcolumn['id_mobil'] ?>" class="btn btn-danger rounded-pill">Delete</a>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
    <br>
    <br>
    <h3><?php echo 'jumlah mobil : '. mysqli_num_rows($result); ?></h3>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
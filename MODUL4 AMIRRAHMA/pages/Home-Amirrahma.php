<?php
  include ('config/connector.php');
  $query = "SELECT * FROM table_user";
  $result = mysqli_query($conn, $query);
  global $result;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>    
    <section id="isihome" style="margin-top:13%">
    <div class="container text-center">
  <div class="row">
    <div class="col" style="text-align:justify;margin-top:5%">
      <h1>Selamat Datang Di <br> Show Room Amirrahma</h1>
      <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
      <a class="nav-link active text-white" aria-current="page" href="
          <?php if(mysqli_num_rows($result) > 0) {
            echo "index.php?page=mycar";
            } else {
            echo "index.php?page=additem";
            }?>">
        <button type="button" class="btn btn-primary">MyCar</button>
        </a>
    </div>
    <div class="col">
      <img src="asset\ayla.jpg" alt="">
    </div>
  </div>
</div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
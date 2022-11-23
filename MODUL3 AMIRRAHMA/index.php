<?php
    include ('config/connector.php');
    $query = "SELECT * FROM table_user";
    $result = mysqli_query($conn, $query);
    global $result;
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_modul3_WAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<section id="navbar">
  <nav class="navbar navbar-expand-lg bg-primary ">
    <div class="container">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="
          <?php if(mysqli_num_rows($result) > 0) {
            echo "index.php?page=mycar";
            } else {
            echo "index.php?page=additem";
            }?>">
            MyCar
        </a>
        </li>
        <li>
        <a href="<?php echo "index.php?page=additem";?>">
            <button class="btn btn-light" type="button">
                Add Car
            </button>
        </a>
        </li>
        </ul>
        </div>
        </div>
        </section>
        <?php
            if (isset($_GET['page']) && isset($_GET['id'])) {
                $page = $_GET['page'];
                $id = $_GET['id'];
                switch ($page) {
                case 'detail':
                    include "pages/Detail-Amirrahma.php";
                    break;
                case 'edit':
                    include "pages/Edit-Amirrahma.php";
                    break;
                default:
                    echo "Page Tidak Ditemukan";
                    break;
                }
            } else if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'mycar':
                        include "pages/ListCar-Amirrahma.php";
                        break;
                    case 'additem':
                        include "pages/Add-Amirrahma.php";
                        break;
                    default:
                        echo "Page Tidak Ditemukan";
                        break;
                }
            }
            else {
                include "pages/Home-Amirrahma.php";
            }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
<?php
include('config/connector.php');
$query = "SELECT * FROM table_user";
$result = mysqli_query($conn, $query);
global $result;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #hide {
            display: none
        }
    </style>
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
                            <a id="<?= !isset($_COOKIE['name']) ? 'hide' : '' ?>" class="nav-link active text-white" aria-current="page" href="
          <?php if (mysqli_num_rows($result) > 0) {
                echo "index.php?page=mycar";
            } else {
                echo "index.php?page=additem";
            } ?>">
                                MyCar
                            </a>
                        </li>
                        <li>
                            <a id="<?= !isset($_COOKIE['name']) ? 'hide' : '' ?>" href="<?php echo "index.php?page=additem"; ?>">
                                <button class="btn btn-light" type="button">
                                    Add Car
                                </button>
                            </a>
                        </li>
                        <li style="margin-right:60px">
                            <a id="<?= isset($_COOKIE['name']) ? 'hide' : '' ?>" href="<?php echo "index.php?page=login"; ?>">
                                <button class="btn btn-primary" type="button">
                                    Login
                                </button></a>
                        </li>
                        <li style="margin-right:60px">
                            <div id="<?= !isset($_COOKIE['name']) ? 'hide' : '' ?>">
                                <a id="" href="<?php echo "index.php?page=profile"; ?>">
                                    <div class="dropdown">
                                        <a class="btn btn-light text-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php if (isset($_COOKIE['name'])) {
                                                echo $_COOKIE['name'];
                                            }  ?>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?php echo "index.php?page=profile" ?>">Profile</a></li>
                                            <li><a class="dropdown-item" href="<?php echo "index.php?page=logout" ?>">Log Out</a></li>
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
            case 'profile':
                include "pages/Profile-Amirrahma.php";
                break;
            case 'logout':
                include "config/logout.php";
                break;
            case 'login':
                include "pages/Login-Amirrahma.php";
                break;
            case 'register':
                include "pages/Register-Amirrahma.php";
                break;
            default:
                echo "Page Tidak Ditemukan";
                break;
        }
    } else {
        include "pages/Home-Amirrahma.php";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js%22%3E" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MY BOOKING M2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <ul class="nav justify-content-center" style="background-color: black">
  <li class="nav-item">
    <a class="nav-link text-light" href="Amirrahma_home.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="Amirrahma_booking.php">BOOKING</a>
  </li>
</ul>
<center>
<br>
    <h1 >Thank You, AMIRRAHMA_1202204048 for Reserving!</h1> <br>
    <p>Please double check your reservation details</p>
<br>
</center>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Booking Number</th>
      <th scope="col">Name</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Car Type</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Service(s)</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">        
        <?php echo rand()
        ?>
        </th>
        <td><?php 
        echo $_POST["n"];
      ?>
      </td>
      <td><?php $bd = strtotime($_POST["bd"] . $_POST["st"]);
        echo date('Y-m-d H:i:s', $bd);
      ?></td>
      <td>
        <?php $d = $_POST["d"];
        $co = strtotime($_POST["bd"] . $_POST["st"]."+$d days ");
        echo date('Y-m-d H:i:s', $co);
      ?></td>

      <td><?php 
        echo $_POST["car"];
      ?></td>

      <td><?php 
        echo $_POST["pn"];
      ?>
      </td>      
      <td> 
        <?php 
        if(isset($_POST["1"])){
        echo ("Health Protocol <br>");
      }if(isset($_POST["2"])){
        echo ("Driver <br>");
      }if(isset($_POST["3"])){
        echo ("Fuel Filled <br>");
      }if(empty($_POST["1"]) && empty($_POST["2"]) && empty($_POST["3"])){
        echo ("No services");
      }
      ?></td>
    <td>
    <?php 
      $cars = $_POST["car"];
      $days = $_POST["d"];
      if(($_POST["d"])){
        $days = 0;
      }
      if ($cars=="Rush"){
        $price = 200000*$days;
        if (isset($_POST["1"])){
          $price+=25000;
        }
        if (isset($_POST["2"])){
          $price+=100000;
        }
        if (isset($_POST["3"])){
          $price+=25000;
        }
        echo ("Rp $price");
      }
      if ($cars=="Ayla"){
        $price = 150000*$days;
        if (isset($_POST["1"])){
          $price+=25000;
        }
        if (isset($_POST["2"])){
          $price+=100000;
        }
        if (isset($_POST["3"])){
          $price+=250000;
        }
        echo ("Rp $price");
      }
      if ($cars=="Brio"){
        $price = 150000*$days;
        if (isset($_POST["1"])){
          $price+=25000;
        }
        if (isset($_POST["2"])){
          $price+=100000;
        }
        if (isset($_POST["3"])){
          $price+=250000;
        }
        echo ("Rp $price");
      }
      ?>
    </td>
    </tr>
  </tbody>
</table>

<section>
<div class="fixed-bottom" style="background-color: grey">
      <center>
        <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none;">
          <h4 style="padding:10px">Created by AMIRRAHMA_1202204048
          </h4>
        </a> 
      </center>
</div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
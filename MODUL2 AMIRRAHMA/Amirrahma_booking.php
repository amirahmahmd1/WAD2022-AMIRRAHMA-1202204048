<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BOOKING M2</title>
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
    <h1 >Rent your car now!</h1> <br>
<br>
</center>

<div class="container text-left">
  <div class="row">
    <div class="col">

    <?php
        if (isset($_POST['r'])){
          echo '<img src="rush.jpg">';
        }
        if (isset($_POST['a'])){
          echo '<img src="ayla.jpg">';
        }
        if (isset($_POST['b'])){
          echo '<img src="brio.jpg">';
        }
        if (empty($_POST["r"]) && empty($_POST["a"]) && empty($_POST["b"])){
            echo '<img src="rush.jpg">';
        }
      ?>

    </div>
    <div class="col">
    <form action="Amirrahma_my booking.php" method="post">
    <br><h5>Nama</h5>
        <input class="form-control" type="text" value="AMIRRAHMA_1202204048" aria-label="Disabled input example" name="n" readonly >
        <br><h5>Book Date</h5>
        <input class="form-control" type="date" placeholder="DD/MM/YYYY" aria-label="default input example" name="bd">
        <br><h5>Start Time</h5>
        <input class="form-control" type="time" placeholder="--:--" aria-label="default input example" name="st">
        <br><h5>Duration (Days)</h5>
        <input class="form-control" type="number" name="">
        <br><h5>Car Type</h5>
        <select name="car" class="form-select" aria-label="Default select example">

        <?php
        if (isset($_POST['r'])){
          echo '<option selected value="Rush">Rush</option>
          <option value="Ayla">Ayla</option>
          <option value="Brio">Brio</option>';
        }
        if (isset($_POST['a'])){
          echo '<option value="Rush">Rush</option>
          <option selected value="Ayla">Ayla</option>
          <option value="Brio">Brio</option>';
        }
        if (isset($_POST['b'])){
          echo '<option value="Rush">Rush</option>
          <option value="Ayla">Ayla</option>
          <option selected value="Brio">Brio</option>';
        }
        if (empty($_POST["r"]) && empty($_POST["a"]) && empty($_POST["b"])){
            echo '<option selected value="Rush">Rush</option>
            <option value="Ayla">Ayla</option>
            <option value="Brio">Brio</option>';
        }
      ?>
          </select>
          <br><h5>Phone Number</h5>
        <input class="form-control" type="number" name="pn">
        <br><h5>Add Service(s)</h5>
          <div class="form-check">
  <input name="1" class="form-check-input" type="checkbox" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Health protocol / Rp 25.000
  </label>
</div>
<div class="form-check">
  <input name="2" class="form-check-input" type="checkbox" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Driver / Rp 100.000
  </label>
</div>
<div class="form-check">
  <input name="3" class="form-check-input" type="checkbox" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Fuel filled / Rp 250.000
  </label>
</div>
<br>
<div class="d-grid gap-2 col mb-3">
  <button class="btn btn-success" type="submit" name="submit">
    Book
  </button>
</form>
  </div>

    </div>
  </div>
</div>

<section style="background-color: grey">
      <center>
        <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none;">
          <h4 style="padding:10px; margin-top: 100px">Created by AMIRRAHMA_1202204048
          </h4>
        </a> 
      </center>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
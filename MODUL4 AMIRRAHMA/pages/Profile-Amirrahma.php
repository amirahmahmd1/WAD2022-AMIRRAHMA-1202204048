<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section style="margin:50px;padding-left:100px;padding-right:100px">
        <center>
            <h1>
                Profile
            </h1>
            <div style="text-align:left">
                <div class="mb-3 row">
                    <label for="profile_email" class="col-sm-2 col-form-label">Email<a style="color:red">*</a></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" name="profile_email" id="profile_email" value="<?php echo $_COOKIE['email']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="profile_name" class="col-sm-2 col-form-label">Nama<a style="color:red">*</a></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="profile_name" id="profile_name" value="<?php echo $_COOKIE['name']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="profile_nomorhp" class="col-sm-2 col-form-label">Nomor Handphone<a style="color:red">*</a></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="profile_nomorhp" id="profile_nomorhp" value="<?php echo $_COOKIE['no_hp']; ?>">
                    </div>
                </div>
                <hr>
                <div class="mb-3 row">
                    <label for="profile_pw" class="col-sm-2 col-form-label">Kata Sandi<a style="color:red">*</a></label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="profile_pw" id="profile_pw" placeholder="Kata Sandi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="profile_confirmpassword" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi<a style="color:red">*</a></label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="profile_confirmpassword" id="profile_confirmpassword" placeholder="Konfirmasi Kata Sandi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="profile_navbar" class="col-sm-2 col-form-label">Navbar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="profile_navbar" id="profile_navbar" value="blue" readonly>
                    </div>
                </div>
                <center>
                    <input class="btn btn-primary booking-cta" name="edit" type="submit" value="Update" style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 30px">
                </center>
            </div>
        </center>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
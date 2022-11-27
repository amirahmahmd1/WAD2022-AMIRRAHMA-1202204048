<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="row" style="width: 96vw">
        <div class="col">
        <img src="asset/mobil.png" alt="" style="max-width: 100%;height: 800px;object-fit:cover;">
        </div>
        <div class="col">
            <form action="config/register.php" enctype="multipart/form-data" method="POST" style="padding:60px;">
                <div class="mb-3">
                    <h2>Register</h2>
                    <label for="email" class="form-label">Email<a style="color:red">*</a></label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor Handphone<a style="color:red">*</a></label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                </div>
                <div class="mb-3">
                    <label for="pw" class="form-label">Kata Sandi<a style="color:red">*</a></label>
                    <input type="password" class="form-control" name="pw" id="pw" required>
                </div>
                <div class="mb-3">
                    <label for="konfirmasi_pw" class="form-label">Konfirmasi Kata Sandi<a style="color:red">*</a></label>
                    <input type="password" class="form-control" name="konfirmasi_pw" id="konfirmasi_pw" required>
                </div>
                <button type="submit" class="btn btn-primary" style="padding-left: 30px;padding-right: 30px">Daftar</button>
                <p>Sudah punya akun? <a href="index.php?page=login">Login</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
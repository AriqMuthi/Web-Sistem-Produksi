<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>From Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mt-4 col-7 mx-auto">
                    <!-- Form judul -->
                    <div class="border p-3 rounded-3 bg-light">
                        <div class="alert alert-primary text-lg-center">
                            <h2>Login</h2>
                            <p>Harap isi dengan benar!</p>
                        </div>
                        <?php if (session()->getFlashdata('pesan')): ?>
                        <div class="alert alert-danger text-lg-center">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                        <?php endif; ?>
                        <!-- Form isian -->
                        <form action="/login/loginproses" method="post">
                            <?= csrf_field(); ?>
                                <!-- agar input data hanya bisa dari halaman ini -->
                                <div class="form-group">
                                    <label for="user">Username</label>
                                    <input type="text" class="form-control" id="login" placeholder="Masukan Username"
                                        name="username">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="tproduksi">Password</label>
                                    <input type="password" class="form-control" id="tproduksi"
                                        placeholder="Masukan Password" name="password">
                                </div>
                                <!-- Form tombol -->
                                <button type="submit" class="btn btn-primary mt-3">Login</button>
                                <button type="reset" class="btn btn-danger mt-3">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
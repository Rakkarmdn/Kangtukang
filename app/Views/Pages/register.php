<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Register </title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="container-fluid bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 login-card">
                    <div class="row">
                        <div class="col-md-5 detail-part">
                            <div class="center-img-container-reg">
                                <img src="<?= base_url('assets/img/favicon.png'); ?>">
                            </div>
                            <h1 class="ktk-text" style="color: #c0545b;">KANGTUKANG</h1>
                        </div>
                        <div class="col-md-7 logn-part">
                            <div class="row">
                                <div class="col-lg-10 col-md-12 mx-auto">
                                    <div class="form-cover">
                                        <h6>Register Here</h6>
                                        <form action="<?= base_url('register/saveData'); ?>" method="post">
                                            <input name="username" placeholder="Username" type="text" class="form-control" required>
                                            <input name="password" placeholder="Password" type="password" class="form-control" required>
                                            <input name="no_telp" placeholder="No telp" type="text" class="form-control" required>
                                            <div class="row form-footer">
                                                <div class="col-md-4 forget-paswd">
                                                    <a href="<?= base_url('login') ?>">Login</a>
                                                </div>
                                                <div class="col-md-12 button-div-reg">
                                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                                </div>
                                            </div>
                                        </form>
                                        <?php if(session()->getFlashdata('error')): ?>
                                            <div class="alert alert-danger mt-3">
                                                <?= session()->getFlashdata('error'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer id="footer" class="footer position-relative">
    <div class="container copyright text-center mt-6">
      <p>© <span>2024 - </span> <strong class="px-1 sitename">KANGTUKANG</strong></p>
      <div class="credits">
      </div>
    </div>

  </footer>

</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>
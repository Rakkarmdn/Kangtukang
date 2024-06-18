<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
</head>

<body>
    <div class="container-fluid bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 login-card">
                    <div class="row">
                        <div class="col-md-5 detail-part">
                            <div class="center-img-container">
                                <img src="<?= base_url('assets/img/favicon.png'); ?>">
                            </div>
                            <h1 class="ktk-text-log"  style="color: #c0545b;">KANGTUKANG</h1>
                        </div>
                        <div class="col-md-7 logn-part">
                            <div class="row">
                                <div class="col-lg-10 col-md-12 mx-auto">
                                    <div class="form-cover">
                                        <h6>Login Here</h6>
                                        <form action="<?= base_url('login/auth'); ?>" method="post">
                                            <input name="username" placeholder="Username" type="text" class="form-control text-dark" required>
                                            <input name="password" placeholder="Password" type="password" class="form-control text-dark" required>
                                            <div class="row form-footer">
                                                <div class="col-md-6 forget-paswd">
                                                    <a href="<?= base_url('register'); ?>">Daftar</a>
                                                </div>
                                                <div class="col-md-12 button-div mt-n2">
                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Flash data message -->
                                        <?php if(session()->getFlashdata('message')): ?>
                                            <div class="alert alert-success mt-3">
                                                 <?= session()->getFlashdata('message'); ?>
                                            </div>
                                        <?php endif; ?>
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
        <div class="container copyright-login text-center mt-6">
            <p>© <span>2024 - </span> <strong class="px-1 sitename">KANGTUKANG</strong></p>
            <div class="credits">
            </div>
        </div>
    </footer>

    <script src="<?= base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>

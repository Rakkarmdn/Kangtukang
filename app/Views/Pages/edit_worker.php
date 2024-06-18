<!DOCTYPE html>
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
                            <div class="center-img-container-edit-worker">
                                <img src="<?= base_url('assets/img/favicon.png'); ?>">
                            </div>
                            <h1 class="ktk-text-edit-worker"  style="color: #c0545b;">KANGTUKANG</h1>
                        </div>
                        <div class="col-md-7 logn-part">
                            <div class="row">
                                <div class="col-lg-10 col-md-12 mx-auto">
                                    <div class="form-cover">
                                    <h2>Edit Worker</h2>
                                        <form action="<?= base_url('workers_dashboard/update/'.$worker['id']); ?>" method="post">
                                            <div class="form-group">
                                                <label for="nama">Nama:</label>
                                                <input type="text" class="form-control" name="nama" value="<?= esc($worker['nama']); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="ttl">Tempat Tanggal Lahir:</label>
                                                <input type="text" class="form-control" name="ttl" value="<?= esc($worker['ttl']); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="domisili">Domisili:</label>
                                                <input type="text" class="form-control" name="domisili" value="<?= esc($worker['domisili']); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="domisili">Pendidikan:</label>
                                                <input type="text" class="form-control" name="pendidikan" value="<?= esc($worker['pendidikan']); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pengalaman_kerja">Pengalaman Kerja:</label>
                                                <input type="text" class="form-control" name="pengalaman_kerja" value="<?= esc($worker['pengalaman_kerja']); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="no_telp">No Telepon:</label>
                                                <input type="text" class="form-control" name="no_telp" value="<?= esc($worker['no_telp']); ?>" required>
                                            </div>
                                            <div class="col-md-19 button-div-edit">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
</body>
</html>

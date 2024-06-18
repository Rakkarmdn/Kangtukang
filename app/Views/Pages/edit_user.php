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
                            <div class="center-img-container-edit">
                                <img src="<?= base_url('assets/img/favicon.png'); ?>">
                            </div>
                            <h1 class="ktk-text-edit"  style="color: #c0545b;">KANGTUKANG</h1>
                        </div>
                        <div class="col-md-7 logn-part">
                            <div class="row">
                                <div class="col-lg-10 col-md-12 mx-auto">
                                    <div class="form-cover">
                                    <h2>Edit User</h2>
                                        <form action="<?= base_url('user_dashboard/update/'.$user['id']); ?>" method="post">
                                            <div class="form-group">
                                                <label for="username">Username:</label>
                                                <input type="text" class="form-control" name="username" value="<?= esc($user['username']); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password:</label>
                                                <input type="password" class="form-control" name="password" value="<?= esc($user['password']); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="no_telp">No Telpon:</label>
                                                <input type="text" class="form-control" name="no_telp" value="<?= esc($user['no_telp']); ?>" required>
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

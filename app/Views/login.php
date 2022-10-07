<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $this->extend("template"); ?>

    <?= $this->section("content"); ?>
    <div class="container my-5 col-4">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Login</h3>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col mx-auto">
                        <from action="<?= base_url('login/proses') ?>" method="POST">
                            <?= csrf_field() ?> 
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required>
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Login">
                        </from>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <?= $this->endSection(); ?>
</body>
</html>
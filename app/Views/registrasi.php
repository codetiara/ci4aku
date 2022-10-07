<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $this->extend("template"); ?>

    <?= $this->section("content"); ?>
    <div class="container my-5 col-4">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Form Registrasi</h3>
            </div>
            <div class="card-body">
                   <div class="row">
                        <div class="col">
                            <?php if (session()->getFlashdata('gagal')) : ?>
                               <div class="alert alert-sucess" role="alert"></div>
                               <?php $errors = session()->getFlashdata('gagal')?>
                               <ul>
                                 <?php foreach ($errors as $error ) : ?>
                                    <li><?php $error ?></li>
                                <?php endforeach ?>
                               </ul>
                        </div>
                   </div>
                   <?php endif; ?>
                   <?php if (session()->getFlashdata('sukses')) :?>
                       <div class="alert alert-success" role="alert">
                            <p> <?= session()->getFlashdata('sukses') ?></p>
                   </div>
                    <?php endif; ?>
                   </div>
                 </div>

                <div class="row">
                    <div class="col mx-auto">
                        <from action="<?= base_url('registrasi/simpan') ?>" method="POST">
                            <?= csrf_field() ?> 
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required>
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                            <label>Konfirmasi Password</label>
                            <input type="password" class="form-control" name="kofirm_pass" required>
                            <br>
                            <button type="submit" class="btn btn-success" value="register">Daftar</button>
                        </from>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?= $this->endSection(); ?>
    </div>

</body>
</html>
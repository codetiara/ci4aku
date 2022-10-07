<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a href="<?= base_url('beranda') ?>" class="nav-link">Beranda</a>
            </li>

            <li>
                <a href="<?= base_url('infokegiatan') ?>" class="nav-link">infokegiatan</a>
            </li>

            <li>
                <a href="<?= base_url('datasiswa') ?>" class="nav-link">Data Siswa</a>
            </li>
        </ul>

        <ul class="navbar-nav mx-auto">
            <li class="nav-link">
                <a href="<?php base_url('login') ?>" class="btn btn-outline-primary">Login</a>
            </li>

            <li class="nav-link">
                <a href="<?php base_url('registrasi') ?>" class="btn btn-outline-success">Register</a>
            </li>
        </ul>
    </nav>


    <?php $this->renderSection("content"); ?>

    <footer class="fixed-bottom bg-dark text-white">
        <div class="text-center">
            SMA 2077
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
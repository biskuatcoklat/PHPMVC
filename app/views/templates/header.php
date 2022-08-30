<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css"> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>"><strong style="color: green; font-size: 20pt">GO-SAVE</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>"> <strong> Home </strong> <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?= BASEURL ?>/karyawan"><strong> Karyawan </strong></a>
                    <a class="nav-link" href="<?= BASEURL ?>/about"><strong> About </strong></a>
                </div>
            </div>
        </div>
    </nav>
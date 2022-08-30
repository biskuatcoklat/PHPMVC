<?php
date_default_timezone_set("Asia/jakarta");

$nama = "Wahyu ";

$jam = date('H:i');

if ($jam > '05:30' && $jam < '11:00') {
    $salam = 'Morning';
} elseif ($jam >= '11:00' && $jam < '15:00') {
    $salam = 'Afternoon';
} elseif ($jam < '18:00') {
    $salam = 'Evening';
} else {
    $salam = 'Night';
}

?>

<div class="container">
    <div class="jumbotron mt-5">
        <h1><?php echo "Good $salam, $nama "; ?></h1>
        <!-- <p class="lead">Hi nama saya <?= $data['nama']; ?></p> -->
        <hr class="my-4">
        <p></p>
        <!-- <a class="btn btn-primary btn-lg" href="/app/models/Karyawan_model.php" role="button">Data Karyawan</a> -->
    </div>
</div>
<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['kar']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['kar']['nik']; ?></h6>
            <p class="card-text"><?= $data['kar']['email']; ?></p>
            <p class="card-text"><?= $data['kar']['jabatan']; ?></p>
            <a href="<?= BASEURL ?>/mahasiswa" class="card-link">Back</a>

        </div>
    </div>
</div>
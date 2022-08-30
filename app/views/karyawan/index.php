<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>


    <div class="row mb-5">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/karyawan/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Karyawan..." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mb-3 ">
        <div class="col-lg-6 ">
            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Karyawan
            </button>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Karyawan</h3>
            <ul class="list-group">
                <?php foreach ($data['kar'] as $kar) : ?>
                    <li class="list-group-item">
                        <?= $kar['nama']; ?>
                        <a href="<?= BASEURL ?>/karyawan/hapus/<?= $kar['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">Delete</a>
                        <a href="<?= BASEURL ?>/karyawan/ubah/<?= $kar['id'] ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $kar['id'] ?>">Edit</a>
                        <a href="<?= BASEURL ?>/karyawan/detail/<?= $kar['id'] ?>" class="badge badge-primary float-right ml-1">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Karyawan</h5>
                <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/karyawan/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama" id="nama" name="nama" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="number" class="form-control" placeholder="Masukkan Nik (wajib angka)" id="nik" name="nik" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email (pakai @)" name="email" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select class="form-control" id="jabatan" name="jabatan">
                            <option value="Admin">1. Admin</option>
                            <option value="Vice President">2. Vice President</option>
                            <option value="Product Manager">3. Project Manager</option>
                            <option value="Software Engineer">4. Software Engineer</option>
                            <option value="Backend Engineer">5. Backend Engineer</option>
                            <option value="Frontend Engineer">6. Frontend Engineer</option>
                            <option value="Ui/UX">7. UI/UX</option>
                            <option value="Networking">8. Networking</option>
                            <option value="Marketing">9. Marketing</option>
                            <option value="Office Boy">10. Office Boy</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
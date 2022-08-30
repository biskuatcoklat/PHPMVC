$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nik').val('');
        $('#email').val('');
        $('#jabatan').val('');
        $('#id').val('');
    });
    $('.tampilModalUbah').on('click', function () {
        $('#formModalLabel').html('Edit Data Karyawan');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/karyawan/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/karyawan/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nik').val(data.nik);
                $('#email').val(data.email);
                $('#jabatan').val(data.jabatan);
                $('#id').val(data.id);
            }
        });
    });
});


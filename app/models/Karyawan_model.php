<?php
class Karyawan_model
{
    private $table = 'karyawan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKaryawan()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getKaryawanById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataKaryawan($data)
    {
        $query = "INSERT INTO karyawan VALUES('', :nama, :nik, :email, :jabatan)";
        $this->db->query($query);
        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('nik', htmlspecialchars($data['nik']));
        $this->db->bind('email', htmlspecialchars($data['email']));
        $this->db->bind('jabatan', $data['jabatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKaryawan($id)
    {
        $query = "DELETE FROM karyawan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataKaryawan($data)
    {
        $query = "UPDATE karyawan SET nama = :nama, nik = :nik, email = :email, jabatan = :jabatan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataKaryawan()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM karyawan WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}

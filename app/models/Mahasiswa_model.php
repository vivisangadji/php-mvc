<?php 

class Mahasiswa_model {
    
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    

    public function getAllMahasiswa() 
    {
        $this->db->query('SELECT * FROM mahasiswa');
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM mahasiswa WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data) {
        $query = "INSERT INTO mahasiswa VALUES ('', nama, stb, email, jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('stb', $data['stb']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();

    }



}
<?php 

class Product_model {
    private $table = 'products';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduct()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProductById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataProduct($data)
    {
        $query = "INSERT INTO {$this->table}
                    VALUES
                  ('', :nama, :harga, :deskripsi, :gambar)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataProduct($id)
    {
        $query = "DELETE FROM products WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataProduct($data)
    {
        $query = "UPDATE products SET
                    nama = :nama,
                    harga = :harga,
                    deskripsi = :deskripsi,
                    gambar = :gambar
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('id', $data);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataProduct()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM products WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}
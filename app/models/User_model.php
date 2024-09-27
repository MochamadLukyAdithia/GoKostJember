<?php 

class User_model {
    private $table = 'products';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getUser($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
   
}
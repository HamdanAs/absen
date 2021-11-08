<?php

class Auth{
    private $table = "siswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data){
        $query = "insert into siswa values
                    ('', :nisn, :nama, :kelas, :username, :password)";

        $this->db->query($query);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function login($username, $password){
        $this->db->query("select * from siswa where username = :username");

        $this->db->bind("username", $username);
        $row = $this->db->single();

        if($password === $row["password"]){
            return $row;
        } else {
            return false;
        }
    }
}
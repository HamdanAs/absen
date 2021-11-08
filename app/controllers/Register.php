<?php

class Register extends Controller{
    public function index(){
        $data['judul'] = "WEB ABSENSI | REGISTER";

        $this->view("templates/header", $data);
        $this->view("register", $data);
    }

    public function tambah(){
        if($this->model("Auth")->register($_POST) > 0){
            header('location: ' . ROOT . '/login');
        } else {
            die ("Data gagal disimpan");
        }
    }
}
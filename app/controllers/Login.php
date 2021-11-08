<?php

class Login extends Controller{
    public function index(){
        $data['judul'] = "WEB ABSEN | Login";

        $this->view("templates/header", $data);
        if(!isset($_SESSION['nama'])){
            $this->view("login", $data);
            exit();
        }

        header('location: ' . ROOT . '/');
    }

    public function login(){
        $loggedInUser = $this->model("Auth")->login($_POST['username'], $_POST['password']);
    
        if($loggedInUser){
            $this->createUserSession($loggedInUser);
        } else {
            die("password wrong");
        }
    }

    public function createUserSession($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['kelas'] = $user['kelas'];
        header('location: ' . ROOT . '/');
    }

    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['nama']);
        unset($_SESSION['kelas']);
        header('location: ' . ROOT . '/login');
    }
}
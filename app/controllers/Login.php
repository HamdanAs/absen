<?php

class Login extends Controller{
    public function index(){
        unset($_SESSION['formfields']);

        $data = [
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => '',
            'judul' => 'WEB ABSEN | Login'
        ];

        $this->view("templates/header", $data);
        if(!isset($_SESSION['nama'])){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'username' => trim($_POST['username']),
                    'password' => trim($_POST['password']),
                    'usernameError' => '',
                    'passwordError' => ''
                ];
    
                $_SESSION['formfields']['username'] = $data['username'];
    
                if(empty($data['username'])){
                    $data['usernameError'] = 'Mohon isi username.';
                }
    
                if(empty($data['password'])){
                    $data['passwordError'] = 'Mohon isi password.';
                }
    
                if(empty($data['usernameError']) && empty($data['passwordErro'])){
                    $loggedInUser = $this->model("Auth")->login($_POST['username'], $_POST['password']);
        
                    if($loggedInUser){
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['passwordError'] = 'Password atau username salah!';
                    }
                }
            }
            $this->view("login", $data);
            $this->view("templates/footer");
            exit();
        }

        header('location: ' . ROOT . '/');
    }

    public function login(){

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
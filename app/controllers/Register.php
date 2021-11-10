<?php

class Register extends Controller{
    public function index(){
        unset($_SESSION['formfields']);
        
        $data = [
            'nisn' => '',
            'nama' => '',
            'kelas' => '',
            'username' => '',
            'password' => '',
            'nisnError' => '',
            'namaError' => '',
            'kelasError' => '',
            'usernameError' => '',
            'passwordError' => '',
            'judul' => 'WEB ABSEN | Register'
        ];

        $this->view('templates/header', $data);

        if(!isset($_SESSION['nama'])){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'nisn' => trim($_POST['nisn']),
                    'nama' => trim($_POST['nama']),
                    'kelas' => trim($_POST['kelas']),
                    'username' => trim($_POST['username']),
                    'password' => trim($_POST['password']),
                    'usernameError' => '',
                    'passwordError' => '',
                    'nisnError' => '',
                    'namaError' => '',
                    'kelasError' => '',
                ];
    
                foreach($data as $field => $value) $_SESSION['formfields'][$field] = $value;

                $nameValidation = "/^[a-zA-Z0-9]*$/";
                $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
                $numberValidation = "/^[0-9]*$/";

                //Validate username on letters/numbers
                if (empty($data['username'])) {
                    $data['usernameError'] = 'Mohon isi username.';
                } elseif (!preg_match($nameValidation, $data['username'])) {
                    $data['usernameError'] = 'Username hanya boleh diisi huruf dan angka.';
                }
    
                //Validate email
                if (empty($data['nisn'])) {
                    $data['nisnError'] = 'Mohon isi NISN.';
                } else if(!preg_match($numberValidation, $data['nisn'])){
                    $data['nisnError'] = 'NISN hanya boleh diisi dengan angka';
                } else {
                    //Check if email exists.
                    if ($this->model("Auth")->findUserByNisn($data['nisn'])) {
                        $data['nisnError'] = 'Nisn sudah terdaftar.';
                    }
                }
    
                // Validat nama
                if(empty($data['nama'])){
                    $data['namaError'] = 'Mohon isi nama.';
                }

                // Validate kelas
                if(empty($data['kelas'])){
                    $data['kelasError'] = "Mohon isi kelas.";
                }
    
                // Validate password on length, numeric values,
                if(empty($data['password'])){
                    $data['passwordError'] = 'Mohon isi password.';
                } elseif(strlen($data['password']) < 6){
                    $data['passwordError'] = 'Password minimal diisi 8 karakter.';
                } elseif (preg_match($passwordValidation, $data['password'])) {
                    $data['passwordError'] = 'Password setidaknya harus mempunyai 1 angka.';
                }
    
                // Make sure that errors are empty
                if (empty($data['usernameError']) 
                        && empty($data['emailError']) 
                        && empty($data['passwordError']) 
                        && empty($data['nisnError'])
                        && empty($data['namaError'])
                        && empty($data['kelasError'])) {

                    //Register user from model function
                    if ($this->model('Auth')->register($data)) {
                        // clear form session
                        unset($_SESSION['formfields']);
                        
                        //Redirect to the login page
                        header('location: ' . ROOT . '/login');
                    } else {
                        die('Something went wrong.');
                    }
                }
            }
                
            $this->view('register', $data);
            $this->view('templates/footer');

            exit();
        }

        header("location: " . ROOT . '/');
    }
}
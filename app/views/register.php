    <style>
        .container{
            margin: 0;
            padding: 0;
            display: grid;
            place-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <form action="<?= ROOT; ?>/register" method="POST" id="form" onsubmit="return checkRegistration(e)">
                <h1>Register</h1>

                <div class="flex-group">
                    <div class="input-group">
                        <label for="">NISN</label>
                        <br>
                        <input type="text" name="nisn" id="nisn" value="<?= $_SESSION['formfields']['nisn'] ?? '' ?>">
                        <span class="error-msg"><?= $data['nisnError'] ?? ''; ?></span>
                    </div>

                    <div class="input-group">
                        <label for="">Nama</label>
                        <br>
                        <input type="text" name="nama" id="nama" value="<?= $_SESSION['formfields']['nama'] ?? '' ?>">
                        <span class="error-msg"><?= $data['namaError'] ?? ''; ?></span>
                    </div>

                    <div class="input-group">
                        <label for="">Kelas</label>
                        <br>
                        <input type="text" name="kelas" id="kelas" value="<?= $_SESSION['formfields']['kelas'] ?? '' ?>">
                        <span class="error-msg"><?= $data['kelasError'] ?? ''; ?></span>
                    </div>
                </div>
                
                <div class="flex-group">
                    <div class="input-group">
                        <label for="">Username</label>
                        <br>
                        <input type="text" name="username" id="username" value="<?= $_SESSION['formfields']['username'] ?? '' ?>">
                        <span class="error-msg"><?= $data['usernameError'] ?? ''; ?></span>
                    </div>

                    <div class="input-group">
                        <label for="">Password</label>
                        <br>
                        <input type="password" name="password" id="password">
                        <span class="error-msg"><?= $data['passwordError'] ?? ''; ?></span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Login</button>
                <br>
                <br>
                <p>Sudah punya akun? silahkan login <a href="<?= ROOT ?>/login">Disini</a></p>
            </form>
        </div>
    </div>

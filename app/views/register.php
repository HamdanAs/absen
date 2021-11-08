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
            <form action="<?= ROOT; ?>/register/tambah" method="POST">
                <h1>Register</h1>

                <div class="flex-group">
                    <div class="input-group">
                        <label for="">NISN</label>
                        <br>
                        <input type="text" name="nisn">
                    </div>

                    <div class="input-group">
                        <label for="">Nama</label>
                        <br>
                        <input type="text" name="nama">
                    </div>

                    <div class="input-group">
                        <label for="">Kelas</label>
                        <br>
                        <input type="text" name="kelas">
                    </div>
                </div>
                
                <div class="flex-group">
                    <div class="input-group">
                        <label for="">Username</label>
                        <br>
                        <input type="text" name="username">
                    </div>

                    <div class="input-group">
                        <label for="">Password</label>
                        <br>
                        <input type="password" name="password">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Login</button>
                <br>
                <br>
                <p>Sudah punya akun? silahkan login <a href="<?= ROOT ?>/login">Disini</a></p>
            </form>
        </div>
    </div>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>
</html>
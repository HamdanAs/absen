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
            <form action="<?= ROOT ?>/login/login" method="POST">
                <h1>Login</h1>

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

                <button type="submit" class="btn btn-primary">Login</button>
                <br>
                <br>
                <p>Belum punya akun? silahkan buat akun <a href="<?= ROOT ?>/register">Disini</a></p>
            </form>
        </div>
    </div>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>
</html>
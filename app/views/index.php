
</head>
<body>
    <nav>
        <ul class="navbar-nav">
            <li class="logo">
                <a href="#" class="nav-link">
                    <span class="link-text">hamdan</span>
                    <span class="iconify" data-icon="bi:chevron-double-right"></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="./index.html" class="nav-link">
                    <span class="iconify" data-icon="ant-design:home-filled"></span>
                    <span class="link-text">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="./jadwal.html" class="nav-link">
                    <span class="iconify" data-icon="bi:calendar-check-fill"></span>
                    <span class="link-text">Jadwal</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="./riwayat.html" class="nav-link">
                    <span class="iconify" data-icon="dashicons:backup"></span>
                    <span class="link-text">Riwayat</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <span class="iconify" data-icon="dashicons:buddicons-buddypress-logo"></span>
                    <span class="link-text">User</span>
                </a> 
            </li>
            <li class="nav-item">
                <a href="">
                    <span class="iconify" data-icon="ri:logout-box-fill"></span>
                    <span class="link-text">Logouts</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1>Dashboard</h1>

        <div class="dashboard-container">
            <div class="box-container">
                <h5>Persentasi Hadir</h5>

                <div class="circle-out">
                    <div class="circle-in green">
                        <h1>50%</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <h5>Persentasi Tidak Hadir</h5>
                <div class="circle-out">
                    <div class="circle-in red">
                        <h1>50%</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <h5>Riwayat Absen</h5>

                <ul class="list-container">
                    <li>
                        <div class="list-left">
                            <p>Absen 1</p>
                            <p>Pel. Pemrograman Web</p>
                            <p>12/12/2020</p>
                        </div>

                        <div class="list-right">
                            <h4 class="absent">Hadir</h4>
                        </div>
                    </li>
                    <li>
                        <div class="list-left">
                            <p>Absen 1</p>
                            <p>Pel. Pemrograman Web</p>
                            <p>12/12/2020</p>
                        </div>

                        <div class="list-right">
                            <h4 class="absent">Hadir</h4>
                        </div>
                    </li>
                    <li>
                        <div class="list-left">
                            <p>Absen 1</p>
                            <p>Pel. Pemrograman Web</p>
                            <p>12/12/2020</p>
                        </div>

                        <div class="list-right">
                            <h4 class="absent">Hadir</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal">
        <div class="modal-container">
            <h1 style="color: white;">Anda belum absen!</h1>
            <br>
            <form action="<?= ROOT ?>/login/logout" method="POST">
                <div class="circle-out">
                    <button type="submit" class="circle-in green">
                        <h1>Absen</h1>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <style>
        .list-container{
            padding: 0;
            width: 50%;
            height: 65vh;
            overflow-y: scroll;
            padding-right: 5px;
        }

        .list-container::-webkit-scrollbar{
            width: 5px;
        }

        .list-container::-webkit-scrollbar-track{
            border-radius: 5px;
            box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
        }

        .list-container::-webkit-scrollbar-thumb{
            border-radius: 5px;
            background-color: rgba(0,0,0,0.5);
        }

        @media only screen and (max-width: 600px){
            .list-container{
                width: 100%;
                grid-row: 1/3;
                grid-column: 1/3;
            }
        }
    </style>
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
        <h1>Riwayat Absen</h1>

        <div class="dashboard-container">
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

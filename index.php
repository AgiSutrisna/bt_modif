<html>

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana;
            color: #ffffff;
            margin: 0;
        }

        .navbar {
            background-color: #68d993;
            overflow: hidden;
            width: 100%;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 20px;
            text-decoration: none;
            margin: 0;
            /* Remove default margin */
        }

        .navbar a:hover {
            background-color: #dbf6a9;
            color: black;
        }

        .container {
            text-align: center;
        }

        .container img {
            width: 100%;
            height: auto;
        }

        .main {
            width: 80%;
            margin: 20px auto;
        }

        .container img {
            width: 100%;
            height: auto;
        }
        
        .container h2 {
            color: black;
        }

        .main {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .main img,
        .main div {
            max-width: 48%;
            /* Adjust the width of the image and description as needed */
        }

        .main img {
            max-width: 500px;
            max-height: 500px;
            margin-right: 2%; /* Add some spacing between the image and text */
        }

        .main div {
            margin-left: 2%; /* Add some spacing between the image and text */
        }

        .main p {
            color: black;
            line-height: 30px;
        }

        .right {
            background-color: #009900;
            width: 80%;
            padding: 15px;
            margin: 7px auto;
            text-align: center;
        }

        @media only screen and (max-width: 768px) {

            /* For tablets and smaller devices: */
            .navbar a {
                float: none;
                display: block;
                text-align: left;
            }

            .container {
                text-align: justify;
            }

            .main,
            .right {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="BERANDA.php">Beranda</a>
        <a href="PUPUK%20SP%2036%20revisi.html">Sp-36</a>
        <a href="pupuk%20kcl%20(1).html">KCL</a>
        <a href="PUPUK%20NPK%20revisi%202.html">NPK</a>
        <a href="Data%20Kebutuhan%20Pupuk.html">Data Kebutuhan Pupuk</a>
        <a href="Galeri.html">Galeri</a>
        <a href="BukuTamu.php">Buku Tamu</a>
    </div>

    <div class="container">
        <img border="0" src="padi.jpg" alt="Padi Image">
        <hr style="border: 1px solid #000000; margin-top: 20px; margin-bottom: 20px;">
        <h2>Sistem Informasi Pemupukan Padi</h2>
        <div class="main">
            <img src="pupuk_1.jpg" alt="pupuk_1">
            <div>
                <p align="justify">
                    <!-- Your content here -->
                    Pupuk merupakan salah satu zat hara buatan yang diperlukan untuk mengatasi kekurangan
                    nutrisi terutama unsur-unsur nitrogen, fosfor, dan kalium pada tanaman padi. Pemupukan memegang
                    peranan
                    yang sangat penting dalam usaha meningkatkan produksi tanaman. Pemberian pupuk yang kurang dari
                    kebutuhan tanaman akan berdampak pada rendahnya hasil panen. Sebaliknya pemupukan yang berlebihan
                    akan
                    berdampak pada pemborosan, tanaman mudah roboh, peka terhadap serangan hama/penyakit dan produksi
                    tidak
                    optimal (Yulia, 2013).
                </p>
            </div>
        </div>
        <div class="main">
            <div>
                <p align="justify">
                    <!-- Your content here -->
                    Pemberian pupuk yang benar adalah disesuaikan dengan jenis tanaman, fase pertumbuhan, ketersediaan hara tanah dan berprinsip tepat jenis, jumlah, cara, serta waktu aplikasi. Pemupukan N yang tinggi akan mengakibatkan tanaman bersifat sukulen, pertumbuhan vegetatif akan lebih baik, pembentukananakan lebih banyak (pada tanaman padi dantebu), sehingga akan menciptakan kondisi lingkungan yang lebih baik bagi kehidupan hama. Namun, penggunaan pupuk kimia dalam dosis besar secara terus-menerus dapat berdampak buruk terhadap lingkungan dan menurunkan efektivitas penggunaannya.
                </p>
            </div>
            <img src="pupuk_2.jpg" alt="pupuk_2">
        </div>
        <div class="main">
            <img src="pupuk_3.jpg" alt="pupuk_3">
            <div>
                <p align="justify">
                    <!-- Your content here -->
                    Oleh karena itu, pemupukan yang efektif guna meningkatkan produksi tanaman padi yang baik, diperlukan penggunaan pupuk anorganik secara tepat sesuai kebutuhan tanaman dan kondisi lahan agar produktivitas tinggi.
                </p>
            </div>
        </div>
    </div>


    <div class="right">
        <div id="id47e45488757"
            a='{"t":"v","v":"1.2","lang":"id","locs":[443],"ssot":"c","sics":"ms","cbkg":"#4CAF50","cfnt":"#FFFFFF","cprb":"rgba(0,153,0,1)","cprf":"#FFFFFF","ephw":"bool","slmw":231,"slfs":16}'>
            Sumber Data Cuaca: <a href="https://cuacalab.id/cuaca_bandung/minggu/">ramalan cuaca Bandung minggu ini</a>
        </div>
        <script async src="https://static1.cuacalab.id/widgetjs/?id=id47e45488757"></script>

        <h2>Kalkulator</h2>
        <iframe width="100%" height="230" src="kalkulator.html" allowfullscreen></iframe>
    </div>

    <div style="background-color:#808080; color:#000000; text-align:center; padding:10px; margin-top:7px;">
        © copyright MPKelompok3.com
        <h3>Kelompok 3 </h3>
        <p>
            <font size="2">Retna Laila Fariha S (1207060065)<br>Rika Rohmawati (1207060068)<br>Rima Nur Maulida
                (1207060069)<br>Silvi Nur Azmi (1207060076)<br>Yusniar Nur S (1207060088)</font>
        </p>
    </div>
</body>

</html>
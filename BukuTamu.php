<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Buku Tamu</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 10px;
            font-family: 'Poppins', sans-serif;
            margin-top: 60px;
            background: linear-gradient(115deg, #68d993 10%, #dbf6a9 90%);
        }

        .container {
            max-width: 800px;
            background: #fff;
            width: 800px;
            padding: 25px 40px 10px 40px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container .text {
            text-align: center;
            font-size: 41px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            background: -webkit-linear-gradient(right, #68d993, #dbf6a9, #68d993, #dbf6a9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .container form {
            padding: 30px 0 0 0;
        }

        .container form .form-row {
            display: flex;
            margin: 32px 0;
        }

        .navbar {
            background: linear-gradient(115deg, #68d993 10%, #dbf6a9 90%);
            overflow: hidden;
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
            border-bottom: none;
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

        form .form-row .input-data {
            width: 100%;
            height: 40px;
            margin: 0 20px;
            position: relative;
        }

        form .form-row .textarea {
            height: 70px;
        }

        .input-data input,
        .textarea textarea {
            display: block;
            width: 100%;
            height: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 2px solid rgba(0, 0, 0, 0.12);
        }

        .input-data input:focus~label,
        .textarea textarea:focus~label,
        .input-data input:valid~label,
        .textarea textarea:valid~label {
            transform: translateY(-20px);
            font-size: 14px;
            color: #3498db;
        }

        .textarea textarea {
            resize: none;
            padding-top: 10px;
        }

        .input-data label {
            position: absolute;
            pointer-events: none;
            bottom: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .textarea label {
            width: 100%;
            bottom: 40px;
            background: #fff;
        }

        .input-data .underline {
            position: absolute;
            bottom: 0;
            height: 2px;
            width: 100%;
        }

        .input-data .underline:before {
            position: absolute;
            content: "";
            height: 2px;
            width: 100%;
            background: #3498db;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease;
        }

        .input-data input:focus~.underline:before,
        .input-data input:valid~.underline:before,
        .textarea textarea:focus~.underline:before,
        .textarea textarea:valid~.underline:before {
            transform: scale(1);
        }

        .submit-btn .input-data {
            overflow: hidden;
            height: 45px !important;
            width: 25% !important;
        }

        .submit-btn .input-data .inner {
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            background: -webkit-linear-gradient(right, #68d993, #dbf6a9, #68d993, #dbf6a9);
            transition: all 0.4s;
        }

        .submit-btn .input-data:hover .inner {
            left: 0;
        }

        .submit-btn .input-data input {
            background: none;
            border: none;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            position: relative;
            z-index: 2;
        }

        .gender-label {
            font-size: 16px;
            margin-bottom: 10px;
            display: block;
        }

        .pilihankelamin {
            display: flex;
            justify-content: space-between;
        }

        .posisikelamin {
            display: flex;
            flex-direction: row;
        }

        .laki,
        .perempuan {
            margin-bottom: 10px;
            padding-left: 30px;
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

        @media (max-width: 700px) {
            .container .text {
                font-size: 30px;
            }

            .container form {
                padding: 10px 0 0 0;
            }

            .container form .form-row {
                display: block;
            }

            form .form-row .input-data {
                margin: 35px 0 !important;
            }

            .submit-btn .input-data {
                width: 40% !important;
            }
        }
    </style>

</head>

<body>

    <div class="navbar">
        <a href="index.php">Beranda</a>
        <a href="PUPUK%20SP%2036%20revisi.html">Sp-36</a>
        <a href="pupuk%20kcl%20(1).html">KCL</a>
        <a href="PUPUK%20NPK%20revisi%202.html">NPK</a>
        <a href="Data%20Kebutuhan%20Pupuk.html">Data Kebutuhan Pupuk</a>
        <a href="Galeri.html">Galeri</a>
        <a href="BukuTamu.php">Buku Tamu</a>
    </div>

    <div class="container">
        <div class="text">
            Buku Tamu
        </div>
        <form class="" action="Hasil.php" method="post">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="nama" autocomplete="off" required>
                    <div class="underline"></div>
                    <label for="">Nama</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="umur" autocomplete="off" required>
                    <div class="underline"></div>
                    <label for="">Umur</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="instansi" autocomplete="off" required>
                    <div class="underline"></div>
                    <label for="">Instansi</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <div class="underline"></div>
                    <label for="">Jenis Kelamin</label>
                </div>
            </div>
            <!-- With this -->
            <div class="form-row">
                <div>
                    <!-- <label for="" class="huruf">Jenis Kelamin</label> -->
                    <div class="pilihankelamin">
                        <div class="posisikelamin">
                            <div class="laki"><input type="radio" name="jeniskelamin" value="Laki-laki">
                                Laki-laki
                            </div>
                            <div class="perempuan"><input type="radio" name="jeniskelamin" value="Perempuan">
                                Perempuan </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="komentar" autocomplete="off" required>
                    <div class="underline"></div>
                    <label for="">Komentar</label>
                </div>
            </div>
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" value="submit">
                </div>
            </div>
        </form>
    </div>

    <!-- <div class="tombolbek">
        <div class="kembali">
            <a href="index.php" class="bek">BACK</a>
        </div>
    </div> -->

</body>

</html>
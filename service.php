<?php 
    session_start();
    if(isset($_POST['logout'])){
       session_unset();
       session_destroy();
       header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuVqivzsjNNWxQab_r_ItK_ROM1ZOuikOS-g&usqp=CAU "px=100%" link="#000" alink="#017bf5" vlink="#000"></body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='#tokobocil'><b>ASTON PRINTER</b></a></a></div>
            <div class="menu">
                <ul>
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="jenis-brg.php">Jenis jenis barang</a></li>
                    <li><a href="pembayaran.php">pembayaran</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><form action="dashboard.php" method="POST">
                    <button type="submit" name="logout" class="tbl-biru">logout</button>
                    </form></li>
                </ul>
            </div>
        </div>
    </nav>
    <center><h1>KAMI MENYEDIAKAN LAYANAN SERVIS PRINTER SILAHKAN KLIK DIBAWAH INI UNTUK INFO TENTANG SERVIS</h1></center>
    <style>
        
        table {
            width: 100%;
        }

        img.bg {
            height: 600px;
            width: 100%;
        }

        a:link {
            text-decoration: none;
        }

        a:visited {
            color: black;
        }

        a:hover {
            color: rgb(255, 204, 0);
        }

        .atas {
            color: rgb(255, 255, 255);
        }

        .sklh {
            font-weight: 500px;
            font-size: 30px;
        }
        .card{
            width: 300px;
            background-color: rgb(5, 243, 96);
            color: rgb(255, 255, 255);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }
    </style>
    <table height="auto" width="100px">
        <tr>
            <th style="padding-block: 40px;">
            <center>
                <div class="card">
                    <img height="300px" width="300px" src="data:image/jpeg;base64,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" alt="">
                    <p>SILAHKAN KLIK TOMBOL DIBAWAH</p>
                    <p><a href="https://wa.me/08170447719" class="tbl-biru">WhatsAPP</a></p>
                </div>
            </center>
            </th>
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
    <h1 class="center"> Jenis Barang yang kami miliki</h1>
    <div class="wrapper">
        <!--untuk jenis-brg-->
        <section id="jenis-brg">
            <img clas="200px"src="https://img.freepik.com/premium-photo/multifunctional-printer-isolated-white-background_145644-66427.jpg?w=740"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="kolom">
                <p class="deskripsi">Jenis Printer</p>
                <h2>PRINTER</h2>
                <p><a href="printer.php" class="tbl-biru">Klik disini</a></p>
            </div>
        </section>
         <!--untuk jenis-brg-->
         <section id="jenis-brg">
            <img src="https://img.freepik.com/premium-photo/high-angle-view-multi-colored-pencils-white-background_1048944-11397410.jpg?w=740"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="kolom">
                <p class="deskripsi">Jenis warna tinta</p>
                <h2>TINTA</h2>
                <p><a href="tinta.php" class="tbl-biru">Klik disini</a></p>
            </div>
        </section>

        <!--untuk jenis-brg-->
        <section id="jenis-brg">
            <img src="https://img.freepik.com/premium-photo/repairman-with-screwdriver-fixing-modern-printer-office_495423-34230.jpg?w=740"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="kolom">
                <p class="deskripsi">Jenis layanan</p>
                <h2>SERVICE</h2>
                <p><a href="service.php" class="tbl-biru">Klik disini</a></p>
            </div>
        </section>
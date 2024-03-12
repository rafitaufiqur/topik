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
    <body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuVqivzsjNNWxQab_r_ItK_ROM1ZOuikOS-g&usqp=CAU "px=100%>
        <br />
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
    <h1 class="center"> Selamat Datang Di Website Kami Dan Selamat Berbelanja</h1>
    <div class="wrapper">
        <!--untuk home-->
        <section id="home">
            <img src="https://img.freepik.com/premium-photo/multifunctional-printer-isolated-white-background_145644-66427.jpg?w=740"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="kolom">
                <p class="deskripsi">Jangan lupa beli</p>
                <h2>PRINTER</h2>
                <p>Berbagai macam jenis printer.</p>
                <p><a href="jenis-brg.php" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!--untuk home-->
        <section id="home">
            <div class="kolom">
                <p class="deskripsi">Jangan lupa beli</p>
                <h2>TINTA</h2>
                <p>Berbagai macam warna tinta yang tersedia.</p>
                <p><a href="jenis-brg.php" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="https://img.freepik.com/premium-photo/colour-tank-inkjet-printer_38172-28.jpg?w=360"/>
</body>
</html>
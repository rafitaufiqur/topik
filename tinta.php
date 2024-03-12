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
                    <img height="300px" width="300px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOQ2kEVCTJX97q83_xa8to4EPfPnZ3xdCe-w&usqp=CAU" alt="">
                    <p>TINTA CYAN</p>
                    <p><a href="pembayaran.php" class="tbl-biru">pembayaran</a></p>
                </div>
            </center>
            </th>
            <th style="padding-block: 40px;">
                <center>
                    <div class="card">
                        <img height="300px" width="300px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcEWIuL4wk5EqJDQY-wdQSGF6Dv40_8tXzXQ&usqp=CAU" alt="">
                        <p>TINTA MEGENTA</p>
                        <p><a href="pembayaran.php" class="tbl-biru">pembayaran</a></p>
                    </div>
                </center>
                </th>
                <th style="padding-block: 40px;">
                    <center>
                        <div class="card">
                            <img height="300px" width="300px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWltBSMfjTvIgaEKH8pY7TFi_Jku7YnDNC_Q&usqp=CAU" alt="">
                            <p>TINTA YELOW</p>
                            <p><a href="pembayaran.php" class="tbl-biru">pembayaran</a></p>
                        </div>
                    </center>
                    </th>
                    <th style="padding-block: 40px;">
                    <center>
                        <div class="card">
                            <img height="300px" width="300px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQymG5v854DtLZsAo7OjhASYSbrAdsRViSsbw&usqp=CAU" alt="">
                            <p>TINTA BLACK</p>
                            <p><a href="pembayaran.php" class="tbl-biru">pembayaran</a></p>
                        </div>
                    </center>
                    </th>

        </tr>
</table>
</tr>
</table>
</body>

</html>
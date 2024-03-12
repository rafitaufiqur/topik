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
                    <img height="300px" width="300px" src="data:image/jpeg;base64,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" alt="">
                    <p>PRINTER EPSON</p>
                    <p><a href="pembayaran.php" class="tbl-biru">pembayaran</a></p>
                </div>
            </center>
            </th>
            <th style="padding-block: 40px;">
                <center>
                    <div class="card">
                        <img height="300px" width="300px" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSEhIVFhUSFRIVFRUSFRUVERUXFxUXFhUVFRcYHSggGB0lGxUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OFg8QFysdHR0tKy0tLSstLSstLS4tKy0rKy0tKy0tNy0tNy0rKzcrNSsrLTc3KzgtKzctLS0rNysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABQECAwQHBgj/xABNEAACAQIBBgoGBgQMBwEAAAAAAQIDEQQFEiExUZEGByJBUmFxgaHRExQycrHBQlNikuHwI6KywhUkJTNDVGRzk6PS8RYXNESClLMI/8QAGAEBAQEBAQAAAAAAAAAAAAAAAAECAwT/xAAdEQEBAQADAAMBAAAAAAAAAAAAEQECEjETIVED/9oADAMBAAIRAxEAPwDuIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMOJxUKavUnGC2zkorxI5cJsJ9fDx8gJcEYuEOE/rNLvml8S5Zewv9aof4tPzAkQaccq0Hqr0n2VIeZljjab1VIPslHzAzgsVaL1SW9F4AAAAAAAAAAAAAAAAAAAAAAAAFtSooq8mklrbdku9kJjuF+Dp/0ym9lJZ/6y5PieB44MtyjU9DmxajGLi/pRctbXdY5Ssq1enLfc1mJXc8dxic1Gj2Sqy/dj/qIDG8L8VU11nFbKazPFcrxOWLLNVfTe6PkXrLlXpv7sfIQr3FTFOTvKTbfO7t72W5542PCCrtX3TNS4S1U78h+9C63PQUr11KEparvsWjeYco1fQK9bNprmz5wUn7sb3l3Hm8RwrxE1muo4q1rUv0T+9BKXiQkqdJtycLt625zbfa27sCexnC6mtFOEpva+TH5vwIHGcJq9TQpKC2U1Z/eendYsnhqL1wa7Jyv43XgWVMmRtenKSf27Nb4pfADSnWlF3z5XlZtqTV9jbvd95dSx9a6UatW71KM53fYk9Jn9ThHTOTk9jebHctPiblLKsacbQag+fMtFvttpfeBJYOjjJ0o51arSlGT5TqzjKUHZq6jK9087XbQ1sJbBwrQ9rHYuT6sTWhHuSnfxPLLLz+slvZesvP61/q/MD3FPK2IjoWKxP/s138ZmaHCHFrViq/fVm/izway9L63wpl8cvT+sW6HyA9/HhXjVqxVTvafxReuGmPWrFS74Un8YHgVl6XSj93yL1l57Y/dfmIV7+PDvKC/7i/bTpfKBk/5h46Ku6lOy1uVOKXhY8HXyz+jUouOdzrNlbuIDG5SlN8qTk+Zcy7FqQg6ZieODGR0QVCT6UqclHcppvwOycG8qrFYWjiErelpxk0voytace6Sku4+Rasm4pvnclbsUfNnd+IHLXpMNVwsnpoTVSC+xUvnJbeXGUn/eIm4V1UAGVAAAAAAAAcH44qt8bUXRVJf5cX8znTPc8bNS+Or+9FbqcF8jwzNs6pRpOcowWucoxXbJ2XiyRfB3FfVNq0mpKUHFqKu5RedZq3OtF9GvQRmc07p2a0prQ0+Zpki8u4l3vWlK6zWpKMk4u942kms13d1qfPeyAxYjI+Ip3U6FRZt7vMbirJtvOWhpJN3vbQaZI1ct4iVOVKVVuE3Jyjmw0uVT0stKjfTNuWvWR6QAoVKMAZ8FWzXZ6noMBQBlnB/Sj2+8vNEIemjXUo5sta0p7DQrZMi3dO1+9DcXNRJQknkl9Pw/EteSZdJbmSLUeDeeSp7Y+PkU/gufVvEK0i6MWbf8Gz/LRWOTp7Eu1+QhWCNHazKs1c5nhk1873I2oYGKjohNzvrfs27Co1c7kLk30t6Vttq3EhkenO908zritP50Iy4bJ71y3ElFRgtNkgjeoY2pDVVqduc18C+vworUtWJr53NGNaon4S0Hn8RlBvRT0LpPX3I07b3rfOFfQHE/wir4zDVfWJZ0qNXNU27txlFSSe1p309aPenLeIKP8VxL/tCW6lB/M6kZ1QAEAAAfOPGZUvjsRf62Xho+R5B9q3ntuMqjm4/ELm9JnW5uXCMn8Ty7wss1T9HLMbsp5rzG9ilq5nuOmYyjilWdtns30v7VrG5KC2bPiYvRpNvbbwVvMQaixPUt5X03V4/gbLithT0Udi3EIwelXX4FVUXX4eZl9BHYinq8dnxAszlte78RnLb4Mulho7Hve/xW8ueHhraqJaNOvxsgMd1t+PkM5dJbykqEb8mUu9WLng3a93a9r20X2X2gFJdJb0Xpvb4mKWFlrvo06baNGv4reUeDne3PscXfVfV2aSjYV9rF3tNVYZ/Z3B4efNm735CjacpbfBD0j/KMdCWhX0XS36C+62gVz2Vz3+bloutq3gTGRoJxk5RT0O17+ZC1pcu1iayTUSpyu1vIOTWe32jRkLHLZv8AIPT5FCK7d/8An+P8UxL/ALTbdRpP5nUjmXEFC2BrvpYufhQoI6aZ1QAEAAAcK43aFsfUfThSl+oo/unOpYiahG8pNNXzdavd6bLsOrcdNG2Jpy6VGPhOfmjltSm+ZKyVldu+tvZ1nTPGSUrxvzteJSQpppK+tGJ1VtGjInZ3Xik1uegv9M9kfuQ+SNV4uG3wY9bh0kRWzOpdWzYrrSs/iWpGJYiPSjvRljUW1b0BMcGcseqVXWeGjWebmwc7/o565OLSdm4yir7L7WbmI4VxeCr4d4WmpYqvUqyqKXLgp1vSOMYuFlyU4KSaep20ETgssVqaUYVaiis5qMZ2Sbtd2aa05q5uZGf/AIhr/Wz59caUteu/IExjc2ruE2VKOInTdDDU6ChCSl6OEI+kcmrN5sI3tmtK6b0vSRk4xUYONTOcs5yjZpQadlpeiV076NWoxRX5ZWUr7NVtAxrMbHqrcYfoqrc5JJqScJX5ormlo1XZmed6Rt+tpU07P2qlNylZX06n3XbNSMoZ6k6fJSV4qck28218611p0+Ao1M1O2fnPNtKNRpJK901z83OrW576KKwedPlSbzpPTOSg370ndRdl195jcrLO2K/hczUc2zz29Wi3S2s1MbLkS61bf+FwLcDLkx92JsM1MFqXuxNtDBTNWxbhmrYiscRBKWdTqN6otaIrS020r35rauctpVFJNrmdtJRuUILN1EdbluyJOh7JHJcuQ0YlUTdvEvUS3D4VRWnTLbs7DIZV3biKj/J9TrxVR/5dJfI6Mc94jl/Jz68RV/ZgdCMaoAAAAA5bx2Uf+nltjVW5wf7xyKSO3cclG+GpS6NSS+9G/wC6cRkdOPjOsbiReVafJg9l14IlmaOUFyVszn1217OwuiFq62WqRtVaSbbutPVLyMfq/Wt5hphziq7vz2GT1Z9W9FY4WT1LxQFia2Le/MqqnW12SZX1eWwo6Eui9zAuVd9KX3i5YqfSl4MwOnLY9xa0BtrHT6X6qL1lGe2PevI0QKRvrKUvs+JdPH50c12WlPR1Jr5kcyjYpE/hbaLdFGwjfybiaFOlBTwvppTi5OTqShZJuKUVHsb7zNHH4PNcpYKrFLXJVajXibxNzcyoiUG3ofc1cpTp2T0622T+LngYWz6OJhnas2UX8WzFmYGonGlUxEarjJwVaMMyTim83kq+m1r9ZM3N+8Rp0VyTRguUzfpewaVBcqRdFZIszTalAs9EIO6cSS/k3tr1v3T3x4biahbJsf72t+0e5Oe+tAAIAAA8dxrUc7At9CpCXhKP7xwGs7Nn0fw9w+fgK6XNFS+7JSfgmfNuIq2bvtN8fE1gq4tLUm33peJH16rlrfdzEl6yussnio899yKiIcTNhMOptpvQlfRrJB1KfOl3x/AUZ01e1lfu2iDWeT1zSfgWfwf1+H4m5SkraZwb7UjKrdXcxBFyye9q7/8AYsnhnFX+D/2Jhx6mW43TSSX0ZZ29WsIVC5/W/wA94lUe2+/5m76g2k7rUtDTLHk6X2d78hBp5/2Y7vIOS6K8fM2ngJ7FvRY8FPovwJFrXbj0fFlk4RepPevI3qWEfPF9WctHftL62FjbSrva/wANQhU1gaEZOmpRUl6vN2avpVW1/EpRwsPVatTN5cZTzZJtNWaSK4evGn6OUr2dGcFZX0uq38vEpTxkPVatPO5cnNpadN5bdWpF4ztt/G+c+PjPak8t5MpweGUc5elzlLlzd7Ri9F3o0t6izHZPjTnRlFzd5TXKk5aFTk9F9Rmy5lClOWFzKkWqefn/AGeTG2vsYytiITlRzJxlaVW+a07fopa7dhw/jeuVnUXT9g18FHTLsZnh7Jbk9aZdjPSy2FAzRpFYx8iZjwLylKrTisJUjCU4Nyk4ZulrTK0rxS57q+jUQda4rqWbk6n1yrP/ADJL5HrCPyBktYbD06Ck5Zid5PnlJuUnbmV29BIHPfWgAEAAAYcbhY1ac6U/ZqRlCVtDtJWdn3nMcdxK0ZNuGMrRvqz4U5/DNOqAtHFK3EZV+jlCD97Dyj8KrIzF8SGPtaGIwsvedWHwhI78BSPm/EcTuVY6oUJ+5Wt+3GJGVuLLK8deCm/dq0JfCofUYFHyTieBmUoe1gMV/wCNGdRfqJkXjMi4mP8AOYavG3To1IrxifZQFHxKm1z272mXxxEuaT7pvzPtOrRjL2oxl7yT+JHYrgzgqn85g8NP36FKXxiKPkFYyovpS33+Jcso1V9J98Y+R9VYji8yXPXgMOvcgofs2IytxRZIlqwrjfoVq68HOxaPnDD5Rm9dt3kzdpYpvWl3KR3OtxK5NfsSxNP3KsX/APSEjVqcSeG+hi6699UpfsxiXOSRxmpWTtqVr8+23ka2Iktq3nYK/ElL6GPXZPDv4qr8iLx/Enjf6PE4aXv+lh8IyL2xI8FQryirRlJLQ7JtLVsRkeJlztP3oxl8UZsoZFr4ecqVWnJOlJwclCfo5OLs5Qk0rxdrp7DRVVas5X2X0mhn9K+jD/Cpf6R6VLSoQUrNZ0U07NWdle2ptajEpADYjLkmTJsNMuxmOn7LN/g9hJVamZCLlOSajFa5PmRR7/ihyVCpXqVpxUnQjTdO+pSm5cu21KDt2nXzzHATgx6lSlnyvVq5jqW9mObfNitts53fOenOXLbq4AAyoAAAAAAAAAAAAAAAAAAAAAAAAAABjq0Iy9qMX7yT+JkAEbX4P4Sft4TDy96jTfxRoVeA+Tpa8DQXu04w/ZsehBaPKvi6yb/VV2KpWS3KZKZI4NYTCvOw+Hp05NWzkrztsznd26rksBdAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k=" alt="">
                        <p>PRINTER BROTHER</p>
                        <p><a href="pembayaran.php" class="tbl-biru">pembayaran</a></p>
                    </div>
                </center>
                </th>
                <th style="padding-block: 40px;">
                    <center>
                        <div class="card">
                            <img height="300px" width="300px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwtO1BKl7jcPiJF8h02AJ8oy0c4qJYXcCxuXZOb6EYxr-oFjM-mjqS0OsTI0L6Fsd0dOg&usqp=CAU" alt="">
                            <p>PRINTER CANON</p>
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
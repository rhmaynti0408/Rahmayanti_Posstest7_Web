<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posstest 3</title>
    <link rel="stylesheet" href="css.css"/>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<header>
    <nav>
        <a href="#">
            <h1 id="judul" class ="header">YantiCoffee</h1>
        </a>
            <ul class ="Nav-link">
                 <li class  = "nav-item" ><a href="#tentang">AboutMe</a></li>
                 <li class  = "nav-item" ><a href="#rumah">Home</a></li>
            </ul>
    </nav>
<section id="content">
    <div class="home-text">
        <h1>Pesanan anda siap adalah semangat kami</h1>
        <br><br>
    </div>
    <div class="background">
        <img src ="bg1.jpg" alt="" width="1500px">
    </div>
</section>
</header>
<body>
    <div class="contents">
        <br><br><br>
        <h2 id="rumah">Official store</h2><br><br>
        <div class="contact-form">
            <!-- <th colspan="3"></th> -->
            <p>Masukkan Topping</p>
            <input type="text/submit/hidden/button/image"name=""id=""/>
            <button id="sent">Kirim</button>
            <br><br>
        </div>
        <div class="tombol">
            <button class="tombol-terang" onclick="UbahWarna()">Ganti Tema</button>
        </div>
        <script src ="javascripts.js"></script>
        <br><br>
        <div class="contents-items">
        <div class = "contents-gambar">
            <img src="WhatsApp Image 2022-09-29 at 18.58.43.jpeg " width="300px">
            <p>kopi Matcha seger</p>
            <h2>RP 15.000</h2>
        </div>
        <div class="contents-gambar">
            <img src="WhatsApp Image 2022-09-29 at 18.58.41.jpeg" width="300px">
            <p>kopi gula aren</p>
            <h2>RP 15.000</h2>
        </div>
        <div class="contents-gambar">
            <img src="WhatsApp Image 2022-09-29 at 18.58.42.jpeg" width="300px">
            <p>kopi mix milo</p>
            <h2>RP 15.000</h2>
        </div> 
            <div class="contents-gambar">
                <img src="WhatsApp Image 2022-09-29 at 18.58.43 (1).jpeg" width="300px">
                <p>hot coffee latte</p>
                <h2>RP 15.000</h2>
            </div>  
            <div class="contents-gambar">
                <img src="WhatsApp Image 2022-09-29 at 18.58.42 (1).jpeg" width="300px">
                <p>kopi mix yakult</p>
                <h2>RP 15.000</h2>
                </div>
        </div>
        </div>
    </div>
    <footer>
        <h2 id="tentang">AboutMe</h2>
        <div class="foto-aku">
            <img src="IMG_20220929_072634.jpg" alt="" width="200px" id="gambar">
            <div class="btn">
                <button onclick='Ubah_image("130604438_884919288920183_230863574375148263_n.jpg");'>reset gambar</button>
                <button onclick="Ubah_image('IMG_20220929_072634.jpg');">ubah gambar</button>
                <script src ="javascripts.js"></script>
            </div>
        </div>
    
        <div class="about-me-text">
            <h3 id="signup">About Me</h3>
            <p>nama         :   Rahmayanti</p>
            <p>NIM          :   2009106068</p>
            <p>Prodi        :   Informatika</p>
            <p>Angkatan     :   2020</p>
            <p>Hobi         :   Kerjakan Posstest</p>
        </div>
        <div class="footer">
            <div class="footer-logo">Copyright @Rahmayanti</div>
    </footer>
</body>
</html>
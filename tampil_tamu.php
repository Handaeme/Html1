<style type="text/css">
        a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 12px 10px}
        ul{padding: 13px}
        li{list-style: none; display: inline;}
        li a{background: #222; color:#ffffff;}
        li a:hover{background: #fffc4d; color:#fff;}
        .navi{background: #222; height: 50px}
    </style>
    <nav class="navi">
        <ul>
            <li><a href="Daftar Menu.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contack Us</a></li>
            <li><a href="https://www.instagram.com/hanan_nadhif/">Instagram</a></li>

        </ul>
    </nav>

<?php
  $nama = $_GET['nama'];
  $pesanapa = $_GET['pesanApa'];
  $alamat = $_GET['alamat'];
  
 echo"<center><h2>TERIMA KASIH ATAS PESANAN ANDA!!<h2></center>";echo"<br>";
    echo"<center>";echo"Dengan atas nama " .$nama ;echo"</center><br>";
    echo"<center>Pilihan menu anda adalah :" .$pesanapa;echo"</center><br>"; 
    echo"<center>Dengan alamat (untuk jenis pesanan delivery)" .$alamat;echo"</center><br>";
    echo"<center>Pesanan anda segera kami proses,mohon tunggu sebentar</center>";
?>
<body bgcolor="#F3C583">


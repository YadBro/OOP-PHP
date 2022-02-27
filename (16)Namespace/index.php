<?php

require_once('App/init.php');

// KOMIK // This is an **OBJECT**.
// Variable dari sebuah object di sebut INSTANCE
$Produk_1 = new Komik("Naruto", "Masashi Kimoto", "Trans Studio Bandung", 3000, 100);

// GAME // This is an **OBJECT**
// Variable dari sebuah object di sebut INSTANCE
$Produk_2 = new Game("Roblox", "Bang Yadi", "YadBro Studio", 1000, 50);
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($Produk_1);
$cetakProduk->tambahProduk($Produk_2);
echo $cetakProduk->cetak();


use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

echo "<br>";
new ProdukUser();
echo "<br>";
new ServiceUser();

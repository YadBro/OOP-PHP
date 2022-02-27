<?php

require_once('(15.1)App/(15.4)init.php');

// KOMIK // This is an **OBJECT**
// Variable dari sebuah object di sebut INSTANCE
$Produk_1 = new Komik("Naruto", "Masashi Kimoto", "Trans Studio Bandung", 3000, 100);

// GAME // This is an **OBJECT**
// Variable dari sebuah object di sebut INSTANCE
$Produk_2 = new Game("Roblox", "Bang Yadi", "YadBro Studio", 1000, 50);
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($Produk_1);
$cetakProduk->tambahProduk($Produk_2);
echo $cetakProduk->cetak();

<?php

// Jualan Produk
// Komik
// Game

// OBJECT TYPE ini akan memungkinkan sebuah parameter yang di isi secara spesifik

class Produk // This is a **CLASS**
{
    // This is a **PROPERTIES** of komik and game
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // Constructor is a Method or a Magic Method
    // Construct ini akan di jalankan secara otomatis ketika class produk di jalankan
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    // default value $harga = 0; 0 is default value for harga variable
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // This is a Method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}


class CetakInfoProduk
{
    // OBJECT TYPE PRODUK yang dimana method function cetak ini berupa parameter yang wajib di isi dengan sebuah instance Produk
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}






// KOMIK // This is an **OBJECT**
// Variable dari sebuah object di sebut INSTANCE
$Produk_1 = new Produk("Naruto", "Masashi Kimoto", "Trans Studio Bandung", 3000);

// GAME // This is an **OBJECT**
// Variable dari sebuah object di sebut INSTANCE
$Produk_2 = new Produk("Roblox", "Bang Yadi", "YadBro Studio", 1000);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($Produk_1);
echo "<br>";
echo "<br>";
// // another object of game
// $Produk_3 = new Produk("Fortnite", "Masashi Kimoto", "Trans Studio Bandung");


echo "Komik: " . $Produk_1->getLabel() . "<br>";
echo "Game: " . $Produk_2->getLabel() . "<br>";
// echo "Another Game: " . $Produk_3->getLabel();

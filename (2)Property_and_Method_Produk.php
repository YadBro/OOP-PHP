<?php

// Jualan Produk
// Komik
// Game

class Produk // This is a **CLASS**
{
    // This is a **PROPERTIES** of komik and game
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // This is a Method
    public function sayHello()
    {
        return "Hello World";
    }

    public function getLabel()
    {
        return "$this->judul, $this->penerbit";
    }
}

// KOMIK
// Variable dari sebuah object di sebut INSTANCE
$Produk_1 = new Produk(); //. This is an **OBJECT**
$Produk_1->judul = "Naruto";
$Produk_1->penulis = "Masashi Kisimoto";
$Produk_1->penerbit = "Trans Studio Bandung";
$Produk_1->harga = 3000;

// GAME
// Variable dari sebuah object di sebut INSTANCE
$Produk_2 = new Produk();
$Produk_2->judul = "Roblox";
$Produk_2->penulis = "Bang Yadi";
$Produk_2->penerbit = "YadBro Studio";
$Produk_2->harga = 1000;


echo "Komik: " . $Produk_1->getLabel() . "<br>";
echo "Game: " . $Produk_2->getLabel();

<?php

// Jualan Produk
// Komik
// Game

/*
    Constructor adalah sebuah method atau sebuah magic method dalam php.
*/



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
    public function sayHello()
    {
        return "Hello World";
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis ,$this->penerbit, $this->harga";
    }
}

// KOMIK // This is an **OBJECT**
// Variable dari sebuah object di sebut INSTANCE
$Produk_1 = new Produk("Naruto", "Masashi Kimoto", "Trans Studio Bandung", 3000);

// GAME // This is an **OBJECT**
// Variable dari sebuah object di sebut INSTANCE
$Produk_2 = new Produk("Roblox", "Bang Yadi", "YadBro Studio", 1000);

// another object of game
$Produk_3 = new Produk("Fortnite", "Masashi Kimoto", "Trans Studio Bandung", 2000);


echo "Komik: " . $Produk_1->getLabel() . "<br>";
echo "Game: " . $Produk_2->getLabel() . "<br>";
echo "Another Game: " . $Produk_3->getLabel();

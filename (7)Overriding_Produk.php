<?php

// Jualan Produk
// Komik
// Game


/* 
    INHERITANCE / PEWARISAN SIFAT menciptakan sebuah hierarki antar kelas (Parent & Child)

    ketika menciptakan sebuah Child class, child class akan mewarisi semua properti dan
    method dari parent-nya (yang visible) alias dapat di lihat atau dapat di akses
    dengan sebuah tipe dari class itu sendiri
    - PUBLIC
    - PRIVATE
    - PROTECTED

    [[ OVERRIDING ]] adalah  sebuah istilah dimana kita bisa membuat method function di class child
    yang memiliki nama yang sama dengan method function parent

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
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        // Komik : Naruto | Masashi Kimoto, Trans Studio Bandung (Rp.3000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

        return $str;
    }
}



class Komik extends Produk
{
    public $jml_halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jml_halaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jml_halaman = $jml_halaman;
    }

    public function getInfoProduk()
    {
        // OVERRIDING
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jml_halaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktu_main;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktu_main = 0)
    {
        // OVERRIDING
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktu_main = $waktu_main;
    }
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktu_main} jam.";
        return $str;
    }
}


class CetakInfoProduk
{
    /**
     *  Mencetak sebuah produk dengan tipe data instance dari produk.
     * 
     * @param Produk $produk
     * @return string
     */
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}






// KOMIK // This is an **OBJECT**
// Variable dari sebuah object di sebut INSTANCE
$Produk_1 = new Komik("Naruto", "Masashi Kimoto", "Trans Studio Bandung", 3000, 100);

// GAME // This is an **OBJECT**
// Variable dari sebuah object di sebut INSTANCE
$Produk_2 = new Game("Roblox", "Bang Yadi", "YadBro Studio", 1000, 50);

echo $Produk_1->getInfoProduk();
echo "<br>";
echo $Produk_2->getInfoProduk();
/*
    === OUTPUT ===
    Komik : Naruto | Masashi Kimoto, Trans Studio Bandung (Rp.3000) - 100 Halaman.
    Game : Roblox | YadBro Channel, YadBro Studio (Rp.3000) - 50 jam.
*/

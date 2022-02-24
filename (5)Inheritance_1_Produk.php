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
*/


class Produk // This is a **CLASS**
{
    // This is a **PROPERTIES** of komik and game
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jml_halaman,
        $waktu_main,
        $tipe;

    // Constructor is a Method or a Magic Method
    // Construct ini akan di jalankan secara otomatis ketika class produk di jalankan
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jml_halaman = 0, $waktu_main = 0, $tipe)
    // default value $harga = 0; 0 is default value for harga variable
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jml_halaman = $jml_halaman;
        $this->waktu_main = $waktu_main;
        $this->tipe = $tipe;
    }

    // This is a Method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        // Komik : Naruto | Masashi Kimoto, Trans Studio Bandung (Rp.3000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= "  - {$this->jml_halaman} Halaman.";
        } elseif ($this->tipe == "Game") {
            $str .= "  - {$this->waktu_main} Jam.";
        }

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
$Produk_1 = new Produk("Naruto", "Masashi Kimoto", "Trans Studio Bandung", 3000, 100, 0, "Komik");

// GAME // This is an **OBJECT**
// Variable dari sebuah object di sebut INSTANCE
$Produk_2 = new Produk("Roblox", "Bang Yadi", "YadBro Studio", 1000, 0, 50, "Game");

echo $Produk_1->getInfoLengkap();
echo "<br>";
echo $Produk_2->getInfoLengkap();
/*
    === OUTPUT ===
    Komik : Naruto | Masashi Kimoto, Trans Studio Bandung (Rp.3000) - 100 Halaman.
    Game : Roblox | YadBro Channel, YadBro Studio (Rp.3000) - 50 jam.
*/

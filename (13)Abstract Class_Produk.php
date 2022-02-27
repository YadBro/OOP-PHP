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


    OVERRIDING adalah  sebuah istilah dimana kita bisa membuat method function di class child
    yang memiliki nama yang sama dengan method function parent


    VISIBILITY / ACCESS MODIFIER adalah sebuah konsep yang di gunakan untuk mengatur akses dari
    property dan method pada sebuah objek

    ada 3 keyword visibility:
    - PUBLIC    = dapat di gunakan / di akses di mana saja, bahkan di luar kelas
    - PRIVATE   = hanya dapat di gunakan di dalam sebuah kelas tertentu saja
    - PROTECTED = hanya dapat di gunakan di dalam sebuah kelas beserta turunannya


    
    ACCESSOR METHOD / SETTER & GETTER memungkinkan mendapatkan data dan juga mengset data
    yang visibility nya private.


    [[ Implement the Abstract Class ]]

*/

abstract class Produk // This is a **ABSTRACT CLASS**
{
    // This is a **PROPERTIES** of komik and game
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;


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

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }


    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    // This is a Method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();

    public function getInfo()
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
        // OVERRIDING
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jml_halaman = $jml_halaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jml_halaman} Halaman.";
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
        $str = "Game : " . $this->getInfo() . " - {$this->waktu_main} jam.";
        return $str;
    }
}


class CetakInfoProduk
{
    public $daftar_produk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftar_produk[] = $produk;
    }

    /**
     *  Mencetak sebuah produk dengan tipe data instance dari produk.
     */
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftar_produk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}






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

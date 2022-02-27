<?php

// Nama file harus sama dengan nama kelas

class Game extends Produk implements InfoProduk
{
    public $waktu_main;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktu_main = 0)
    {
        // OVERRIDING
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktu_main = $waktu_main;
    }

    public function getInfo()
    {
        // Komik : Naruto | Masashi Kimoto, Trans Studio Bandung (Rp.3000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

        return $str;
    }


    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " - {$this->waktu_main} jam.";
        return $str;
    }
}

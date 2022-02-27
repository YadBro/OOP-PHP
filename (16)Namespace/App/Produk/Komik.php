<?php

// Nama file harus sama dengan nama kelas

class Komik extends Produk implements InfoProduk
{
    public $jml_halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jml_halaman = 0)
    {
        // OVERRIDING
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jml_halaman = $jml_halaman;
    }

    public function getInfo()
    {
        // Komik : Naruto | Masashi Kimoto, Trans Studio Bandung (Rp.3000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jml_halaman} Halaman.";
        return $str;
    }
}

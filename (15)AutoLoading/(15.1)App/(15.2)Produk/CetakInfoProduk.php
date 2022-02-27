<?php

// Nama file harus sama dengan nama kelas

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

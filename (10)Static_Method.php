<?php

/*

        [[ STATIC METHOD ]] memungkinkan kita untuk bisa mengakses property dan method
        dalam konteks class

        STATIC METHOD memiliki sifat :
            - Nilai static akan selalu tetap meskipun objectnya kita instance berulang
            kali.
            - Member yang terkait dengan class, bukan dengan object.
            - Membuat kode menjadi 'procedural'.
            - Biasanya digunakan untuk membuat fungsi bantuan / helper.
            - Biasa digunakan di class-class utility pada Framework.

    */


class ContohStatic
{
    // Property static dengan variable angka
    public static $angka = 1;

    // Method static function halo
    public static function halo()
    {
        /* 
            karena kita tidak menginstance sebuah kelas ContohStatic atau ingin mengakses
            sebuah property static kita bisa menggunakan keyword self
        */
        return "Halo " . self::$angka++ . " kali.";
    }
}

// :: tanda tersebut adalah untuk mengakses sebuah property atau method yang memiliki keyword static

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();
echo "<hr>";

/*
 OUTPUT

    1
    Halo 1 kali.
    -----------
    Halo 2 kali.
 
   */

class Contoh1
{
    public $angka = 1;

    public function halo()
    {
        return "Halo " . $this->angka++ . " kali. <br>";
    }
}

// Instance
echo "<br><h5>CONTOH 1</h5>";
$obj = new Contoh1; // Object
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh1; // Object
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();


/*
 OUTPUT

    CONTOH 1

    Halo 1 kali.
    Halo 2 kali.
    Halo 3 kali.
    ------------
    Halo 1 kali.
    Halo 2 kali.
    Halo 3 kali.
 
   */



class Contoh2
{
    public static $angka = 1;

    public function halo()
    {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

// Instance
echo "<br><h5>CONTOH 2</h5>";
$obj = new Contoh2; // Object
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh2; // Object
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
  
  
  /*
   OUTPUT
  
    CONTOH 2
    Halo 1 kali.
    Halo 2 kali.
    Halo 3 kali.
    -----------
    Halo 4 kali.
    Halo 5 kali.
    Halo 6 kali.
   
     */
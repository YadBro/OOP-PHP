<?php

/*
    [[ Constant / Konstanta ]] adalah sebuah identifier untuk menyimpan nilai
    (!jangan samakan dengan variable!)
        Constant ini nilainya tidak akan berubah. Untuk membuat constant / konstanta
    bisa dengan 2 cara, yaitu:
    1. Bisa menggunakan method function " define() ".
    2. Bisa menggunakan keyword " const ".

    Dalam php terdapat magic method untuk Constant / Konstanta ini yaitu :
    (awali dengan dua underscore di awal dan akhir)
    ⭕ __LINE__         = ini akan memberikan informasi sebuah angka dari baris kode magic method __LINE__ ini di buat.
    ⭕ __FILE__         = ini akan memberikan informasi sebuah directory file php ini di buat.
    ⭕ __DIR__          = ini akan memberikan informasi sebuah directory folder php ini di buat.
    ⭕ __FUNCTION__     = ini akan memberikan informasi kita sedang berada di function apa.
    ⭕ __CLASS__        = ini akan memberikan informasi kita sedang berada di class apa.
    ⭕ __TRAIT__        = -
    ⭕ __METHOD__       = ini akan memberikan informasi dimana method function di deklarasikan.
    ⭕ __NAMESPACE__    = -

    Lihat di baris kode ke = 112

*/


/*
 [[ CARA PERTAMA ]] menggunakan method function " define() "
 
 define('CONSTANT_NAME', 'value');

 note:
 1. "biasakan untuk menamai constant / konstanta harus huruf kapital semua agar mudah
 untuk membedakan mana Constant dan mana Variable".
 2. Dalam penggunaan method function define() tidak bisa digunakan dalam konsep OOP atau class.
 Dia hanya bisa di gunakan di luar kelas sebagai Constant / Konstanta global.

*/

define('NAMA', 'Yadi Apriyadi');

// untuk mengakses Constant / Konstanta kita cukup panggil nama Constant nya saja tanpa menggunakan tanda " $ ".
echo "<h5>Ini adalah constant / konstanta menggunakan define()</h5>";
echo NAMA;

/*
    OUTPUT CARA PERTAMA:

    Ini adalah constant / konstanta menggunakan define()
    
    Yadi Apriyadi

*/


// ----------------------------------------------------------- //


/*
 [[ CARA KEDUA ]] menggunakan keyword " const "
 
 const CONSTANT_NAME = VALUE;

 note:
 1. "biasakan untuk menamai constant / konstanta harus huruf kapital semua agar mudah
 untuk membedakan mana Constant dan mana Variable".
 2. Bisa di simpan dalam class.

*/

const UMUR = 32;
echo "<h5>Ini adalah constant / konstanta menggunakan keyword const</h5>";
echo UMUR;

/*
    OUTPUT CARA KEDUA:

    Ini adalah constant / konstanta menggunakan keyword const
    
    32

*/


// class Coba
// {
//     define('NAMA', 'Yadi Apriyadi');
//     // Output => Parse error: syntax error, unexpected identifier "define", expecting "function" or "const"
// }


class Coba
{
    const NAMA = 'Yadi Apriyadi';
}

// Untuk memanggil Constant / Konstanta dalam sebuah kelas itu sama seperti static method.
echo "<br>";
echo "<h5>Ini adalah sebuah constant / konstanta dalam sebuah class</h5>";
echo Coba::NAMA;


/*
    OUTPUT :

    Ini adalah sebuah constant / konstanta dalam sebuah class
    
    Yadi Apriyadi

*/

// [[ MAGIC METHOD CONSTANT / KONSTANTA ]]
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h3>MAGIC METHOD CONSTANT / KONSTANTA</h3>";

// __LINE__
echo "<h5>1. Ini adalah sebuah magic method __LINE__</h5>";
echo __LINE__;


// __FILE__
echo "<br>";
echo "<h5>2. Ini adalah sebuah magic method __FILE__</h5>";
echo __FILE__;


// __DIR__
echo "<br>";
echo "<h5>3. Ini adalah sebuah magic method __DIR__</h5>";
echo __DIR__;


// __FUNCTION__
echo "<br>";
echo "<h5>4. Ini adalah sebuah magic method __FUNCTION__</h5>";
function function_test()
{
    echo "Aku sedang berada di function (" . __FUNCTION__ . ")";
}
function_test();

// __CLASS__
echo "<br>";
echo "<h5>5. Ini adalah sebuah magic method __CLASS__</h5>";
class class_test
{
    function function_test()
    {
        echo "Aku sedang berada di class (" . __CLASS__ . ")";
    }
}
// Instance
$obj = new class_test; // Object
$obj->function_test();


// __METHOD__
echo "<br>";
echo "<h5>6. Ini adalah sebuah magic method __METHOD__</h5>";
class class_test2
{
    function function_test()
    {
        echo "Pendeklarasian method ku adalah (" . __METHOD__ . ")";
    }
}
// Instance
$obj = new class_test2; // Object
$obj->function_test();

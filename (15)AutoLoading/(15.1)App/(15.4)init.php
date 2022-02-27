<?php


/*
  Dalam php ada method function yang namanya [[ spl_autoload_register(); ]] untuk memanggil
 semua class beserta turunannya.
*/


// Closure Function  adalah sebuah fungsi tanpa nama
// Di dalam parameter spl_autoload_register() ada function tanpa nama itu di sebut Closure Function
spl_autoload_register(function ($class) {
    // Panggil semua class
    require_once __DIR__ . '/(15.2)Produk/' . $class . '.php';
});

<?php


/*
  Dalam php ada method function yang namanya [[ spl_autoload_register(); ]] untuk memanggil
 semua class beserta turunannya.
*/


// Closure Function  adalah sebuah fungsi tanpa nama
// Di dalam parameter spl_autoload_register() ada function tanpa nama itu di sebut Closure Function
spl_autoload_register(function ($class) {
  // Panggil semua class
  // 1. Output = App\Produk\User  => ["App", "Produk", "User"]
  $class = explode('\\', $class);

  // 2. Output = end() ini mengambil element terakhir dari array => ["User"]
  $class = end($class);

  // ini akan error karena kita sudah membuat namespace pada salah satu class, cara mengatasi lihat atas dari 1-3.
  require_once __DIR__ . '/Produk/' . $class . '.php';
});
spl_autoload_register(function ($class) {
  // Panggil semua class
  // Panggil semua class
  // 1. Output = App\Produk\User  => ["App", "Produk", "User"]
  $class = explode('\\', $class);

  // 2. Output = end() ini mengambil element terakhir dari array => ["User"]
  $class = end($class);

  // ini akan error karena kita sudah membuat namespace pada salah satu class, cara mengatasi lihat atas dari 1-3.
  require_once __DIR__ . '/Service/' . $class . '.php';
});

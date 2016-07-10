<?php

/**
 * A simple, clean and secure PHP Login Script / MINIMAL VERSION
 * For more versions (one-file, advanced, framework-like) visit http://www.php-login.net
 *
 * Uses PHP SESSIONS, modern password-hashing and salting and gives the basic functions a proper login system needs.
 *
 * @author Panique
 * @link https://github.com/panique/php-login-minimal/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// Cek syarat minimal versi PHP
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // jika Anda menggunakan PHP 5.3 atah PHP 5.4 Anda harus mengikutkan password_api_compatibility_library.php
    // (library ini menambahkan fungsi 'password hashing' PHP 5.5 ke versi lama PHP)
    require_once("libraries/password_compatibility_library.php");
}

// menyertakan konstan (constans) configs / constants untuk koneksi database 
require_once("config/db.php");

// memanggil 'registration class'
require_once("classes/Registration.php");

// membuat obyek 'registration'. ketika obyek tersebut dibuat, itu akan melakukan semua 'registration stuff' otomatis
// jadi satu baris kode berikut memegang peran atas proses seluruh 'registration'.
$registration = new Registration();

// menampilkan tampilan 'register' (dengan form 'registration', dan pesan/kesalahan2)
include("views/register.php");

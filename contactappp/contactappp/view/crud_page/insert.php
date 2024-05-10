<?php
require_once 'contact.php';

$res_insert = Contact::insert('1006','082278901066', 'Reza');
echo $res_insert;
if ($res_insert) {
    header("Location: dashboard.php");
    exit(); // Pastikan untuk keluar dari skrip PHP setelah mengarahkan pengguna
}
?>
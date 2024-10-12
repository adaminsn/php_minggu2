<?php
require_once 'Domain_object/node_barang.php';

$obj_barang = [];

$obj_barang [] = new Barang(1, "Toepokki", "3", "25000" , "Ada");
$obj_barang [] = new Barang(2, "Nescafe", 0, "4500" , "Kosong");
$obj_barang [] = new Barang(3, "Le Mineral", 13, "3500" , "Ada");
$obj_barang [] = new Barang(4, "Ramen", 0, "20000" , "kosong");

include 'views/barang_list.php';
?>
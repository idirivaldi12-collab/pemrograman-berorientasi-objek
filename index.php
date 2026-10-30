<?php
require('./property-constant.php');

use Pbo\Marketplace\produk;

//object
$produk = new produk('A001', 'Laptop', 1000000, 5);

echo "Produk: ". $produk->nama;
echo "<br/>";
echo "Harga: ". $produk->harga;
echo "<br/>";
echo "Stok: ". $produk->stok;
echo "<br/>";
echo "Pajak: ". $produk->pajak(). "%";
echo "<br/>";
echo "Total Harga: Rp". $produk->total();
<?php
require('./property-constant.php');

use Pbo\Marketplace\produk;

//object
$produk = new produk();

$produk->setKode('P0001')
        ->setNama('Laptop')
        ->setHarga(1000000)
        ->setStok(5);

//hasil
echo "Produk: ". $produk->getNama();
echo "<br/>";

echo "Harga: ". $produk->getHarga();
echo "<br/>";

echo "Stok: ". $produk->getStok();
echo "<br/>";

echo "Pajak: ". $produk->pajak(). "%";
echo "<br/>";

echo "Total Harga: Rp". $produk->total();
<?php

class produk {
    
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constan
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok){
    $this->kode = $kode;
    $this->nama = $nama;
    $this->harga = $harga;
    $this->stok = $stok;
    }

    public function pajak() {
        return self::PAJAK * 100; // 1,1jt
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

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
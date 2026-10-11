<?php

class Produk
{
    // Constant: nilainya tetap dan tidak bisa diubah
    const PAJAK = 0.11;

    // Property
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    public function __construct($kode, $nama, $harga, $stok)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function hargaSetelahPajak()
    {
        return $this->harga + ($this->harga * self::PAJAK);
    }

    private function rupiah($angka)
    {
        return "Rp" . number_format($angka, 0, ",", ".");
    }

    public function tampilkan()
    {
        echo "Produk: " . $this->nama . PHP_EOL;
        echo "Harga: " . $this->rupiah($this->harga) . PHP_EOL;
        echo "Stok: " . $this->stok . PHP_EOL;
        echo "Pajak: " . round(self::PAJAK * 100) . "%" . PHP_EOL;
        echo "Total harga setelah pajak: " . $this->rupiah($this->hargaSetelahPajak()) . PHP_EOL;
    }
}

$produk = new Produk("P001", "Laptop", 10000000, 5);
$produk->tampilkan();

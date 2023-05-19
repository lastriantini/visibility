<?php
    class Buku {
        private $judul = "Hujan";
        public $penulis = "Tere liye";
        protected $jumlahH = 187;
        function __construct($judul, $penulis, $jumlahH) {
            echo "Judul : ".$this->judul = $judul;
            echo "<br> Jenis buku : ".$this->penulis = $penulis;
            echo "<br> jumlah Halaman: ".$this->jumlahH = $jumlahH;
        }
    }  
    $buku1 = new Buku("aku", "Chairil Anwar", 132);
?>
<?php  

// Jualan Produk
// Komik
// Game
class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $jumlahHalaman,
           $waktuMain;
          

        public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jumlahHalaman = $jumlahHalaman;
            $this->waktuMain = $waktuMain;
           
     
        }


    // public function sayHello() {
    //     return "Hello Pecinta Komik";
    // }
    public function getLabel() {
             return "$this->penulis, $this->penerbit";
         }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";

        return $str;
    }
}


class komik extends Produk {
    public function getInfoProduk() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (RP. {$this->harga}) - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
    
}


class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (RP. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
    
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

// $Produk1 = new Produk();
// $Produk1->judul = "Naruto";
// var_dump($Produk1);

// $Produk2 = new Produk();
// $Produk2->judul = "Only up";
// $Produk2->tambahProperty = "hehehe";
// var_dump($Produk2);

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 35000, 125, 0);
$produk2 = new Game("Only up", "Neil Amstrong", "SCKR Games", 30000, 0, 45);

// var_dump($produk3);
// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


<?php
    class Barang{
        public $jenis;
        protected $ukuran;
        protected $harga;
        
        public function __construct($harga,$ukuran){
            $this->harga = $harga;
            $this->ukuran = $ukuran;
        }

        function __destruct(){
            echo "{$this->jenis} dengan ukuran {$this->ukuran}";
        }

        function setJenis($jenis){
            $this->jenis = $jenis;
        }

        function getJenis(){
            return "Barang telah disediakan: ";
        }

        function describe(){
            echo ("<br>Jenis: {$this->jenis}<br>Harga: {$this->harga}<br>ukuran: {$this-> ukuran}<br>");
        }
   
    }

    class Televisi extends Barang{
        public $merk;
        protected $color;
        private $modelTelevisi;

        public function __construct($harga,$ukuran){
            parent:: __construct($harga,$ukuran);
        }

        function __destruct(){
            echo "Televisi {$this->merk} dengan ukuran {$this->ukuran} sangat nyaman dipakai.<br>";
        }

        function setJenisTelevisi($jenis , $merk , $color, $modelTelevisi){
            $this->jenis = $jenis;
            $this->merk = $merk;
            $this->color = $color;
            $this->model = $modelTelevisi;
        }

        function getJenisTelevisi(){
            return "Jenis Telah disediakan: ";
        }

        function describeTelevisi(){
            echo ("<br>Jenis: {$this->jenis}<br>Harganya: {$this->harga}<br>ukuran: {$this->ukuran}<br>merk: {$this->merk}<br>warna: {$this->color}<br>");
        }
    }
    
    
    $Barang = new Barang(100000,"XL");    
    $Barang->setJenis("Barang Seragam");
    echo "{$Barang->getJenis()}";
    $Barang->describe();

    echo"<br>";

    $Televisi = new Televisi (2000000,"32inc ");
    $Televisi->setJenisTelevisi("Televisi LCD","Semsang","red","amoled");
    echo "{$Televisi->getJenisTelevisi()}";
    $Televisi->describeTelevisi();

    echo "<br>";
?>
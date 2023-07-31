<?php
    class Pakaian{
        public $jenis;
        private $harga;
        protected $ukuran;
        
        function __construct($harga,$ukuran){
            $this->harga = $harga;
            $this->ukuran = $ukuran;
        }

        function __destruct(){
            echo "{$this->jenis} dengan ukuran {$this->ukuran} sangat nyaman dipakai";
        }

        function setPakaian($jenis){
            $this->jenis = $jenis;
        }

        function getPakaian(){
            return "Pakaian telah disediakan";
        }

        function describe(){
            echo ("<br>Jenis: {$this->jenis}<br>Harga: {$this->harga}<br>ukuran: {$this-> ukuran}<br>");
        }
   
    }

    class Baju extends Pakaian{
        private $merk;

        function __construct($harga,$ukuran){
            parent:: __construct($harga,$ukuran);
        }

        function __destruct(){
            echo "Baju {$this->merk} dengan ukuran {$this->ukuran} sangat nyaman dipakai.<br>";
        }

        function setBaju($jenis, $merk){
            $this->jenis = $jenis;
            $this->merk = $merk;
        }

        function getBaju(){
            return "Baju Telah disediakan";
        }
    }
    
    class Sepatu extends Pakaian{
        private $merk;

        function __construct($harga,$ukuran){
            parent:: __construct($harga,$ukuran);
        }

        function __destruct(){
            echo "Sepatu {$this->merk} dengan ukuran {$this->ukuran} sangat nyaman dipakai.<br>";
        }

        function setSepatu($jenis, $merk){
            $this->jenis = $jenis;
            $this->merk = $merk;
        }

        function getSepatu(){
            return "Sepatu Telah disediakan";
        }
    }
    
    
    $pakaian = new Pakaian(100000,"XL");    
    $pakaian->setPakaian("Pakaian Seragam");
    echo "{$pakaian->getPakaian()}";
    $pakaian->describe();

    echo"<br>";

    $baju = new Baju (200000,"L ");
    $baju->setBaju("Baju Tidur","Polo");
    echo "{$baju->getBaju()}";
    $baju->describe();

    echo "<br>";

    $Sepatu = new Sepatu (300000,"42");
    $Sepatu->setSepatu("Sepatu Olahraga","Nike");
    echo "{$Sepatu->getSepatu()}";
    $Sepatu->describe();

    echo "<br>";
?>
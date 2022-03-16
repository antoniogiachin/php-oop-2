<!-- classe padre di prodotti -->
<?php

    class products {

        //attributi
        public $name;
        protected $price;
        protected $discount =0;

        // funzione construct del prodotto
        public function __construct($name)
        {
            $this->name = $name;
        }

        // funzione set prezzo con IVA
        public function setPrice($price){
            $this->price = $price + ($price *22) / 100;
        }


    }



?>
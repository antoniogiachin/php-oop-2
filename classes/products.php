<!-- classe padre di prodotti -->
<?php

    class products {

        //attributi
        public $name;
        public $id;
        protected $price;
        protected $discount =0;

        // funzione construct del prodotto
        public function __construct($name, $id)
        {
            $this->name = $name;
            // id deve essere un numero e maggiore di 0
            if(is_numeric($id) && $id > 0){
                $this->id = $id;
            } else{
                $this->id = '<em> Id sconosciuto </em>';
            }
        }

        // funzione set prezzo con IVA
        public function setPrice($price){
            //arrotondato per difetto
            $this->price = floor($price + ($price *22) / 100);
        }


    }



?>
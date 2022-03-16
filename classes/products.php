
<?php

    require_once __DIR__ . '/user.php';
    class products extends user {

        //attributi
        public $name;
        public $id;
        protected $price;

        // funzione construct del prodotto
        public function __construct($username, $mail, $name, $id)
        {
            parent::__construct($username, $mail);

            $this->name = $name;
            // id deve essere un numero e maggiore di 0
            if(is_numeric($id) && $id > 0){
                $this->id = $id;
            } else{
                $this->id = '<em> Id sconosciuto </em>';
            }
        }

        // funzione set prezzo con IVA
        public function getPrice($price){
            //arrotondato per difetto
            $this->price = floor($price + (($price *22) / 100) - ($price * $this->discount / 100));
        }


    }



?>
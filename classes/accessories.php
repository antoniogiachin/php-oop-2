<!-- prodotto figlio cibo -->
<?php

    // richiamo la classe padre
    require_once __DIR__ . '/products.php';

    class accessories extends products {
        public $type;
        

        // funzione per set tipo
        public function setType($type){
            $this->type = $type;
        }
        
        //questa settimana ci sono gli sconti del 20% per gli accessori con id compreso tra 200 e 300
        public function setPrice($price)
        {
            if($this->id >= 200 && $this->id <= 300){
                $this->price = floor($price + ($price *22) / 100) - ($price * 20) / 100;
            }
        }
    }


?>
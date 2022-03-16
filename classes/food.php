<!-- prodotto figlio cibo -->
<?php

    // richiamo la classe padre
    require_once __DIR__ . '/products.php';

    class food extends products {
        public $type;
        protected $ingredients;

        // funzione per set tipo
        public function setType($type){
            $this->type = $type;
        }
        
        //funzione per creazione incredienti
        public function setIngredients(...$ingredients){
            $this->ingredients=$ingredients;
        }
    }


?>
<!-- prodotto figlio cibo -->
<?php

    // richiamo la classe padre
    require_once __DIR__ . '/products.php';

    class health extends products {
        public $type;
        protected $subType;
        protected $availability;

        //funzione per setsubtype
        public function setSubType($subType){
            $this->subType = $subType;
        }


        // funzione per set tipo
        public function setType($type){
            $this->type = $type;
        }
        
        //funzione per disponibilita' prodotto salute se antipulci, anti zecche o altro
        public function setAvailability(){
            
            if($this->subType === 'antipulci' && date("m.d.y") == "03.16.22" ){
                $this->availability = false;
            } elseif ( $this->subType === 'antizecche' && date("m.d.y") == "06.16.22"){
                $this->availability= false;
            } else {
                $this->availability = true;
            }
        }
    }


?>
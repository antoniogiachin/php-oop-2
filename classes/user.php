<!-- classe padre di user -->
<?php

    class user {

        public $username;
        protected $mail;
        protected $discount=0;
        private $users = ['gino@gmail.com', 'pino@gmail.com', 'dino@gmail.com'];
        protected $cardNumber;
        protected $cardExpiration;
        protected $cardValid;

        //funzione di construct
        public function __construct($username, $mail)
        {
            $this->username = $username;

            if(stripos($mail, '@') == true && strpos($mail, '.') == true){
                $this->mail = $mail;
            } else {
                $this->mail = 'Mail non fornita!';
            }
          

            // setta anche il discount
            if(in_array($mail, $this->users)){
                $this->discount = 20;
            }

        }

        // genera un numero casuale carta di credito
        public function setCardNumber(){

            $cardNumber='';

            for ($i=0; $i < 15 ; $i++) { 
                # code...
                $cardNumber .= rand(0,9);
            }

            $this->cardNumber = $cardNumber;
        }

        //genero una data casuale e la imposto come data scadenza carta
        public function getCardExpiration(){
            

            //conversione date intervallo in timestamp
            $fMin = strtotime('01-01-2022');
            $fMax = strtotime('01-01-2032');

            // genero numero random tra i due intrvalli di data
            $fVal = mt_rand($fMin, $fMax);

            //converto il valore random in formato data
            $cardExpiration = date('d-m-Y', $fVal);

            
            $this->cardExpiration = $cardExpiration;
            
        }

        //imposto validita' carta in base a data
        public function getCardValid(){

            // prendo la data odierna e assieme alla scadenza della carta di credito la rendo con strtotime un timestamp in formato unix e numerico
            $today = date('d.m.y');
            $todayInt = strtotime($today);

            //se la scadenza e' inferiore al giorno odierno allora la carta non sara' valida
            $cardExpirationInt = strtotime($this->cardExpiration);

            if($cardExpirationInt < $todayInt){
                $this->cardValid = false;
            } else {
                $this->getCardValid = true;
            }
        }
    }

?>
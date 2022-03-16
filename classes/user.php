<?php

    class user {

        public $username;
        protected $mail;
        protected $discount=0;
        private $users = ['gino@gmail.com', 'pino@gmail.com', 'dino@gmail.com'];

        //funzione di construct
        public function __construct($username, $mail)
        {
            $this->username = $username;

            $this->mail = $mail;

            // setta anche il discount
            if(in_array($mail, $this->users)){
                $this->discount = 20;
            }

        }
    }

?>
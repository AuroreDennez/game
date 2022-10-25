<?php

    /**
    * La classe Bidule permet de gérer le bidulage d’un projet.
    *
    * @author Toto <toto[@]toto.com>
    */
    class Caracters
    {

        private $name = "Jean";
        private $currentlife;
        private $current_pouvoir;

        /**
        * Lance un constructeur 
        *
        * Donne un  int à la variable currentlife
        *
        * @return object currentlife
        */
        public function __construct(string $name = null, int $currentlife = 100) 
        {
                $this->name = $name;
                $this->currentlife = $currentlife;
               // $this->current_pouvoir +1;

        }
        /**
        * Donne un nom à ma class Caracters
        *
        * Donne un string à la variable currentname
        *
        * @return object currentname
        */
        public function setCurrentName(string $name) {
            $this->name = $name;
        }
        public function getCurrentName() {
            return $this->name;
        }

        //public function setBaseLife(int $baselife) {
          //  $this->
        //}
        
        /**
        * Lance la valeur de la vie du caracters
        *
        * Donne un  int à la variable currentlife
        *
        * @return object currentlife
        */
        public function setCurrentLife(int $currentlife) {
            $this->currentlife = $currentlife;
        }

        public function getCurrentLife() {
            return $this->currentlife;
            
        }

        public function doSpeak(string $message) : void {
            echo $message;
        }

        /**
        * Ajoute 1 à currentlife de caracters.
        *
        * @return object Retourne l'objet caracters.
        */
        public function addPouvoir() {
            //var_dump($current_pouvoir);
           // $this->current_pouvoir = $current_pouvoir;
            ++$this->currentlife;

            return $this;

            
        }

        public function result() {

            return [
                $this->name,
                $this->currentlife,
                $this->$current_pouvoir,
            ];
        }

    }
    
?>

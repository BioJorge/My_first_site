<?php
    class Card{
        //atributos
        public $link;
        public $titulo;
        public $paragrafo;
    
        function __construct($link, $titulo, $paragrafo){
            $this->link = $link;
            $this->titulo = $titulo;
            $this->paragrafo = $paragrafo;
        }
    }



?>
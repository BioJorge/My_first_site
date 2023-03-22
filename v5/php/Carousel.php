<?php

class Carousel{
    //atributos
    public $link;
    public $titulo;

    public $subtitulo;

    //construtor
    function __construct($link, $titulo, $subtitulo){
        //em java seria this.nome = nome

        //ja em php é
        $this->link = $link;
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
    }

}
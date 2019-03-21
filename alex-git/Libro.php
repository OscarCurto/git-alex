<?php

require_once 'Tabla.php';
require_once 'Http.php';
require_once 'Response.php';

class Libro extends Tabla {
    
    private $Titulo;
    private $Autor;
    private $paginas;
    private $ISBN;
    private $num_fields = 4;

    function __construct($Titulo, $Autor, $paginas, $ISBN, $num_fields) {
        $this->Titulo = $Titulo;
        $this->Autor = $Autor;
        $this->paginas = $paginas;
        $this->ISBN = $ISBN;
        $this->num_fields = $num_fields;
    }
    
    function tocho(){
        
    }
    
    function obras(){
        
    }
    
}

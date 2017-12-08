<?php

class Entrada{

    private $id;
    private $autor_id;
    private $titulo;
    private $texto;
    private $fecha;
    private $activa;

    /**
     * Entrada constructor.
     * @param $id
     * @param $autor_id
     * @param $titulo
     * @param $texto
     * @param $fecha
     * @param $activa
     */

    public function __construct($id, $autor_id, $titulo, $texto, $fecha, $activa)
    {
        $this->id = $id;
        $this->autor_id = $autor_id;
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->fecha = $fecha;
        $this->activa = $activa;
    }

    //GET
    public function obtener_id(){
        return $this -> id;
    }

    public function  obtener_autor_id(){
        return $this -> autor_id;
    }

    public function obtener_titulo(){
        return $this  -> titulo;
    }

    public function obtener_texto(){
        return $this -> texto;
    }

    public function  obtener_fecha(){
        return $this -> fecha;
    }

    public function  obtener_activa(){
        return $this -> activa;
    }


    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @param mixed $texto
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    /**
     * @param mixed $activa
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;
    }
}
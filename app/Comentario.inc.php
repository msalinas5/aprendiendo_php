<?php

class  Comentario{

    private $id;
    private $autor_id;
    private $entrada_id;
    private $titulo;
    private $texto;
    private $fecha;

    /**
     * Comentario constructor.
     * @param $id
     * @param $autor_id
     * @param $entrada_id
     * @param $titulo
     * @param $texto
     * @param $fecha
     */
    public function __construct($id, $autor_id, $entrada_id, $titulo, $texto, $fecha)
    {
        $this->id = $id;
        $this->autor_id = $autor_id;
        $this->entrada_id = $entrada_id;
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAutorId()
    {
        return $this->autor_id;
    }

    /**
     * @return mixed
     */
    public function getEntradaId()
    {
        return $this->entrada_id;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @return mixed
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
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



}
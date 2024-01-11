<?php

class Campeon{
    private int $id;
    private string $nombre;
    private string $rol;
    private string $dificultad;
    private string $descripcion;

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of rol
     */
    public function getRol(): string
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     */
    public function setRol(string $rol)
    {
        $this->rol = $rol;
    }

    /**
     * Get the value of dificultad
     */
    public function getDificultad(): string
    {
        return $this->dificultad;
    }

    /**
     * Set the value of dificultad
     */
    public function setDificultad(string $dificultad)
    {
        $this->dificultad = $dificultad;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }
}

?>
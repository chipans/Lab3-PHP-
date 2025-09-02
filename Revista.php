<?php

require_once("Autor.php");
require_once("IPublicable.php");

class Revista implements IPublicable {
    private string $nombre;
    private int $numero;
    private string $periodicidad;

    public function __construct(string $nombre, int $numero, string $periodicidad) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->periodicidad = $periodicidad;
    }

    public function getInfo(): string {
        return "Revista: {$this->nombre} ({$this->numero}), Periodicidad: {$this->periodicidad}";
    }
}
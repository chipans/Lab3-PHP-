<?php

require_once("Autor.php");

class ImprimirAutor {
    public function getInfo(Autor $autor): void {
        echo $autor->getInfo();
    }
}
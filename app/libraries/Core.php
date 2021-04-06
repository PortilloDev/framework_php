<?php

/**
 * Clase principal de la aplicación
 * Crea URL y cargar el controlador núcleo
 * Formateo de la URL/controlador/método/parámetros
 */
class Core
{
    protected $controladorActual ='Paginas';
    protected $metodoActual ='index';
    protected $parametros = [];

    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        echo $_GET['url'];
    }
}

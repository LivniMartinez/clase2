<?php

    class Producto {
        //DEFINICION DE LOS ATRIBUTOS
    public string $nombre;
    public int $precio;
    public bool $disponible;

     //METODO CONSTRUCTOR, SE EJECUTA AL EJECUTAR LA ESTANCIA
     public function _construct(string $nombre, int $precio, bool $disponible)
    {

        //SE LES DA VALORES A LOS ATRIBUTOS CON LOS PARAMETROS QUE RECIBE EL METODO CONSTRUCTOR
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
    //DEFINICION DE METODOS
        public function mostrarProducto () {
            echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio; 
        }
    }
?>
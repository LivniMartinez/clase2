<?php

    class Producto {
        //DEFINICION DE LOS ATRIBUTOS
    public string $nombre;
    public int $precio;
    public bool $disponible;

     //METODO CONSTRUCTOR, SE EJECUTA AL EJECUTAR LA ESTANCIA
     public function __construct(string $nombre, int $precio, bool $disponible)
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
        //METODO GET PARA LA PROPIEDAD PROTEGIDA DE NOMBRE
        public function getNombre () : string {
            return $this->nombre;
        }
        //METODO SET PARA LA PROPIEDAD PROTEGIDA DE NOMBRE
        public function setNombre (string $nombre) {
           $this->nombre; 
        }
    
    }

    $producto = new Producto ("Tablet", 200, true);
    $producto->mostrarProducto ();
    echo $producto->nombre; //PRODUCE UN ERROR
    echo $producto->getNombre (); //OBTIENE EL NOMBRE
    $producto->setNombre("Nuevo Nombre"); //SETEA EL NOMBRE
    echo $producto->getNombre (); //OBTIENE EL NOMBRE 

?>
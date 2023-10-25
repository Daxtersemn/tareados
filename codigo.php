<?php
class convertir {
public $tasa = 34.88;
function convertirdolar($montobs) {
    return $montobs / $this->tasa;
}
}

class Operaciones extends convertir {
    public function sumar($cantidad) {
        return $cantidad + 100;
    }
}

class tarea {
public $hola = 'hola muy buenas esta es la clase de informatica ';
function buenas() {
    return $this->hola;
}
}
class saludo extends tarea {
    public function buenas2(){
        echo 'soy alejandro rodrigues 30478440 t2-inf*1';
    }
}

?>
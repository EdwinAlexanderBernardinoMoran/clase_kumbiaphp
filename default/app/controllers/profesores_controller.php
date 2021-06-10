<?php

class ProfesoresController extends AppController{

    public function index(){
        view::template("pantalla1");
        $this->titulo = "Profesores";
    }

    public function historial() {
        view::template("pantalla1");
        $this->titulo = "Historial de profesores";
    }
}

?>
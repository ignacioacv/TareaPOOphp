<?php
    require "../Persona.php";
    #clase hija
    class Profesor extends Persona{
        // materia, horario, grado, escuela, salario
        public $materia;
        public $grado;
        public $horario;
        public $escuela;
        protected $salario;
        protected $salario_final;
        #sobreescribiendo el metodo constructor en la clase padre(persona)
        public function __construct($nombre, $edad, $telefono, $direccion,
        $correo, $materia, $grado, $horario, $escuela, $salario)
        {
            #heredando la inforrmacion del constructor padre
            parent::__construct($nombre, $edad, $telefono, $direccion,
            $correo);
            #asignando la informacion extra que tiene la clase hija
            $this->materia = $materia;
            $this->grado = $grado;
            $this->horario = $horario;
            $this->escuela = $escuela;
            $this->salario = $salario;
        }
        #metodo para imprimir la informacion extra del estudiante
        public function salarioExtra(){
        if ($this->horario == "Ambos Turnos"){
                return
                $this->salario_final = $this->salario * 1.30;
        }else{
            return
            $this->salario_final = $this->salario;
        }
        }
        public function informacionProfesor(){
            return "<b>Materia Impartida: </b>
            $this->materia<br><b>Grado/Seccion: </b> $this->grado<br><b>Horario: </b>
            $this->horario<br><b>Escuela: </b>
            $this->escuela<br><b>Salario: </b>
            $this->salario<br><b>Salario final: </b> $this->salario_final<br>";
        }
    }
?>
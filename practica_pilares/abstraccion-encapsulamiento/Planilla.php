<?php
class Planilla{
    public $name;
    protected $charge;
    protected $salary_brute;
    protected $salary_net;
    //protected $working_hours;
    private $isss;
    private $rent;
    private $afp;

    public function __construct($name,$charge, $salary_brute)
    {
        $this->name = $name;
        $this->charge = $charge;
        $this->salary_brute = $salary_brute;
       // $this->salary_net = $salary_net;
        //$this->working_hours = $working_hours;
    }

    public function calcularDeducciones(){
        //gana mas de 520 se le descuenta renta 10%, afp 7.75%, isss 7.25%
        $this->afp = $this->salary_brute * 0.0775;
        $this->isss = $this->salary_brute * 0.0725;
        
        if($this->salary_brute >= 520){
            $this->rent = $this->salary_brute * 0.10;
            
            $this->salary_net = $this->salary_brute - ($this->afp + $this->isss + $this->rent);
            return $this->salary_net;
        }else{
            $this->salary_net = $this->salary_brute - ($this->afp + $this->isss);
            return $this->salary_net;
        }
    }
    public function resumen(){
        return "<b>Empleado: </b> $this->name<br><b>Cargo:</b> $this->charge<br><b>Salario Bruto:</b> $this->salary_brute<br><b>Salario Neto:</b> $this->salary_net";
    }

}

/*$empleado1 = new Planilla("Ignacio Cortez", "Desarrollador web", 850);
$empleado1-> calcularDeducciones();
echo $empleado1 -> resumen();*/


?>
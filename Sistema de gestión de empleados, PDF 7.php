<?php

class Empleado {
    private $nombre;
    private $apellido;
    private $salario;
    private $cargo;

    public function __construct($nombre, $apellido, $salario, $cargo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getCargo() {
        return $this->cargo;
    }
}

class Empresa {
    private $empleados = [];

    public function agregarEmpleado($nombre, $apellido, $salario, $cargo) {
        $empleado = new Empleado($nombre, $apellido, $salario, $cargo);
        $this->empleados[] = $empleado;
    }

    public function listarEmpleados() {
        foreach ($this->empleados as $empleado) {
            echo "Nombre: " . $empleado->getNombre() . "<br>";
            echo "Apellido: " . $empleado->getApellido() . "<br>";
            echo "Salario: $" . $empleado->getSalario() . "<br>";
            echo "Cargo: " . $empleado->getCargo() . "<br>";
            echo "---------------------------------------------<br>";
        }
    }

    public function calcularTotalSalarios() {
        $totalSalarios = 0;
        foreach ($this->empleados as $empleado) {
            $totalSalarios += $empleado->getSalario();
        }
        echo "Total de salarios pagados por la empresa: $" . $totalSalarios . "<br>";
    }
}

// Ejemplo de uso:
$empresa = new Empresa();

$empresa->agregarEmpleado("Juan", "Perez", 2000, "Programador");
$empresa->agregarEmpleado("Maria", "Gomez", 2500, "Diseñador");
$empresa->agregarEmpleado("Carlos", "Lopez", 1800, "Analista");

echo "Lista de empleados:<br>";
$empresa->listarEmpleados();

$empresa->calcularTotalSalarios();

?>

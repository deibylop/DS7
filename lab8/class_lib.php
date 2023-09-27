<?php class Ventas
{
    public $ventas;
    function __construct($montoVentas)
    {
        $this->ventas = $montoVentas;
    }
    function imageToShow()
    {
        if ($this->ventas > 80) {
            return '<img src="./img/imagen1.png">';
        } elseif ($this->ventas >= 50 && $this->ventas <= 79) {
            return '<img src="./img/imagen2.png">';
        } else {
            return '<img src="./img/imagen3.png">';
        }
    }
}

class Factorial
{
    public $valorN;
    function __construct($initValorN)
    {
        $this->valorN = $initValorN;
    }
    public function calcularFactorial()
    {
        $n = $this->valorN;
        $resultado = 1;

        for ($i = $n; $i >= 1; $i--) {
            $resultado = $resultado * $i;
        }
        return "El factorial de $n es = $resultado";
    }
}

Class MatrizIdentidad 
{
    public $valorN;
    function __construct($initValorN)
    {
        $this->valorN = $initValorN;
    }

     public function validarPar()
    {
        if (($this->valorN  % 2) == 0) {
          return $this->generarMatrizIdentidad();
        } else {
            return "Debe ingresar un valor Par <br>";
        }
    }

    public function generarMatrizIdentidad()
    {
        $valorMax =  $this->valorN;
        $resultado = "";
        $resultado .= "<table border=1>";
        for ($i = 0; $i < $valorMax; $i++) {
            $resultado  .= "<tr>";
            for ($j = 0; $j < $valorMax ; $j++) {
                if ($i == $j) {
                    $resultado  .="<td>1</td>";
                } else {
                    $resultado  .= "<td>0</td>";
                }
            }
            $resultado .= "</tr>";
        }
        $resultado .= "</table>";
        return $resultado;
    }

}
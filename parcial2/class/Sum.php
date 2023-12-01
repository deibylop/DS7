<?php
require_once('./db/modelo.php');

class Sums extends modeloCredencialesDB
{
    protected $num;
    protected $factorial;
    protected $sumatoria;
  
    public function __construct($nuevoValor)
    {
        parent::__construct();
        $this->sumatoria = $this->calcularSumatoria($nuevoValor);
        $this->factorial = $this->factorial($nuevoValor);
        $this->num = $nuevoValor;

    }

    public function get_all_sums()
    {
        $instruccion = "CALL sp_get_sums()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }

    public function insert_new_sum()
    {
        $r = round($this->sumatoria,2);
        $instruccion = "CALL sp_insert_sum('$this->num','$this->factorial','$r')";
        if ($this->_db->query($instruccion) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public function update_totals($id)
    {
        $instruccion = "CALL sp_update_sum('$this->num','$this->sumatoria','$this->factorial','$id' )";
        if ($result = $this->_db->query($instruccion) === TRUE) {
            var_dump($result);
            return true;
        } else {
            return false;
        }
    }

    function calcularSumatoria($n) {
        $resultado = 0;
        $factorial=0;
        $sumatoria=0;
        for ($i = 0; $i <= $n; $i++) {
            $sumatoria = $n + 1 - $i;
            $factorial = $this->factorial($n + 1 - $i);
            $resultado += $sumatoria / $factorial;
        }
        return (float)$resultado;
    }
    
    function factorial($numero) {
        if ($numero <= 1) {
            return 1;
        } else {
            return $numero * $this->factorial($numero - 1);
        }
    }
}

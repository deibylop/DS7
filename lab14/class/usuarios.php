<?php
require_once('modelo.php');

class usuarios extends modeloCredencialesDB
{
    public function __construct()
    {
        parent::__construct();
    }

    public function validar_usuario($usr, $pwd)
    {
        $instruccion = "CALL sp_validar_usuario('" . $usr . "','" . $pwd . "')";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        var_dump($resultado,$usr,$pwd,$instruccion);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }
}

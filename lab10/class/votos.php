<?php
require_once('modelo.php');

class votos extends modeloCredencialesDB
{
    protected $votos1;
    protected $votos2;

    public function __construct()
    {
        parent::__construct();
    }

    public function listar_votos()
    {
        $instruccion = 'CALL sp_listar_votos()';
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo 'Fallo al consultar las noticias';
        } else {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    public function actualiza_votos($voto1, $voto2)
    {
        $instruccion = "CALL sp_actualizar_votos('$voto1','$voto2')";
        $consulta = $this->_db->query($instruccion);
        if ($consulta) {
            return $consulta;
            $consulta->close();
            $this->_db->close();
            echo 'Fallo al consultar las noticias';
        }
}

}

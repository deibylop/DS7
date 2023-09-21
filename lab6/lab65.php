<?php
class ClaseBase
{
    public function test()
    {
        echo "ClaseBase::test() llamada\n";
    }
    final public function masTests()
    {
        echo "ClaseBase::masTests() llamada\n";
    }
}
class ClaseHijo extends ClaseBase
{
    public function masTests() 
    {
        echo "ClaseHijo::masTests() llamada\n";
    }
}
    /*
    DEIBY LOPEZ - 20-70-2866:
    En la salida de este laboratorio pudimos notar que aparece un mensaje de error
    que nos indica que no podemos sobreescribir la calse masTests()
    esto se debe a que masTests() en la clase padre es de tipo final, 
    es decir que no se pude cambiar o alterar ese metodo
    */
?>

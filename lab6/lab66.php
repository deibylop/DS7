<?php
final class ClaseBase
{
    public function test()
    {
        echo "ClaseBase::test() llamada\n";
    }
    // Aquí da igual si se declara el método como
    // final o nofinal 
    public function moreTesting()
    {
        echo "ClaseBase::moreTesting() llamada\n";
    }
}
class ClaseHijo extends ClaseBase
{
}
    /*
    DEIBY LOPEZ - 20-70-2866:
    En este caso aparece un mensaje indicando que la clase hijo no se puede extender de la clase padre;
    esto debido a que la clase fue declarada de tipo final, por lo que no se puede heredar ningun metodo o atributo de la misma
    */
?>


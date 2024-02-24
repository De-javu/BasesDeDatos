<?php
// Las intefaces: son una forma de definir un contrato para lo que una clase debe implementar
//                estos significa que las interfaces permieten espesificar que metodos debe
//                implementar una clase .
interface Ordenador
{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmetar();
    public function detectarUSB();

}

class iMac implements Ordenador{
    private $modelo;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function encender()
    {
        return ;
    }
    public function apagar()
    {
        return;
    }
    public function reiniciar()
    {
        return;
    }
    public function desfragmetar()
    {
        return;
    }
    public function detectarUSB()
    {
        return;
    }
}

$maquintos = new iMac();
$maquintos->setModelo('Macbook PRO 2019');
echo $maquintos->getModelo();


// DICCIONARIO DE FUNCIONES UTILIZADAS PARA ESTA PRACTICA
/*
interface = Se utiliza para definir el contrato en el cual los metodos deben implementar 
            En una clase 
public = Se utiliza para indicar que se puede acceder desde cualquier parte del programa
class = Se utiliza para crear la plantilla donde asignaran losobjesto y metodos
implements = Se utiliza para indicar que los metodos de una interface debe estar implementados
             en una clase, de no ser asi se produce error , en otras palabras esto
             se conoce como polimorfismo.
private = Se utiliza para indicar que solo se podra accerder desde la clase donde fue definido
return = Se encarga de devolver el vaor asociadoen la funcion 
$this-> = Se utiliza como apuntardor de un objeto en la clase actual
get (Getters)  = Se toma la propiedad para acceder al objeto y metodo de una clase 
set()= Se utilizar para asigar valores al objeto o metodo de una clase, desde fuera de ella
new = Se utiliza para instalciar una clase y llevarla a un objeto 
echo = se utiliza para imprimir por pantalla.
*/
 







?>
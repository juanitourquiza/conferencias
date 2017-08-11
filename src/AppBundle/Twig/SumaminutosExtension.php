<?php
namespace AppBundle\Twig;
//Extension que saca el ultimo digito del string
class SumaminutosExtension extends \Twig_Extension
{

	public function getFunctions()
	{
		return array(
		new \Twig_SimpleFunction('suma_minutos', array($this, 'suma_minutos')),
		);

	}


	public function getName()
	{
		return 'suma_minutos_extension';
	}


	public function suma_minutos($horaInicial,$minutoAnadir)
	{
    //$horaInicial="14:00";
    //$minutoAnadir=2;
    //echo $horaInicial; die;
    $segundos_horaInicial=strtotime($horaInicial);
    $segundos_minutoAnadir=$minutoAnadir*60;
    $nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
    //echo "<br>".$nuevaHora;
    return $nuevaHora;
	}
}

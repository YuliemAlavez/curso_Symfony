<?php

namespace Curso\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class InfoController extends Controller
{
    public function nosotrosAction($nombre, $nacimiento, $apellido)
    {
        return new Response("<html><body>Hola página de ".$nombre." ".$apellido."</body></html>");
        //return $this->render('CursoMainBundle:Default:ayuda.html.twig',array('tema' => $tema));
    }
    public function pagina_estaticaAction($pagina){
    	return $this->render('CursoMainBundle:Default:'.$pagina.'.html.twig',array());

    	
    }
}

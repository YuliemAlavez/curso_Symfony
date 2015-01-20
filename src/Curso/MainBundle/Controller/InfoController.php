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
    	/*
    	$response = $this->forward("CursoMainBundle:Info:nosotros",array(
    		"nombre" => "Cesar",
    		"apellido" => "Cejudo",
    		"nacimiento" => "Mex"
    		));
    	return $response;
    	*/

    	if($pagina == "quienes_somos"){

    		
    		return $this->redirect($this->generateUrl('curso_main_info',array('slug'=>$pagina)));
    		return $this->redirect("http://www.google.com");
    		return new Response("<html><body>Esta es la página de quienes somos</body></html>");
    	}
    	if($pagina == "quien" || $pagina == "donde"){
    		return $this->render('CursoMainBundle:Default:'.$pagina.'.html.twig',array());
    	}
    	
    	else{
    		throw $this->createNotFoundException("Página no encontrada");
    		
    	}

    	
    }
}

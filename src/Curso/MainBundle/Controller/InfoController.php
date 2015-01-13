<?php

namespace Curso\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class InfoController extends Controller
{
    public function nosotrosAction()
    {
        return new Response("<html><body>Mi página de información propia</body></html>");
        //return $this->render('CursoMainBundle:Default:ayuda.html.twig',array('tema' => $tema));
    }
}

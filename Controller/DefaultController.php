<?php

namespace Keywords\Main\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KeywordsMainBundle:Default:index.html.twig', array('name' => $name));
    }
}

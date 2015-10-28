<?php

namespace NacionDigital\CropBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NacionDigitalCropBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php
// src/article/PlatformBundle/Controller/PageController.php

namespace article\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('articlePlatformBundle:Advert:index.html.twig');
    }


    public function aboutAction()
    {
        return $this->render('articlePlatformBundle:Advert:about.html.twig');
    }
}
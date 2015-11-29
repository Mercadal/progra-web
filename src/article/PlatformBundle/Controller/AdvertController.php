<?php

// src/article/PlatformBundle/Controller/AdvertController.php

namespace article\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AdvertController extends Controller
{

	
  public function indexAction()
 {

    return $this->render('articlePlatformBundle:Advert:index.html.twig');
  }



    public function layoutAction()
 {

    return $this->render('articlePlatformBundle:Advert:layout.html.twig');
  }



    public function blogAction()
 {

    return $this->render('articlePlatformBundle:Blog:index.html.twig');
  }

  
      public function aboutAction()
    {
      return $this->render('articlePlatformBundle:Advert:about.html.twig') ;


  }


    public function listAction(Request $request)
    {

        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT index FROM articlePlatformBundle:Blog index";
        $query = $em->createQuery($dql);

        $article  = $this->get('knp_paginator')->paginate($article,
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        // parameters to template
        return $this->render('articlePlatformBundle:Blog:index.html.twig', array('pagination' => $article));

    }





}
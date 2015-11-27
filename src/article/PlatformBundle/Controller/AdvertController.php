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
      return $this->render('articlePlatformBundle:Advert:about.html.twig');
    }


/*
  public function preferencesAction (){
        $usr = $this->getUser();
            
        $form = $this->createForm(new BlogType(), $usr);

        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                
                $usr->uploadProfilePicture();
                
                $em->persist($usr);
                $em->flush();

                $this->redirect($this->generateUrl('articlePlatformBundle_Blog'));
            }
        }
            
        return $this->render('articlePlatformBundle:views:preferences.html.twig', 
                array (
                    'user' => $usr, 
                    'form' => $form->createView()
                    )
                );
    }
*/

}
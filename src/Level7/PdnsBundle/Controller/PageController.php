<?php

namespace Level7\PdnsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function homepageAction()
    {
        return $this->render('Level7PdnsBundle:Page:homepage.html.twig', array(
                // ...
            ));    
    }

}

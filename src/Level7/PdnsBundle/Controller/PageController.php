<?php

namespace Level7\PdnsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    public function homepageAction()
    {
        return new Response('nothing here');   
    }

}

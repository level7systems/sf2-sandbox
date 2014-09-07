<?php

namespace Level7\PdnsBundle\Controller;

#use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\FOSRestController;
#use FOS\RestBundle\Controller\Annotations as Rest;
#use FOS\RestBundle\Request\ParamFetcherInterface;

#use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class DomainController extends FOSRestController implements ClassResourceInterface
{
    public function cgetAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('Level7PdnsBundle:Domains')->findAll();

        return array(
            'domains' => $entities,
        );
    }
    
    public function postAction()
    {
        
    }
}

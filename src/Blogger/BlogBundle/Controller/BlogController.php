<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Blog controller
 */
class BlogController extends Controller
{
    /**
     * Show
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);
        
        if (!$blog) {
            throw $this->createNotFoundException('Blog post not found');
        }
        
        return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
            'blog' => $blog
        ));
    }
}

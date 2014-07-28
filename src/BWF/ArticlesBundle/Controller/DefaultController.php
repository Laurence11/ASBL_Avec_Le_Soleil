<?php

namespace BWF\ArticlesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $message = 'Mon premier message EFT';
        return $this->container->get('templating')->renderResponse('BWFSiteBundle:EFT:index.html.twig', array('message' => $message));
    }
    
     public function indexAlphaAction()
    {
        $message = 'Mon premier message Alphabétisation';
        return $this->container->get('templating')->renderResponse('BWFSiteBundle:Alpha:index.html.twig', array('message' => $message));
    }
    
    public function indexCeramAction()
    {
        $message = 'Mon premier message Céramique';
        return $this->container->get('templating')->renderResponse('BWFSiteBundle:Ceram:index.html.twig', array('message' => $message));
    }
    
       public function indexAcceuilAction()
    {
        $message = 'Mon premier message Acceuil';
        return $this->container->get('templating')->renderResponse('BWFSiteBundle:Acceuil:index.html.twig', array('message' => $message));
    }
    
}

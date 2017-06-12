<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusController extends Controller
{

    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        return new  Response('Under the sea!');
    }

    /**
     * @Route("/genus/{genusName}")
     */
    public function show2Action($genusName)
    {
       /* $templating = $this->container->get('templating');

        $html = $templating->render('genus/show.html.twig', array(
            'name' => $genusName
        ));

        return new Response($html);*/


        $notes = [
            'Octopus asked me a riddle, outsmarted me',
            'I counted 8 legs... as they wrapped around me',
            'Inked!'
        ];

        return $this->render('genus/show.html.twig', array(
            'name' => $genusName,
            'notes' => $notes
        ));
    }
}
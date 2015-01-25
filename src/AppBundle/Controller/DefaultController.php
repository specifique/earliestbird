<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Thing;

class DefaultController extends Controller
{
  public function indexAction()
  {
    $things = $this->getDoctrine()
      ->getRepository('AppBundle:Thing')
      ->findBy(array(), array('releasedate' => 'ASC'), 3);

    return $this->render('default/index.html.twig', array(
      'things' => $things
    ));
  }
}

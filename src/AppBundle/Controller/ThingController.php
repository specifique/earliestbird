<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Thing;

class ThingController extends Controller
{
  public function indexAction()
  {
    $things = $this->getDoctrine()
      ->getRepository('AppBundle:Thing')
      ->findAll();

    return $this->render('thing/index.html.twig', array(
      'things' => $things
    ));
  }

  public function showAction($id)
  {
    $thing = $this->getDoctrine()
      ->getRepository('AppBundle:Thing')
      ->find($id);

    if (!$thing) {
      throw $this->createNotFoundException(
        'The event could not be found.'
      );
    }

    return $this->render('thing/show.html.twig', array(
      'thing' => $thing
    ));
  }

  public function createAction()
  {
    $thing = new Thing();
    $thing->setName('DefQon.1 Festival 2015');
    $thing->setStartdate(new \DateTime('2015-06-19'));
    $thing->setEnddate(new \DateTime('2015-06-21'));
    $thing->setAvailabledate(new \DateTime('2015-03-28 13:00'));
    $thing->setDescription('The 19th, 20th and 21st of June 2015, event area Biddinghuizen opens its doors to Defqon.1 Weekend Festival. From all corners of the globe, hard dance lovers will gather at the Mecca of the harder styles. From Friday afternoon till Monday morning, Defqon.1 will be the epicentre of hard dance music.');

    $em = $this->getDoctrine()->getManager();

    $em->persist($thing);
    $em->flush();

    return new Response('Created new thing.');
  }
}

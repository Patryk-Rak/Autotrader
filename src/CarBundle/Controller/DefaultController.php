<?php

namespace CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/" , name="offer")
     */
    public function indexAction(Request $request)
    {
        $carRepository = $this -> getDoctrine() -> getRepository('CarBundle:Car');
        $cars = $carRepository -> FindAllCarsWithDetails();

        $form = $this->createFormBuilder()
            ->setMethod('GET')
            ->add('search', TextType::class)
            ->getForm();

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid())
            {
                die('Form submitted');
            }

        return $this->render('Car.html.twig', 
        [
            'cars' => $cars,
            'form' => $form->createView()
            
            
        ]
    );
    }


    /**
     * @param $id
     * @Route("/cars/{id}", name="show_car")
     */
    public function showAction($id)
    {
        $carRepository = $this->getDoctrine()->getRepository('CarBundle:Car');
        $car = $carRepository->findCarWithDetailById($id);
        return $this->render('show.html.twig', ['car' => $car]);
    }
}

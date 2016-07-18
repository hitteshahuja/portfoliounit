<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Questions;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\QuestionCategory;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function ContactAction(){
        return $this->render('default/contact.html.twig', []);
    }
    /**
     * @Route("/cats", name="cats")
     */
    public function CategoriesAction(){
        $cats = $this->getDoctrine()->getRepository('AppBundle:QuestionCategory')->findAll();
        return $this->render('default/index.html.twig', ['categories'=>$cats]);

    }
    /**
         * @Route("/skills/questions", name="questions")
     */
    public function QuestionsActions(){
        $questions = $this->getDoctrine()->getRepository('AppBundle:Questions')->findAll();
        return $this->render('skills/questions.html.twig', ['questions'=> $questions]);
    }
}

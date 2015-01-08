<?php


namespace AlmosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Question controller.
 */

class QuestionController extends Controller
{
    /**
     * Show a question entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $quest = $em->getRepository('AlmosBundle:Question')->find($id);

        if (!$quest) {
            throw $this->createNotFoundException('Unable to fount question.');
        }

        $comments = $em->getRepository('AlmosBundle:Comment')
            ->getCommentsForBlog($quest);

        return $this->render('AlmosBundle:Question:show.html.twig', array(
            'quest'      => $quest,
            'comments'  => $comments
        ));
    }
}
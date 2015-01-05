<?php



namespace AlmosBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AlmosBundle\Entity\Enquiry;
use AlmosBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('AlmosBundle:Page:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('AlmosBundle:Page:about.html.twig');
    }

    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                // Выполнение некоторого действия, например, отправка письма.

                // Редирект - это важно для предотвращения повторного ввода данных в форму,
                // если пользователь обновил страницу.
                return $this->redirect($this->generateUrl('AlmosBundle_contact'));
            }
        }

            return $this->render('AlmosBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
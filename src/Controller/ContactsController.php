<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Form\ContactType;
use App\Form\ContactsType;
use App\Service\SendMailService;
use App\Repository\ContactsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/contacts")
 */
class ContactsController extends AbstractController
{
    /**
     * @Route("/", name="contacts_index", methods={"GET"})
     */
    public function index(ContactsRepository $contactsRepository): Response
    {
        return $this->render('contacts/index.html.twig', [
            'contacts' => $contactsRepository->findAll(),
        ]);
    }


    // /**
    //  * @Route("/contact", name="contact")
    //  */
    // public function contact(Request $request, SendMailService $mail)
    // {
    //     $form = $this->createForm(ContactType::class);

    //     $contact = $form->handleRequest($request);

    //     if($form->isSubmitted() && $form->isValid()){
    //         $context = [
    //             'mail' => $contact->get('email')->getData(),
    //             'sujet' => $contact->get('sujet')->getData(),
    //             'message' => $contact->get('message')->getData(),
    //         ];
    //         $mail->send(
    //             $contact->get('email')->getData(),
    //             'vous@domaine.fr',
    //             'Contact depuis le site PetitesAnnonces',
    //             'contact',
    //             $context
    //         );

    //         $this->addFlash('message', 'Mail de contact envoyé');
    //         return $this->redirectToRoute('contact');
    //     }

    //     return $this->render('main/contact.html.twig', [
    //         'form' => $form->createView()
    //     ]);
    // }


    /**
     * @Route("/new", name="contacts_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = new Contacts();
        $form = $this->createForm(ContactsType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('contacts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contacts/new.html.twig', [
            'contact' => $contact,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="contacts_show", methods={"GET"})
     */
    public function show(Contacts $contact): Response
    {
        return $this->render('contacts/show.html.twig', [
            'contact' => $contact,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="contacts_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Contacts $contact, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContactsType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('contacts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contacts/edit.html.twig', [
            'contact' => $contact,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="contacts_delete", methods={"POST"})
     */
    public function delete(Request $request, Contacts $contact, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contact->getId(), $request->request->get('_token'))) {
            $entityManager->remove($contact);
            $entityManager->flush();
        }

        return $this->redirectToRoute('contacts_index', [], Response::HTTP_SEE_OTHER);
    }
}

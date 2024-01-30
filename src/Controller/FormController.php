<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FormController extends AbstractController
{
    #[Route('/form', name: 'form')]
    public function form(Request $request): Response
    {
        // Créez le formulaire directement dans le contrôleur
        $form = $this->createFormBuilder()
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', EmailType::class)
            ->add('message', TextareaType::class, ['required' => false])
            ->getForm();

        // Gérez la soumission du formulaire
        $form->handleRequest($request);

        // Vérifiez si le formulaire a été soumis et est valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Traitez les données du formulaire comme nécessaire
            $data = $form->getData();
            // Faites quelque chose avec les données, par exemple, redirigez vers un fichier PDF
            return $this->redirect('CVYassirElAyadi.pdf');
        }

        // Rendre la page CV avec le formulaire
        return $this->render('form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

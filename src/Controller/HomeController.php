<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]

    /**
     * @Route("/home", name="index")
     */
    public function index(): Response {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home() {
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/home/qualityPage", name="qualityPage")
     */
    public function qualityPage() {
        return $this->render('home/qualityPage.html.twig', [
        ]);
    }
    /**
     * @Route("/home/securityPage", name="securityPage")
     */
    public function securityPage() {
        return $this->render('home/securityPage.html.twig', [
        ]);
    }
    /**
     * @Route("/home/rsePage", name="rsePage")
     */
    public function rsePage() {
        return $this->render('home/rsePage.html.twig', [
        ]);
    }

    /**
     * @Route("/home/qualityQuizz", name="qualityQuizz")
     */
    public function qualityQuizz() {
        return $this->render('home/qualityQuizz.html.twig', [
        ]);
    }
    /**
     * @Route("/home/securityQuizz", name="securityQuizz")
     */
    public function securityQuizz() {
        return $this->render('home/securityQuizz.html.twig', [
        ]);
    }
    /**
     * @Route("/home/rseQuizz", name="rseQuizz")
     */
    public function rseQuizz() {
        return $this->render('home/rseQuizz.html.twig', [
        ]);
    }

    /**
     * @Route("/home/apropos", name="profilAuthor")
     */
    public function profil() {
        return $this->render('home/apropos.html.twig', [
        ]);
    }
    /**
     * @Route("/home/services", name="services")
     */
    public function services() {
        return $this->render('home/services.html.twig', [
        ]);
    }
    /**
     * @Route("/home/actualites", name="actualites")
     */
    public function actualites() {
        return $this->render('home/actualites.html.twig', [
        ]);
    }
    /**
     * @Route("/home/contact", name="contact")
     */
    public function contact() {
        return $this->render('home/contact.html.twig', [
        ]);
    }
    /**
     * @Route("/home/connexion", name="connexion")
     */
    public function connexion() {
        return $this->render('home/connexion.html.twig', [
        ]);
    }
    /**
     * @Route("/home/inscription", name="inscription")
     */
    public function inscription() {
        return $this->render('home/inscription.html.twig', [
        ]);
    }
}

<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends Controller {
    public function about() {
        return $this->render('about/index.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }

    /**
     * @route("/quit")
     */
    public function bye() {
        $message = "<h1>Merci de votre visite</h1>";
        return new Response($message);
    }

    /**
     * @route("/date")
     */
    public function date() {
        return $this->render('about/date.html.twig', [
            'date_jour' => date('Y-m-d h:i:s'),
        ]);
    }
}
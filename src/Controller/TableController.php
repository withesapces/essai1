<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TableController extends AbstractController
{
    /**
     * @Route("/table", name="table")
     */
    public function index()
    {
        return $this->render('table/index.html.twig', [
            'controller_name' => 'TableController',
        ]);
    }

    /**
     * @Route("/table/print", name="table")
     */
    public function print(Request $req)
    {
        $n = $req->get('n');

        // On vérifie que l'utilisateur rentre un nombre
        if ($n != null) {

            $res = array();

            for ($i = 0; $i <= 10; $i++) {
                array_push($res, $i * $n);
            }

            return $this->render('table/print.html.twig', [
                'table' => $n,
                'res' => $res,
            ]);
        }

        return new Response("Vous n'avez rien rentré dans l'url. <br />
            Essayez avec <a href=\"http://127.0.0.1:8000/table/print?n=5\">http://127.0.0.1:8000/table/print?n=5</a>");
    }
}

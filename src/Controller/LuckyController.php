<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @throws Exception
     */
    #[Route("/lucky/number", name:"app_lucky_number")]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render(
            'pages/lucky/number.html.twig',
            [
                'number' => $number
            ]
        );
    }
}
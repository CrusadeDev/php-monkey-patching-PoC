<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(100, 100);

        return new Response(
            '<br><html><body>Lucky: '.$number.'</body></html>'
        );
    }
}

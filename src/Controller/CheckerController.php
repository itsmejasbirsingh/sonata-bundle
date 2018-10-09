<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CheckerController extends Controller
{
    /**
     * @Route("/checker", name="checker")
     */
    public function index()
    {
       
    	$checker = $this->get('app.helper.checker');

    	echo $checker->isValid('A');

        die;
    }
}

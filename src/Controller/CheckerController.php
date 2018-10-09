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
       
    	$checker = $this->get('any_name_for_checker');

    	echo $checker->isValid('A');

        die;
    }
}

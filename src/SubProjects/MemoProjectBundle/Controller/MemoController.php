<?php

namespace App\SubProjects\MemoProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Rulers\SubProjectDescriber;

/**
 * @Route("/memo")
 */
class MemoController extends SubProjectDescriber
{
    /**
     * @Route("/", name="project_memo_home")
     */
    public function index()
    {
        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
}

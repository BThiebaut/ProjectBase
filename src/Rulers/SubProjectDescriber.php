<?php

namespace App\Rulers;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Describe subproject pattern and getter for directory templates
 * @Route("/project")
 */
abstract class SubProjectDescriber extends Controller
{
    /**
     * Get template context
     */
    public function getSubTemplate(string $templateName)
    {

    }
}

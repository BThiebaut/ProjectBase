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
     * render in good template context
     */
    public function subRender(string $templateName, $params)
    {
        $projectName = $this->getProjectName();
        $path = 'SubProjects/' . $projectName . '/' . $templateName;
        return $this->render($path, $params);
    }

    protected function getProjectName() : string
    {
        return "Override me !";
    }
}

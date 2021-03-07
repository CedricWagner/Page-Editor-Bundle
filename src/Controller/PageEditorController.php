<?php

namespace CedricW\PageEditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PageEditorController
 *
 * @Route("/page-editor")
 */
class PageEditorController extends AbstractController
{
    /**
     * @Route("")
     */
    public function index(Request $request): Response
    {
        return $this->render('@PageEditorBundle/index.html.twig', [
            // 'table' => $table,
        ]);
    }
}
<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;





/**
 * Class KitchenSinkController
 *
 * @package AppBundle\Controller
 */
class KitchenSinkController extends Controller
{
    /**
     * @var string[]
     */
    private $sidebarMainMenu = [
        'home' => [
            'href' => 'home',
            'caption' =>'Übersicht'
        ],
        'style' =>[
            'href' => 'style',
            'caption' => 'Style'
        ],
        '404' => [
            'href' => '404',
            'caption' =>'Fehler']
    ];

    /**
     * @Route("/kitchensink/{page}", defaults={"page" = "home"})
     * @param string $page
     *
     * @return Response
     */
    public function indexAction($page)
    {
        if (!isset($this->sidebarMainMenu[$page])) {
            $page = '404';
        }

        return $this->render(
            '@App/KitchenSinkController/' . $page . '.html.twig',
            [
                'site' => [
                    'title' => 'Opencaching Kitchensink',
                    'page' => $page,
                    'version' => '1.0.0',
                    'base_url' => '/kitchensink',
                    'navigation' => $this->sidebarMainMenu
                ],
            ]
        );
    }
}


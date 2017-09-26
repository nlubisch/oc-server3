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
     * @Route("/kitchensink/{page}/{subpage}", defaults={"page" = "home", "subpage" = "home"})
     * @param string $page
     * @param string $subpage
     *
     * @return Response
     */
    public function indexAction($page, $subpage)
    {
        if (!$this->checkPage($page)) {
            $page = 'sonstiges';
            $subpage = '404';
        }

        echo '<pre>';
        var_dump($page);

        die();


        return $this->render(
            '@App/KitchenSinkController/' . strtolower($page) . '/' . strtolower($subpage) . '.html.twig',
            [
                'site' => [
                    'title' => 'Opencaching Kitchensink',
                    'page' => $page,
                    'version' => '1.0.0',
                    'base_url' => '/kitchensink',
                    'navigation' => $this->getSidebarMainMenu()
                ],
            ]
        );
    }

    private function checkPage($page) {
        $menu = $this->getSidebarMainMenu();
        foreach($menu['menu'] as $title) {
            if ($title === $page) {
                return true;
            }
        }
    }

    private function checkSubPage($page, $subPage) {
        $menu = $this->getSidebarMainMenu();
        foreach($menu['menu'] as $title) {
            if ($title === $page) {
                return true;
            }
        }
    }

    /**
     * @return array
     */
    private function getSidebarMainMenu()
    {
        return [
            'menu' =>
                ['Home' => [
                    'title' => 'Home',
                    'submenu' => [
                        [
                            'href' => 'home',
                            'caption' => 'Übersicht'
                        ]
                    ]
                ],
            [
                'title' => 'Layout',
                'submenu' => [
                    [
                        'href' => 'style',
                        'caption' => 'Style'
                    ],
                    [
                        'href' => 'typo',
                        'caption' => 'Typografie'
                    ]
                ]
            ],
            [
                'title' => 'Sonstiges',
                'submenu' => [
                    [
                        'href' => '404',
                        'caption' => 'Fehler'
                    ]
                ]

            ]
        ];
    }
}


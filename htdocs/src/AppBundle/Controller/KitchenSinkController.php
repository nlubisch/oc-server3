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
     * @Route("/kitchensink/{page}/{subpage}", defaults={"page" = "Home", "subpage" = "home"})
     * @param string $page
     * @param string $subpage
     *
     * @return Response
     */
    public function indexAction($page, $subpage)
    {
        if (!$this->checkPage($page)) {
            $page = 'Sonstiges';
        }

        if (!$this->checkSubPage($page, $subpage)) {
            $page = 'Sonstiges';
            $subpage = '404';
        }

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

    private function checkPage($page)
    {
        $menu = $this->getSidebarMainMenu();
        foreach ($menu as $title => $elemnts) {
            if ($title === $page) {
                return true;
            }
        }
    }

    private function checkSubPage($page, $subPage)
    {
        $menu = $this->getSidebarMainMenu();

        foreach ($menu[$page]['submenu'] as $subElements) {
            if ($subElements['href'] === $subPage) {
                return true;
            }
        }
    }

    /**
     * @return array
     */
    private function getSidebarMainMenu()
    {
        $menu = [];

        $menu['Home'] = [
            'title' => 'Home',
            'submenu' => [
                [
                    'href' => 'home',
                    'caption' => 'Übersicht'
                ]
            ]
        ];

        $menu['Layout'] = [
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
        ];

        $menu['Sonstiges'] = [
            'title' => 'Sonstiges',
            'submenu' => [
                [
                    'href' => '404',
                    'caption' => 'Fehler'
                ]
            ]

        ];

        return $menu;
    }
}


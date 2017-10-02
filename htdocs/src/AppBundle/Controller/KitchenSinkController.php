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
            ],
            'icon' => 'home'
        ];

        $menu['Components'] = [
            'title' => 'Components',
            'submenu' => [
                [
                    'href' => '#',
                    'caption' => 'Alerts'
                ],
                [
                    'href' => '#',
                    'caption' => 'Badge'
                ],
                [
                    'href' => '#',
                    'caption' => 'Breadcrumb'
                ],
                [
                    'href' => '#',
                    'caption' => 'Buttons'
                ],
                [
                    'href' => '#',
                    'caption' => 'Cards'
                ],
                [
                    'href' => '#',
                    'caption' => 'Carousel'
                ],
                [
                    'href' => '#',
                    'caption' => 'Collapse'
                ],
                [
                    'href' => '#',
                    'caption' => 'Dropdowns'
                ],
                [
                    'href' => '#',
                    'caption' => 'Forms'
                ],
                [
                    'href' => '#',
                    'caption' => 'Input Groups'
                ],
                [
                    'href' => '#',
                    'caption' => 'Jumbotron'
                ],
                [
                    'href' => '#',
                    'caption' => 'List Groups'
                ],
                [
                    'href' => '#',
                    'caption' => 'Modal'
                ],
                [
                    'href' => '#',
                    'caption' => 'Navigation'
                ],
                [
                    'href' => '#',
                    'caption' => 'Pagination'
                ],
                [
                    'href' => '#',
                    'caption' => 'Popovers'
                ],
                [
                    'href' => '#',
                    'caption' => 'Progress'
                ],
                [
                    'href' => '#',
                    'caption' => 'Badge'
                ],
                [
                    'href' => '#',
                    'caption' => 'Scrollspy'
                ],
                [
                    'href' => '#',
                    'caption' => 'Tooltips'
                ]
            ],
            'icon' => 'web'
        ];

        $menu['Content'] = [
            'title' => 'Content',
            'submenu' => [
                [
                    'href' => '#',
                    'caption' => 'Code'
                ],
                [
                    'href' => '#',
                    'caption' => 'Figures'
                ],
                [
                    'href' => '#',
                    'caption' => 'Images'
                ],
                [
                    'href' => '#',
                    'caption' => 'Tables'
                ],
                [
                    'href' => '#',
                    'caption' => 'Typogaphy'
                ]

            ]
            ,
            'icon' => 'gesture'

        ];

        $menu['Layout'] = [
            'title' => 'Layout',
            'submenu' => [
                [
                    'href' => '#',
                    'caption' => 'Grid'
                ],
                [
                    'href' => '#',
                    'caption' => 'Media Objects'
                ],
                [
                    'href' => '#',
                    'caption' => 'Utilities'
                ]
            ],
            'icon' => 'web'

        ];

        $menu['Utilities'] = [
            'title' => 'Utilities',
            'submenu' => [
                [
                    'href' => '#',
                    'caption' => 'Borders'
                ],
                [
                    'href' => '#',
                    'caption' => 'Clearfix'
                ],
                [
                    'href' => '#',
                    'caption' => 'Colors'
                ],
                [
                    'href' => '#',
                    'caption' => 'Display'
                ],
                [
                    'href' => '#',
                    'caption' => 'Embed'
                ],
                [
                    'href' => '#',
                    'caption' => 'Flex'
                ],
                [
                    'href' => '#',
                    'caption' => 'Float'
                ],
                [
                    'href' => '#',
                    'caption' => 'Clearfix'
                ],
                [
                    'href' => '#',
                    'caption' => 'Screenreaders'
                ],
                [
                    'href' => '#',
                    'caption' => 'Sizing'
                ],
                [
                    'href' => '#',
                    'caption' => 'Vertical align'
                ],
                [
                    'href' => '#',
                    'caption' => 'Visibility'
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

        $menu['Impressum'] = [
            'title' => 'Impressum',
            'href' => '/impressum'
        ];
        return $menu;
    }
}


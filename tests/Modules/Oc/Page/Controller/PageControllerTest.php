<?php

namespace OcTest\Modules\Oc\Page\Controller;

use Exception;
use Oc\Page\Controller\PageController;
use Oc\Page\Exception\PageNotFoundException;
use Oc\Page\Exception\PageTranslationNotFoundException;
use Oc\Page\PageProvider;
use Oc\Page\PageStruct;
use OcTest\Modules\TestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * Class PageControllerTest
 *
 * @package OcTest\Modules\Oc\Page\Controller
 */
class PageControllerTest extends TestCase
{
    public function testPageNotFoundException()
    {
        $this->setExpectedException(NotFoundHttpException::class);

        $pageProvider = $this->createMock(PageProvider::class);
        $pageProvider->method('getPageBySlug')
            ->with('test')
            ->willThrowException(new PageNotFoundException());

        $translator = $this->createMock(TranslatorInterface::class);

        $controller = new PageController($pageProvider, $translator);
        $controller->indexAction('test');
    }

    public function testException()
    {
        $this->setExpectedException(NotFoundHttpException::class);

        $pageProvider = $this->createMock(PageProvider::class);
        $pageProvider->method('getPageBySlug')
            ->with('test')
            ->willThrowException(new Exception());

        $translator = $this->createMock(TranslatorInterface::class);

        $controller = new PageController($pageProvider, $translator);
        $controller->indexAction('test');
    }

//    public function testPageTranslationNotFound()
//    {
//        $pageProvider = $this->createMock(PageProvider::class);
//        $pageProvider->method('getPageBySlug')
//            ->with('test')
//            ->willThrowException(new PageTranslationNotFoundException());
//
//        $translator = $this->createMock(TranslatorInterface::class);
//
//        $controller = new PageController($pageProvider, $translator);
//        $result = $controller->indexAction('test');
//
//        static::assertInstanceOf(Response::class, $result);
//    }
}

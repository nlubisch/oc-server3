<?php

namespace OcTest\Modules\Oc\Page\Subscriber;

use Knp\Menu\ItemInterface;
use Oc\Menu\Event\MenuEvent;
use Oc\Menu\MenuEnum;
use Oc\Page\Subscriber\MenuSubscriber;
use OcTest\Modules\TestCase;

/**
 * Class MenuSubscriberTest
 *
 * @package OcTest\Modules\Oc\Page\Subscriber
 */
class MenuSubscriberTest extends TestCase
{
    public function testSubscribedEvents()
    {
        $events = MenuSubscriber::getSubscribedEvents();

        static::assertCount(1, $events);
        static::assertArrayHasKey(MenuEnum::MENU_MAIN, $events);
        static::assertEquals(['onConfigureMenuMain', 50], $events[MenuEnum::MENU_MAIN]);
    }

    public function testOnConfigureMainMenu()
    {
        $currentItem = $this->createMock(ItemInterface::class);
        $currentItem->expects(static::at(0))->method('addChild')
            ->with('tos', static::isType('array'));

        $currentItem->expects(static::at(1))
            ->method('addChild')
            ->with('privacy_policy', static::isType('array'));

        $currentItem->expects(static::at(2))
            ->method('addChild')
            ->with('imprint', static::isType('array'));

        $menuEvent = $this->createMock(MenuEvent::class);
        $menuEvent->method('getCurrentItem')
            ->willReturn($currentItem);

        $subscriber = new MenuSubscriber();
        $subscriber->onConfigureMenuMain($menuEvent);
    }
}

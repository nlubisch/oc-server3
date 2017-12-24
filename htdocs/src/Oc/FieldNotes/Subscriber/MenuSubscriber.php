<?php

namespace Oc\FieldNotes\Subscriber;

use Oc\Menu\Event\MenuEvent;
use Oc\Menu\MenuEnum;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class MenuSubscriber
 */
class MenuSubscriber implements EventSubscriberInterface
{
    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return [
            MenuEnum::MENU_MAIN_ACCOUNT => ['onConfigureMenuMainAccount', -1],
        ];
    }

    /**
     * @param MenuEvent $event
     */
    public function onConfigureMenuMainAccount(MenuEvent $event)
    {
        $currentItem = $event->getCurrentItem();

        $currentItem->addChild(
            'field_notes',
            [
                'label' => 'Field-Notes',
                'route' => 'field_notes.index',
            ]
        );
    }
}

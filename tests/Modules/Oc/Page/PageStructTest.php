<?php

namespace OcTest\Modules\Oc\Page;

use Oc\Page\PageStruct;
use Oc\Page\Persistence\BlockEntity;
use Oc\Page\Persistence\PageEntity;
use OcTest\Modules\TestCase;

/**
 * Class PageStructTest
 *
 * @package OcTest\Modules\Oc\Page
 */
class PageStructTest extends TestCase
{
    public function testGetters()
    {
        $pageEntity = new PageEntity();

        $blockEntities = [
            new BlockEntity(),
            new BlockEntity()
        ];

        $struct = new PageStruct($pageEntity, $blockEntities, 'de', 'en', true);

        static::assertSame($pageEntity, $struct->getPageEntity());
        static::assertSame($blockEntities, $struct->getBlockEntities());
        static::assertSame('de', $struct->getLocale());
        static::assertSame('en', $struct->getFallbackLocale());
        static::assertTrue($struct->isFallback());
    }
}

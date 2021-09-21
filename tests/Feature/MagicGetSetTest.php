<?php

namespace Tests\Feature;

use App\Traits\MagicGetSetTrait;
use Tests\TestCase;

class MagicGetSetTest extends TestCase
{
    use MagicGetSetTrait;
    /**
     * Test Magic Get Set Returns
     *
     * @return void
     */
    public function testMagicGetSetController()
    {
        $this->setData("test");
        $this->assertEquals($this->getData(), "test");

        $this->setTestData(2);
        $this->assertEquals($this->getTestData(), 2);
    }
}

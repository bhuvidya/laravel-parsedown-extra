<?php

namespace Tests;

/**
 * Class HelperTest
 * @package Tests
 */
class HelperTest extends TestCase
{
    public function testCanCastString()
    {
        $actual = parsedownextra($this->text);
        $expected = '<p><strong>Parsedown Extra</strong> UnitTest</p>';

        $this->assertSame($expected, $actual);
    }
}

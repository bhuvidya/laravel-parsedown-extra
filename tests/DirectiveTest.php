<?php

namespace Tests;

/**
 * Class DirectiveTest
 * @package Tests
 */
class DirectiveTest extends TestCase
{
    public function testCanCastString()
    {
        $compiler = $this->getCompiler();

        $actual = $compiler->compileString('@parsedownextra("' . $this->text . '")');
        $expected = '<?php echo parsedownextra("' . $this->text . '"); ?>';

        $this->assertSame($expected, $actual);
    }
}

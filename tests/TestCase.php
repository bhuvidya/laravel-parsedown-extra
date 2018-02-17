<?php

namespace Tests;

use Illuminate\View\Compilers\BladeCompiler;
use Bhuvdya\ParsedownExtra\Providers\ParsedownExtraServiceProvider;

/**
 * Class TestCase
 * @package Tests
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @var BladeCompiler
     */
    protected $compiler;

    /**
     * @var string
     */
    protected $text = '**Parsedown Extra** UnitTest';

    /**
     * @return BladeCompiler
     */
    protected function getCompiler()
    {
        if (!$this->compiler) {
            $this->compiler = $this->app->make(BladeCompiler::class);
        }

        return $this->compiler;
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ParsedownExtraServiceProvider::class
        ];
    }
}

<?php

namespace Bhuvidya\ParsedownExtra\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use ParsedownExtra;

/**
 * Class ParsedownExtraServiceProvider
 * @package App\Providers
 */
class ParsedownExtraServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->compiler()->directive('parsedownextra', function ($expression) {
            return "<?php echo parsedownextra($expression); ?>";
        });
    }

    /**
     * @return BladeCompiler
     */
    protected function compiler()
    {
        return app('view')->getEngineResolver()->resolve('blade')->getCompiler();
    }

    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton('parsedownextra', function () {
            return ParsedownExtra::instance();
        });
    }
}

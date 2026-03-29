<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('school', 'SAM University'); // default school name
        });

        Blade::directive('upper', function ($text) {
            return "<?php echo strtoupper($text); ?>";
        });

        Blade::directive('lower', function ($text) {
            return "<?php echo strtolower($text); ?>";
        });
    }
}

<?php namespace Waynelogic\LaravelBase;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
class LaravelBaseServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->blade();
    }

    private function blade()
    {
        Blade::directive('phone', function ($expression) {
            return "<?php echo preg_replace('/[^\d+]/', '', $expression); ?>";
        });
    }
}

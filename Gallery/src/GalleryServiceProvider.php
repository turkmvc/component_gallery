<?php
namespace Components\Gallery;
use Illuminate\Support\ServiceProvider;
class GalleryServiceProvider extends ServiceProvider
{

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $nameSpace = $this->app->getNamespace();
        $this->app->router->group(['namespace' => $nameSpace . 'Http\Controllers'], function()
        {
            require __DIR__.'/Http/routes.php';
        });

        $this->loadViewsFrom(__DIR__.'/../views', 'components');
        $this->publishes([
            __DIR__.'/../views' => base_path('resources/views/vendor'),
        ]);

		 $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

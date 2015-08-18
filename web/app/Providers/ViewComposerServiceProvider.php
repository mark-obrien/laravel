<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpKernel\Tests\Fragment\RoutableFragmentRendererTest;
use Request;
use Auth;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->composeSidebar();
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

	public function composeSidebar()
	{

		view()->composer('partials.sidebar', 'App\Http\Composers\SidebarComposer');

	}

}

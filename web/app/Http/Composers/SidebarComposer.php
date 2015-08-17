<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use Auth;

class SidebarComposer
{

    public function compose(View $view)
    {
        $view->with('user', Auth::user());

    }

}
<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Iscritto;

class IscrittiComposer
{
    /**
     * Create a new profile composer.
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('iscritti', Iscritto::all());
    }
}

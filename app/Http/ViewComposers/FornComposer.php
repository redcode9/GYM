<?php

namespace App\Http\ViewComposers;
use App\Fornitore;
use Illuminate\View\View;

class FornComposer
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
        $view->with('fornitori', Fornitore::with('dati_iscrizione')->get());
    }
}

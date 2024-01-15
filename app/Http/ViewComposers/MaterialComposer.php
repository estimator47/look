<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Material;

class MaterialComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('materials', Material::query()->get());
    }
}

<?php
namespace Bsbvolmachten\Documenten\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Documenten\Models\Documenten as Document;

class Documenten extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Documenten',
            'description' => 'Geeft alle documenten weer op de pagina.'
        ];
    }

    public function documenten()
    {
        return Document::orderBy('sort_order', 'ASC')->get();
    }
}
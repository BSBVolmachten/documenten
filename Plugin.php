<?php namespace Bsbvolmachten\Documenten;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Bsbvolmachten\Documenten\Components\Documenten' => 'documenten',
        ];
    }

    public function registerSettings()
    {
    }

}

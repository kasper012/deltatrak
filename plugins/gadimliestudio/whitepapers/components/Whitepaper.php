<?php namespace Gadimliestudio\Whitepapers\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Whitepapers\Models\Whitepaper as ModelsWhitepaper;

class Whitepaper extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Whitepaper Component',
            'description' => 'Whitepapers of Clean City'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $whitepapers = ModelsWhitepaper::all();
        $this->page['whitepapers'] = $whitepapers;
    }
}

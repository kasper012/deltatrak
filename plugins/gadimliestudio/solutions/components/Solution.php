<?php namespace Gadimliestudio\Solutions\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Solutions\Models\Solution as ModelsSolution;

class Solution extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Solution Component',
            'description' => 'Solutions of Clean City'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $solutions = ModelsSolution::all();
        $this->page['solutions'] = $solutions;
    }
}

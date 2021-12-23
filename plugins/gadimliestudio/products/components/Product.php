<?php namespace Gadimliestudio\Products\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Products\Models\Product as ModelsProduct;

class Product extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Product Component',
            'description' => 'Products'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $products = ModelsProduct::all();
        $this->page['products'] = $products;
    }
}

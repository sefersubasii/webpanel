<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category as CategoryModel;

class Categories
{

    public function compose(View $view)
    {
        $mainCategories = CategoryModel::with('descendants')
            ->whereNull('parent_id')
            ->get();


        return $view->with('mainCategories', $mainCategories);
    }
}

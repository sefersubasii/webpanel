<?php

namespace App\Http\ViewComposers;

use App\SocialMedia as SocialMediaModel;
use Illuminate\View\View;

class SocialMedia
{
    public function compose(View $view)
    {
        $socialMedia = SocialMediaModel::all();

        return $view->with('socialMedia', $socialMedia);
    }
}

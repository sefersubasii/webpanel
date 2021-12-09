<?php

namespace App\Http\Controllers;

use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang(Request $request, $locale)
    {
        // Store the URL on which the user was
        $previous_url = url()->previous();

        // Transform it into a correct request instance
        $previous_request = app('request')->create($previous_url);

        // Get Query Parameters if applicable
        $query = $previous_request->query();

        // In case the route name was translated
        $route_name = app('router')->getRoutes()->match($previous_request)->getName();

        // Store the segments of the last request as an array
        $segments = $previous_request->segments();

        // Check if the first segment matches a language code
        if (in_array($locale, config('translatable.locales'))) {


            // // If it was indeed a translated route name
            // if ($route_name && Lang::has('routes.' . $route_name, $locale)) {

            //     // Translate the route name to get the correct URI in the required language, and redirect to that URL.
            //     if (count($query)) {
            //         return redirect()->to($locale . '/' .  trans('routes.' . $route_name, [], $locale) . '?' . http_build_query($query));
            //     }

            //     return redirect()->to($locale . '/' .  trans('routes.' . $route_name, [], $locale));
            // }

            // // Replace the first segment by the new language code
            // $segments[0] = $locale;

            // // Redirect to the required URL
            // if (count($query)) {
            //     return redirect()->to(implode('/', $segments) . '?' . http_build_query($query));
            // }

            // return redirect()->to(implode('/', $segments));

            return redirect()->to('/' . $locale);
        }

        return redirect()->back();
    }
}

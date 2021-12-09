<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function show($slug = null)
    {
        $menus = $this->getPageMenus();

        if (!$slug && isset($menus[0]['slug'])) {
            return redirect()->route('frontend.corporate.show', $menus[0]['slug']);
        }

        $page = $this->findPageBySlug($slug);

        return view('corporate.show', compact('page', 'menus'));
    }

    protected function findPageBySlug(string $slug)
    {
        return Page::where('slug->' . app()->getLocale(), $slug)->firstOrFail();
    }

    private function getPageMenus()
    {
        return Page::get()->toTree()->map(function ($node) {
            return $this->preapreNodeItems($node);
        });
    }

    private function preapreNodeItems($node)
    {
        if (!$node) return [];

        $items =  [
            'id' => $node->id,
            'title' => $node->title,
            'slug' => $node->slug,
        ];


        if (isset($node->children) && $node->children) {
            $childs = null;
            foreach ($node->children as $child) {
                $childs[] = $this->preapreNodeItems($child);
            }

            if ($childs) {
                $items['children'] = $childs;
            }
        }

        return $items;
    }
}

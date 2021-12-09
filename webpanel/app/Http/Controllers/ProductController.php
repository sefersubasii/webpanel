<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show(string $slug)
    {

        $product = $this->findProductBySlug($slug);

        $otherProducts = $this->getOtherProducts($product);

        $menus = $this->getCategoryMenus($product);

        return view('products.detail', compact('product', 'otherProducts', 'menus'));
    }

    /**
     * @param string $slug
     * @return mixed
     */
    protected function findProductBySlug(string $slug)
    {
        return Product::where('slug->' . app()->getLocale(), $slug)->firstOrFail();
    }

    /**
     * @param \App\Product $product
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function getOtherProducts($product)
    {
        return Product::where('category_id', $product->category_id)
            ->get();
    }

    /**
     * @return mixed
     */
    private function getCategoryMenus($product)
    {
        $category = Category::whereAncestorOf($product->category)
            ->firstOr(function () use ($product) {
                return $product->category;
            });

        if (isset($category->children) && $category->children->count()) {
            return $category->children
                ->map(function ($item) use ($product) {
                    return $this->preapreNodeItems($item, $product->category->id);
                });
        }

        return collect([$this->preapreNodeItems($category)]);
    }

    /**
     * @param mixed $node
     * @return mixed
     */
    private function preapreNodeItems($node, $activeId = null)
    {
        if (!$node) return [];

        $items =  [
            'id' => $node->id,
            'title' => $node->title,
            'slug' => $node->slug,
            'active' => false,
        ];

        // Set active node
        if ($node->id == $activeId) {
            $items['active'] = true;
        }

        if (isset($node->children) && $node->children) {
            $childs = null;
            foreach ($node->children as $child) {
                $childs[] = $this->preapreNodeItems($child, $activeId);
            }

            if ($childs) {
                $items['children'] = $childs;
            }
        }

        return $items;
    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function categoryShow(string $slug)
    {
        $category = Category::where('slug->' . app()->getLocale(), $slug)
            ->firstOrFail();

        if ($category->parent_id == null && isset($category->children) && $category->children->count()) {
            return view('products.category_list', compact('category'));
        }

        $categoryIds = $category->children->pluck('id')->push($category->id);

        $products = Product::whereIn('category_id', $categoryIds)->get();

        return view('products.product_list', compact('category', 'products'));
    }

    public function categoryProductShow(string $slug)
    {
        $category = Category::where('slug->' . app()->getLocale(), $slug)
            ->with('products')
            ->first();



        if (isset($category->products) && $category->products->first()) {
            $firstProduct = $category->products->first();

            return redirect()->route('frontend.product.show', $firstProduct->slug);
        }

        return redirect()->back();
    }
}

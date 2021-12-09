<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\HasImage;

class ProductController extends Controller
{
    use HasImage;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get()->toTree();

        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'barcode' => 'required',
            'gram' => 'required|array',
            'image' => 'required|image',
            'category_id' => 'required'
        ]);

        Product::create($this->prepareModelData());

        return redirect()->success('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get()->toTree();

        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'barcode' => 'required',
            'gram' => 'required|array',
            'image' => 'image',
            'category_id' => 'required'
        ]);

        $product->update($this->prepareModelData($product));

        return redirect()->success('products.edit', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->deleteImage($product->image);

        $product->delete();

        return redirect()->success('products.index');
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return array
     */
    protected function prepareModelData($model = null): array
    {
        $data = request()->input();

        if ($file = request()->file('image')) {
            $data['image'] = $this->uploadImage($file, optional($model)->image);
        }

        return $data;
    }
}

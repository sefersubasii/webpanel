<?php

namespace App\Http\Controllers\Backend;

use Str;
use App\Category;
use Mockery\Exception;
use App\Traits\HasImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    use HasImage;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('descendants')
            ->whereParentId(request('parent_id'))
            ->get();

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::withDepth()
            ->having('depth', '<=', 1)
            ->get()
            ->toTree();

        return view('categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'image' => 'required|image',
            'header_image' => 'required|image'
        ]);

        Category::create($this->prepareModelData());

        return redirect()->success('categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $descendantsAndSelfIds = $category->descendantsAndSelf($category->id)->pluck('id');

        // $categories = Category::whereNotIn('id', $descendantsAndSelfIds)
        //     ->get()
        //     ->toTree();

        $categories = Category::whereNotIn('id', $descendantsAndSelfIds)
            ->withDepth()
            ->having('depth', '<=', 1)
            ->get()
            ->toTree();

        return view('categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'image' => 'image',
            'header_image' => 'image'
        ]);

        $category->update($this->prepareModelData($category));

        return redirect()->success('categories.edit', $category->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        $this->deleteImage([
            $category->image,
            $category->header_image
        ]);

        $category->delete();

        return redirect()->route('categories.index');
    }

    protected function prepareModelData($model = null)
    {
        $data = request()->input();

        if ($file = request()->file('image')) {

            $data['image'] = $this->uploadImage($file, optional($model)->image);
        }

        if ($file = request()->file('header_image')) {
            $data['header_image'] = $this->uploadImage($file, optional($model)->header_image);
        }

        return $data;
    }
}

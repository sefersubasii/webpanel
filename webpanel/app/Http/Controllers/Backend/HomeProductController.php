<?php

namespace App\Http\Controllers\Backend;

use App\HomeProduct;
use App\Http\Controllers\Controller;
use App\Traits\HasImage;
use Illuminate\Http\Request;

class HomeProductController extends Controller
{
    use HasImage;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeProducts = HomeProduct::all();

        return view('home_products.index', compact('homeProducts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home_products.create');
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
            'title' => 'required',
            'image' => 'required',
        ]);

        HomeProduct::create($this->prepareModelData());

        return redirect()->success('home-products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeProduct  $homeProduct
     * @return \Illuminate\Http\Response
     */
    public function show(HomeProduct $homeProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeProduct  $homeProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeProduct $homeProduct)
    {

        return view('home_products.edit', compact('homeProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeProduct  $homeProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeProduct $homeProduct)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $homeProduct->update($this->prepareModelData($homeProduct));

        return redirect()->success('home-products.edit', $homeProduct->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeProduct  $homeProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeProduct $homeProduct)
    {
        $this->deleteImage($homeProduct->image);

        $homeProduct->delete();

        return redirect()->success('home-products.index');
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

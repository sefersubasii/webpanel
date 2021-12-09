<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Slider;
use App\Traits\HasImage;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use HasImage;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sliders.create');
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
            'image' => 'required|image'
        ]);

        Slider::create($this->prepareModelData());

        return redirect()->success('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $slider->update($this->prepareModelData($slider));

        return redirect()->success('sliders.edit', $slider->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $this->deleteImage($slider->image);

        $slider->delete();

        return redirect()->success('sliders.index');
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

        if ($file = request()->file('mobile_image')) {
            $data['mobile_image'] = $this->uploadImage($file, optional($model)->mobile_image);
        }

        return $data;
    }
}

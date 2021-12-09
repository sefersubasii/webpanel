<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialMedia = SocialMedia::all();

        return view('social_media.index', compact('socialMedia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('social_media.create');
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
            'link' => 'required',
            'icon' => 'required',
        ]);

        SocialMedia::create($request->input());

        return redirect()->success('social-media.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $socialMedia)
    {
        return view('social_media.edit', compact('socialMedia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $socialMedia)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'icon' => 'required',
        ]);

        $socialMedia->update($request->input());

        return redirect()->success('social-media.edit', $socialMedia->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();

        return redirect()->success('social-media.index');
    }
}

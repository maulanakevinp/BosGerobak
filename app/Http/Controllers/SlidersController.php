<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use UxWeb\SweetAlert\SweetAlert;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = auth()->user()->name;
        $subtitle = 'Slide Show';
        $sliders = Slider::all();

        return view('sliders.index',compact('title','subtitle','sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = $request->validate([
            'foto'      => ['required','image','mimes:jpeg,png','max:2048'],
            'judul'     => ['nullable','string','max:64'],
            'deskripsi' => ['nullable','string'],
        ]);

        $slider['foto'] = $this->setImageUpload($request->foto, 'img/sliders');
        Slider::create($slider);
        SweetAlert::success('Slide show berhasil ditambahkan','Berhasil');
        return back();
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
        $sliders = $request->validate([
            'foto'      => ['nullable','image','mimes:jpeg,png','max:2048'],
            'judul'     => ['nullable','string','max:64'],
            'deskripsi' => ['nullable','string'],
        ]);

        if ($request->foto) {
            $sliders['foto'] = $this->setImageUpload($request->foto, 'img/sliders', $slider->foto);
        }

        $slider->update($sliders);
        SweetAlert::success('Slide show berhasil diperbarui','Berhasil');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        File::delete(public_path('img/sliders/'.$slider->foto));
        Slider::destroy($slider->id);
        SweetAlert::success('Slide show berhasil dihapus','Berhasil');
        return back();
    }

    public function get(Request $request)
    {
        echo json_encode(Slider::find($request->id));
    }
}

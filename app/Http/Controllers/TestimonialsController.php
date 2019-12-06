<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use UxWeb\SweetAlert\SweetAlert;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = auth()->user()->name;
        $subtitle = 'Testimoni';
        $testimonials = Testimonial::all();

        return view('testimonials.index',compact('title','subtitle','testimonials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimoni = $request->validate([
            'foto'      => ['required','image','mimes:jpeg,png','max:2048'],
        ]);

        $testimoni['foto'] = $this->setImageUpload($request->foto, 'img/testimonials');
        Testimonial::create($testimoni);
        SweetAlert::success('Testimoni berhasil ditambahkan','Berhasil');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimoni)
    {
        $testimonial = $request->validate([
            'foto'      => ['required','image','mimes:jpeg,png','max:2048'],
        ]);

        $testimonial['foto'] = $this->setImageUpload($request->foto, 'img/testimonials',$testimoni->foto);
        $testimoni->update($testimonial);
        SweetAlert::success('Testimoni berhasil diperbarui','Berhasil');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimoni)
    {
        File::delete(public_path('img/testimonials/'.$testimoni->foto));
        Testimonial::destroy($testimoni->id);
        SweetAlert::success('Testimoni berhasil dihapus','Berhasil');
        return back();
    }
    
    public function get(Request $request)
    {
        echo json_encode(Testimonial::find($request->id));
    }
}

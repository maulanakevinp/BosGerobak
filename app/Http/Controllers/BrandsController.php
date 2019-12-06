<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use UxWeb\SweetAlert\SweetAlert;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = auth()->user()->name;
        $subtitle = 'Brands';
        $brands = Brand::all();

        return view('brands.index',compact('title','subtitle','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brands = $request->validate([
            'foto'      => ['required','image','mimes:jpeg,png','max:2048'],
        ]);

        $brands['foto'] = $this->setImageUpload($request->foto, 'img/brands');
        Brand::create($brands);
        SweetAlert::success('Brand berhasil ditambahkan','Berhasil');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $brands = $request->validate([
            'foto'      => ['required','image','mimes:jpeg,png','max:2048'],
        ]);

        $brands['foto'] = $this->setImageUpload($request->foto, 'img/brands',$brand->foto);
        $brand->update($brands);
        SweetAlert::success('Brand berhasil diperbarui','Berhasil');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        File::delete(public_path('img/brands/'.$brand->foto));
        Brand::destroy($brand->id);
        SweetAlert::success('Brand berhasil dihapus','Berhasil');
        return back();
    }
    
    public function get(Request $request)
    {
        echo json_encode(Brand::find($request->id));
    }
}

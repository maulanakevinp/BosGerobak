<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use UxWeb\SweetAlert\SweetAlert;

class ImagesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = $request->validate([
            'foto' => ['required','image','mimes:jpeg,png','max:2048'],
            'produk_id' => ['required','numeric']
        ]);
        $images['foto'] = $this->setImageUpload($request->foto, 'img/products');
        Image::create($images);
        SweetAlert::success('Foto berhasil diperbarui','Berhasil');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $images = $request->validate([
            'foto' => ['required','image','mimes:jpeg,png','max:2048']
        ]);
        $images['foto'] = $this->setImageUpload($request->foto, 'img/products',$image->foto);
        $image->update($images);
        SweetAlert::success('Foto berhasil diperbarui','Berhasil');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        File::delete(public_path('img/products/'.$image->foto));
        Image::destroy($image->id);
        SweetAlert::success('Foto berhasil dihapus','Berhasil');
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Utility;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;

class UtilitiesController extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $title = auth()->user()->name;
        $subtitle = 'Ubah Utilitas';
        $utility = Utility::find(1);

        return view('utilities.edit',compact('title','subtitle','utility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utility  $utility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utility $utility)
    {
        $utilitas = $request->validate([
            'logo_perusahaan'       => ['nullable','image','mimes:jpeg,png','max:2048'],
            'judul_testimoni'       => ['required','string'],
            'deskripsi_testimoni'   => ['nullable','string'],
            'judul_brands'          => ['required','string'],
            'deskripsi_brands'      => ['nullable','string'],
            'deskripsi_kategori'    => ['nullable','string'],
            'tentang_kami'          => ['required','string'],
            'link_facebook'         => ['nullable','max:60'],
            'link_instagram'        => ['nullable','max:60'],
            'link_twitter'          => ['nullable','max:60'],
            'link_youtube'          => ['nullable','max:60'],
        ]);

        if ($request->logo_perusahaan) {
            $utilitas['logo_perusahaan'] = $this->setImageUpload($request->logo_perusahaan,'img/logo',$utility->logo_perusahaan);
        }

        $utility->update($utilitas);
        
        SweetAlert::success('Utilitas berhasil diperbarui', 'Berhasil');
        return back();
    }

}

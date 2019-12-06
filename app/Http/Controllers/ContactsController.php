<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;

class ContactsController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $title = auth()->user()->name;
        $subtitle = 'Ubah Kontak';
        $contact = Contact::find(1);

        return view('contacts.edit',compact('title','subtitle','contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $kontak = $request->validate([
            'nomor_telepon'     => ['required','digits_between:6,13'],
            'nomor_whatsapp'    => ['required','digits_between:6,13'],
            'alamat'            => ['required','string'],
        ]);
        
        $contact->update($kontak);
        SweetAlert::success('Kontak berhasil diperbarui', 'Berhasil');
        return back();
    }

}

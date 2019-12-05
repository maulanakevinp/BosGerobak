<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use UxWeb\SweetAlert\SweetAlert;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $title = auth()->user()->name;
        $subtitle = 'Ganti Password';
        return view('users.edit', compact('title','subtitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'password_saat_ini' => 'required|min:6',
            'password_baru' => 'required|min:6|required_with:konfirmasi_password|same:konfirmasi_password',
            'konfirmasi_password' => 'required|min:6'
        ]);

        if (Hash::check($request->password_saat_ini, $user->password)) {
            if (($request->password_baru == $request->password_saat_ini)) {
                SweetAlert::warning('tidak ada perubahan')->persistent('tutup');
                return back();
            } else {
                $user->password = Hash::make($request->konfirmasi_password);
                $user->save();
                SweetAlert::success('Password berhasil diperbarui', 'berhasil');
                return back();
            }
        } else {
            SweetAlert::error('Password saat ini salah, password gagal diperbarui', 'gagal')->persistent('tutup');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}

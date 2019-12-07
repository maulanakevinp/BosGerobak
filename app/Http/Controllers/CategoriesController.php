<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use UxWeb\SweetAlert\SweetAlert;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = auth()->user()->name;
        $subtitle = 'Kategori';
        $categories = Category::all();

        return view('categories.index',compact('title','subtitle','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = $request->validate([
            'foto'          => ['required','image','mimes:jpeg,png','max:2048'],
            'nama_kategori' => ['required','string','max:30'],
            'deskripsi'     => ['required','string','max:200'],
            'keunggulan'    => ['required','string'],
        ]);

        $categories['foto'] = $this->setImageUpload($request->foto, 'img/categories');
        Category::create($categories);
        SweetAlert::success('Kategori berhasil ditambahkan','Berhasil');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($any)
    {
        $kategori = str_replace('-', ' ', $any);
        $category = Category::whereNamaKategori($kategori)->first();
        
        if (!$category) {
            return abort(404);
        }

        $products   = Product::whereKategoriId($category->id)->paginate(9);
        $title      = $category->nama_kategori;

        return view('categories.show',compact('category','products','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $kategori)
    {
        $title = auth()->user()->name;
        $subtitle = 'Ubah Kategori';
        return view('categories.edit', compact('kategori','title','subtitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $kategori)
    {
        $categories = $request->validate([
            'foto'          => ['nullable','image','mimes:jpeg,png','max:2048'],
            'nama_kategori' => ['required','string','max:30'],
            'deskripsi'     => ['required','string','max:200'],
            'keunggulan'    => ['required','string'],
        ]);

        if($request->foto){
            $categories['foto'] = $this->setImageUpload($request->foto, 'img/categories', $kategori->foto);
        }

        $kategori->update($categories);

        SweetAlert::success('Kategori berhasil diperbarui','Berhasil');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $kategori)
    {
        File::delete(public_path('img/categories/'.$kategori->foto));
        Category::destroy($kategori->id);
        SweetAlert::success('Kategori berhasil dihapus','Berhasil');
        return back();
    }
    
    public function get(Request $request)
    {
        echo json_encode(Category::find($request->id));
    }
}

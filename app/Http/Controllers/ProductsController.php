<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\Product;
use App\Rules\uploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use UxWeb\SweetAlert\SweetAlert;

class ProductsController extends Controller
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
    public function create(Category $kategori)
    {
        $title = $kategori->nama_kategori;
        $subtitle = 'Tambah Produk';
        return view('products.create',compact('subtitle','title','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = $request->validate([
            'nama_produk'   => ['required','string','max:30'],
            'harga'         => ['required','numeric','min:0'],
            'spesifikasi'   => ['nullable'],
            'kategori_id'   => ['required','numeric'],
            'foto'          => ['required', new uploadImage($request, 'foto')],
        ]);

        $product = Product::create($produk);

        foreach ($request->foto as $foto) {
            $image = new Image;
            $image->foto = $this->setImageUpload($foto, 'img/products');
            $image->produk_id = $product->id;
            $image->save();
        }
        
        SweetAlert::success('Produk berhasil ditambahkan', 'berhasil');
        return redirect()->route('products.show',['product' => $product, 'nama_produk' => str_replace(' ','-', $product->nama_produk)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $nama_produk)
    {
        $title = $product->category->nama_kategori;
        $subtitle = $product->nama_produk;
        return view('products.show',compact('subtitle','title','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $produk)
    {
        $title = $produk->category->nama_kategori;
        $subtitle = 'Ubah Produk';
        return view('products.edit',compact('subtitle','title','produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $produk)
    {
        $product = $request->validate([
            'nama_produk'   => ['required','string','max:30'],
            'harga'         => ['required','numeric','min:0'],
            'spesifikasi'   => ['nullable'],
        ]);

        $produk->update($product);
        SweetAlert::success('Produk berhasil diperbarui', 'berhasil');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $produk)
    {
        $route = strtolower(str_replace(' ','-', $produk->category->nama_kategori));
        foreach ($produk->images as $image) {
            File::delete(public_path('img/products/'.$image->foto));
            Image::destroy($image->id);
        }
        Product::destroy($produk->id);
        SweetAlert::success('Produk berhasil dihapus','Berhasil');
        return redirect('/'.$route);
    }
}

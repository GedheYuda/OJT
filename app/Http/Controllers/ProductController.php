<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('balipasadena.index');
    }
    public function contact()
    {
        return view('balipasadena.contact');
    }
    public function produk()
    {
        $product = Product::all();
        return view('balipasadena.produk', compact('product'));
    }
    public function create()
    {
        return view('balipasadena.create');
    }
    // Untuk Menyimpan gambar dan keterangan tentang produk
    // Untuk admin
    public function store(Request $request)
    {
        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $name = $file->getClientOriginalName();
            Storage::disk('local')->putFileAs('images', $file, $name);

            $product = new Product;
            $product->name = $request->get('name');
            $product->type = $request->get('type');
            $product->price = $request->get('price');
            $product->file = $name;
            $product->save();
            return redirect('/product');
        }
        else
        {
            return redirect('product')->with('message','Sorry the file you are looking for is missing');
        }

    }
    // Untuk menampilkan data
    // Untuk admin
    public function show($id)
    {
        $product = Product::find($id);
        return view('balipasadena.show',compact('product, id'));
    }
    // Untuk menampilkan data yang akan diedit
    // Untuk admin
    public function edit($id)
    {
        $product = Product::find($id);
        return view('balipasadena.edit', compact('product'));
    }
    // Untuk memperbaharui data
    // Untuk admin
    public function update($id,Request $request)
    {
        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $name = $file->getClientOriginalName();
            Storage::disk('local')->putFileAs('images', $file, $name);

            $product = Product::find($id);
            $product->name = $request->get('name');
            $product->type = $request->get('type');
            $product->price = $request->get('price');
            $product->file = $name;
            $product->save();
            return redirect('/product');
        }
        else
        {
            return redirect('product')->with('message','Sorry the file you are looking for is missing');
        }

    }
    // Menghapus data yang tidak diperlukan
    // Untuk admin
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('index')->with('success','Product has been deleted');
    }
}

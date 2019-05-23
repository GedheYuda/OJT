<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

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
    public function product()
    {
        return view('balipasadena.produk');
    }
    /*
    Tergantung dengan banyaknya jenis dari kerajinan dari Balipasedana
    */
    public function outdoor()
    {
        $product = Product::where('type','outdoor')->all();
        return view('balipasedana.product',compact('product'));
    }
    public function indoor(){
        $product = Product::where('type','indoor')->all();
        return view('balipasedana.product',compact('product'));
    }
    // Dibutuhkan page untuk Login(admin), register(admin), Crud(admin)
    public function create()
    {
        return view('balipasedana.create');
    }
    // Untuk Menyimpan gambar dan keterangan tentang produk
    // Untuk admin
    public function store(Request $request)
    {
        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $ex = $file->getClientOriginalExtension();
            $fname = time().'.'.$ex;
            $s = $file->move('public/picture/',$fname);
            return $s;
        }
        else
        {
            return redirect('product')->with('message','Sorry the file you are looking for is missing');
        }
        $request->validate([
            'name'      => 'required|string',
            'price'     => 'required|integer',
            'type'      => 'required|string',
            'file'      => 'required|string',
            ]);
            $product = new Product([
                'name'      =>$request->get('name'),
                'price'     =>$request->get('price'),
                'type'      =>$request->get('type'),
                'file'      =>$request->get($s),
            ]);
            $product->save();
            return redirect('index')->with('success','Product has been added');
    }
    // Untuk menampilkan data 
    // Untuk admin
    public function show($id)
    {
        $product = Product::find($id);
        return view('balipasedana.show',compact('product, id'));
    }
    // Untuk menampilkan data yang akan diedit
    // Untuk admin
    public function edit($id)
    {
        $product = Product::find($id);
        return view('balipasedana.edit', compact('product'));
    }
    // Untuk memperbaharui data 
    // Untuk admin
    public function update($id,Request $request)
    {
        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $ex = $file->getClientOriginalExtension();
            $fname = time().'.'.$ex;
            $s = $file->move('public/picture',$fname);
            return $s;
        }else{
            return redirect('index')->with('message','Sorry the file you are looking for is missing');
        }
        $request->validate([
            'name'      => 'required|string',
            'price'     => 'required|integer',
            'type'      => 'required|string',
            'file'      =>'required|string',
        ]);
        $product = Product::find($id);
        $product->name  = $request->name;
        $product->file  = $request->get($s);
        $product->price = $request->price;
        $product->type  = $request->type;
        $product->save();
        return redirect('index')->with('success','Product has been updated');
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

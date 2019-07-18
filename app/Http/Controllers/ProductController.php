<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function edfot($id)
    {
        $product = Product::find($id);
        return view('balipasadena.editfoto', compact('product'));
    }
    public function index()
    {
        // Membuka 'index.blade.php' yang tersimpan di folder balipasadena
        return view('balipasadena.index');
    }
    public function contact()
    {
        // Membuka 'contact.blade.php' yang tersimpan di folder balipasadena
        return view('balipasadena.contact');
    }
    public function produk()
    {
        $product = Product::all();
        return view('balipasadena.produk', compact('product'));
    }
    public function product_outdoor()
    {
        $product = Product::all()->where('type','outdoor');
        return view('balipasadena.jenis.outdoor', compact('product'));
    }
    public function product_indoor()
    {
        $product = Product::all()->where('type','indoor');
        return view('balipasadena.jenis.indoor', compact('product'));
    }
    public function product_accesories()
    {
        $product = Product::all()->where('type','accesories');
        return view('balipasadena.jenis.aksesoris', compact('product'));
    }
    public function create()
    {
        return view('balipasadena.create');
    }
    public function dashboard(){
        if(!Session::get('name')){
            return redirect('/login');
        }else{
            $product = Product::all();
            return view('balipasadena.dashboard', compact('product'));
        }
    }
    public function store(Request $request)
    {
        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $name = $file->getClientOriginalName();
            $prd = Product::where('file', $name)->count();
            if($prd < 1){
                Storage::disk('public_path')->putFileAs('images',$file,$name);
                $product = new Product;
                $product->name = $request->get('name');
                $product->type = $request->get('type');
                $product->price = $request->get('price');
                $product->file = $name;
                $product->save();
                return redirect('/dashboard')->with('success','Gambar Produk telah ditambahkan kedalam database');
            }
            else{
                return redirect('/dashboard')->with('message','Maaf file yang anda pilih sudah ada');
            }
        }
    }
    // Untuk menampilkan data
    // Untuk admin
    public function show($id)
    {
        $product = Product::find($id);
        return view('balipasadena.view', compact('product','id'));
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
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->type = $request->get('type');
        $product->price = $request->get('price');
        $product->save();
        return redirect('/dashboard')->with('success','Data anda telah berhasil dirubah');
    }
    public function update_image($id, Request $request)
    {
        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $name = $file->getClientOriginalName();
            $prd = Product::where('file', $name)->count();
            if($prd < 1){
                Storage::disk('public_path')->putFileAs('images',$file,$name);
                $product = Product::find($id);
                $product->file = $name;
                $product->save();
                return redirect('/dashboard')->with('success','Gambar Produk telah ditambahkan kedalam database');
            }
            else{
                return redirect('/dashboard')->with('message','Maaf file yang anda pilih sudah ada');
            }
        }
    }
    // Menghapus data yang tidak diperlukan dan foto
    // Mencari gambar dan data dari database sesuai dengan 'id'
    public function destroy($id)
    {
        // Memberikan akses untuk menghapus database sesuai 'id' dari colom 'id' dari Mysql
        $product = Product::find($id);
        // Memastikan Databasenya ada
        if($product)
        {
            // Menghapus gambar atau foto yang tersimpan di storage.
            // Berdasarkan 'driver' dari filesystem di folder 'config' yaitu 'public'.
            // yang disetting pada 'storage/app/public/images/
            Storage::disk('public_upload')->delete($product->file);
            // Menghapus data di database
            $product->delete();
            // Setelah datanya berhasil dihapus maka langsung dialihkan ke 'dashboard'.
            return redirect('/dashboard')->with('success','Produk telah berhasil dihapus');
        }
        else {
            return redirect('/dashboard')->with('message','Maaf Produk tidak berhasil dihapus');
        }
    }
}

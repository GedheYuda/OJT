<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
        $product = DB::table('product')->orderBy('type','ASC')->get();
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
    // Untuk Menyimpan gambar dan keterangan tentang produk
    // Untuk admin
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

        if($request->hasFile('pic'))
        {
            $val = $request->validate([
                'pic' => 'required|file|image|mimes:jpeg,png,jfif,webp|max:2048'
            ]);
            if(!$val){
                return redirect('/dashboard/create')->with('message','Maaf format file yang anda masukkan salah');
            }
            $file = $val['pic'];
            $name = $file->getClientOriginalName();
            $product = Product::where('file',$name)->count();
            if($product > 0)
            {
                return redirect('/dashboard/create')->with('message','Maaf file yang anda pilih sudah ada');
            }
            else {
                Storage::disk('local')->putFileAs('images',$file,$name);
                $product = new Product;
                $product->name = $request->get('name');
                $product->type = $request->get('type');
                $product->price = $request->get('price');
                $product->file = $name;
                $product->save();
                return redirect('/dashboard')->with('success','Produk telah ditambahkan kedalam database');
            }
        }
        else{
            return redirect('/dashboard')->with('message','Maaf semua colom harus diisi semua');
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
        if($request->hasFile('pic')){
            $val = $request->validate([
                'pic' => 'required|file|image|mimes:jpeg,png,jfif,webp|max:2048'
            ]);
            if(!$val){
                return redirect('/dashboard/create')->with('message','Maaf format file yang anda masukkan salah');
            }
            $file = $val['pic'];
            $name = $file->getClientOriginalName();
            Storage::disk('local')->putFileAs('images', $file, $name);

            $product = Product::find($id);
            $product->name = $request->get('name');
            $product->type = $request->get('type');
            $product->price = $request->get('price');
            $product->file = $name;
            $product->save();
            return redirect('/dashboard')->with('success','Data anda telah berhasil dirubah');
        }
        else
        {
            return redirect('/dashboard')->with('message','Maaf untuk mengupdate anda harus mengisi semua kolom');
        }
    }
    // Menghapus data yang tidak diperlukan dan foto
    // Untuk admin
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product)
        {
            Storage::disk('public')->delete($product->file);
            $product->delete();
            return redirect('/dashboard')->with('success','Produk telah berhasil dihapus');
        }
        else {
            return redirect('/dashboard')->with('message','Maaf Produk tidak berhasil dihapus');
        }
    }
}

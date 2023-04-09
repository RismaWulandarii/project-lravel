<?php

namespace App\Http\Controllers;
use App\Models\Snack;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create (){
        return view('createSnack');
    }

    public function store(Request $request)
    {   
        $validatedDate = $request->validate([
            'namaInput' => 'required',
            'image'=> 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'deskripsiInput' => 'required',
            'hargaInput' => 'required|numeric',
        ]);

        if($request->file('image')){
            $validatedDate['image']=$request->file('image')->store('post-image');
        }

        $namaInput = $request->input('namaInput');
        $image = $request->file('image')->store('post-image');
        $deskripsiInput = $request->input('deskripsiInput');
        $hargaInput = $request->input('hargaInput');

        $query = DB::table('snack')->insert([
            'nama' => $namaInput,
            'image' => $image,
            'deskripsi' => $deskripsiInput,
            'harga' => $hargaInput
        ]);

        if ($query) {
            return redirect()->route('Product.read')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('Product.read')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function read(){
        $data['snack'] = DB::table('snack')->paginate(10);
        return view('showProduct',$data);
    }

    public function edit($id)
    {
        $data['snack'] = DB::table('snack')->where('id', $id)->first();
        return view('editProduct',$data);
    }

    public function update(Request $request, string $id)
    {   

        $validatedDate = $request->validate([
            'namaInput' => 'required',
            'image'=> 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'deskripsiInput' => 'required',
            'hargaInput' => 'required|numeric',
        ]);

        $namaInput = $request->input('namaInput');
        $image = $request->file('image')->store('post-image');
        $deskripsiInput = $request->input('deskripsiInput');
        $hargaInput = $request->input('hargaInput');


        $query = DB::table('snack')->where('id', $id)->update([
            'nama' => $namaInput,
            'image' => $image,
            'deskripsi' => $deskripsiInput,
            'harga' => $hargaInput
        ]);

        if ($query) {
            return redirect()->route('Product.read')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('Product.read')->with('failed', 'Data Gagal Diupdate');
        }
    }

    public function destroy(string $id)
    {   
        $query = DB::table('snack')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('Product.read')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('Product.read')->with('failed', 'Data Gagal Dihapus');
        }
    }

    public function detail($id)
    {
        $data['snack'] = DB::table('snack')->where('id', $id)->first();
        return view('detailProduct',$data);
    }
}
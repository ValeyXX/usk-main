<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreprodukRequest;
use Illuminate\Validation\Rule;
use App\Http\Requests\UpdateprodukRequest;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kantin.produk',[
            'produks' => Produk::all(),
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nama_produk' => [
                'required',
                'string',
                'max:255',
            ],
            'id_kategori' => 'required|exists:kategoris,id',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'desc' => 'required',
        ]);

        $existingProduk = Produk::where('nama_produk', $request->nama_produk)->first();
        if ($existingProduk) {
            $existingProduk->stok += $request->stok;
            $existingProduk->save;
        } else {
            $foto = $request->file('foto');
            $foto->storeAs('public/produk', $foto->hashName());

            Produk::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'foto' => $foto->hashName(),
                'desc' => $request->desc,
                'id_kategori' => $request->id_kategori
            ]);
        }

        return redirect()->back()->with('success', 'Berhasil menambahkan data produk baru.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produk $produk)
    {
        // dd($request->all());
        $request->validate([
            'nama_produk' => [
                'required',
                'string',
                'max:255',
                
            ],
            'id_kategori' => 'required|exists:kategoris,id',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'desc' => 'required',
        ]);

        $produk = Produk::find($produk->id);
        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            ]);

            $foto = $request->file('foto');
            if ($produk->foto != 'default.png') {
                Storage::delete('public/produk/'. $produk->foto);
            }
            $foto->storeAs('public/produk', $foto->hashName());

            // Storage::delete('public/produk/', $produk->foto);
            $produk->foto = $foto->hashName();
        }

        $produk->nama_produk = $request->nama_produk;
        $produk->id_kategori = $request->id_kategori;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->desc = $request->desc;
        $produk->save();

        return redirect()->back()->with('success', 'Berhasil mengedit data produk.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        $produk = Produk::findOrFail($produk->id);
        Storage::delete('public/produk/' .$produk->image);
        $produk->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data produk.');
    }
}

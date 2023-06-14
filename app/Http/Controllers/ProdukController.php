<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use App\Models\KategoriProduk;
use App\Models\Produk;
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
use Illuminate\Http\Request;

class ProdukController extends Controller
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 53aa5fd (Praktikum)
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.produk.produk');
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
        //
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
=======
=======
    public function index()
    {
        $produk = new produk();
        return view('admin.produk.produk', ['produk' => $produk->getAllData()]);
    }

    public function create()
    {
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::all();
        return view('admin.produk.create', compact('kategori_produk','produk'));
    }

    public function store(Request $request)
    {
        // buat instance class baru dari model yang bernama produk
        // ambil data yang di inputkan user dengan menggunakan parameter request
        // Lalu masukkan ke dalam kolom table produk
        // save data yang sudah di ambil menggunakan parameter request dengan method save()
        // Kembalikan ke tampilan view produk setelah mengklik button simpan
        $produk = new Produk();
        $produk->kode =$request->kode;
        $produk->nama =$request->nama;
        $produk->harga_jual =$request->harga_jual;
        $produk->harga_beli =$request->harga_beli;
        $produk->stok =$request->stok;
        $produk->min_stok =$request->min_stok;
        $produk->deskripsi =$request->deskripsi;
        $produk->kategori_produk_id =$request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');

    }

>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
    public function show(string $id)
    {
        //
    }

<<<<<<< HEAD
    /**
     * Show the form for editing the specified resource.
     */
=======
<<<<<<< HEAD
    /**
     * Show the form for editing the specified resource.
     */
=======
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
    public function edit(string $id)
    {
        //
    }

<<<<<<< HEAD
    /**
     * Update the specified resource in storage.
     */
=======
<<<<<<< HEAD
    /**
     * Update the specified resource in storage.
     */
=======
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
    public function update(Request $request, string $id)
    {
        //
    }

<<<<<<< HEAD
    /**
     * Remove the specified resource from storage.
     */
=======
<<<<<<< HEAD
    /**
     * Remove the specified resource from storage.
     */
=======
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
    public function destroy(string $id)
    {
        //
    }
}

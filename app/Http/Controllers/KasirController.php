<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use App\Models\Manajer;
use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Kasir::all();
        return view('kasir.index', [
            'transaksi'      =>$transaksi,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = Kasir::all();
        $menus = Manajer::get(['id', 'nama_menu']);
        $hargas = Manajer::get('harga');
        $data  = Manajer::all();
        return view('kasir.create', compact('transaksi', 'menus', 'hargas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'nama_menus' => 'required',
            'jumlah' => 'required',
            'nama_pegawai' => 'required',
        ]);
        $menu= Manajer::findOrFail($request->nama_menus);
        $total_harga = $menu->harga * $request->jumlah;
        $ketersediaan = $menu->ketersediaan - $request->jumlah;

        Kasir::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nama_menus' => $request->nama_menus,
            'jumlah' => $request->jumlah,
            'total_harga' => $total_harga,
            'nama_pegawai' => $request->nama_pegawai
        ]);

        $menu->update([
            'ketersediaan' => $ketersediaan
        ]);

        return redirect()->route('kasir.index')->with('success', 'Berhasil Membuat Transaksi!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function show(Kasir $kasir)
    {
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function edit(Kasir $kasir)
    {

        $transaksi = Kasir::all();
        return view('kasir.edit',compact('transaksi','kasir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kasir $kasir)
    {
        $request->validate([
            'nama_pelanggan'=>['required', 'max:255','min:5'],
            'nama_menu'=>['required','min:5'],
            'jumlah'=>'required',
            'total_harga'=>'required',
            'nama_pegawai'=>['required','min:5','max:255']
        ]);

        $kasir->update($request->all());
        return redirect()->route('kasir.index')
                        ->with('success','Berhasil Update !');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kasir $kasir)
    {
        $kasir->delete();

        return redirect()->route('kasir.index')
                        ->with('success','Berhasil Hapus !');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Manajer;
use App\Models\Kasir;
use Illuminate\Http\Request;

class ManajerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $menu = Manajer::all();
        $keyword = $request->keyword;
        $menu = Manajer::where('nama_menu', 'LIKE', '%'.$keyword. '%')
            ->orwhere('harga',  'LIKE', '%'.$keyword. '%' )->get();
        return view('manajer.index',compact('menu', 'keyword'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manajer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_menu'=>['required', 'max:255','min:5','unique:menu'],
            'harga'=>['required'],
            'deskripsi'=>['required','min:3','max:255'],
            'ketersediaan'=>'required'
        ]);

        Manajer::create($request->all());
        return redirect(

        )->route('manajer.index')
                        ->with('toast_success', 'Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manajer  $manajer
     * @return \Illuminate\Http\Response
     */
    public function show(Manajer $manajer)
    {
        return view('manajer.show', compact('manajer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Manajer $manajer)
    {
        return view('manajer.edit',compact('manajer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manajer  $manajer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manajer $manajer)
    {
        $request->validate([
            'nama_menu'=>['required', 'max:255','min:5'],
            'harga'=>['required'],
            'deskripsi'=>['required','min:3','max:255'],
            'ketersediaan'=>'required'
        ]);

        $manajer->update($request->all());
        return redirect()->route('manajer.index')
                        ->with('toast_success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manajer  $manajer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manajer $manajer)
    {
        $manajer->delete();

        return redirect()->route('manajer.index')
                        ->with('toast_success','Berhasil Hapus !');

    }
    public function laporan(){
        $transaksi = Kasir::all();
        return view('manajer.laporan',compact('transaksi'));
    }
    public function cetak(){
        $transaksi = Kasir::all();
        return view('manajer.cetak', compact('transaksi'));
    }
    public function filter(Request $request){
        $mulai = $request->mulai;
        $selesai = $request->selesai;
        $transaksi = Kasir::whereBetween('created_at',  [$mulai, $selesai])->get();
        return view('manajer.filter',compact('transaksi'));
        // return $mulai;
    }
}

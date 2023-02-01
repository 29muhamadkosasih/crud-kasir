<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $user = Admin::all();
        // return view('admin.index',compact('user'));
        $keyword = $request->keyword;
        $user = Admin::where('nama', 'LIKE', '%'.$keyword. '%')
            ->orwhere('role',  'LIKE', '%'.$keyword. '%' )->get();
        return view('admin.index',compact('user', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
            'nama'=>['required', 'max:255','min:5','unique:user'],
            'username'=>['required','unique:user','max:255','min:5'],
            'password'=>['required','min:5','max:20'],
            'role'=>'required'
        ]);

        // dd('registrasi gagal');
        Admin::create($request->all());
        return redirect()->route('admin.index')
                        ->with('success','Berhasil Menyimpan !');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('admin.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $user = Admin::all();
        return view('admin.edit',compact('user','admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:155',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $dt = Admin::findOrFail($id);

        $dt->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,

        ]);

        dd($dt);

        if ($dt) {
            return redirect()
                ->route('page-admin.index')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admin.index')
                        ->with('success','Berhasil Hapus !');
    }
}

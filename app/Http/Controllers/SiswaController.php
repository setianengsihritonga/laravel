<?php

namespace App\Http\Controllers;
use App\Profile;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index ()
    {
        $data = Profile::all();
        return view ('Profile')->with([
            'data' => $data
        ]);
    }

    public function create()
    {
        // sekarang bikin view nya
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Profile::create($data);
        return redirect()->route('profile.index')->with('create', 'Data Berhasil Ditambahkan!!');
    }

    public function edit($id)
    {
        $data = Profile::findOrFail($id);
        return view('edit')->with([
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Profile::findOrFail($id);
        $item->update($data);
        return redirect()->route('profile.index')->with('create', 'Data Berhasil Diupdate!!');
    }

    public function destroy($id)
    {
        $item= Profile::findOrfail($id);
        $item->delete();
        return redirect()->route('profile.index')->with('create', 'Data Berhasil Diupdate!!');

    }
}

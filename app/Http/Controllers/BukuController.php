<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
    	$data_perpus = \App\Buku::all();
    	return view('buku.index',['data_perpus' => $data_perpus ]);
    }

    public function create(Request $request)
    {
    	\App\Buku::create($request ->all());
    	return redirect('/perpus')->with('Suskes', 'Data berhasil di update');
    }

    public function edit($id)
    {
    	$buku = \App\Buku::find($id);
    	return view('buku/edit',['buku' => $buku]);
    }

    public function update(Request $request, $id)
    {
    	$buku = \App\Buku::find($id);
    	$buku->update($request->all());
    	return redirect('/perpus')->with('Suskes', 'Data berhasil di update');
    }

    public function delete($id)
    {
    	$buku = \App\Buku::find($id);
    	$buku->delete();
    	return redirect('/perpus')->with('Suskes', 'Data berhasil di hapus');
    }
}

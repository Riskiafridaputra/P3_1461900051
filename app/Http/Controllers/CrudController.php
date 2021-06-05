<?php

namespace App\Http\Controllers;

use App\Models\Pelangan;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan data
        $pelanggan = Pelangan::all();
        return view('0051Crud',['pelanggan' => $pelanggan]);

    }

    public function tambah()
    {
    	return view('0051pelanggan_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required'
    	]);
 
        Pelangan::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat
    	]);
 
    	return redirect('/crud');
    }

    public function edit($id)
{
   $pelanggan = Pelangan::find($id);
   return view('0051pelanggan_edit', ['pelanggan' => $pelanggan]);
}

public function update($id, Request $request)
{
    $this->validate($request,[
	   'nama' => 'required',
	   'alamat' => 'required'
    ]);

    $pelanggan = Pelangan::find($id);
    $pelanggan->nama = $request->nama;
    $pelanggan->alamat = $request->alamat;
    $pelanggan->save();
    return redirect('/crud');
}
public function delete($id)
{
    $pelanggan = Pelangan::find($id);
    $pelanggan->delete();
    return redirect()->back();
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

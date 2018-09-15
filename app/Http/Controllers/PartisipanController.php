<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rw;
use App\Partisipan;
use Session;


class PartisipanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_rw = Rw::orderBy('id','ASC')->get();
        return view('pages/input-partisipan', compact('list_rw'));
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
    public function store(Request $request)
    {
        $Partisipan = new Partisipan;
        
        $this->validate($request, [
            'nama' => 'required|max:255',
            'kelamin' => 'required',
            'alamat' => 'required',
            'nik' => 'max:255',
            'no_kartu' => 'required',
        ]);

        $Partisipan->nama = $request->nama;
        $Partisipan->kelamin = $request->kelamin;
        $Partisipan->alamat = $request->alamat;
        $Partisipan->nik = $request->nik;
        $Partisipan->id_rw = $request->id_rw;
        $Partisipan->no_kartu = $request->no_kartu;
        if($Partisipan->save()){
            Session::flash('success', 'Berhasil Menyimpan'); 
            return redirect()->back();
        }
       


    }

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

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

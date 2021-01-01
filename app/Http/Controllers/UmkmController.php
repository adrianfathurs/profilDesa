<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Umkm;
use App\Umkm_pic;
use RealRashid\SweetAlert\Facades\Alert;
class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dataUmkm=Umkm::latest()->get();
        return view('umkm.index',compact('dataUmkm'));
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
          $nm=$request->photos1;
        $namaFile=$nm->getClientOriginalName();
        $dtUpload=new Umkm;
        $dtUpload->judul=$request->judul;
        $dtUpload->photos1_umkm=$namaFile;
        $dtUpload->description_umkm=$request->description;
        $dtUpload->nomor_telp=$request->nomor_telp;
        $dtUpload->url_map=$request->url_map;
        $dtUpload->fk_user_id="1";
        $nm->move(public_path().'/imgUmkm',$namaFile);
        $dtUpload->save();
        Alert::success('Success', 'UMKM Telah Ditambah');
        return redirect()->action([UmkmController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $umkm=Umkm::find($id);
        $UmkmPics=Umkm_pic::where('fk_umkm_id','=',$id)->get();
        return view('umkm.show', compact('umkm','UmkmPics'));
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
        DB::table('umkms')->where('id_umkm', '=', $id)->delete();
        return redirect()->action([UmkmController::class, 'index']);
    }
}


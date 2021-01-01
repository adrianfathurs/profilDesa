<?php

namespace App\Http\Controllers;

use App\Umkm_pic;
use App\Umkm;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Umkm_picController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request,$umkm_id)
    {
        $umkmPic = new Umkm_pic;
        $umkm = Umkm::find($umkm_id);

        $umkmPic->title = $request['title'];
        $umkmPic->fk_umkm_id = $umkm_id;

        if ($request->hasFile('pics')) {
            $file = $request->file('pics');
            $extension = $file->getClientOriginalExtension();
            $filename = $umkm->judul . time() . '.' . $extension;
            $file->move(public_path() . '/imgUmkm/umkm_pic', $filename);
            $umkmPic->pics = $filename;
        } else {
            /* return $request; */
            $umkmPic->pics = '';
        }

        $umkmPic->save();

        Alert::success('Success', 'Foto Wisata Telah Ditambah');

        return redirect()->route('umkm.show', ['umkm' => $umkm_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Umkm_pic  $umkm_pic
     * @return \Illuminate\Http\Response
     */
    public function show(Umkm_pic $umkm_pic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Umkm_pic  $umkm_pic
     * @return \Illuminate\Http\Response
     */
    public function edit(Umkm_pic $umkm_pic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Umkm_pic  $umkm_pic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Umkm_pic $umkm_pic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Umkm_pic  $umkm_pic
     * @return \Illuminate\Http\Response
     */
    public function destroy( $umkm_pic)
    {   
        $umkm_pics = Umkm_pic::find($umkm_pic);
        $fk_umkm_id=$umkm_pics['fk_umkm_id'];
        
        Umkm_pic::destroy($umkm_pic);

        Alert::success('Success', 'Gambar UMKM Telah Dihapus');

        return redirect()->route('umkm.show', ['umkm' => $fk_umkm_id]); 
    }
}

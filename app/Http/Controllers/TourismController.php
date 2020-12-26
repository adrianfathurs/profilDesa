<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tourism;
use App\Tourism_pic;
use RealRashid\SweetAlert\Facades\Alert;



class TourismController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTourism = Tourism::get();
        return view('wisata.index', compact('dataTourism'));
    }

    public function random()
    {
        $dataTourism = Tourism::select('*')
            ->inRandomOrder()
            ->limit(3)
            ->get();
        return compact('dataTourism');
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
        $nm = $request->photos1;
        $namaFile = $nm->getClientOriginalName();
        $dtUpload = new Tourism;
        $dtUpload->judul = $request->judul;
        $dtUpload->photos1_tourism = $namaFile;
        $dtUpload->description_tourism = $request->description;
        $dtUpload->fk_user_id = Auth::id();
        $dtUpload->contact = $request->contact;
        $dtUpload->map_url = $request->map_url;
        $dtUpload->map_api = $request->map_api;
        $nm->move(public_path() . '/imgTourism', $namaFile);
        $dtUpload->save();

        Alert::success('Success', 'Wisata Telah Ditambah');

        return redirect()->action([TourismController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tourism = Tourism::find($id);

        $TourismPics = Tourism_pic::where('fk_tourism_id', '=', $id)->get();

        return view('wisata.show', compact('tourism', 'TourismPics'));
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
        Post::destroy($id);

        Alert::success('Success', 'Wisata Telah Dihapus');

        return redirect('tourism');
    }
}

<?php

namespace App\Http\Controllers;

use App\Tourism;
use App\Tourism_pic;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Tourism_picController extends Controller
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
    public function store(Request $request, $tourism_id)
    {
        $tourismPic = new Tourism_pic;
        $tourism = Tourism::find($tourism_id);

        $tourismPic->title = $request['title'];
        $tourismPic->fk_tourism_id = $tourism_id;

        if ($request->hasFile('pics')) {
            $file = $request->file('pics');
            $extension = $file->getClientOriginalExtension();
            $filename = $tourism->judul . time() . '.' . $extension;
            $file->move(public_path() . '/imgTourism/tourism_pic', $filename);
            $tourismPic->pics = $filename;
        } else {
            /* return $request; */
            $tourismPic->pics = '';
        }

        $tourismPic->save();

        Alert::success('Success', 'Foto Wisata Telah Ditambah');

        return redirect()->route('tourism.show', ['tourism' => $tourism_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tourismPics = Tourism_pic::find($id);

        return compact('tourismPics');
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
    }
}

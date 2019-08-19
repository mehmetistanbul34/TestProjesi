<?php

namespace App\Http\Controllers;
use\App\GamerModel;
use Illuminate\Http\Request;

class GamerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = GamerModel::all();
        return view("gamerListele")->with('kayitlar',$arr);
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
        $_gamer_name = $_POST['gamer_name'];        

        $page = new GamerModel;
        $page->user_name = $_gamer_name;
        $page->save();
        return "Başarılı bir şekilde Gamer insert olundu";
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
    public function update(Request $request)
    {
        $_gamer_id = $_POST['gamer_id'];
        $_gamer_name = $_POST['gamer_name'];


        $page = GamerModel::find($_gamer_id);
        $page->id = $_gamer_id;
        $page->user_name = $_gamer_name;
        $page->save();
        return "Gamer başarılı bir şekilde Update edildi";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $_gamer_id = $_POST['gamer_id'];

        $page = GamerModel::find($_gamer_id);
        $page->delete();
        return "Başarılı bir şekilde silindi";
    }
}

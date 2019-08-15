<?php

namespace App\Http\Controllers;
use\App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = Page::all();
        return view("listele")->with('kayitlar',$arr);
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
        $page = new Page;
        $page->Game_title = "New Game";
        $page->Unique_users = 0;
        $page->Total_play_count = 0;
        $page->save();
        return "Başarılı bir şekilde insert olundu";
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
        $page = Page::find($id);
        $page->Game_id = $id;
        $page->Game_title = "Update Game";
        $page->Unique_users = 3;
        $page->Total_play_count = 3;
        $page->save();
        return "Başarılı bir şekilde Update edildi";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($baslik)
    {
        $page = Page::find($baslik);
        $page->delete();
        return "Başarılı bir şekilde silindi";
    }
}

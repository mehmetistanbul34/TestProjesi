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
        $_game_title = $_POST['game_title'];
        $_unique_users = $_POST['unique_users'];
        $_total_play_count = $_POST['total_play_count'];         

        $page = new Page;
        $page->Game_title = $_game_title;
        $page->Unique_users = $_unique_users;
        $page->Total_play_count = $_total_play_count;
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
    public function update(Request $request)
    {
        $_game_id = $_POST['game_id'];
        $_game_title = $_POST['game_title'];
        $_unique_users = $_POST['unique_users'];
        $_total_play_count = $_POST['total_play_count']; 


        $page = Page::find($_game_id);
        $page->Game_id = $_game_id;
        $page->Game_title = $_game_title;
        $page->Unique_users = $_unique_users;
        $page->Total_play_count = $_total_play_count;
        $page->save();
        return "Başarılı bir şekilde Update edildi";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $_game_id = $_POST['game_id'];

        $page = Page::find($_game_id);
        $page->delete();
        return "Başarılı bir şekilde silindi";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsfeed;
use Session;
use Exception;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='NEWS';
        $headings= ["title"=>"Tile","description"=>"Description",
        "created_at"=>"Created At","updated_at"=>"Updated At"];

        $url="news";
        
        $values=Newsfeed::paginate(10);
        $data = [
            ['name'=>'Title', "type"=>"text", "attrib"=>'required="required" name="title" maxlength="100"'],
            ['name'=>'Description', "type"=>"text", "attrib"=>'required="required" name="description" maxlength="1000"'],
            ['name'=>'Image', "type"=>"file", "attrib"=>'required="required" name="image" maxlength="200"'],
      
        ];

   
       

        return view('adminPanel.index',compact('title','headings','values','url','data'));
   
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
        dd($request);
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

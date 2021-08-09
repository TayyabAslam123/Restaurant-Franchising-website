<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Download;
use Session;
use Exception;
class DownloadController extends Controller
{
    private $redirect_url='admin/downloads';
    private $model='Download';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='DOWNLOADS';
        $headings= ["title"=>"Tile","description"=>"Description",
        "created_at"=>"Created At","updated_at"=>"Updated At","file"=>"File"];

        $url="downloads";
        
        $values=Download::paginate(10);
        $data = [
            ['name'=>'Title', "type"=>"text", "attrib"=>'required="required" name="title" maxlength="100"'],
            ['name'=>'Description', "type"=>"text", "attrib"=>'required="required" name="description" maxlength="1000"'],
            ['name'=>'Image', "type"=>"file", "attrib"=>'required="required" name="file" '],
      
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
        try{
            if($request->hasFile('file')){
                
                $filenameWithExt=$request->file('file')->getClientOriginalName();
                $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extension=$request->file('file')->getClientOriginalExtension();
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                $path=$request->file('file')->storeAs('public/downloads',$fileNameToStore);
                
            }
                
                else{$fileNameToStore='nofile.jpg';}


            $var = new Download();
            $var->title = $request->title;
            $var->description = $request->description;
            $var->file=$fileNameToStore;
     

            $var->save();
            Session::flash('message', 'ADDED SUCCESSFULLY');
            Session::flash('alert-class', 'alert-success'); 
            return redirect($this->redirect_url);
       }
       catch(Exception $e){
                Session::flash('message', $e->getMessage());
                Session::flash('alert-class', 'alert-danger'); 
                return redirect($this->redirect_url);
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
        try{
            Download::findOrFail($id)->delete();
            Session::flash('message', 'DELETED SUCCESSFULLY');
            Session::flash('alert-class', 'alert-success'); 
            return redirect($this->redirect_url);
        }
            catch(Exception $e)
              {
                
                Session::flash('message', $e->getMessage());
                Session::flash('alert-class', 'alert-danger'); 
                return redirect($this->redirect_url);
              }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use Session;
use Exception;

class CareersController extends Controller
{
    private $redirect_url = 'admin/careers';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'CAREERS';
        $headings = ["title" => "Tile","description" => "Description",
        "created_at" => "Created At","updated_at" => "Updated At"];

        $url = "careers";

        $values = Career::all();
        $data = [
            ['name' => 'Title', "type" => "text", "attrib" => 'required="required" name="title" maxlength="100"'],
            ['name' => 'Description', "type" => "text", "attrib" => 'required="required" name="description" maxlength="1000"'] ];



        return view('adminPanel.index', compact('title', 'headings', 'values', 'url', 'data'));
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
        try {
            $var = new Career();
            $var->title = $request->title;
            $var->description = $request->description;



            $var->save();
            Session::flash('message', 'ADDED SUCCESSFULLY');
            Session::flash('alert - class', 'alert - success');
            return redirect($this->redirect_url);
        } catch (Exception $e) {
               Session::flash('message', $e->getMessage());
               Session::flash('alert - class', 'alert - danger');
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
        $orient = Career::whereId($id)->first();

        $data = [
            ['name' => 'Title','naming' => 'title', "type" => "text", "attrib" => 'required="required" name="title" maxlength="100"'],
            ['name' => 'Description','naming' => 'title', "type" => "text", "attrib" => 'required="required" name="description" maxlength="1000"'] ];

        $title = 'CAREERS';
        $url = url('admin/careers');
        $method = "POST";

        return view('adminPanel.edit', compact('title', 'data', 'url', 'method', 'orient'));
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
        try {
            $var = Career::findOrFail($id);
            $var->title = $request->title;
            $var->description = $request->description;
            $var->save();
            Session::flash('message', 'UPDATED SUCCESSFULLY');
            Session::flash('alert-class', 'alert-success');
            return redirect($this->redirect_url);
        } catch (Exception $e) {
            Session::flash('message', $e->getMessage());
            Session::flash('alert-class', 'alert-danger');

            return redirect($this->redirect_url);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Career::findOrFail($id)->delete();
            Session::flash('message', 'DELETED SUCCESSFULLY');
            Session::flash('alert - class', 'alert - success');
            return redirect($this->redirect_url);
        } catch (Exception $e) {
            Session::flash('message', $e->getMessage());
            Session::flash('alert - class', 'alert - danger');
            return redirect($this->redirect_url);
        }
    }
}

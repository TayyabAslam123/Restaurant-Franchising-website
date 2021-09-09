<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;
use Session;
use Exception;

class DownloadController extends Controller
{
    private $redirect_url = 'admin/downloads';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $title = 'DOWNLOADS';
        $headings = ["title" => "Tile","description" => "Description",
        "created_at" => "Created At","updated_at" => "Updated At","file" => "File"];

        $url = "downloads";

        $values = Download::all();
        $data = [
            ['name' => 'Title', "type" => "text", "attrib" => 'required="required" name="title" maxlength="100"'],
            ['name' => 'Description', "type" => "text", "attrib" => 'required="required" name="description" maxlength="1000"'],
            ['name' => 'Image', "type" => "file", "attrib" => 'required="required" name="file" '],

        ];



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
            if ($request->hasFile('file')) {
                $filenameWithExt = $request->file('file')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('file')->storeAs('public/downloads', $fileNameToStore);
            } else {
                $fileNameToStore = 'nofile.jpg';
            }


            $var = new Download();
            $var->title = $request->title;
            $var->description = $request->description;
            $var->file = $fileNameToStore;


            $var->save();
            Session::flash('message', 'ADDED SUCCESSFULLY');
            Session::flash('alert-class', 'alert-success');
            return redirect($this->redirect_url);
        } catch (Exception $e) {
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
        $orient = Download::whereId($id)->first();

        $data = [
            ['name' => 'Title',"naming" => "title","type" => "text", "attrib" => 'required="required" name="title" maxlength="100"'],
            ['name' => 'Description', "naming" => "description","type" => "text", "attrib" => 'required="required" name="description" maxlength="1000"'],
            ['name' => 'File (Attach file only if you want to update)',"naming" => "file", "type" => "file", "attrib" => ' name="file" '],

        ];


        $title = 'FRANCHISES';
        $url = url('admin/downloads');
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
          ## If we have file we will place it storage folder and save its name in data base
            if ($request->hasFile('file')) {
                $filenameWithExt = $request->file('file')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('file')->storeAs('public/downloads', $fileNameToStore);
                ##delete previous one
                $data = Download::where('id', $id)->first();
                if (\File::exists(public_path('storage/downloads/' . $data->file))) {
                    \File::delete(public_path('storage/downloads/' . $data->file));
                }
            }

            $var = Download::findOrFail($id);
            $var->title = $request->title;
            $var->description = $request->description;
            if ($request->hasFile('file')) {
                $var->file = $fileNameToStore;
            }
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
            $data = Download::findOrFail($id);
            if (\File::exists(public_path('storage/downloads/' . $data->file))) {
                \File::delete(public_path('storage/downloads/' . $data->file));
            }
            $data->delete();
            Session::flash('message', 'DELETED SUCCESSFULLY');
            Session::flash('alert-class', 'alert-success');
            return redirect($this->redirect_url);
        } catch (Exception $e) {
            Session::flash('message', $e->getMessage());
            Session::flash('alert-class', 'alert-danger');
            return redirect($this->redirect_url);
        }
    }
}

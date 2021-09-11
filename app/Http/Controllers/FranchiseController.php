<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;
use Session;
use Exception;

class FranchiseController extends Controller
{
    private $redirect_url = 'admin/franchise';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'FRANCHISES';
        $headings = ["title" => "Tile","address" => "Address",
        "created_at" => "Created At","updated_at" => "Updated At","image" => "image"];

        $url = "franchise";

        $values = Franchise::orderby('id','DESC')->get();
        $data = [
            ['name' => 'Title', "type" => "text", "attrib" => 'required="required" name="title" maxlength="100"'],
            ['name' => 'Address', "type" => "text", "attrib" => 'required="required" name="address" maxlength="200"'],
            ['name' => 'Image', "type" => "file", "attrib" => 'required="required" name="img" '],

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
            if ($request->hasFile('img')) {
                $filenameWithExt = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('img')->storeAs('public/franchises', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimg.jpg';
            }


            $var = new Franchise();
            $var->title = $request->title;
            $var->address = $request->address;
            $var->image = $fileNameToStore;


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
        $orient = Franchise::whereId($id)->first();

        $data = [
            ['name' => 'Title', "naming" => "title","type" => "text", "attrib" => 'required="required" name="title" maxlength="100"'],
            ['name' => 'Address',"naming" => "address" ,"type" => "text", "attrib" => 'required="required" name="address" maxlength="100"'],
            ['name' => 'Image (Choose new only if you want to change)',"naming" => "image", "type" => "file", "attrib" => 'name="img" '],

        ];
        $title = 'FRANCHISES';
        $url = url('admin/franchise');
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
          ## If we have img we will place it storage folder and save its name in data base
            if ($request->hasFile('img')) {
                $filenameWithExt = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('img')->storeAs('public/franchises', $fileNameToStore);
                ##delete previous one
                $data = Franchise::where('id', $id)->first();
                if (\File::exists(public_path('storage/franchises/' . $data->image))) {
                    \File::delete(public_path('storage/franchises/' . $data->image));
                }
            }

            $var = Franchise::findOrFail($id);
            $var->title = $request->title;
            $var->address = $request->address;

            if ($request->hasFile('img')) {
                $var->image = $fileNameToStore;
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
            $data = Franchise::findOrFail($id);
            if (\File::exists(public_path('storage/franchises/' . $data->image))) {
                \File::delete(public_path('storage/franchises/' . $data->image));
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

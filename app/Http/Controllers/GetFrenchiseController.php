<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Getfrenchise;
use Session;
use Exception;

class GetFrenchiseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['store']);
    }
    private $redirect_url = 'admin/get-frenchise';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Get Frenchise Entries';
        $headings = ["created_at" => "Created At","updated_at" => "Updated At"];

        $url = "get-frenchise";

        $values = GetFrenchise::all();

        $add = $edit = $jsonparam = true;


        return view('adminPanel.index', compact('title', 'headings', 'values', 'url', 'add', 'edit', 'jsonparam'));
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

        foreach ($request->request as $key => $value) {
            if ($key == "_token") {
                continue;
            } else {
                $json[$key] = $value;
            }

        }

        $json = json_encode($json);

        $var = new Getfrenchise();
        $var->details_json = $json;
        $var->save();

        return response()->json(['code' => 200,'msg' => 'data saved successfully'], 200);
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
        try {
            GetFrenchise::findOrFail($id)->delete();
            Session::flash('message', 'DELETED SUCCESSFULLY');
            Session::flash('alert-class', 'alert-success');
            return redirect($this->redirect_url);
        } catch (Exception $e) {
            Session::flash('message', $e->getMessage());
            Session::flash('alert-class', 'alert-danger');
            return redirect($this->redirect_url);
        }
    }

      public function dashboard()
    {
        $extra = GetFrenchise::all();
        $extra = count($extra);
        return view('adminPanel.welcome', compact('extra'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Getfrenchise;
use Session;
use Exception;

class GetFrenchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Get Frenchise Entries';
        $headings = ["created_at" => "Created At","updated_at" => "Updated At"];

        $url = "faq";

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
                $json[$key] = $value;
        }

        $json = json_encode($json);

        $var = new Getfrenchise();
        $var->details_json = $json;
        $var->save();
        dd(11);
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
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;
use Session;
use Exception;

class FaqsController extends Controller
{
    private $redirect_url = 'admin/faq';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Order Now Entries';
        $headings = ["type" => "Type", "created_at" => "Created At","updated_at" => "Updated At"];

        $url = "faq";

        $values = Faq::all();

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
            if ($key == "_token" || $key == "type") {
                continue;
            } else {
                $json[$key] = $value;
            }
        }//end loop
        $json = json_encode($json);

        $var = new Faq();
        $var->type = $request->type;
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
            Faq::findOrFail($id)->delete();
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

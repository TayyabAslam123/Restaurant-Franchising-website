<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        $var = new Contact();
        $var->name = $request->name;
        $var->email = $request->email;
        $var->msg = $request->message;
        $var->save();
        return response()->json(['code' => 200,'msg' => 'data saved successfully'], 200);
    }



    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Session;
use Exception;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['store']);
    }
    private $redirect_url = 'admin/contact';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Contact Us Entries';
        $headings = ["name" => "Name","email" => "Email","msg" => "Message",
        "created_at" => "Created At","updated_at" => "Updated At"];

        $url = "contact";

        $values = Contact::all();
        $add = $edit  = true;


        return view('adminPanel.index', compact('title', 'headings', 'values', 'url', 'add', 'edit'));
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
        try {
            Contact::findOrFail($id)->delete();
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

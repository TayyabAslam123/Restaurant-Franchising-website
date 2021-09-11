<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use Session;
use Exception;

class ApplicantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['store']);
    }
    private $redirect_url = 'admin/applicants';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $title = 'Applicants';
        $headings = ["name" => "Name","email" => "Email","phone" => "Phone", "resume" => "Resume",
        "created_at" => "Created At","updated_at" => "Updated At"];

        $url = "applicants";

        $values = Applicant::where('carrer_id',$request->job_id)->orderby('id','DESC')->get();
        $add = $edit  = true;


        return view('adminPanel.index', compact('title', 'headings', 'values', 'url', 'add', 'edit'));
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
        if ($request->hasFile('resume')) {
            $filenameWithExt = $request->file('resume')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('resume')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('resume')->storeAs('public/applicants', $fileNameToStore);
        } else {
            $fileNameToStore = 'nofile.jpg';
        }
       

        $var = new Applicant();
        $var->name = $request->name;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->resume = $fileNameToStore;
        $var->carrer_id = $request->career_id;
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
            Applicant::findOrFail($id)->delete();
            $data =Applicant::findOrFail($id);
            if (\File::exists(public_path('storage/applicants/' . $data->resume))) {
                \File::delete(public_path('storage/applicants/' . $data->resume));
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

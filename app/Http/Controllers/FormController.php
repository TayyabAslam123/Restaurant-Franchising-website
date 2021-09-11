<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;
use Session;
use Exception;

class FormController extends Controller
{
    private $redirect_url = 'admin/feedback-form';

    public function showform(){
        return view('adminPanel.feeback_form');
    }

    public function addform(Request $request){
        Form::truncate();
        //       
        $arr1=$request->label;
        $arr2=$request->question;
        $arr3 = array_combine($arr1, $arr2);
        //
        $json = json_encode($arr3);
        $var = new Form();
        $var->form_data = $json;
        $var->save(); 
        //
        Session::flash('message', 'FORM UPDATED SUCCESSFULLY');
        Session::flash('alert-class', 'alert-success');
        return redirect($this->redirect_url);

    } 
}

<?php

function adminMenu()
{

    $data = [ "FRANCHISES" => "admin/franchise",
            "CAREERS" => "admin/careers",
            "DOWNLOADS" => "admin/downloads",
            "NEWS" => "admin/news",
         
            "Contact Entries " => "admin/contact",
            "Order Now Entries" => "admin/order",
            "Suggestions Entries" => "admin/faq?type=suggestion",
            "Feedback Entries" => "admin/faq?type=feedback",
            "Get Frenchise Entrise" => "admin/get-frenchise",];

            return $data;
}
//date formet
function date_frmt($date)
{

    return date('d M Y', strtotime($date));
}

//is selected
function is_selected($opt, $val)
{
    if (is_array($opt)) {
        if (in_array($val, $opt)) {
            return 'selected="selected"';
        }
    } elseif ($opt == $val) {
        return 'selected="selected"';
    }
    return '';
}

function is_checked($opt, $val)
{
    if (is_array($opt)) {
        if (in_array($val, $opt)) {
            return 'checked="checked"';
        }
    } elseif ($opt == $val) {
        return 'checked="checked"';
    }
    return '';
}

//to check top menu styling
function top_menu($data)
{

    if ($data == "/" || "about-us" || "seller-faq" || "buyer-faq") {
        return true;
    } else {
        return false;
    }
}


//get all frenchises

function getFrenchises()
{
    $data = App\Franchise::all();
    return $data;
}

//get all downloads

function getDownloads()
{
    $data = App\Download::all();
    return $data;
}


//get all downloads

function getcareers()
{
    $data = App\Career::orderBy('id', 'DESC')->get();
    return $data;
}

//get all news

function getnews()
{
    $data = App\Newsfeed::orderBy('id', 'DESC')->paginate(3);
    return $data;
}

function shownews()
{
    $data = App\Newsfeed::orderBy('id', 'DESC')->take(3)->get();
    return $data;
}


function extra()
{
    $data = App\GetFrenchise::all();
    $data = count($data);
    return $data;
}

function formdata()
{
    $data = App\Form::where('id',1)->first();
    return $data->form_data;
}

<?php

function adminMenu()
{

    $data = [ "FRANCHISES" => "admin/franchise",
            "CAREERS" => "admin/careers",
            "DOWNLOADS" => "admin/downloads",
            "NEWS" => "admin/news",
            "___________" => "",
            "Contact Entries " => "admin/contactus",
            "Order Now Entries" => "admin/orders",
            "Faqs Entries" => "admin/faqs",
            "Get Frenchise Entrise" => "admin/faqs",];

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

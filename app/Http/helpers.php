<?php

function adminMenu(){

	$data=[ "FRANCHISES"=>"admin/franchise",
	        "ORDERS"=>"admin/orders",
			"FAQS"=>"admin/faqs",
	        "CAREERS"=>"admin/careers",
			"DOWNLOADS"=>"admin/downloads",
	        "NEWS"=>"admin/news"];

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
	if (is_array($opt))
	{
		if (in_array($val, $opt))
		{
			return 'selected="selected"';
		}
	}else if ($opt == $val)
	{
		return 'selected="selected"';
	}
	return '';
}

function is_checked($opt, $val)
{
	if (is_array($opt))
	{
		if (in_array($val, $opt))
		{
			return 'checked="checked"';
		}
	}else if ($opt == $val)
	{
		return 'checked="checked"';
	}
	return '';
}

//to check top menu styling
function top_menu($data){

	if($data=="/" || "about-us" || "seller-faq" || "buyer-faq"){
		return true;
	}

	else{
		return false;
	}

}



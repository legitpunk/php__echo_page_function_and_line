<?php

Function Wse2($var)
{
	
	$var = str_replace("&nbsp;", "###", $var);
	$var = preg_replace('/\s+/', '&nbsp;', $var);
	$var = preg_replace(
    "/(\t|\n|\v|\f|\r| |\xC2\x85|\xc2\xa0|\xe1\xa0\x8e|\xe2\x80[\x80-\x8D]|\xe2\x80\xa8|\xe2\x80\xa9|\xe2\x80\xaF|\xe2\x81\x9f|\xe2\x81\xa0|\xe3\x80\x80|\xef\xbb\xbf)+/",
    "_",
    $var);
	$var = str_replace('&nbsp;', ' ', $var);
	$var = str_replace("&fgh^", "\r\n", $var);
	//$var = str_replace('"', '\"', $var);
	//$var = str_replace('(\"', '("', $var);
	//$var = str_replace("(\\'", "('", $var);
	//$var = str_replace("\\');", "');", $var);
	// added \'s
	$var = str_replace("%u200B", "", $var);
	$var = str_replace("###", "&nbsp;", $var);
	
	return $var;
	
}
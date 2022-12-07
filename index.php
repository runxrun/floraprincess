<?php
session_start();
$pathhost = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"];
$pathData = $_SERVER["REQUEST_URI"];
$segment = isset($pathData) ? explode('/',preg_replace('~^/?(.*?)/?$~','$1',$pathData)) : array();
if(strlen($segment[0])=="2")
{
	empty($segment[1])?$check_segment="":$check_segment=strtoupper($segment[1]);
	$language = "/".$segment[0];
}
else
{
	empty($segment[0])?$check_segment="":$check_segment=strtoupper($segment[0]);
	$language = "";
}
require_once("application/views/template/template.php");
// require_once("application/views/template_2022/template.php");

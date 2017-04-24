<?php
if(isset($_GET['name'])){
	$name=ucwords($_GET['name']);
   isset($_GET['r'])?$r=$_GET['r']:$r="";
   isset($_GET['from'])?$from=$_GET['from']:$from="Bappy";
   isset($_GET['t'])?$t=$_GET['t']:$t="";
$url="http://www.bappy.cf/hbd/index.php?name=".$name.'&'."r=".
$r.'&'."from=".$from."&t=".$t;

$url=str_replace(" ",'+',$url);
$fburl=urlencode($url);
$iurl=str_replace("index","image",$url);
$tiurl=str_replace("www.bappy.cf","localhost:8080",$iurl);
include("view.php");

}else{
$view=<<<HEREDOC
<div>
	<a href="../">Go to Bappy's Blog</a>
</div>
HEREDOC;
echo $view;
	}
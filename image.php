<?php
/*
Birthday wish generating app
@author:Ohidur Rahman Bappy
@date:29-Nov-2016
@web:http://www.bappy.cf/
@email:bappyrahsan[at]gmail.com
*/
//name of the recipients
$name=$_GET['name']; 
//relation with the recipients
$r=($_GET['r']);
$from=$_GET['from'];
$t=$_GET['t'];


//putenv('GDFONTPATH=' . realpath('.'));


//the background template path
$imagepath="hbd$t.png";
$hbd_template=imagecreatefrompng($imagepath);

$font_si=72;
$angle =0; 
/*keeping the text at center
(total_placeable_string/2-number_of_string/2)*width/totalplaceable_string

*/
$x=(10-strlen($name)/2)*1020/20;

$y=240;
$font=__DIR__ . "/beautifuleverytime_bold.ttf";
$color = imagecolorallocate($hbd_template, 250, 0, 0);
//printing the recipients name
ImageTTFText($hbd_template, $font_si, 0, $x, $y, $color, $font, $name);



//Showing the relation
$font_si=40;
$angle =0; 
$x=512;
$y=300;
$font=__DIR__ . "/roboto.ttf";
$color = imagecolorallocate($hbd_template, 250, 0, 0);
ImageTTFText($hbd_template, $font_si, $angle, $x, $y, $color, $font, $r);



//printing the sender
$font_si=40;
$angle =0; 
$x=700;
$y=520;
$font=__DIR__ . "/telenor.ttf";
$color = imagecolorallocate($hbd_template, 0,0,0);
ImageTTFText($hbd_template, $font_si, $angle, $x, $y, $color, $font, '@ '.$from);




//displaying the image

header('Content-type: image/png');
imagepng($hbd_template);
imagedestroy($hbd_template);
















?>

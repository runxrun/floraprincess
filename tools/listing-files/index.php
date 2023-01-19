<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Listing image files</title>
</head>
<body>

<?php
$dir    = '../../application/images/products/2022/prepare';
$files1 = scandir($dir);

print_r($files1 );
/*
$sql = "INSERT INTO imgnews (Seq, CodeNews, ImgName, Ext, AltImg, TitleImg, imgwidth, imgheight, Flag) VALUES "; 

$seq = 26;

foreach ($files1 as $key => $value)
{

	if(($value!='.') && ($value!='..'))
	{
		
		$seq++;
		$imagename = substr($value,0,-4);
		$sql .= "
				('".$seq."','2205452549','".$imagename."','jpg','International Trade show ATM in Dubai 2022','International Trade show ATM in Dubai 2022','1000', '635', 'Y'),";
		//echo $value.'<br>';


	}
}

echo $sql;

*/
/*

function rename


foreach ($files1 as $key => $value)
{
//echo $value;	
if(($value!='.') && ($value!='..'))
{
	//echo $value.'<br>';
	
	$value_replace_name = str_replace(' ','_',$value);
	$value_name = str_replace(',','',$value_replace_name);

	rename('images/'.$value, 'images/'.$value_name);


	//rename('test/LINE_ALBUM_3rd Day ATM 11052022_220511_19.jpg', 'test/LINE_ALBUM_3rd_Day_ATM_11052022_220511_19.jpg');

}
}

*/

?>


</body>
</html>
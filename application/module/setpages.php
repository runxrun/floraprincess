<?php
switch (strtoupper($segment[0])) 
{
	case '':
		$title = 'ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$page_file = 'home_page.php';
		break;
	case 'FLOWERS':
		$page_segment = $segment[1];
		switch (strtolower($page_segment)) 
		{
			case 'bouquet': $title = 'ช่อดอกไม้ - ร้านดอกไม้ฟลอร่า ปริ๊นเซส'; break;
			case 'flower-basket': $title = 'กระเช้าดอกไม้ - ร้านดอกไม้ฟลอร่า ปริ๊นเซส'; break;
			case 'flower-box': $title = 'กล่องดอกไม้ - ร้านดอกไม้ฟลอร่า ปริ๊นเซส'; break;
			case 'decoration': $title = 'Decoration - ร้านดอกไม้ฟลอร่า ปริ๊นเซส'; break;
			case 'teddy-bear': $title = 'Teddy Bear - ร้านดอกไม้ฟลอร่า ปริ๊นเซส'; break;
			case 'fruit-basket': $title = 'กระเช้าผลไม้ - ร้านดอกไม้ฟลอร่า ปริ๊นเซส'; break;
			default: $title = 'ร้านดอกไม้ฟลอร่า ปริ๊นเซส';	 break;
		}
		$page_file = 'flowers_page.php';
		$light_gallery = '
			<link rel="stylesheet" href="/application/scripts/light-gallery/package/dist/css/lightgallery.css">
			<script src="/application/scripts/light-gallery/package/dist/js/lightgallery.min.js"></script>
		';
		break;
	case 'FLOWER':
		$page_file = 'flower_page_2022.php';
		break;
	case 'VALENTINE-PROMOTION':
		$title = 'Valentine Promotion - ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$page_file = 'valentinepromotion_page.php';
		$light_gallery = '
			<link rel="stylesheet" href="/application/scripts/light-gallery/package/dist/css/lightgallery.css">
			<script src="/application/scripts/light-gallery/package/dist/js/lightgallery.min.js"></script>
		';
		break;	
	default:
		$page_file = '404_page.php';
		break;
}
?>


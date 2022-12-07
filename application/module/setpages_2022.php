<?php 


switch (strtoupper($segment[0])) 
{

	case '':
		$title = 'ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$page_file = 'home_page_2022.php';
		$this_css = '
			<link rel="stylesheet" href="/b2b/responsive/scripts/lightgallery-master/dist/css/lightgallery.css">
		';
		$this_script = '
			<script type="text/javascript" src="/b2b/responsive/scripts/lightgallery-master/dist/js/lightgallery-all.min.js"></script>
			<script type="text/javascript" src="/b2b/responsive/scripts/lightgallery-master/lib/jquery.mousewheel.min.js"></script>
		';
		$endpage_script = '
			<script type="text/javascript">
			$(document).ready(function() {
			    $("#lightgallery").lightGallery();
			});
			</script>
		';

		break;

	case 'FLOWER':
		$page_file = 'flower_page_2022.php';
		break;

	case 'VALENTINE-PROMOTION':
		$title = 'Valentine Promotion - ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$page_file = 'valentinepromotion_page.php';
		$this_css = '
			<link rel="stylesheet" href="/b2b/responsive/scripts/lightgallery-master/dist/css/lightgallery.css">
		';
		$this_script = '
			<script type="text/javascript" src="/b2b/responsive/scripts/lightgallery-master/dist/js/lightgallery-all.min.js"></script>
			<script type="text/javascript" src="/b2b/responsive/scripts/lightgallery-master/lib/jquery.mousewheel.min.js"></script>
		';
		$endpage_script = '
			<script type="text/javascript">
			$(document).ready(function() {
			    $("#lightgallery").lightGallery();
			});
			</script>
		';
		break;


	
	default:
		$page_file = '404_page.php';
		break;
}


?>
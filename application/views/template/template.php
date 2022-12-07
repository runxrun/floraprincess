<?php 
include_once(__dir__.'/../../module/module.php'); 
include_once(__dir__.'/../../module/setpages.php'); 
?>
<!DOCTYPE html>
<html lang="en"
><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?></title>
<meta name="description" content="ร้านดอกไม้ฟลอร่าปริ๊นเซส ยินดีบริการจัดดอกไม้เพื่อคนที่คุณรัก">
<meta name="keywords" content="จัดดอกไม้, ช่อดอกไม้, กระเช้า, ร้านดอกไม้, ฟลอร่า ปริ๊นเซส">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="/application/scss/customize.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S286GPEPX5"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-S286GPEPX5');
</script>
<?php echo ltrim($light_gallery); ?>
</head>
<body>
<?php
include_once('application/views/template/header.php');
include_once('application/views/pages/'.$page_file);
include_once('application/views/template/footer.php'); 
?>
</body>
</html>

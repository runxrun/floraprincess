<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Light Gallery</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/tools/light-gallery/package/dist/css/lightgallery.css">
<script src="/tools/light-gallery/package/dist/js/lightgallery.min.js"></script>
</head>
<body>


<?php 
$imgall = array(
	array('img' => 'https://i.pinimg.com/564x/97/80/be/9780bebf9207740b85ca2abf92ebf72c.jpg'),
	array('img' => 'https://i.pinimg.com/736x/3e/41/b8/3e41b86448e4f4c48b6e5f3c79227bca.jpg'),
	array('img' => 'https://i.pinimg.com/564x/92/e5/66/92e566e772278f90ae376a8592a50966.jpg'),
	array('img' => 'https://i.pinimg.com/564x/92/57/86/925786399e16c17b51bed01959097a8d.jpg'),
	array('img' => 'https://i.pinimg.com/564x/e7/8f/6b/e78f6b0599b6f9bc94263972b5c2c009.jpg'),
	array('img' => 'https://i.pinimg.com/564x/e1/52/30/e152305a093d3a3aca8758aafffb6892.jpg'),
);
?>
<div class="container py-4">
	<div class="row g-2" id="gallery-hash-demo">
		<?php
		foreach ($imgall as $key => $value)
		{
		?>
			<a 
				href="<?php echo $value['img']; ?>"
				class="col-2">
				<div 
					class="d-flex bg-light overflow-hidden rounded-1 h-100"
					style="
						background-image: url('<?php echo $value['img']; ?>');
						background-repeat: no-repeat;
						background-position: center;
						background-size: cover;
					">
					<img src="<?php echo $value['img']; ?>" class="w-100 opacity-0">
				</div>
			</a>
		<?php
		}
		?>
	</div>
</div>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
<script>
lightGallery(document.getElementById('gallery-hash-demo'));
</script>

</body>
</html>
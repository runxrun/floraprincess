
<?php 
switch (strtolower($page_segment)) 
{
	case 'bouquet':
		$title = 'ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$flower_title = 'ช่อดอกไม้';
		$flower_array = 0;
		break;
	case 'flower-basket':
		$title = 'ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$flower_title = 'กระเช้าดอกไม้';
		$flower_array = 1;
		break;
	case 'flower-box':
		$title = 'ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$flower_title = 'กล่องดอกไม้';
		$flower_array = 2;
		break;
	case 'decoration':
		$title = 'ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$flower_title = 'Decoration';
		$flower_array = 3;
		break;
	case 'teddy-bear':
		$title = 'ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$flower_title = 'Teddy Bear';
		$flower_array = 4;
		break;
	case 'fruit-basket':
		$title = 'ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$flower_title = 'กระเช้าผลไม้';
		$flower_array = 5;
		break;
	default:
		$title = 'ร้านดอกไม้ฟลอร่า ปริ๊นเซส';
		$flower_title = 'ไม่พบข้อมูล';
		$flower_array = 99;
	break;
}

include_once('array-flower-lists.php'); 


if($flower_array=='99')
{
?>
<div class="container">
	<div class="py-5">
		<div class="fs-1 text-title text-primary text-center">
			<?php echo $flower_title; ?>
		</div>
		<div class="fs-5 text-secondary text-center">
			ไม่พบหน้า (<?php echo $page_segment; ?>) บน website ของเรา
		</div>
		<div class="py-4 text-center">
			<a href="/" class="fs-5 text-primary">กลับหน้าแรก</a>
		</div>
	</div>
</div>
<?php
}
else
{
?>

	<div class="bg-primary">
		<div class="container">
			<div class="d-block d-md-none py-3">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto">
						<div class="d-flex">
							<div class="pe-2 fs-6 fw-bold text-white">
								<i class="fas fa-spa"></i>
							</div>
							<div class="fs-6 fw-bold text-white">
								<?php echo $flower_title; ?>
							</div>
						</div>
					</div>
					<div class="col-auto">								
						<button
							class="btn text-white py-0 fs-5 border-0 shadow-none"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#collapseExample"
							aria-expanded="false"
							aria-controls="collapseExample">
							<i class="fas fa-caret-down"></i>
						</button>
					</div>
				</div>


				<div class="collapse" id="collapseExample">
					<div class="mt-2" style="border-top: 1px solid rgba(255, 255, 255, 0.2);">
						<div class="row pt-2">
							<?php 
							foreach ($flower_gellery as $key => $value)
							{
							?>
								<div class="py-1 col-6">
									<a
										href="<?php echo $value['link']; ?>"
										class="d-flex align-items-center text-decoration-none">
										<div class="px-2 fs-9 text-white-50"><i class="fas fa-chevron-right"></i></div>
										<div class="ps-1 fs-7 text-white "><?php echo $value['title']; ?></div>										
									</a>
								</div>
							<?php 
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="d-none d-md-block py-3">
				<div class="row justify-content-center align-items-center gy-2 gx-4">
					<?php 
					foreach ($flower_gellery as $key => $value)
					{
					?>
					<div class="col-auto">
						<a
							href="<?php echo $value['link']; ?>"
							class="text-white text-decoration-none">
							<?php echo $value['title']; ?>
						</a>
					</div>
					<?php 
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="d-none d-md-block py-4">
			<div class="pt-4 text-center fs-2 fw-bold text-title text-primary">
				<?php echo $flower_title; ?>
			</div>
		</div>
		<div class="py-4">
			<div class="row g-3" id="gallery-image">
				<?php
				foreach (array_slice($flower_gellery, $flower_array, 1) as $key => $value)
				{
					foreach ($value["list"] as $key2 => $item)
					{
					?>
					<a
						href="<?php echo $path_update.$item['image']; ?>"
						class="col-6 col-md-4 col-lg-3">
						<div 
							class="d-flex bg-light overflow-hidden rounded-1 h-100"
							style="
								background-image: url('<?php echo $path_update.$item['image']; ?>');
								background-repeat: no-repeat;
								background-position: center;
								background-size: cover;
							">
							<img src="/application/images/image-ratio-3-4.gif" class="opacity-0 w-100">
						</div>
					</a>
					<?php 
					}
				}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
	<script type="text/javascript">
		lightGallery(document.getElementById('gallery-image'));
	</script>
<?php 
}
?>

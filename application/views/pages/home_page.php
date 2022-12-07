

<div
	class="position-relative"
	style="
		background-image: url('/application/images/banners/banner_2022.jpg');
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	">
	<div class="bg-screen"></div>
	<div class="container position-relative">
		<div class="d-none d-xl-flex">
			<img src="/application/images/image-ratio-21-9.gif" class="w-100">
		</div>
		<div class="d-none d-md-flex d-xl-none">
			<img src="/application/images/image-ratio-16-9.gif" class="w-100">
		</div>
		<div class="d-flex d-md-none">
			<img src="/application/images/image-ratio-4-3.gif" class="w-100">
		</div>
		<div class="position-absolute top-0 start-0 w-100 h-100">
			<div class="d-flex justify-content-center align-items-center h-100">				
				<div class="col-8 text-center">
					<div class="py-2 h1 text-title text-primary fw-bold">ของขวัญสำหรับในทุกๆ วันพิเศษ</div>
					<div class="py-2 fs-4 text-title text-primary">ร้านดอกไม้ฟลอร่า ปริ๊นเซส ยินดีบริการจัดดอกไม้ เพื่อคนที่คุณรัก</div>
					<div class="d-none">ราคาสุดพิเศษ Click เลย</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container py-5">
    <div class="d-flex justify-content-center">
    	<div class="col-12 col-lg-8 text-center">
		    <div class="pb-2 fs-1 text-title text-primary">
		    	ร้านดอกไม้ฟลอร่าปริ๊นเซส
			</div>
		    <div class="pb-2 fs-6 text-secondary">
				ร้านดอกไม้ฟลอร่า ปริ๊นเซส
				ยินดีบริการจัดส่งดอกไม้เพื่อคนที่คุณรัก
				เพราะดอกไม้คือสัญลักษณ์แสดงถึงความรักเราจึง
				ขอมอบบริการสุดพิเศษให้คุณได้ส่งความรักให้คนสำคัญ
				ด้วยช่อดอกไม้กระเช้าหรือแจกันสวยๆที่เราคัดสรร
				ดอกไม้คุณภาพดีมาเพื่อคุณ
			</div>
		</div>
	</div>
</div>

<?php include_once('array-flower-lists.php'); ?>

<div class="container pb-5">
	<?php
	foreach ($flower_gellery as $key => $value)
	{
	?>
		<div class="row justify-content-between align-items-center">
			<div class="pb-3 col-auto">
				<div class="text-title fs-4 text-primary">
					<?php echo $value['title']; ?>
				</div>	
			</div>
			<div class="pb-3 col-auto">
				<div>
					<a href="<?php echo '/flowers/'.$value['link']; ?>">
						แบบดอกไม้เพิ่มเติม
					</a>
				</div>
			</div>
		</div>
		<div class="pb-5">
			<div class="row g-3">
				<?php 
				foreach (array_slice($value['list'],0 ,6) as $key2 => $item)
				{
				?>
				<div class="col-6 col-md-4 col-lg-3 col-xl-2">
					<a
						href="<?php echo '/flowers/'.$value['link']; ?>"
						class="d-flex bg-light overflow-hidden rounded-1"
						style="
							background-image: url('<?php echo $path_update.$item['image']; ?>');
							background-repeat: no-repeat;
							background-position: center;
							background-size: cover;
						">
						<div class="d-none d-md-flex">
							<img src="/application/images/image-ratio-3-4.gif" class="w-100">
						</div>
						<div class="d-flex d-md-none">
							<img src="/application/images/image-ratio-4-3.gif" class="w-100">
						</div>
					</a>			
				</div>
				<?php 
				}
				?>
			</div>
		</div>
	<?php
	}
	?>
</div>


















































<div class="d-none">





<div>
	<div>
	    <div>
	        <?php
	        foreach ($hotel_gellery as $key => $value)
	        {
	        ?>
	        	<div class="txt-title fs-1 txt-primary txt-center">
	        		<?php echo $value['title']; ?>
	        	</div>
				<div class="desc-gallery">
					<ul id="<?php echo 'lightgallery_'.$key; ?>">
						<?php 
						foreach ($value['list'] as $key2 => $item)
						{
						?>
						<li
							data-src="<?php echo $path_update.$item['image']; ?>"
							data-thumb="<?php echo $path_update.$item['image']; ?>">
							<span
								style="
									background-image: url('<?php echo $path_update.$item['image']; ?>');
									background-repeat: no-repeat;
									background-position: center;
									background-size: cover;
								">
								<img src="<?php echo $path_update.$item['image']; ?>">
							</span>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
	        <?php
	        }
	        ?>
	    </div>
	</div>
</div>










</div>
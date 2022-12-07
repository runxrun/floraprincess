
<div style="
padding: 100px 0px 0px 0px;
background: rgb(242,197,226);
background: linear-gradient(180deg, rgba(242,197,226,1) 0%, rgba(242,197,226,0) 100%);

">



	<div class="rn-wrap">
		<div class="idxtxt">
		    <h1>
		        <span>ร้านดอกไม้</span>
		        <span>ฟลอร่า</span>
		        <span>ปริ๊นเซส</span>
		    </h1>
		    <p>
		        <span>ร้านดอกไม้ฟลอร่า ปริ๊นเซส</span>
		        <span>ยินดีบริการจัดส่งดอกไม้</span>
		        <span>เพื่อคนที่คุณรัก</span>
		        <span>เพราะดอกไม้คือสัญลักษณ์</span>
		        <span>แสดงถึงความรัก</span>
		        <span>เราจึงขอมอบบริการสุดพิเศษ</span>
		        <span>ให้คุณได้ส่งความรัก</span>
		        <span>ให้คนสำคัญด้วยช่อดอกไม้</span>
		        <span>กระเช้า</span>
		        <span>หรือแจกันสวยๆ</span>
		        <span>ที่เราคัดสรรดอกไม้</span>
		        <span>คุณภาพดี</span>
		        <span>มาเพื่อคุณ</span>
		    </p>
		</div>
	</div>
</div>


<div class="rn-wrap">



	<div>
	    <div>
	        <?php
	        $path_update = '/application/images/products/2022/';
	        $hotel_gellery = array(
	        	array(
	        		"title" => "ช่อดอกไม้", //Bouquet
	        		"list" => array(
			            array('image' => '348095.jpg',),
			            array('image' => '348096.jpg',),
			            array('image' => '348097.jpg',),
			            array('image' => '348098.jpg',),
			            array('image' => '347900.jpg',),
			            array('image' => '258763.jpg',),
			            array('image' => '262960.jpg',),
			            array('image' => '262954.jpg',),
			            array('image' => '262957.jpg',),
			            array('image' => '260356.jpg',),
	        		),
	        	),
	        	array(
	        		"title" => "กระเช้าดอกไม้", //Flower Box
	        		"list" => array(
						array('image'=>'357455.jpg',),
						array('image'=>'360283.jpg',),
						array('image'=>'357306.jpg',),
						array('image'=>'357307.jpg',),
						array('image'=>'360286.jpg',),
						array('image'=>'360287.jpg',),
						array('image'=>'360288.jpg',),
	        		),
	        	),


	        	//Flower basket	        	
	        	/*
	        	array(
	        		"title" => "กระเช้าดอกไม้",
	        		"list" => array(
	        		),
	        	),
	        	*/

	        	
	        	array(
	        		"title" => "กระเช้าผลไม้", //Fruit basket
	        		"list" => array(
						array('image'=>'357993.jpg',),
						array('image'=>'358128.jpg',),
						array('image'=>'360280.jpg',),
						array('image'=>'360279.jpg',),
						array('image'=>'360278.jpg',),
	        		),
	        	),
	        );
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

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



	<div class="desc-gallery">
	    <ul id="lightgallery">
	        <?php

	        $path_update = '/application/images/products/';

	        $hotel_gellery = array(
	            array('image' => $path_update.'/2022/348095.jpg',),
	            array('image' => $path_update.'/2022/348096.jpg',),
	            array('image' => $path_update.'/2022/348097.jpg',),
	            array('image' => $path_update.'/2022/348098.jpg',),
	            array('image' => $path_update.'/2022/348099.jpg',),
	            array('image' => $path_update.'/2022/347900.jpg',),
	            array('image' => $path_update.'/2022/258763.jpg',),
	            array('image' => $path_update.'/2022/262960.jpg',),
	            array('image' => $path_update.'/2022/262954.jpg',),
	            array('image' => $path_update.'/2022/262957.jpg',),
	            array('image' => $path_update.'/2022/260356.jpg',),
				/*


	            array('image' => $path_update.'/2022/348094.jpg',),
	            array('image' => $path_update.'/2022/348110.jpg',),
	            array('image' => $path_update.'/2022/348108.jpg',),
	            array('image' => $path_update.'/2022/348107.jpg',),



	            array('image' => $path_update.'152156.jpg',),
	            array('image' => $path_update.'152157.jpg',),
	            array('image' => $path_update.'152158.jpg',),
	            array('image' => $path_update.'152159.jpg',),
	            array('image' => $path_update.'152160.jpg',),
	            array('image' => $path_update.'152161.jpg',),
	            array('image' => $path_update.'152162.jpg',),
	            array('image' => $path_update.'152163.jpg',),
	            array('image' => $path_update.'152164.jpg',),
	            array('image' => $path_update.'152165.jpg',),
	            */
	        );

	        foreach ($hotel_gellery as $key => $value)
	        {
	        ?>
	        <li
	            data-src="<?php echo $value['image']; ?>"
	            data-thumb="<?php echo $value['image']; ?>">
	            <span style="background-image: url('<?php echo $value['image']; ?>');">
	                <img src="<?php echo $value['image']; ?>">
	            </span>
	        </li>
	        <?php
	        }
	        ?>
	    </ul>
	</div>

</div>
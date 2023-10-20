
<div class="bg-white">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-auto">
				<a href="/" class="d-flex py-3">
					<img src="/application/images/flora-princess.png" alt="Flora Princess">
				</a>
			</div>
			<div class="col-auto d-block d-md-none">
				<div class="py-3">
					<button
						class="btn fs-6 text-secondary border-0 shadow-none"
						data-bs-toggle="offcanvas"
						data-bs-target="#offcanvasMenu"
						aria-controls="offcanvasMenu">
						<i class="fas fa-bars"></i>
					</button>
				</div>
			</div>
			<div class="col-auto d-none d-md-block">
				<div class="py-3">
					<div class="row">
						<div class="col-auto">
							<a
								href="https://www.facebook.com/FloraPrincessbkk/"
								class="d-flex text-decoration-none"
								style="color: #3e568f;"
								target="_blank">
								<div class="pe-2"><i class="fab fa-facebook-square"></i></div>
								<div class="ps-0">Facebook</div>
							</a>
						</div>
						<div class="col-auto">
							<a
								href="http://line.me/ti/p/~@floraprincess"
								class="d-flex text-decoration-none"
								style="color: #39ae41;"
								target="_blank">
								<div class="pe-2"><i class="fab fa-line"></i> </div>
								<div class="ps-0">@floraprincess</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div
	class="offcanvas offcanvas-end bg-primary"
	tabindex="-1"
	id="offcanvasMenu"
	aria-labelledby="offcanvasExampleLabel">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title fs-2 text-title text-white">
			Flora Princess
		</h5>
		<button
			type="button"
			class="btn text-white p-0 border-0 shadow-none"
			data-bs-dismiss="offcanvas">
			<i class="fas fa-times"></i>
		</button>
	</div>
	<div class="offcanvas-body" style="border-top: 1px solid rgba(255, 255, 255, 0.2);">
		<div>
			<div class="py-2">
				<a
					href="/"
					class="d-flex align-items-center text-white text-decoration-none">
					<div class="pe-2 fs-9"><i class="fas fa-chevron-right"></i></div>
					<div class="ps-1 fs-6">หน้าแรก</div>
				</a>
			</div>
			<?php
			$array_menu = array(
				array('link'=>'bouquet','title'=>'ช่อดอกไม้',),
				array('link'=>'flower-basket','title'=>'กระเช้าดอกไม้',),
				array('link'=>'flower-box','title'=>'กล่องดอกไม้',),
				array('link'=>'decoration','title'=>'Decoration',),
				array('link'=>'teddy-bear','title'=>'Teddy Bear',),
				array('link'=>'fruit-basket','title'=>'กระเช้าผลไม้',),
			);
			foreach ($array_menu as $keymenu => $menu)
			{
			?>
			<div class="py-2">
				<a
					href="<?php echo '/flowers/'.$menu['link'] ?>"
					class="d-flex align-items-center text-white text-decoration-none">
					<div class="pe-2 fs-9"><i class="fas fa-chevron-right"></i></div>
					<div class="ps-1 fs-6"><?php echo $menu['title'] ?></div>
				</a>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</div>

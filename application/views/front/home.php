<?php
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
	$tagline = '
	<div class="tagline visible-lg" id="tagline"><span>Need Lodge?</span>
	<ul>
	<li class="active">McLodge</li>
	<li>Ma Chung Lodge</li>
	</ul>
	</div>';
	$pesan = 'Order Now';
	$pencarian = '
	<h5 class="thumb-title"><a class="text-darken">Easy Room Search</a></h5>
	<p class="thumb-desc">No need to go there, Just a few click away</p>';
	$pelayanan = '
	<h5 class="thumb-title"><a class="text-darken">Trusted Service</a></h5>
	<p class="thumb-desc">We will provide the best service</p>';
	$transaksi = '
	<h5 class="thumb-title"><a class="text-darken" href="#">Quick Transaction</a></h5>
	<p class="thumb-desc">With Bank Transfer method, You can quickly book a room</p>';

}else{
	$tagline = '
	<div class="tagline visible-lg" id="tagline"><span>Cari Kos ?</span>
	<ul>
	<li class="active">McLodge</li>
	<li>di Ma Chung aja</li>
	</ul>
	</div>';
	$pesan = 'Pesan Sekarang';
	$pencarian = '
	<h5 class="thumb-title"><a class="text-darken">Pencarian Lebih Mudah</a></h5>
	<p class="thumb-desc">Tidak perlu pergi ke tempat, hanya dengan sekali klik saja</p>';
	$pelayanan = '
	<h5 class="thumb-title"><a class="text-darken">Pelayanan Terpercaya</a></h5>
	<p class="thumb-desc">Customer Service kami akan melayani anda dengan baik</p>';
	$transaksi = '
	<h5 class="thumb-title"><a class="text-darken" href="#">Transaksi Cepat</a></h5>
	<p class="thumb-desc">Dengan metode transfer, pesanan lebih mudah dibuat</p>';
}

?>

<!-- TOP AREA -->
<div class="top-area show-onload">
	<div class="bg-holder full">
		<div class="bg-front full-height bg-front-mob-rel">
			<div class="container full-height">
				<div class="rel full-height">
					<?php echo $tagline ?>
					<div style="text-align: center;   padding-top: 30%;padding-bottom: 30%;">
						<a href="search">
							<button  class="btn btn-primary btn-md" type="submit" style="padding-top:1%;
							padding-bottom:1%; min-width: 40%;   "><b style="font-size: 30px; "><?php echo $pesan ?></b></button>		
						</a>

					</div>
				</div>

			</div>
		</div>
		<div class="owl-carousel owl-slider owl-carousel-area visible-lg" id="owl-carousel-slider" data-nav="false">
			<div class="bg-holder full">
				<div class="bg-mask"></div>
				<div class="bg-img" style="background-image:url(<?php echo base_url(); ?>assets/images/kos1.jpg);"></div>
			</div>
			<div class="bg-holder full">
				<div class="bg-mask"></div>
				<div class="bg-img" style="background-image:url(<?php echo base_url(); ?>assets/images/kos2.jpg);"></div>
			</div>
			<div class="bg-holder full">
				<div class="bg-mask"></div>
				<div class="bg-img" style="background-image:url(<?php echo base_url(); ?>assets/images/kos3.jpg);"></div>
			</div>
		</div>
	</div>
</div>
<!-- END TOP AREA  -->

<div class="gap"></div>


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row row-wrap" data-gutter="120">
				<div class="col-md-4">
					<div class="thumb">
						<header class="thumb-header"><i class="fa fa-search box-icon-black round box-icon-big animate-icon-top-to-bottom"></i>
						</header>
						<div class="thumb-caption">
							<?php echo $pencarian ?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumb">
						<header class="thumb-header"><i class="fa fa-users box-icon-black round box-icon-big animate-icon-top-to-bottom"></i>
						</header>
						<div class="thumb-caption">
							<?php echo $pelayanan ?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumb">
						<header class="thumb-header"><i class="fa fa-money box-icon-black round box-icon-big animate-icon-top-to-bottom"></i>
						</header>
						<div class="thumb-caption">
							<?php echo $transaksi ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gap gap-small"></div>
</div>

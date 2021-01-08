@extends('layout/main')

@section('title', 'Beranda')
@section('active', 'active')

@section('container')
<section class="hero-wrap js-fullheight" style="background-image: url(images/bg-2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-12 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<span class="subheading">Selamat Datang Di Biya Salon</span>
		  			<h1 class="mb-4">Tampil cantik adalah hak semua wanita di dunia</h1>
		  			<p><a href="{{ url('/perawatan') }}" class="btn btn-primary btn-outline-primary px-4 py-2">Reservasi Sekarang</a></p>
			    </div>
            </div>
          </div>
        </div>
        </div>
</section>

        <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-md text-center d-flex align-items-stretch">
						<div class="services-wrap d-flex align-items-center img" style="background-image: url(images/rambut.jpg);">
							<div class="text">
								<h3>Pastikan Anda Merasakan Pelayanan Terbaik Kami</h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center d-flex align-items-stretch">
						<div class="text-about py-5 px-4">
							<h1 class="logo">
								<a href="{{ url('/') }}"></span>BIYA SALON</a>
							</h1>
							<h2>Selamat Datang di Salon Kami</h2>
							<p>Tampil cantik adalah hak semua wanita di dunia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores impedit, fugiat eius recusandae rem cum hic! Itaque, alias reprehenderit, repudiandae beatae vitae deleniti tempora reiciendis porro earum deserunt, aspernatur sint.</p>
						</div>
					</div>
					<div class="col-md text-center d-flex align-items-stretch">
						<div class="services-wrap d-flex align-items-center img" style="background-image: url(images/kepuasan.jpg);">
							<div class="text">
								<h3>Kepuasan Pelanggan Adalah Kesenangan Bagi Kami</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- testimoni -->
	<section class="testimony-section bg-light">
      <div class="container">
        <div class="row ftco-animate justify-content-center">
        	<div class="col-md-6 col-lg-5 d-flex">
        		<div class="testimony-img" style="background-image: url(images/testimoni.jpeg);"></div>
        	</div>
          <div class="col-md-6 col-lg-7 py-5 pl-md-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate">
	          		<span class="subheading">Testimoni</span>
			          <h2 class="mb-0">Testimoni Pelanggan</h2>
			        </div>
	            <div class="carousel-testimony owl-carousel ftco-animate">
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Karyawannya ramah, body spa nya juga enak. Bakal jadi langganan nih</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/stylist-1.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Uci Sulistiawati</p>
		                    <span class="position">Freelancer</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Pijatannya oke banget, apalagi make upnya, menurut saya make upnya bagus untuk harga segitu, terima kasih</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/stylist-2.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Dila Fitria</p>
		                    <span class="position">Pegawai Swasta</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Wajib banget buat coba paket perawatan tubuh tradisional, staffnya ramah semua. Disini pelanggan dimanjakan banget</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/stylist-3.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Siti Sumartini</p>
		                    <span class="position">Pewirausaha</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Paket Cantiknya bener bener cantik bangett, wajahku sekarang lebih segar dan bersih. Terima Kasih Banyak!</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/stylist-4.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Gina Mutia</p>
		                    <span class="position">Model</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Teman saya merekomendasikan tempat ini, awalnya saya ragu, tapi setelah saya mencoba Paket Cantik 2, saya puas banget</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/stylist-5.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Mia Anita</p>
		                    <span class="position">Pegawai Swasta</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	            </div>
	          </div>
          </div>
        </div>
      </div>
    </section>

@endsection

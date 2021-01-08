@extends('layout/main')

@section('title', 'Perawatan')

@section('active1', 'active')

@section('container')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/perawatan.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-0 bread">Perawatan</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Perawatan <i class="ion-ios-arrow-round-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="services-section ftco-section">
      <div class="container">
      	<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Perawatan</span>
            <h2 class="mb-4">Menu Perawatan</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
		</div>
		
		<div class="row no-gutters d-flex">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon"><img src="images/hair.png" height="100px" width="100px"></div>
              <div class="media-body">
                <h3 class="heading mb-3">Perawatan Rambut</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon"><img src="images/face.png" height="100px" width="100px"></div>
              <div class="media-body">
                <h3 class="heading mb-3">Perawatan Wajah</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon"><img src="images/body.png" height="100px" width="100px"></div>
              <div class="media-body">
                <h3 class="heading mb-3">Perawatan Tubuh</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon"><img src="images/makeup.png" height="100px" width="100px"></div>
              <div class="media-body">
                <h3 class="heading mb-3">Make Up</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>



	<!-- //Daftar Harga -->
	
	<section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Harga</span>
            <h2 class="mb-4">Daftar Harga Perawatan</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
					<img src="images/menu1.jpeg" width="100%">
        		</div>
			</div>
			<div class="col-md-4 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
					<img src="images/menu2.jpeg" width="100%">
        		</div>
			</div>
			
			<div class="col-md-4 ftco-animate">
        		<div class="pricing-entry active pb-5 text-center">
				<img src="images/menu3.jpeg" width="100%">
        		</div>
			</div>
			
			<section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center">
        	</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="pricing-entry pb-5 text-center">
						<img src="images/menu4.jpeg" width="100%">
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="pricing-entry pb-5 text-center">
						<img src="images/menu5.jpg" width="100%">
					</div>
				</div>
				
				<div class="col-md-4 ftco-animate">
					<div class="pricing-entry active pb-5 text-center">
					<img src="images/menu6.jpeg" width="100%">
					</div>
				</div>

		<section class="ftco-section ftco-booking bg-light">
    	<div class="container ftco-relative">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Reservasi</span>
            <h2 class="mb-4">Buat Jadwal Kedatangan</h2>
            <p>Pilih kategori/paket perawatan, lalu deskripsikan secara spesifik di form Pesan </p>
          </div>
        </div>
        <h3 class="vr">Hubungi Kami: 0896-4458-6597</h3>
    		<div class="row justify-content-center">
    			<div class="col-md-10 ftco-animate">
    				<form action="#" class="appointment-form" method="get">
             {{csrf_field()}} 
            <div class="row">
	              <div class="col-sm-6">
	                <div class="form-group">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="appointment_name" placeholder="Nama" name="nama">
                    @error('nama')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="appointment_email" placeholder="Email" name="email">
                    @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
                    <input type="text" class="form-control appointment_date @error('tanggal') is-invalid @enderror" placeholder="Tanggal" name="tanggal">
                    @error('tanggal')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
	                </div>    
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="jam" id="" class="form-control">
                      	<option value="09.00">09.00</option>
                        <option value="09.30">09.30</option>
                        <option value="10.00">10.00</option>
                        <option value="10.30">10.30</option>
                        <option value="11.00">11.00</option>
                        <option value="11.30">11.30</option>
                        <option value="12.00">12.00</option>
                        <option value="12.30">12.30</option>
                        <option value="13.00">13.00</option>
                        <option value="13.30">13.30</option>
                        <option value="14.00">14.00</option>
                        <option value="14.30">14.30</option>
                        <option value="15.00">15.00</option>
                        <option value="15.30">15.30</option>
                        <option value="16.00">16.00</option>
                        <option value="16.30">16.30</option>
                        <option value="17.00">17.00</option>
                        <option value="17.30">17.30</option>
                      </select>
                    </div>
	                </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
			              <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="kategori" id="kategori" class="form-control">
                      	<option value="Perawatan Rambut">Perawatan Rambut</option>
                        <option value="Perawatan Wajah">Perawatan Wajah</option>
                        <option value="Perawatan Tubuh">Perawatan Tubuh</option>
                        <option value="Pra Nikah 1">Pra Nikah 1</option>
                        <option value="Pra Nikah 2">Pra Nikah 2</option>
                        <option value="Paket Cantik 1">Paket Cantik 1</option>
                        <option value="Paket Cantik 2">Paket Cantik 2</option>
                        <option value="Paket Cantik 3">Paket Cantik 3</option>
                      </select>
                    </div>
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
                    <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="phone" placeholder="Nomor HP" name="nohp">
                    @error('nohp')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
	                </div>
	              </div>
	              <div class="col-md-12">
	              	<div class="form-group">
                    <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control @error('pesan') is-invalid @enderror" placeholder="Tulis Pesan"></textarea>
                    @error('pesan')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
		              </div>
	              </div>
		          </div>
		          <div class="form-group">
	              <input type="submit" value="Kirim" class="btn btn-primary">
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
	</section>
@endsection

<!-- BANNER -->
	<!-- <div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Galang dana</div>
			</div>
			
		</div>
	</div> -->
	<div class="d-flex  ">
			    
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">galang dana</li>
				  </ol>
			
		  	</div>
 	
	<div class="container alert alert-success">
		<center>
		<h4><p>DAFTAR GALANG DANA</p></h4>	
		</center>
		
 
		<!-- Contoh pesan notifikasi alert menggunakan bootstrap 4 -->
 
		<form method="post" action="<?php echo base_url().'galangdana2'?>">
		<div class="row">
    	<div class="col">
      		<input type="text" class="form-control" placeholder="First name">
    	</div>
    	<div class="col">
      		<input type="text" class="form-control" placeholder="Last name">
   		</div>
  		</div>
		<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    		<option selected>Siapa yang anda bantu?</option>
   			<option value="1">Saya sendiri</option>
			<option value="2">Keluarga</option>
    		<option value="3">Orang lain</option>
  		</select>
     	<div class="form-group">
      		<label for="jk">Jenis Kelamin:</label>
      	<select class="form-control" id="jk">
        	<option>Pria</option>
        	<option>Wanita</option>
      	</select>
    	</div>
    	<div class="form-group">
      		<label for="alamat">Penyakit yang diderita</label>
      		<textarea type="text" class="form-control" id="alamat"></textarea>
    	</div>
    	<div class="custom-control custom-radio">
  			<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  			<label class="custom-control-label" for="customRadio1">Dirawat Rumah Sakit</label>
		</div>
		<div class="custom-control custom-radio">
  			<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  			<label class="custom-control-label" for="customRadio2">Rawat Jalan</label>
		</div>
		<div class="custom-control custom-radio">
  			<input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
  			<label class="custom-control-label" for="customRadio3">Tidak Dirawat</label>
		</div>
    
    <button type="submit" class="btn btn-primary" >Simpan</button>

  </form>
 
 
	</div>
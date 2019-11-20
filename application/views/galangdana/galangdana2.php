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
				    <li class="breadcrumb-item active" aria-current="page">Step1</li>
				    <li class="breadcrumb-item active" aria-current="page">Step2</li>
				  </ol>
			
		  	</div>
 	
<div class="container alert alert-success">
 		<center>
		<h4><p>DAFTAR GALANG DANA</p></h4>	
		</center>
 
 					<form action="<?php echo base_url().'galangdana3'?>" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
								<div class="alert alert-success row">
									
									<div class="col-sm-6 col-md-6">

										<div class="form-group">
											<input type="number" value="0" min="1000" step="1000" class="form-control">
											biaya yang dibutuhkan
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="date" class="form-control" >
											berapa lama galang dana berlangsung
											<div class="help-block with-errors"></div>
										</div>
									</div>
																	
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="p_phone" placeholder="Nomor hp/wa aktif">
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>

								<div class="alert alert-success ">
								<div class="form-group">
									 <textarea class="form-control" rows="10" placeholder="keterangan akan digunakan untuk apa uang tersebut"></textarea>
									<div class="help-block with-errors"></div>
								</div>
								</div>
								<div class="form-group"> 	
									<div ></div>
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							
							</form>
		
 
 
	</div>
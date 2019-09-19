<!DOCTYPE html>
<html>
<head>
	<title>Donasi Langsung</title>
</head>
<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
<script src="semantic/jquery.min.js" type="text/javascript"></script>
<script src="semantic/semantic.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.ui.dropdown').dropdown();
	});
</script>
<body>
	


<div class="ui grid">
	<div class="ui  row middle aligned">
		<div class="ten right aligned column">
			<div class="ui icon input">

				<a href="index.html"><button class="ui teal button">Home</button></a>
				<button class="ui teal button"><div class="ui simple dropdown item ">Menu<i class="dropdown icon"></i> 
					<div class="menu">
						<a href="caradonasi.php" class="item">Cara donasi</a>
						<a href="alurpengdon.php" class="item red">Alur pengajuan donasi</a>
						<a href="siapads.php" class="item">Siapa Donasi Sehat?</a>
						<a href="kontak.php" class="item">Kontak</a></button>
						<button class="ui teal button"><div class="ui simple dropdown item">Login <i class="dropdown icon"></i>
							<div class="menu">
								<a class="item" href="logindonat.php">Donatur</a>
								<a class="item" href="loginpem.php">Pemohon</a></button>
								<input type="text" color="orange" placeholder="Search...">
								<i class="inverted circular search link teal icon"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="ui placeholder segment">
					<div class="content">
						<h4 class="ui center aligned column teal header" >Silahkan Transfer ke Rekeninig dibawah ini</h4>
					</div>
					<center>

						<div class="ui column grid">
							<div class="column">
								<div class="ui form">

									<table class="ui column">
										<tr>


										</tr>
										<tr>
											<td>Jumlah Donasi</td><td>:</td><td ><input type="text" placeholder="tampil DB"></td>
										</tr>
										<tr>
											<td>Nama Bank pilihan</td><td>:</td><td><input type="number" name="" placeholder="tampil DB"></td>
										</tr>
										<tr>
											<td>Logo Bank</td><td>:</td><td><input type="text" placeholder="tampil DB?"></td>
										</tr>
										<tr>
											<td>Upload bukti transfer</td><td>:</td><td><button class="fluid ui toggle button">Upload</button></td>
										</tr>
										<tr>
											<td></td><td></td>
											<td>
												<a href="kirimdl3.php" ><button class="ui orange bottom attached button">Lanjut</button></a>
											</td>
										</tr>
									</div>
								</table>

							</div>
						</div>
					</div>

				</center>



				<div class="ui hidden divider Site-content" ></div>
				<div class="ui teal inverted horizontal footer segment">
					<div class="ui stackable inverted divided grid">
						<div class="two wide column">
							<h4 class="ui inverted header">Follow us</h4>
							<div class="ui inverted link list">
								<a href="#" class="item"> <i class="instagram icon"></i> Instagram</a>
								<a  href="#" class="item"> <i class="facebook square icon"></i> Facebook</a>

								<a href="#" class="item"> <i class="whatsapp icon"></i>  Whatsapp</a>
								<a href="#" class="item"> <i class="envelope icon"></i> Email</a>
							</div>
						</div>


						<div class="twelve wide column">
							<h4 class="ui inverted header">Donasi Sehat</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="two wide left aligned column">
							<div class="ui inverted link list  ">
								<a href="kontak.php" class="item"> Hubungi kami</a>
								<a  href="pp.php" class="item"> peraturan penguna</a>
							</div>
						</div>
					</div>
				</div>

			</div class="ui orange inverted segment column">
			<p align="center">Copyright &copy; 2019 . All rights reserved. </p>
		</div>

	</body>
	</html>
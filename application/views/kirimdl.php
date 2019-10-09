<div class="ui grid container center aligned">
    <div class="eleven wide column">
		<div class="ui ordered steps">
		<div class="active step">
                <div class="content">
                    <div class="title">pertama</div>
                    <div class="description">step pertama</div>
                </div>
            </div>

            <div class="step">
                <div class="content">
                    <div class="title">pertama</div>
                    <div class="description">step pertama</div>
                </div>
            </div>

			<div class=" step">
                <div class="content">
                    <div class="title">pertama</div>
                    <div class="description">step pertama</div>
                </div>
            </div>

		</div>
        </div>
    </div>
</div>

	<div class="ui placeholder segment">
		<div class="content">
			<h3 class="ui column teal header">Form Donasi</h3>
		</div>
		<div class="ui column grid">
			<div class="column">
				<div class="ui form">

					<table class="ui center align column">
						<tr>
							<td>Penerima Bantuan </td>
							<td>:</td>
							<td><input type="text" placeholder="isi dengan nama"></td>
						</tr>
						<tr>
							<td>Nominal</td>
							<td>:</td>
							<td><input type="number" name="" placeholder="Jumlah bantuan"></td>
						</tr>
						<tr>
							<td>Metode pembayaran</td>
							<td>:</td>
							<td><input type="text" name="" placeholder="data tampil pilhan DB bri/bni/bca"></td>
						</tr>
						<tr>
							<td>Donatur</td>
							<td>:</td>
							<td><input type="text" placeholder="nama anda"></td>
						</tr>

						<tr>
							<td>Telp/WA</td>
							<td>:</td>
							<td><input type="text" placeholder="Aktif/bisa dihubungi"> </td>
						</tr>

						<tr>
							<td class="inline fields">
								<label>Nama anda</label>
							<td class="field">
							<td class="ui radio checkbox">
								<input type="radio" name="frequency" checked="checked">
								<label>tampilkan</label>
							</td>
							<td class="ui radio checkbox">
								<input type="radio" name="frequency">
								<label>sembunyikan</label>
							</td>
							</td>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><a href="<?php echo base_url().'kirimdl2'?>"><button class="fluid ui toggle button">Donasi</button></a></td>
						</tr>
				</div>
				</table>

			</div>
		</div>
	</div>





</body>

</html>
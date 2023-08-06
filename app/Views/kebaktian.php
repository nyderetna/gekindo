<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div>
			<h1><?= $h1; ?></h1>
		</div>
		<p>Jadwal Kebaktian dan Pelayanan:</p>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Hari</th>
					<th scope="col">Kegiatan</th>
					<th scope="col">Jam</th>
					<th scope="col">Info Tambahan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Senin</th>
					<td>Doa untuk Hamba Tuhan (via Zoom)</td>
					<td>Pukul 16.00 - selesai</td>
					<td><a href="#">Link Zoom klik disini</a></td>
				</tr>
				<tr>
					<th scope="row">Selasa</th>
					<td>Doa malam Jemaat GEKINDO PHP (via Zoom)</td>
					<td>Pukul 19.00 - selesai</td>
					<td><a href="#">Link Zoom klik disini</a></td>
				</tr>
				<tr>
					<th scope="row">Rabu</th>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
				<tr>
					<th scope="row">Kamis</th>
					<td>Komisi Bapak-Ibu</td>
					<td>Pukul 19.00 - 20.00</td>
					<td>bertempat di gereja</td>
				</tr>
				<tr>
					<th scope="row">Jumat</th>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
				<tr>
					<th scope="row">Sabtu</th>
					<td>
						<li> Sabtu Ceria (Sekolah Minggu)</li>
						<li> Komisi Pemuda</li>
					</td>
					<td>
						<li> Pukul 16.00 - 17.00 </li>
						<li> Pukul 18.00 - 19.00 </li>
					</td>
					<td>bertempat di gereja</td>
				</tr>
				<tr>
					<th scope="row">Minggu</th>
					<td>Ibadah Minggu</td>
					<td>Pukul 09.00 - selesai</td>
					<td>Perjamuan Kudus dilaksanakan di minggu pertama tiap bulan dan bertempat di gereja</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="row">
		<p>Jadwal Pelayanan Majelis :</p>
		<div class="col-6 d-inline-flex col-md-6 col-form-label text-right">
			<label for="adart">Cari Bulan Pelayanan Majelis:</label>
			<select class="form-select" aria-label="" id="select_adart">
				<option value="" selected disabled>-- Pilih --</option>
				<option value="#adp1">September 2022</option>
				<option value="#adp2">Oktober 2022</option>
				<option value="#adp3">November 2022</option>
				<option value="#adp4">Desember 2022</option>

			</select>
			<a href="#" id="btnCari" class="btn btn-success">Cari</a>
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Hari</th>
					<th scope="col">Kegiatan</th>
					<th scope="col">Jam</th>
					<th scope="col">Info Tambahan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Senin</th>
					<td>Doa untuk Hamba Tuhan (via Zoom)</td>
					<td>Pukul 16.00 - selesai</td>
					<td><a href="#">Link Zoom klik disini</a></td>
				</tr>
				<tr>
					<th scope="row">Selasa</th>
					<td>Doa malam Jemaat GEKINDO PHP (via Zoom)</td>
					<td>Pukul 19.00 - selesai</td>
					<td><a href="#">Link Zoom klik disini</a></td>
				</tr>
				<tr>
					<th scope="row">Rabu</th>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
				<tr>
					<th scope="row">Kamis</th>
					<td>Komisi Bapak-Ibu</td>
					<td>Pukul 19.00 - 20.00</td>
					<td>bertempat di gereja</td>
				</tr>
				<tr>
					<th scope="row">Jumat</th>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
				<tr>
					<th scope="row">Sabtu</th>
					<td>
						<li> Sabtu Ceria (Sekolah Minggu)</li>
						<li> Komisi Pemuda</li>
					</td>
					<td>
						<li> Pukul 16.00 - 17.00 </li>
						<li> Pukul 18.00 - 19.00 </li>
					</td>
					<td>bertempat di gereja</td>
				</tr>
				<tr>
					<th scope="row">Minggu</th>
					<td>Ibadah Minggu</td>
					<td>Pukul 09.00 - selesai</td>
					<td>Perjamuan Kudus dilaksanakan di minggu pertama tiap bulan dan bertempat di gereja</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?= $this->endSection(); ?>
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
					<td>Komisi Pemuda</td>
					<td>Pukul 18.00 - 19.00</td>
					<td>bertempat di gereja</td>
				</tr>
				<tr>
					<th scope="row">Minggu</th>
					<td>Ibadah Minggu</td>
					<td>Pukul 09.00 - selesai</td>
					<td>
						<ul>
							<li>Perjamuan Kudus dilaksanakan di minggu pertama tiap bulan dan bertempat di gereja</li>
							<li>Sekolah Minggu Pukul 07.00 - 08.00 bertempat di kediaman kel. Bpk. Adrian Ingratubun</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?= $this->endSection(); ?>
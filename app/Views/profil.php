<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
	<div class="row mt-2">
		<header class="entry-header">
			<h1><?= $h1; ?></h1>
		</header>
		<div class="col-12">
			<?php foreach ($pelayan as $p) : ?>
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="assets/img/pelayan/<?= $p['img']; ?>" class="img-fluid rounded-start" alt="pelayan">
						</div>
						<div class="col-md-8 my-5">
							<div class="card-body">
								<h5 class="card-title"><?= $p['singkatan_jabatan']; ?> <?= $p['nama_pelayan']; ?></h5>
								<p class="card-text"><strong>(kalimat motivasi/inspirasi/kutipan ayat alkitab mengenai pelayanan)</strong></p>
								<p class="card-text"><small class="text-muted"><?= $p['jabatan_pelayan']; ?></small></p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
	<?php foreach ($warta as $w) : ?>
		<div class="card">

			<div class="card-header">
				<?= $w['tema_warta']; ?> | <?= $w['tgl_warta']; ?>
			</div>
			<div class="card-body">
				<blockquote class="blockquote mb-0">
					<header class="blockquote-header"><cite title="Source Title"><?= $w['ayat_warta']; ?></cite></header>
					<p><?= $w['isi_warta']; ?></p>
				</blockquote>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<?= $this->endSection(); ?>
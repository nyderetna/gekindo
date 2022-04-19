<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
	<div class="row mt-4" style="justify-content: center;">
		<img src="assets/img/majelis.jpeg" class="img-fluid w-50" style="border-radius: 20px;">
	</div>
	<div class="row mt-4 mb-8">
		<div class="col-md-6">
			<div class="card" style="border-radius: 20px;">
				<div class="card-header">
					Quote
				</div>
				<div class="card-body">
					<blockquote class="blockquote mb-0">
						<p>A well-known quote, contained in a blockquote element.</p>
						<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
					</blockquote>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card" style="border-radius: 20px;">
				<div class="card-header">
					Quote1
				</div>
				<div class="card-body">
					<blockquote class="blockquote mb-0">
						<p>A well-known quote, contained in a blockquote element.</p>
						<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>
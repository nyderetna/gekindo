<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<!-- <div class="container">
	<?php foreach ($warta as $w) : ?>


		<div class="card">

			<div class="card-header">
				<?php
				// Define the Indonesian locale
				$locale = 'id_ID';

				// Create an instance of IntlDateFormatter
				$dateFormatter = new IntlDateFormatter($locale, IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'Asia/Jakarta', IntlDateFormatter::GREGORIAN, 'EEEE, d MMMM yyyy');

				// Format and display the date in Indonesian language
				$dateInIndonesian = $dateFormatter->format(strtotime($w['tgl_warta']));
				?>

				<span style="font-size: 1.2em; font-weight: bold;">
					<?= $dateInIndonesian; ?>
				</span>
				<i class="fa-solid fa-book-bible"></i> <?= $w['tema_warta']; ?>
			</div>
			<div class="card-body">
				<blockquote class="blockquote mb-0">
					<header class="blockquote-header"><cite title="Source Title"><?= $w['ayat_warta']; ?></cite></header>
					<p><?= $w['isi_warta']; ?></p>
				</blockquote>
			</div>
		</div>
	<?php endforeach; ?>
</div> -->

<div class="container">
	<!-- Add the dropdown for date selection -->
	<select id="selectDate" class="form-select mb-3" aria-label="Pilih Tanggal Renungan">
		<option value="" selected disabled>Pilih Tanggal Renungan</option>
		<?php foreach ($warta as $w) : ?>
			<?php
			// Define the Indonesian locale
			$locale = 'id_ID';

			// Create an instance of IntlDateFormatter with day name
			$dateFormatter = new IntlDateFormatter($locale, IntlDateFormatter::FULL, IntlDateFormatter::NONE);

			// Format and display the date in Indonesian language
			$dateInIndonesian = $dateFormatter->format(strtotime($w['tgl_warta']));
			?>
			<option value="<?= $dateInIndonesian; ?>"><?= $dateInIndonesian; ?></option>
		<?php endforeach; ?>
	</select>

	<!-- Container to hold the accordion -->
	<div id="accordionContainer"></div>
</div>
<script>
	// Event listener for date selection
	document.getElementById('selectDate').addEventListener('change', function() {
		const selectedDate = this.value;

		// Clear previous content
		document.getElementById('accordionContainer').innerHTML = '';

		// Fetch and populate accordion content if a date is selected
		if (selectedDate) {
			fetchAccordionContent(selectedDate);
		}
	});

	// Function to fetch accordion content and populate the accordion
	function fetchAccordionContent(date) {
		// You need to adjust the URL based on your actual route for fetching content
		fetch(`/warta/get_content/${date}`)
			.then(response => response.json())
			.then(data => {
				const accordionContainer = document.getElementById('accordionContainer');
				data.forEach(item => {
					const accordionItem = createAccordionItem(item);
					accordionContainer.appendChild(accordionItem);
				});
			})
			.catch(error => {
				console.error('Error fetching accordion content:', error);
			});
	}

	// Function to create an accordion item
	function createAccordionItem(item) {
		const accordionItem = document.createElement('div');
		accordionItem.className = 'accordion-item';

		const accordionHeader = document.createElement('h2');
		accordionHeader.className = 'accordion-header';
		accordionHeader.innerHTML = `
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-${item.id_warta}">
                ${item.tema_warta}
            </button>
        `;

		const accordionCollapse = document.createElement('div');
		accordionCollapse.id = `collapse-${item.id_warta}`;
		accordionCollapse.className = 'accordion-collapse collapse';
		accordionCollapse.innerHTML = `
            <div class="accordion-body">
                ${item.isi_warta}
            </div>
        `;

		accordionItem.appendChild(accordionHeader);
		accordionItem.appendChild(accordionCollapse);

		return accordionItem;
	}
</script>


<?= $this->endSection(); ?>
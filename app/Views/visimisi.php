<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div>
            <h1><?= $h1; ?></h1>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="" data-bs-target="#One" aria-expanded="true" aria-controls="One">
                        VISI GEKINDO
                    </button>
                </h2>
                <div id="One" class="accordion show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Berdasarkan Identitas, Tujuan, Bentuk dan Organisasi GEKINDO (Anggaran Dasar dan Anggaran Rumah Tangga), Jelas bahwa wawasan masa depan (Visi) GEKINDO adalah “Berdirinya Gereja Keesaan Injili Indonesia yang Misioner dan Injili di Seluruh Wilayah Nusantara Indonesia maupun di Luar Negeri
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="" data-bs-target="#Two" aria-expanded="false" aria-controls="Two">
                        MISI GEKINDO
                    </button>
                </h2>
                <div id="Two" class="accordion show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        1. Berdirinya GEKINDO di seluruh wilayah Nusantara Indonesia dan luar negri <br>
                        2. Menjadikan GEKINDO sebagai Gereja Tuhan yang Mandiri dan Siap mewartakan Penginjilan dan kebenaran dan memenangkan jiwa-jiwa bagi Kristus. <br>
                        3. Siap menjalankan Tri Panggilan Gereja (Diakonia, Marturia dan Koinonia) bagi kepentingan anggota jemaat, masyarakat, bangsa dan negara sebagai wujud NKRI.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="" data-bs-target="#Three" aria-expanded="false" aria-controls="Three">
                        MOTO GEKINDO
                    </button>
                </h2>
                <div id="Three" class="accordion show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Wahyu 3 : 7 <br>
                        <i>APABILA IA MEMBUKA, TIDAK ADA YANG DAPAT MENUTUP; APABILA IA MENUTUP, TIDAK ADA YANG DAPAT MEMBUKA</i>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button" type="button" data-bs-toggle="" data-bs-target="#Four" aria-expanded="false" aria-controls="Four">
                        IDENTITAS GEKINDO
                    </button>
                </h2>
                <div id="Four" class="accordion show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        SETIA, JUJUR, dan TAAT (SEJUTA)
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
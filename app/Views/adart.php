<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <header class="entry-header">
            <h1><?= $h1; ?></h1>
        </header>
        <div class="col-6 d-inline-flex col-md-6 col-form-label text-right">
            <label for="adart">Cari Bab/Pasal:</label>
            <select class="form-select" aria-label="" id="select_adart">
                <option value="" selected disabled>-- Pilih --</option>
                <optgroup style="text-align: center; font-size:14pt;" label="Anggaran Dasar (AD)">
                <optgroup label="BAB I - NAMA,AZAS,WAKTU BERDIRI, TUGAS, FUNGSI DAN WILAYAH KEBERADAAN">
                    <option value="#adp1">Pasal 1 - Nama</option>
                    <option value="#adp2">Pasal 2 - Azas</option>
                    <option value="#adp3">Pasal 3 - Tugas</option>
                    <option value="#adp4">Pasal 4 - Waktu dan Wilayah</option>
                </optgroup>
                <optgroup label="BAB II - PENGAKUAN DAN PANGGILAN">
                    <option value="#adp5">Pasal 5 - Pengakuan</option>
                    <option value="#adp6">Pasal 6 - Panggilan</option>
                </optgroup>
                <optgroup label="BAB III - PERSEKUTUAN">
                    <option value="#adp7">Pasal 7 - Persekutuan</option>
                </optgroup>
                <optgroup label="BAB IV - SISTEM DAN PENGORGANISASIAN">
                    <option value="#adp8">Pasal 8 - Dasar dan Bentuk Pengorganisasian</option>
                </optgroup>
                <optgroup label="BAB V - KEANGGOTAAN">
                    <option value="#adp9">Pasal 9 - Anggota dan Jenis Keanggotaan</option>
                    <option value="#adp10">Pasal 10 - Hak dan Kewajiban Anggota</option>
                </optgroup>
                <optgroup label="BAB VI - JABATAN GEREJA">
                    <option value="#adp11">Pasal 11 - Pejabat Gereja</option>
                </optgroup>
                <optgroup label="BAB VII - PENDETA">
                    <option value="#adp12">Pasal 12 - Pendeta dan Status Tugasnya</option>
                </optgroup>
                <optgroup label="BAB VIII - RAPAT DAN PERSIDANGAN GEREJAWI">
                    <option value="#adp13">Pasal 13 - Rapat Gerejawi</option>
                    <option value="#adp14">Pasal 14 - Sidang Gerejawi</option>
                </optgroup>
                <optgroup label="BAB IX - KEPEMIMPINAN">
                    <option value="#adp15">Pasal 15 - Azas Kepemimpinan</option>
                    <option value="#adp16">Pasal 16 - Pemimpin</option>
                </optgroup>
                <optgroup label="BAB X - MAJELIS PERTIMBANGAN">
                    <option value="#adp17">Pasal 17 - Majelis Pertimbangan</option>
                </optgroup>
                <optgroup label="BAB XI - PERBENDAHARAAN DAN PENGAWAS PERBENDAHARAAN">
                    <option value="#adp18">Pasal 18 - Perbendaharaan</option>
                    <option value="#adp19">Pasal 19 - Pengawas Perbendaharaan</option>
                </optgroup>
                <optgroup label="BAB XII - ATRIBUT GEKINDO">
                    <option value="#adp20">Pasal 20 - Atribut GEKINDO</option>
                </optgroup>
                <optgroup label="BAB XIII - HUBUNGAN KERJA SAMA">
                    <option value="#adp21">Pasal 21 - Hubungan Kerjasama</option>
                </optgroup>
                <optgroup label="BAB XIV - PENUTUP">
                    <option value="#adp22">Pasal 22 - Perubahan Anggaran Dasar</option>
                    <option value="#adp23">Pasal 23 - Waktu Pemberlakuan Anggaran Dasar</option>
                    <option value="#adp24">Pasal 24 - Ketentuan Lebih Lanjut</option>
                </optgroup>
                <optgroup style="text-align: center; font-size:14pt;" label="Anggaran Rumah Tangga (ART)">
                <optgroup label="BAB I - NAMA, WAKTU BERDIRI DAN WILAYAH KEBERADAAN">
                    <option value="#artp1">Pasal 1 - Nama</option>
                    <option value="#artp2">Pasal 2 - Waktu</option>
                    <option value="#artp3">Pasal 3 - Wilayah</option>
                </optgroup>
                <optgroup label="BAB II - PENGAKUAN DAN PANGGILAN ">
                    <option value="#artp4">Pasal 4 - Pengakuan</option>
                    <option value="#artp5">Pasal 5 - Panggilan Bersekutu</option>
                    <option value="#artp6">Pasal 6 - Panggilan Melayani</option>
                    <option value="#artp7">Pasal 7 - Panggilan Bersaksi</option>
                    <option value="#artp8">Pasal 8 - Pembinaan</option>
                    <option value="#artp9">Pasal 9 - Pengembangan</option>
                </optgroup>
                <optgroup label="BAB III - ASAS BERMASYARAKAT, BERBANGSA DAN BERNEGARA ">
                    <option value="#artp10">Pasal 10 - Hidup Bermasyarakat, Berbangsa dan Bernegara</option>
                </optgroup>
                <optgroup label="BAB IV - PERSEKUTUAN">
                    <option value="#artp11">Pasal 11 - Bentuk-bentuk Kebaktian</option>
                    <option value="#artp12">Pasal 12 - Penanggung Jawab Kebaktian</option>
                    <option value="#artp13">Pasal 13 - Tata Kebaktian</option>
                    <option value="#artp14">Pasal 14 - Pelaksanaan Baptisan Kudus</option>
                    <option value="#artp15">Pasal 15 - Syarat Baptisan Kudus</option>
                    <option value="#artp16">Pasal 16 - Ketentuan Penyelenggaraan Baptisan Kudus</option>
                    <option value="#artp17">Pasal 17 - Katekisasi</option>
                    <option value="#artp18">Pasal 18 - Sidi</option>
                    <option value="#artp19">Pasal 19 - Pelaksanaan Perjamuan Kudus</option>
                    <option value="#artp20">Pasal 20 - Peserta Perjamuan Kudus</option>
                    <option value="#artp21">Pasal 21 - Persiapan Perjamuan Kudus</option>
                    <option value="#artp22">Pasal 22 - Pelaksanaan Pengembalaan</option>
                    <option value="#artp23">Pasal 23 - Pelaksanaan Penggembalaan Khusus Bagi Anggota Jemaat</option>
                    <option value="#artp24">Pasal 24 - Pelaksanaan Penggembalaan Khusus Bagi Anggota Jemaat yang Menjabat Tugas Pelayanan Gereja</option>
                    <option value="#artp25">Pasal 25 - Pengembalaan Khusus Bagi Pendeta</option>
                    <option value="#artp26">Pasal 26 - Berakhirnya Penggembalaan Khusus</option>
                    <option value="#artp27">Pasal 27 - Pelaksanaan Pernikahan</option>
                    <option value="#artp28">Pasal 28 - Pemberkatan Pernikahan</option>
                </optgroup>
                <optgroup label="BAB VI - SISTEM DAN PENGORGANISASIAN">
                    <option value="#artp29">Pasal 29 - Tata Hubungan</option>
                    <option value="#artp30">Pasal 30 - Jemaat</option>
                    <option value="#artp31">Pasal 31 - Bakal Jemaat</option>
                    <option value="#artp32">Pasal 32 - Pos PI</option>
                    <option value="#artp33">Pasal 33 - Peresmian Jemaat</option>
                    <option value="#artp34">Pasal 34 - Wilayah</option>
                    <option value="#artp35">Pasal 35 - Visitasi Wilayah</option>
                    <option value="#artp36">Pasal 36 - Sinode</option>
                    <option value="#artp37">Pasal 37 - Visitasi Sinode</option>
                </optgroup>
                <optgroup label="BAB VII - KEANGGOTAAN">
                    <option value="#artp38">Pasal 38 - Penerimaan Anggota</option>
                    <option value="#artp39">Pasal 39 - Masa Persiapan Menjadi Anggota</option>
                    <option value="#artp40">Pasal 40 - Kewajiban dan Tanggung Jawab Anggota/option>
                    <option value="#artp41">Pasal 41 - Hak Anggota</option>
                    <option value="#artp42">Pasal 42 - Hilang Keanggotaan</option>
                </optgroup>
                <optgroup label="BAB VIII - RAPAT DAN SIDANG GEREJAWI">
                    <option value="#artp43">Pasal 43 - Ketentuan Rapat Majelis Jemaat</option>
                    <option value="#artp44">Pasal 44 - Ketentuan Rapat Jemaat</option>
                    <option value="#artp45">Pasal 45 - Rapat Wilayah</option>
                    <option value="#artp46">Pasal 46 - Ketentuan Sidang Sinode</option>
                    <option value="#artp47">Pasal 47 - Ketentuan Sidang Sinode Istimewa</option>
                    <option value="#artp48">Pasal 48 - Rapat Badan Pekerja Harian Sinode</option>
                    <option value="#artp49">Pasal 49 - Rapat Kerja Sinode</option>
                </optgroup>
                <optgroup label="BAB IX - KEPEMIMPINAN">
                    <option value="#artp50">Pasal 50 - Tugas Pokok Penatua</option>
                    <option value="#artp51">Pasal 51 - Tugas Pokok Diaken</option>
                    <option value="#artp52">Pasal 52 - Ketentuan Majelis Jemaat</option>
                    <option value="#artp53">Pasal 53 - Pemilihan Anggota Majelis Jemaat</option>
                    <option value="#artp54">Pasal 54 - Tugas dan Tanggung Jawab Majelis Jemaat</option>
                    <option value="#artp55">Pasal 55 - Wewenang Majelis Jemaat</option>
                    <option value="#artp56">Pasal 56 - Ketentuan Majelis Sinode dan Badan Pekerja Harian Sinode</option>
                    <option value="#artp57">Pasal 57 - Syarat-syarat Menjadi dan Tata Cara Pemilihan Ketua Umum Sinode GEKINDO</option>
                    <option value="#artp58">Pasal 58 - Tugas Dan Tanggung Jawab Badan Pekerja Harian Sinode</option>
                    <option value="#artp59">Pasal 59 - Wewenang Badan Pekerja Harian Sinode</option>
                </optgroup>
                <optgroup label="BAB X - PENDETA">
                    <option value="#artp60">Pasal 60 - Ketentuan Umum Menjadi Pendeta GEKINDO</option>
                    <option value="#artp61">Pasal 61 - Ketentuan Tentang Pendeta Jemaat</option>
                    <option value="#artp62">Pasal 62 - Ketentuan Pendeta Tugas Khusus</option>
                    <option value="#artp63">Pasal 63 - Ketentuan Pendeta Pelayanan Umum</option>
                    <option value="#artp64">Pasal 64 - Ketentuan Pendeta Emeritus</option>
                    <option value="#artp65">Pasal 65 - Tugas dan Tanggung Jawab Pendeta Jemaat</option>
                    <option value="#artp66">Pasal 66 - Tugas dan Tanggung Jawab Pendeta Tugas Khusus</option>
                    <option value="#artp67">Pasal 67 - Tugas dan Tanggung Jawab Pendeta Pelayanan Umum</option>
                    <option value="#artp68">Pasal 68 - Pakaian Jabatan Pendeta</option>
                    <option value="#artp69">Pasal 69 - Konven Pendeta</option>
                    <option value="#artp70">Pasal 70 - Ketentuan Tentang Penggembalaan Pendeta</option>
                </optgroup>
                <optgroup label="BAB XI - LEMBAGA PELAYANAN KHUSUS">
                    <option value="#artp71">Pasal 71 - Ketentuan Tentang Badan Pelayanan yang Berbadan Hukum</option>
                </optgroup>
                <optgroup label="BAB XII - MAJELIS PERTIMBANGAN">
                    <option value="#artp72">Pasal 72 - Ketentuan Majelis Pertimbangan</option>
                </optgroup>
                <optgroup label="BAB XIII - PENGAWAS PERBENDAHARAAN">
                    <option value="#artp73">Pasal 73 - Ketentuan Pengawas Perbendaharaan Sinode</option>
                </optgroup>
                <optgroup label="BAB XIV - SARANA  PENUNJANG">
                    <option value="#artp74">Pasal 74 - Perbendaharaan</option>
                    <option value="#artp75">Pasal 75 - Pengelolaan dan Pendayagunaan Perbendaharaan</option>
                    <option value="#artp76">Pasal 76 - Keuangan Sinode</option>
                </optgroup>
                <optgroup label="BAB XV - KETENTUAN PENUTUP">
                    <option value="#artp77">Pasal 77 - Ketentuan Lebih Lanjut</option>
                    <option value="#artp78">Pasal 78 - Perubahan Anggaran Rumah Tangga</option>
                    <option value="#artp79">Pasal 79 - Waktu Pemberlakuan Anggaran Rumah Tangga</option>
                </optgroup>
                </optgroup>
            </select>
            <a href="#" id="btnCari" class="btn btn-success">Cari</a>
        </div>
        <div class="col-6 d-inline-flex col-md-6 col-form-label text-right">
            <a href="assets/docs/adart_gekindo21.pdf" class="btn btn-primary" download><i class="fa fa-file-pdf-o" aria-hidden="true">Download PDF</i></a>
        </div>
        <article class="post-15 page type-page status-publish entry" aria-label="AD" itemscope>
            <div class="entry-content" itemprop="text">
                <h2 style="text-align: center;">Anggaran Dasar (AD)</h2>
                <h4 style="text-align: center;">MUKADIMAH</h4>
                <p style="text-align: justify;">
                    Segala pujian syukur bagi Tuhan Allah, Bapa dalam Yesus Kristus, yang oleh Roh-Nya yang kudus telah memilih, mengutus, menyertai dan memberkati Gereja-Nya (Efesus 1:3-14). Gereja adalah suatu kehidupan bersama yang berpusat pada penyelamatan Allah dalam Yesus Kristus. Kehidupan bersama itu dibentuk oleh orang-orang yang atas pertolongan Roh Kudus menerima dengan percaya terhadap penyelamatan Allah di dalam Yesus Kristus. Pengertian demikian menunjukkan bahwa Gereja memiliki segi ilahi dan segi manusiawi. Segi ilahi Gereja adalah sebagai buah penyelamatan Allah, maka Pemilik dan Penguasa Gereja adalah Allah. Segi manusiawi Gereja adalah sebagai kehidupan bersama yang oleh pertolongan Roh Kudus diciptakan dan diselenggarakan secara kelembagaan oleh manusia.

                    Tuhan, Allah Yang Mahakuasa, Pencipta langit dan bumi, telah menyatakan kasihNya yang begitu besar kepada dunia ini, dengan mengaruniakan AnakNya yang tunggal, yaitu Yesus Kristus, Tuhan dan Juruselamat. Melalui kehidupan, penderitaan, kematian, kebangkitan dan kenaikan Yesus ke sorga, Allah melaksanakan rencanaNya terhadap dunia supaya kasih, sukacita, keadilan, kebenaran, dan damai sejahtera berlaku dalam seluruh kehidupan ciptaanNya. Dengan kuasa Roh Kudus, Allah memanggil semua orang untuk percaya dan menerima Yesus Kristus sebagai Tuhan dan Juruselamat serta membimbing mereka untuk hidup dalam suatu persekutuan, pelayanan dan kesaksian ditengah dunia. Dengan demikian, terbentuklah gereja yang esa, kudus dan am.

                    Semula Gereja Keesaan Injili Indonesia tumbuh dalam bentuk pos-pos Pekabaran Injil di Jakarta dan sekitarnya sejak tahun 1984 sampai dengan tahun 1987 atas pelayanan Pdt. Benny Nenoharan dan Pdt. Anna Nenoharan. Karena tuntutan pelayan bertambah seturut dengan perkembangan jemaat, dan atas Anugerah dan kemurahan Yesus Kristus pada tanggal 31 Oktober 1993 lahirlah Gereja Keesaan Injili Indonesia yang disingkat GKII. Dan setelah dilaksanakan sidang MPL 1 Sinode pada tanggal 13 juli 1996, singkatan GKII diganti (diubah) menjadi GEKINDO.

                    Dengan demikian Gereja Keesaan Injili Indonesia (GEKINDO) yang secara bersama dengan Gereja-gereja di Indonesia terpanggil untuk melaksanakan Amanat Agung Tuhan Yesus Kristus (Matius 28:19-20) dan Amanat Kebudayaan (Kejadian 1:28), yaitu melaksanakan misi Allah ditengah-tengah dunia ini untuk bersekutu, bersaksi dan melayani ditengah-tengah bangsa Indonesia dan dunia tanpa memandang suku dan latar belakang sosial/budaya. GEKINDO secara khusus menerima visi dari Tuhan dalam Wahyu 3:7-8.

                    Dengan mengucapkan syukur kepada Allah yang senantiasa memberikan pertolongan dan bimbingan-Nya, maka kami wakil-wakil Gereja Keesaan Injili Indonesia (GEKINDO) membentuk suatu organisasi dengan menyusun Anggaran Dasar dan Anggaran Rumah Tangga sebagai berikut:
                </p>
                <h3 style="text-align: center;">BAB I</h3>
                <h4 style="text-align: center;">NAMA,AZAS,WAKTU BERDIRI, TUGAS, FUNGSI DAN WILAYAH KEBERADAAN</h4>

                <h5 id="adp1" style="text-align: center;">Pasal 1</h5>
                <h5 style="text-align: center;">Nama</h5>
                <p style="text-align: center;">Persekutuan yang dimaksud dalam Anggaran Dasar ini bernama Gereja Keesaan Injili Indonesia yang disingkat GEKINDO</p>

                <h5 id="adp2" style="text-align: center;">Pasal 2</h5>
                <h5 style="text-align: center;">Azas</h5>
                <p style="text-align: center;">GEKINDO didirikan berazaskan Pancasila sebagai azas dalam kehidupan bermasyarakat, berbangsa dan bernegara dengan Undang-Undang Dasar 1945 sebagai landasan konstitusionalnya.</p>

                <h5 id="adp3" style="text-align: center;">Pasal 3</h5>
                <h5 style="text-align: center;">Tugas</h5>
                <p style="text-align: center;">Tugas GEKINDO ialah memberitakan Injil Kristus kepada setiap umat manusia (suku dan bangsa), dan menjadikan orang percaya sebagai murid Tuhan Yesus, serta melayani Tuhan dan sesama manusia sesuai dengan Firman-Nya.</p>

                <h5 id="adp4" style="text-align: center;">Pasal 4</h5>
                <h5 style="text-align: center;">Waktu dan Wilayah</h5>
                <p>1. GEKINDO berdiri pada tanggal 31 Oktober 1993. </p>
                <p>2. GEKINDO terdiri dari jemaat-jemaat lokal di seluruh Indonesia dan negara-negara lain di seluruh dunia dan Jakarta dijadikan sebagai tempat (pusat) Sinode GEKINDO.</p>

                <h3 style="text-align: center;">BAB II</h3>
                <h4 style="text-align: center;">PENGAKUAN DAN PANGGILAN</h4>

                <h5 id="adp5" style="text-align: center;">Pasal 5</h5>
                <h5 style="text-align: center;">Pengakuan</h5>
                <p>1. GEKINDO mengaku percaya pada Allah yang Esa yaitu Bapa yang Mahakuasa pencipta langit, bumi dan segala isinya, menyatakan diri dalam Yesus Kristus, AnakNya yang tunggal, Tuhan, Juruselamat dunia, dan Kepala gereja, sumber kebenaran dan hidup, yang menghimpun dan menumbuhkan dan memelihara gereja dalam Roh Kudus, sesuai dengan firman Allah dalam Alkitab yaitu Perjanjian Lama dan Perjanjian Baru (Ulangan 7: 6; Matius 16:18; I Korintus 3:11; Efesus 4: 15) </p>
                <p>2. 2. GEKINDO menghayati pengakuan imannya dalam persekutuan dengan gereja dari segala abad dan tempat, GEKINDO menerima pengakuan Iman Rasuli (Pengakuan Iman Nicea Konstantinopel dan Pengakuan iman Athanasius) dan Pemahaman Bersama Iman Kristen ( PBIK ) Gereja-Gereja di Indonesia.</p>

                <h5 id="adp6" style="text-align: center;">Pasal 6</h5>
                <h5 style="text-align: center;">Panggilan</h5>
                <p>1. GEKINDO terpanggil untuk ikut serta dalam karya Allah di dunia, dengan memberlakukan kasih, sukacita, kebenaran, keadilan, dan damai sejahtera sebagai perwujudan tubuh Kristus yang bersekutu, melayani dan bersaksi dalam lingkungan gereja dan masyarakat, beralaskan iman, pengharapan, dan kasih (I Korintus 13: 13). </p>
                <p>2. GEKINDO terpanggil untuk memperlengkapi anggota-anggotanya sehingga mampu melaksanakan panggilannya selaku orang percaya melalui pembinaan. </p>
                <p>3. GEKINDO terpanggil untuk mengembangkan berbagai karunia dan berkat Tuhan yang diberikan kepada gereja berdasarkan Alkitab.</p>

                <h3 style="text-align: center;">BAB III</h3>
                <h4 style="text-align: center;">PERSEKUTUAN</h4>

                <h5 id="adp7" style="text-align: center;">Pasal 7</h5>
                <h5 style="text-align: center;">Persekutuan</h5>
                <p> 1. GEKINDO mewujudkan persekutuan dengan Allah dan dengan saudara seiman.</p>
                <p> 2. Persekutuan itu diwujudkan secara pribadi dan bersama-sama.</p>
                <p> 3. Persekutuan itu dilakukan:</p>
                <p style="margin-left: 2em;">a. Dalam lingkup GEKINDO</p>
                <p style="margin-left: 2em;">b. Dalam gerakan Keesaan Gereja.</p>

                <h3 style="text-align: center;">BAB IV</h3>
                <h4 style="text-align: center;">SISTEM DAN PENGORGANISASIAN</h4>

                <h5 id="adp8" style="text-align: center;">Pasal 8</h5>
                <h5 style="text-align: center;">Dasar dan Bentuk Pengorganisasian</h5>
                <p> 1. Pengorganisasian GEKINDO dibangun diatas sistem presbiterial-sinodal berdasarkan pemerintahan Tuhan Allah dalam Yesus Kristus.</p>
                <p> 2. Pengorganisasian GEKINDO ditata dalam tiga aras:</p>
                <p style="margin-left: 2em;">a. Jemaat;</p>
                <p style="margin-left: 2em;">b. Wilayah;</p>
                <p style="margin-left: 2em;">c. Sinode.</p>

                <h3 style="text-align: center;">BAB V</h3>
                <h4 style="text-align: center;">KEANGGOTAAN</h4>

                <h5 id="adp9" style="text-align: center;">Pasal 9</h5>
                <h5 style="text-align: center;">Anggota dan Jenis Keanggotaan</h5>
                <p style="text-align: center;">Anggota GEKINDO terdiri dari anggota baptis dan anggota sidi yang terdaftar di jemaat setempat.</p>

                <h5 id="adp10" style="text-align: center;">Pasal 10</h5>
                <h5 style="text-align: center;">Hak dan Kewajiban Anggota</h5>
                <p style="text-align: center;">Setiap anggota jemaat mempunyai hak untuk melayani dan dilayani dan jemaat wajib hidup sebagai murid Tuhan Yesus Kristus yang berpegang teguh pada ajaran Alkitab, Anggaran Dasar, dan peraturan GEKINDO lainnya dalam rangka terlaksananya panggilan gereja.</p>

                <h3 style="text-align: center;">BAB VI</h3>
                <h4 style="text-align: center;">JABATAN GEREJA</h4>

                <h5 id="adp11" style="text-align: center;">PASAL 11 </h5>
                <h5 style="text-align: center;">Pejabat Gereja</h5>
                <p>GEKINDO mengenal jabatan Gerejawi sebagai berikut:</p>
                <p>1. Pendeta.</p>
                <p>2. Penatua</p>
                <p>3. Diaken</p>

                <h3 style="text-align: center;">BAB VII</h3>
                <h4 style="text-align: center;">PENDETA</h4>

                <h5 id="adp12" style="text-align: center;">PASAL 12</h5>
                <h5 style="text-align: center;">Pendeta dan Status Tugasnya</h5>

                <p>1. Pendeta adalah jabatan pelayanan yang diberikan gereja kepada seseorang yang menerima panggilan Tuhan untuk melaksanakan tugas khusus selaku pelayan firman dan menjaga ajaran Alkitab dan pokok-pokok ajaran GEKINDO.</p>
                <p>2. Status Pendeta GEKINDO adalah:</p>
                <p style="margin-left: 2em;">a. Pendeta jemaat yaitu pendeta yang bertugas di Jemaat sebagai gembala jemaat.</p>
                <p style="margin-left: 2em;">b. Pendeta tugas khusus yaitu pendeta yang bertugas di bidang khusus di luar GEKINDO atas pengutusan GEKINDO dan senantiasa berkoordinasi dengan Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">c. Pendeta pelayanan umum yaitu pendeta yang bertugas di bidang-bidang pelayanan umum dalam lingkup GEKINDO, baik dalam kehidupan gereja maupun masyarakat, dalam koordinasi Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">d. Pendeta Emeritus yaitu pendeta yang telah menyelesaikan masa tugasnya sesuai dengan ketentuan tentang emeritasi.</p>

                <h3 style="text-align: center;">BAB VIII</h3>
                <h4 style="text-align: center;">RAPAT DAN PERSIDANGAN GEREJAWI</h4>

                <h5 id="adp13" style="text-align: center;">PASAL 13</h5>
                <h5 style="text-align: center;">Rapat Gerejawi</h5>
                <p style="text-align: center;">Rapat Gerejawi adalah persekutuan untuk bersama-sama berdoa dan mencari kehendak Tuhan Allah untuk bermusyawarah dan mengambil keputusan bersama menjalankan tugas panggilan gereja .</p>

                <h5 id="adp14" style="text-align: center;">PASAL 14</h5>
                <h5 style="text-align: center;">Sidang Gerejawi</h5>
                <p>Sidang Gerejawi adalah sidang yang diselenggarakan dalam rangka menetapkan kebijakan pelaksanaan panggilan gereja secara menyeluruh dan sidang pengambil keputusan tertinggi. Sidang gerejawi meliputi sidang sinode dan sidang sinode istimewa. Jenis-Jenis Rapat / Persidangan adalah:</p>
                <p style="margin-left: 2em;">a. Rapat Jemaat yaitu rapat yang diselenggarakan dalam rangka memberi kesempatan pada seluruh anggota sidi jemaat untuk turut memikirkan dan mengambil bagian dalam pelaksanaan panggilan gereja oleh Jemaat.</p>
                <p style="margin-left: 2em;">b. Rapat Majelis Jemaat yaitu rapat yang diselenggarakan dalam rangka menetapkan kebijakan pelaksanaan panggilan gereja di lingkungan jemaat.</p>
                <p style="margin-left: 2em;">c. Sidang Sinode yaitu sidang yang diselenggarakan dalam rangka menetapkan kebijakan pelaksanaan panggilan gereja secara menyeluruh dan sidang pengambil keputusan tertinggi.</p>
                <p style="margin-left: 2em;">d. Sidang Sinode Istimewa yaitu sidang yang diselenggarakan karena ada hal-hal yang sifatnya istimewa yang dapat merusak pelayanan, keberadaan dan kelangsungan GEKINDO.</p>
                <p style="margin-left: 2em;">e. Rapat Kerja Sinode yaitu rapat yang diselenggarakan rangka pengembangan, evaluasi dan pemantapan pelaksanaan keputusan/ ketetapan Sidang Sinode.</p>
                <p style="margin-left: 2em;">f. Rapat Badan Pekerja Harian Sinode yaitu rapat yang diselenggarakan dalam rangka menetapkan kebijakan Badan Pekerja Harian Sinode untuk melaksanakan panggilan gereja secara menyeluruh.</p>
                <p style="margin-left: 2em;">g. Rapat Wilayah yaitu rapat yang diselenggarakan dalam rangka membahas pelaksanaan keputusan Sidang Sinode dan pengembangan kerja sama Jemaat-jemaat dalam lingkungan wilayah.</p>
                <p style="margin-left: 2em;">h. Rapat lainnya yang diselenggarakan oleh Majelis Jemaat, Badan Pekerja Harian Sinode, Badan Pelaksana Wilayah,Komisi-komisi dan Badan-badan Pelayanan di lingkungan GEKINDO.</p>

                <h3 style="text-align: center;">BAB IX</h3>
                <h4 style="text-align: center;">KEPEMIMPINAN</h4>

                <h5 id="adp15" style="text-align: center;">PASAL 15</h5>
                <h5 style="text-align: center;">Azas Kepemimpinan</h5>

                <p style="text-align: center;">Azas kepemimpinan GEKINDO adalah kepemimpinan persekutuan yang bersifat kolektif dan bersumber pada kepemimpinan Yesus Kristus sebagai kepala gereja.</p>

                <h5 id="adp16" style="text-align: center;">PASAL 16</h5>
                <h5 style="text-align: center;">Pemimpin</h5>
                <p> 1. Pemimpin</p>
                <p style="margin-left: 2em;">a. Pemimpin Gereja adalah Yesus Kristus yang adalah kepala Gereja</p>
                <p style="margin-left: 2em;">b. Pemimpin jemaat adalah Majelis jemaat dan Gembala jemaat</p>
                <p style="margin-left: 2em;">c. Pemimpin Wilayah adalah Badan Pelaksana Wilayah</p>
                <p style="margin-left: 2em;">d. Pemimpin sinode adalah Badan Pekerja Harian Sinode</p>
                <p>2. Majelis Jemaat adalah Wadah para pelayan jemaat yang dipimpin oleh pendeta jemaat.</p>
                <p>3. Majelis Wilayah adalah wadah berhimpun para pelayan perutusan dari jemaat-jemaat dan BPMW</p>
                <p>4. Badan Pekerja Harian Sinode adalah kelengkapan pelayanan yang melaksanakan kepemimpinan GEKINDO atas mandat sidang sinode.</p>
                <p>5. Majelis sinode adalah wadah berhimpun perutusan majelis jemaat dan koordinator wilayah dan Badan Pekerja Harian Sinode.</p>

                <h3 style="text-align: center;">BAB X</h3>
                <h4 style="text-align: center;"> MAJELIS PERTIMBANGAN</h4>

                <h5 id="adp17" style="text-align: center;">PASAL 17</h5>
                <h5 style="text-align: center;">Majelis Pertimbangan</h5>
                <p style="text-align: center;">Majelis Pertimbangan adalah lembaga yang memberi pertimbangan kepada Badan Pekerja Harian Sinode berkaitan dengan kehidupan GEKINDO secara sinodal baik diminta ataupun tidak diminta.</p>

                <h3 style="text-align: center;">BAB XI</h3>
                <h4 style="text-align: center;">PERBENDAHARAAN DAN PENGAWAS PERBENDAHARAAN</h4>

                <h5 id="adp18" style="text-align: center;">PASAL 18</h5>
                <h5 style="text-align: center;">Perbendaharaan</h5>
                <p>1. Perbendaharaan GEKINDO meliputi seluruh harta milik GEKINDO dan hasil pengelolaannya yang terdiri dari barang bergerak, barang tidak bergerak, uang dan surat-surat berharga, baik yang dibeli dan atau dibiayai oleh BPH Sinode serta dikelola oleh BPH Sinode dan atau diperuntukkan bagi kepentingan pelayanan di jemaat setempat.</p>
                <p>2. Semua barang bergerak dan tidak bergerak yang dibeli dan dibiayai oleh jemaat setempat atau dihibahkan dengan sah kepada jemaat setempat adalah milik inventaris GEKINDO dan dikelola oleh Majelis jemaat setempat, serta menjadi tanggung jawab BPH Sinode dalam pengelolaannya kepentingan pelayanan di jemaat setempat.</p>
                <p>3. Semua barang bergerak dan tidak bergerak milik pejabat BPH Sinode/ Gembala Jemaat yang berasal dari pembelian oleh pejabat BPH GEKINDO/ Gembala Jemaat secara pribadi, atau dari hasil pelayanan, pemberian atau hibah dengan sah kepada pejabat BPH GEKINDO/ Gembala jemaat yang digunakan bagi pekerjaan pelayanan, adalah merupakan milik pribadi pejabat BPH GEKINDO/ Gembala jemaat.</p>

                <h5 id="adp19" style="text-align: center;">PASAL 19</h5>
                <h5 style="text-align: center;">Pengawas Perbendaharaan</h5>
                <p style="text-align: center;">Pengawas Perbendaharaan adalah lembaga yang dibentuk dalam rangka melakukan fungsi pengawasan ketertiban pengelolaan dan pendayagunaan harta kekayaan GEKINDO di semua aras.</p>

                <h3 style="text-align: center;">BAB XII</h3>
                <h4 style="text-align: center;">ATRIBUT GEKINDO</h4>

                <h5 id="adp20" style="text-align: center;">PASAL 20</h5>
                <h5 style="text-align: center;">Atribut GEKINDO</h5>
                <p>1. GEKINDO mempunyai dan menggunakan atribut sebagai tanda kebersamaan dalam persekutuan, kesaksian, pengajaran dan pelayanan.</p>
                <p>2. Atribut GEKINDO berupa lambang, stempel, atribut ibadah, papan nama, pakaian jabatan dan lain-lain yang diatur oleh Badan Pekerja Harian Sinode.</p>

                <h3 style="text-align: center;">BAB XIII</h3>
                <h4 style="text-align: center;">HUBUNGAN KERJA SAMA</h4>

                <h5 id="adp21" style="text-align: center;">PASAL 21</h5>
                <h5 style="text-align: center;">Hubungan Kerja sama</h5>
                <p style="text-align: center;">GEKINDO terpanggil untuk mengadakan hubungan kerja sama baik di dalam negeri maupun di luar negeri dalam segala bentuk kegiatan yang tidak bertentangan dengan Anggaran Dasar.</p>

                <h3 style="text-align: center;">BAB XIV</h3>
                <h4 style="text-align: center;">PENUTUP</h4>

                <h5 id="adp22" style="text-align: center;">PASAL 22</h5>
                <h5 style="text-align: center;">Perubahan Anggaran Dasar</h5>
                <p>1. Perubahan yang mencakup penambahan dan penghapusan atas bagian atau seluruh Anggaran Dasar ini hanya dapat diadakan oleh Sidang Sinode yang dihadiri dan disetujui oleh paling sedikit ¾ (tiga per empat) dari jumlah Jemaat-jemaat GEKINDO.</p>
                <p>2. Usul untuk pengubahan Anggaran Dasar hanya dapat dilakukan oleh Badan Pekerja Harian Sinode atau 5 (lima) Jemaat melalui Badan Pekerja Harian Sinode. Usul Perubahan ini harus sudah diterima oleh Jemaat-jemaat paling lambat 6 (enam) bulan sebelum Sidang Sinode, kecuali untuk hal-hal yang mendesak.</p>

                <h5 id="adp23" style="text-align: center;">PASAL 23</h5>
                <h5 style="text-align: center;">Waktu Pemberlakuan Anggaran Dasar</h5>
                <p style="text-align: center;">Anggaran Dasar ini berlaku terhitung sejak tanggal disahkan dan diberlakukan pada Sidang Sinode tanggal 22 Maret 2021 melalui Virtual dengan mengunakan Link Zoom, dan dengan Meeting ID : 846 2369 5681 dan Passcode : 033470, bertempat di Jemaat GEKINDO Pondok Hijau Permai Bekasi Timur.</p>

                <h5 id="adp24" style="text-align: center;">PASAL 24</h5>
                <h5 style="text-align: center;">Ketentuan Lebih Lanjut</h5>
                <p style="text-align: center;">Hal-hal yang menyangkut prosedur pelaksanaan dari Anggaran Dasar diatur dalam Anggaran Rumah Tangga.</p>

                <!-- ART START -->
                <h2 style="text-align: center;">Anggaran Rumah Tangga (ART)</h2>
                <h4 style="text-align: center;">MUKADIMAH</h4>

                <h3 style="text-align: center;">BAB I</h3>
                <h4 style="text-align: center;">NAMA, WAKTU BERDIRI DAN WILAYAH KEBERADAAN</h4>

                <h5 id="artp1" style="text-align: center;">PASAL 1</h5>
                <h5 style="text-align: center;">Nama</h5>
                <p>1. Nama Gereja Keesaan Injili Indonesia yang disingkat GEKINDO sesuai dengan Anggaran Dasar.</p>
                <p>2. Nama Jemaat disesuaikan dengan nama jalan, nama wilayah, atau nama tempat umum dipakai oleh masyarakat atau nama yang disepakati.</p>

                <h5 id="artp2" style="text-align: center;">PASAL 2</h5>
                <h5 style="text-align: center;">Waktu</h5>
                <p>1. GEKINDO didirikan untuk waktu yang tidak terbatas.</p>
                <p>2. GEKINDO secara bersama dengan Gereja-gereja Kristen lainnya di Indonesia berdiri dan bersaksi selama waktu yang tidak ditentukan.</p>

                <h5 id="artp3" style="text-align: center;">PASAL 3</h5>
                <h5 style="text-align: center;">Wilayah</h5>
                <p>1. GEKINDO melaksanakan tugasnya di wilayah Indonesia dan beberapa negara di dunia.</p>
                <p>2. GEKINDO terbuka bagi semua orang dari berbagai suku bangsa yang tinggal di wilayah Indonesia serta beberapa negara di dunia dan terpanggil untuk mewujudkan hidup persekutuan, pelayanan dan kesaksiannya di wilayah ini.</p>
                <p>3. Dalam rangka melaksanakan tugas dan panggilannya GEKINDO mengembangkan pemahaman akan budaya masyarakat di wilayahnya.</p>

                <h3 style="text-align: center;">BAB II</h3>
                <h4 style="text-align: center;">PENGAKUAN DAN PANGGILAN</h4>

                <h5 id="artp4" style="text-align: center;">PASAL 4</h5>
                <h5 style="text-align: center;">Pengakuan</h5>
                <p>1. GEKINDO menyatakan pengakuannya melalui anggota jemaatnya baik sebagai persekutuan maupun pribadi-pribadi.</p>
                <p>2. Pengakuan itu dilaksanakan melalui panggilan hidup seluruh dan setiap anggota jemaat.</p>
                <p>3. GEKINDO menerima dan mengakui Pengakuan Iman Rasuli :</p>
                <p style="margin-left: 2em;">a. Aku percaya kepada Allah Bapa yang Maha Kuasa khalik langit dan bumi.</p>
                <p style="margin-left: 2em;">b. Dan kepada Yesus Kristus anak-Nya yang Tunggal, Tuhan kita.</p>
                <p style="margin-left: 2em;">c. Yang dikandung daripada Roh Kudus, lahir dari Anak Dara Maria.</p>
                <p style="margin-left: 2em;">d. Yang menderita dibawah pemerintahan Pontius Pilatus, disalibkan, mati dan dikuburkan, turun ke dalam kerajaan maut.</p>
                <p style="margin-left: 2em;">e. Pada hari yang ketiga bangkit pula dari antara orang mati.</p>
                <p style="margin-left: 2em;">f. Naik ke Sorga, duduk di sebelah kanan Allah Bapa yang Maha Kuasa.</p>
                <p style="margin-left: 2em;">g. Dan akan datang dari sana untuk menghakimi orang yang hidup dan yang mati.</p>
                <p style="margin-left: 2em;">h. Aku percaya kepada Rohul Kudus.</p>
                <p style="margin-left: 2em;">i. Gereja yang kudus dan Am, persekutuan orang kudus.</p>
                <p style="margin-left: 2em;">j. Pengampunan dosa.</p>
                <p style="margin-left: 2em;">k. Kebangkitan daging.</p>
                <p style="margin-left: 2em;">l. Dan hidup yang kekal.</p>
                <p>4. Dalam persekutuan dengan gereja dari segala abad dan tempat GEKINDO juga menghayati pengakuan iman lainnya sesuai dengan pokok-pokok : Pengakuan Iman Nicea-Konstantinopel, Pengakuan Iman Athanasius, dan Pemahaman Bersama Iman Kristen – Persekutuan Gereja-gereja di Indonesia (PBIK-PGI)</p>
                <p>5. Alkitab adalah Firman Allah yang di ilhamkan tanpa salah dan merupakan otoritas tertinggi dalam iman dan seluruh segi kehidupan manusia, merupakan sumber pengajaran Gereja.</p>

                <h5 id="artp5" style="text-align: center;">PASAL 5</h5>
                <h5 style="text-align: center;">Panggilan Bersekutu</h5>
                <p>1. Seluruh dan setiap anggota jemaat terpanggil untuk bersekutu dengan Tuhan dan sesama orang percaya, yaitu tindakan nyata untuk memungkinkan berlangsungnya relasi dengan Tuhan dan sesama orang percaya dan dalam keterbukaan dengan sesama manusia.</p>
                <p>2. Persekutuan ini dilaksanakan antara lain melalui :</p>
                <p style="margin-left: 2em;">a. Hidup beribadah yang dilakukan dalam kehidupan pribadi dan kehidupan kebersamaan dalam lingkup jemaat, sinode maupun wadah-wadah oikumenis.</p>
                <p style="margin-left: 2em;">b. Hidup yang saling menghargai dan saling menerima dengan sesama manusia baik pribadi maupun kelompok.</p>
                <p style="margin-left: 2em;">c. Keikutsertaan dalam bentuk-bentuk kerjasama yang bertujuan untuk mendatangkan kebaikan dan kebenaran bagi sesama manusia.</p>

                <h5 id="artp6" style="text-align: center;">PASAL 6</h5>
                <h5 style="text-align: center;">Panggilan Melayani</h5>
                <p>1. Seluruh dan setiap anggota jemaat terpanggil untuk melayani Tuhan dan sesama, yaitu tindakan nyata untuk memungkinkan kasih Kristus dialami oleh sesama baik didalam maupun diluar lingkungan gereja.</p>
                <p>2. Pelayanan ini dilaksanakan antara lain melalui :</p>
                <p style="margin-left: 2em;">a. Hidup yang saling membantu diantara sesama anggota jemaat, sesama Jemaat GEKINDO maupun sesama gereja Tuhan.</p>
                <p style="margin-left: 2em;">b. Berbagai tindakan yang membantu sesama manusia sebagai pribadi atau kelompok dalam memenuhi kebutuhan seutuhnya yang mendatangkan damai sejahtera.</p>

                <h5 id="artp7" style="text-align: center;">PASAL 7</h5>
                <h5 style="text-align: center;">Panggilan Bersaksi</h5>
                <p>1. Seluruh dan setiap anggota jemaat terpanggil untuk bersaksi dihadapan Tuhan dan sesama, yaitu pernyataan iman orang percaya yang memungkinkan orang mengenal kasih dan keselamatan dalam Yesus Kristus yang disediakan untuk semua manusia.</p>
                <p>2. Kesaksian ini dilaksanakan antara lain :</p>
                <p style="margin-left: 2em;">a. Hidup yang mencerminkan kasih Kristus baik sebagai pribadi maupun persekutuan.</p>
                <p style="margin-left: 2em;">b. Berbagai tindakan yang menyatakan kasih dan keselamatan dari Kristus dengan perkataan dan perbuatan.</p>

                <h5 id="artp8" style="text-align: center;">PASAL 8</h5>
                <h5 style="text-align: center;">Pembinaan</h5>
                <p>1. Pembinaan adalah upaya yang dilakukan secara terarah, terencana dan terpadu agar tiap-tiap anggota jemaat dimampukan untuk mewujudkan imannya melalui persekutuan, pelayanan, kesaksian dalam lingkungan gereja dan masyarakat.</p>
                <p>2. Pembinaan dilakukan dalam :</p>
                <p style="margin-left: 2em;">a. Kebaktian</p>
                <p style="margin-left: 2em;">b. Sakramen</p>
                <p style="margin-left: 2em;">c. Penggembalaan</p>
                <p style="margin-left: 2em;">d. Katekisasi</p>
                <p style="margin-left: 2em;">e. Pembinaan lain sesuai dengan tujuan pembinaan.</p>

                <h5 id="artp9" style="text-align: center;">PASAL 9</h5>
                <h5 style="text-align: center;">Pengembangan</h5>
                <p>1. Seluruh dan setiap anggota jemaat terpanggil untuk mengembangkan setiap berkat dan anugerah Tuhan dalam berbagai bentuk tindakan nyata, dalam keterbukaan dengan sesama untuk kemuliaan Tuhan.</p>
                <p>2. Berkat dan anugerah Tuhan adalah berbagai bentuk pemberian Tuhan antara lain potensi : pribadi, lembaga, harta milik, perangkat kerja dan lain sebagainya.</p>

                <h3 style="text-align: center;">BAB III</h3>
                <h4 style="text-align: center;">ASAS BERMASYARAKAT, BERBANGSA DAN BERNEGARA</h4>

                <h5 id="artp10" style="text-align: center;">PASAL 10</h5>
                <h5 style="text-align: center;">Hidup Bermasyarakat, Berbangsa dan Bernegara</h5>
                <p>1. GEKINDO hadir di dunia dalam rangka mewujudkan pengakuan dan panggilannya sebagaimana dimaksud pada Bab. II.</p>
                <p>2. GEKINDO hadir ditengah masyarakat, bangsa dan negara yang berdasarkan Pancasila, karena itu GEKINDO menerima Pancasila sebagai asas dalam hidup bermasyarakat, berbangsa dan bernegara.</p>
                <p>3. Dengan menerima Pancasila, GEKINDO memiliki tanggungjawab untuk :</p>
                <p style="margin-left: 2em;">a. Melaksanakan kesepakatan, ketentuan dan aturan-aturan yang dibangun atas dasar falsafah Pancasila dan Undang-Undang Dasar 1945.</p>
                <p style="margin-left: 2em;">b. Berperan secara positif, kritis, kreatif, dan realistis dalam memberi landasan moral, etik dan spiritual bagi pembangunan masyarakat Pancasilais.</p>

                <h3 style="text-align: center;">BAB IV</h3>
                <h4 style="text-align: center;">PERSEKUTUAN</h4>

                <h5 id="artp11" style="text-align: center;">PASAL 11</h5>
                <h5 style="text-align: center;">Bentuk- bentuk Kebaktian</h5>
                <p>1. Kebaktian jemaat yaitu kebaktian yang merupakan tanda kehadiran persekutuan orang percaya (jemaat) yang terdiri dari :</p>
                <p style="margin-left: 2em;">a. Kebaktian Minggu : kebaktian umum anggota jemaat yang diselenggarakan pada hari Minggu.</p>
                <p style="margin-left: 2em;">b. Kebaktian hari raya gerejawi : Natal, Jumat Agung, Paskah, Kenaikan, Pentakosta.</p>
                <p>2. Kebaktian khusus yaitu kebaktian yang diselenggarakan secara khusus sehubungan dengan :</p>
                <p style="margin-left: 2em;">a. Kategori warga tertentu, antara lain : rumah tangga, anak, remaja, pemuda, wanita dan pria kaum bapak.</p>
                <p style="margin-left: 2em;">b. Kategori profesi tertentu, antara lain :mahasiswa , pelayan kesehatan, TNI, Polri, pendidik.</p>
                <p style="margin-left: 2em;">c. Hari-hari peringatan, antara lain : kebaktian hari ulang tahun gereja, kebaktian peringatan hari raya nasional, kebaktian peringatan hari raya oikumenis.</p>
                <p style="margin-left: 2em;">d. Peristiwa-peristiwa tertentu, antara lain : kebaktian pernikahan, kebaktian pemakaman, kebaktian pengucapan syukur, kebaktian penahbisan pendeta,kebaktian emeritasi pendeta, kebaktian pembukaan / penutupan persidangan gereja.</p>
                <p style="margin-left: 2em;">e. Kebaktian lain yaitu kebaktian yang tidak diatur langsung oleh gereja namun dilaksanakan dalam kerangka mewujudkan imamat am orang percaya, antara lain : kebaktian di setiap keluarga, kebaktian dalam berbagai kegiatan.</p>

                <h5 id="artp12" style="text-align: center;">PASAL 12</h5>
                <h5 style="text-align: center;">Penanggung Jawab Kebaktian</h5>
                <p>1. Tanggung jawab penyelenggaraan kebaktian jemaat dan kebaktian khusus di lingkungan jemaat adalah Majelis Jemaat.</p>
                <p>2. Tanggung jawab penyelenggaraan kebaktian khusus dalam rangka kebersamaan sinodal adalah Badan Pekerja Harian Sinode.</p>
                <p>3. Tanggung jawab penyelenggaran kebaktian lain ada pada pimpinan lembaga/ pihak yang menyelenggarakan kebaktian tersebut dalam pengawasan Majelis Jemaat atau Badan Pekerja Harian Sinode.</p>

                <h5 id="artp13" style="text-align: center;">PASAL 13</h5>
                <h5 style="text-align: center;">Tata Kebaktian</h5>
                <p>1. Dalam rangka pelaksanaan kebaktian yang tertib dan teratur, maka digunakan tata kebaktian yang mencerminkan teologi GEKINDO.</p>
                <p>2. Dalam tanggung jawabnya, Badan Pekerja Harian Sinode membuat tata kebaktian yang digunakan oleh seluruh Jemaat dalam jajaran GEKINDO.</p>
                <p>3. Dalam tanggung jawabnya, Majelis Jemaat membuat tata kebaktian yang belum diatur oleh Badan Pekerja Harian Sinode untuk diberlakukan di lingkungan jemaatnya.</p>

                <h5 id="artp14" style="text-align: center;">PASAL 14</h5>
                <h5 style="text-align: center;">Pelaksanaan Baptisan Kudus</h5>
                <p>1. Baptisan kudus diselenggarakan dalam tanggung jawab Majelis Jemaat dan dilayani oleh pendeta dengan percikan air. Baptisan dilakukan dalam nama Allah Bapa, Anak, dan Roh Kudus.</p>
                <p>2. GEKINDO juga mengakui dan menerima Baptisan Selam serta dapat melayani Baptisan Selam.</p>
                <p>3. Baptisan kudus dilakukan dalam Kebaktian Minggu dengan mempergunakan tata kebaktian yang ditetapkan Badan Pekerja Harian Sinode.</p>
                <p>4. Bagi mereka yang keadaan fisiknya tidak memungkinkan datang ke rumah ibadah, dilayani secara khusus. Pelayanan secara khusus ini dilakukan dalam rangka baptisan yang dilakukan dalam Kebaktian Minggu.</p>
                <p>5. Baptisan Kudus dapat dilakukan bukan pada Kebaktian Minggu dan tidak di Gereja dengan alasan tertentu dan disetujui oleh Majelis Jemaat.</p>
                <p>6. Kepada yang dibaptis diberikan surat baptis.</p>
                <p>7. Dalam rangka kehidupan oikumenis maka:</p>
                <p style="margin-left: 2em;">a. GEKINDO terbuka untuk melayani baptisan kudus bagi anggota gereja lain yang seajaran dengan GEKINDO dengan surat permohonan pelayanan dari gereja yang bersangkutan.</p>
                <p style="margin-left: 2em;">b. GEKINDO mengakui sahnya baptisan oleh gereja lain yang dilakukan dalam nama Allah Bapa,Anak, dan Roh Kudus.</p>
                <p style="margin-left: 2em;">c. GEKINDO terbuka menerima pelayanan baptisan kudus oleh pendeta dari gereja lain yang seajaran dengan GEKINDO dan dilakukan dengan tata cara GEKINDO.</p>
                <p style="margin-left: 2em;">d. Pendeta GEKINDO terbuka untuk melayani baptisan kudus di gereja lain yang seajaran dengan GEKINDO.</p>

                <h5 id="artp15" style="text-align: center;">PASAL 15</h5>
                <h5 style="text-align: center;">Syarat Baptisan Kudus</h5>
                <p>1. GEKINDO menyelenggarakan baptisan kudus atas dasar :</p>
                <p style="margin-left: 2em;">a. Pengakuan iman dan janji orang tua yang bersangkutan disebut baptisan anak.</p>
                <p style="margin-left: 2em;">b. Pengakuan iman dan janji yang bersangkutan disebut baptisan dewasa.</p>
                <p>2. Syarat baptisan anak :</p>
                <p style="margin-left: 2em;">a. Salah satu orang tuanya adalah anggota sidi jemaat yang bersangkutan dan tidak kehilangan haknya sehubungan dengan ketentuan penggembalaan khusus.</p>
                <p style="margin-left: 2em;">b. Orang tuanya adalah anggota sidi dari gereja lain yang seajaran dengan GEKINDO dengan surat permohonan pelayanan dari gereja yang bersangkutan.</p>
                <p style="margin-left: 2em;">c. Mengikuti persiapan / pembinaan yang diselenggarakan Majelis Jemaat.</p>
                <p>3. Syarat baptisan dewasa :</p>
                <p style="margin-left: 2em;">a. Berusia diatas 17 ( tujuh belas ) tahun atau sudah menikah.</p>
                <p style="margin-left: 2em;">b. Mengikuti persiapan / pembinaan yang dilaksanakan oleh Majelis Jemaat.</p>

                <h5 id="artp16" style="text-align: center;">PASAL 16</h5>
                <h5 style="text-align: center;">Ketentuan Penyelenggaraan Baptisan Kudus.</h5>
                <p>1. Rencana penyelenggaraan baptisan kudus diumumkan kepada jemaat dalam Kebaktian Minggu dengan maksud diketahui secara dini guna memberi kesempatan pendaftaran kepada anggota jemaat untuk mengikuti baptisan kudus tersebut.</p>
                <p>2. Majelis Jemaat mengadakan percakapan dan pertemuan dengan orang tua yang hendak membawa anaknya untuk dibaptiskan dan calon baptis dewasa yang hendak menyatakan pengakuan iman dan baptisan dewasa.</p>
                <p style="margin-left: 2em;">a. Percakapan penggembalaan bagi orang tua meliputi :</p>
                <p style="margin-left: 4em;">- Persyaratan baptisan anak.</p>
                <p style="margin-left: 4em;">- Tanggung jawab orang tua Kristen.</p>
                <p style="margin-left: 2em;">b. Percakapan penggembalaan bagi calon baptisan dewasa meliputi :</p>
                <p style="margin-left: 4em;">- Persyaratan baptisan dewasa.</p>
                <p style="margin-left: 4em;">- Tanggung jawab sebagai anggota sidi jemaat.</p>
                <p style="margin-left: 2em;">c. Pertemuan untuk persiapan teknis pelaksanaan baptisan.</p>
                <p>3. Nama-nama calon baptisan dewasa diwartakan dalam dua Kebaktian Minggu secara berturut-turut. Nama anak-anak yang akan dibaptis beserta nama-nama orang tuanya diwartakan dalam satu Kebaktian Minggu. Pewartaan dilakukan dengan maksud untuk memberi kesempatan pada jemaat untuk mendoakan dan menyampaikan tanggapannya pada Majelis Jemaat. Jika ada keberatan yang disampaikan kepada Majelis Jemaat , Majelis Jemaat dapat meneliti kebenaran atas hal itu untuk menentukan dapat tidaknya yang bersangkutan menerima baptisan.</p>

                <h5 id="artp17" style="text-align: center;">PASAL 17</h5>
                <h5 style="text-align: center;">Katekisasi</h5>
                <p>1. Katekisasi adalah sarana pembinaan untuk memperlengkapi seseorang dengan pengetahuan dasar dan penghayatan firman Tuhan agar dapat bersikap dan berkelakuan sesuai dengan iman Kristen.</p>
                <p>2. Katekisasi diselenggarakan oleh Majelis Jemaat dengan menggunakan panduan yang ditetapkan oleh Badan Pekerja Harian Sinode.</p>
                <p>3. Katekisasi diselenggarakan di dalam tanggung jawab Majelis Jemaat.</p>

                <h5 id="artp18" style="text-align: center;">PASAL 18</h5>
                <h5 style="text-align: center;">Sidi</h5>
                <p>1. Pengakuan iman/sidi adalah tindakan sadar dari seseorang yang mengakui imannya secara pribadi di hadapan Tuhan dan jemaat-Nya.</p>
                <p>2. Pengakuan iman / sidi adalah tindakan oleh anggota baptis atau seseorang yang akan menerima baptisan dewasa.</p>
                <p>3. Dalam hal seseorang adalah anggota baptis GEKINDO jemaat lain / gereja lain, Pengakuan iman / sidi dilakukan berdasarkan surat permohonan Majelis Jemaat yang bersangkutan. Status keanggotaan yang bersangkutan tetap berada di jemaat asalnya.</p>
                <p>4. Untuk dapat melakukan pengakuan iman / sidi seseorang harus menjalani katekisasi dan berusia diatas 17 (tujuh belas) tahun atau sudah menikah, serta telah mengikuti percakapan penggembalaan.</p>
                <p>5. Pengakuan iman / sidi dilaksanakan dalam suatu Kebaktian Minggu dengan mempergunakan tata kebaktian yang telah ditetapkan oleh Badan Pekerja Harian Sinode.</p>
                <p>6. Bagi yang melakukan pengakuan iman / sidi diberikan surat pengakuan iman / sidi.</p>
                <p>7. GEKINDO mengakui sahnya pengakuan iman / sidi yang dilakukan gereja lain yang seajaran.</p>

                <h5 id="artp19" style="text-align: center;">PASAL 19</h5>
                <h5 style="text-align: center;">Pelaksanaan Perjamuan Kudus</h5>
                <p>1. Perjamuan kudus dalam lingkungan GEKINDO dilaksanakan oleh dan berada dalam tanggung jawab Majelis Jemaat. Pelayanan perjamuan kudus dilayani oleh pendeta dengan menggunakan roti/hosti dan anggur.</p>
                <p>2. Perjamuan kudus di jemaat dirayakan sekurang-kurangnya 12 kali setahun, yaitu :</p>
                <p style="margin-left: 2em;">a. Perjamuan kudus dalam rangka Jumat Agung.</p>
                <p style="margin-left: 2em;">b. Perjamuan kudus dalam rangka awal bulan.</p>
                <p style="margin-left: 2em;">c. Perjamuan kudus dalam rangka Pekabaran Injil Indonesia dan Hari Perjamuan kudus sedunia.</p>
                <p style="margin-left: 2em;">d. Perjamuan kudus dalam rangka akhir tahun.</p>
                <p>3. Perjamuan kudus dapat dirayakan sehubungan dengan kegiatan-kegiatan khusus dalam rangka kebersamaan GEKINDO maupun oikumenis.</p>
                <p>4. Perjamuan kudus dirayakan dalam kebaktian jemaat dengan menggunakan tata kebaktian yang ditetapkan oleh Badan Pekerja Harian Sinode.</p>
                <p>5. Bagi anggota jemaat yang keadaan fisiknya tidak dapat datang ke rumah ibadah, dilakukan pelayanan Perjamuan kudus secara khusus. Pelayanan khusus ini dilakukan dalam rangka perjamuan kudus yang dilaksanakan di rumah ibadah.</p>
                <p>6. GEKINDO terbuka untuk menerima pelayanan perjamuan kudus yang dilayani oleh pendeta gereja lain yang seajaran dengan menggunakan Anggaran Dasar GEKINDO.</p>
                <p>7. Pendeta GEKINDO terbuka untuk melayani perjamuan kudus di gereja lain.</p>

                <h5 id="artp20" style="text-align: center;">PASAL 20</h5>
                <h5 style="text-align: center;">Peserta Perjamuan Kudus</h5>
                <p>Yang diperkenankan mengikuti perjamuan kudus adalah :</p>
                <p>1. Anggota sidi GEKINDO jemaat yang bersangkutan.</p>
                <p>2. Anggota sidi GEKINDO jemaat lain atau gereja lain dengan mengisi buku daftar tamu.</p>
                <p>3. Anggota sidi yang dimaksud adalah anggota sidi yang tidak kehilangan haknya sehubungan dengan ketentuan penggembalaan khusus.</p>

                <h5 id="artp21" style="text-align: center;">PASAL 21</h5>
                <h5 style="text-align: center;">Persiapan Perjamuan Kudus</h5>
                <p>1. Sebelum dilaksanakan perjamuan kudus, Majelis Jemaat mengumumkan waktu diselenggarakannya perayaan sakramen perjamuan kudus itu kepada jemaat dalam dua Kebaktian Minggu berturut-turut.</p>
                <p>2. Majelis Jemaat mempersiapkan anggota sidi jemaatnya untuk meneguhkan pemahaman dan penghayatan perayaan perjamuan kudus.</p>

                <h5 id="artp22" style="text-align: center;">PASAL 22</h5>
                <h5 style="text-align: center;">Pelaksanaan Penggembalaan</h5>
                <p>1. Penggembalaan dilaksanakan oleh tiap-tiap anggota jemaat selaku imamat am dan oleh Majelis Jemaat dan Badan Pekerja Harian Sinode selaku pejabat khusus gerejawi.</p>
                <p>2. Penggembalaan yang dilakukan oleh anggota jemaat diwujudkan melalui hidup yang saling memperhatikan, mendukung dan menasehati diantara sesama anggota jemaat.</p>
                <p>3. Penggembalaan yang dilakukan oleh Majelis Jemaat diwujudkan antara lain melalui :</p>
                <p style="margin-left: 2em;">a. Perkunjungan kepada anggota jemaat,</p>
                <p style="margin-left: 2em;">b. Percakapan penggembalaan yang dilakukan dalam rangka baptisan, pengakuan iman, pernikahan dan membantu anggota jemaat dalam menghadapi pergumulannya.</p>
                <p style="margin-left: 2em;">c. Khotbah.</p>
                <p>4. Penggembalaan yang dilakukan oleh Badan Pekerja Harian Sinode diwujudkan antara lain melalui :</p>
                <p style="margin-left: 2em;">a. Perkunjungan kepada jemaat, pos PI dengan sepengetahuan Majelis Jemaat dan pendeta.</p>
                <p style="margin-left: 2em;">b. Percakapan penggembalaan dalam rangka persiapan menjadi pendeta, persiapan peresmian jemaat dan membantu pendeta atau Majelis Jemaat dalam menghadapi pergumulannya.</p>
                <p style="margin-left: 2em;">c. Surat penggembalaan untuk pendeta atau jemaat.</p>

                <h5 id="artp23" style="text-align: center;">PASAL 23</h5>
                <h5 style="text-align: center;">Pelaksanaan Penggembalaan Khusus Bagi Anggota Jemaat</h5>
                <p>Dengan tidak mengabaikan tugas imamat am tiap anggota jemaat, penggembalaan khusus ditetapkan dalam rapat Majelis Jemaat dan dilaksanakan melalui proses dan tahapan sebagai berikut :</p>
                <p>1. Anggota jemaat tersebut dinasehati / diperingatkan oleh seorang anggota Majelis Jemaat.</p>
                <p>2. Bila proses tahap satu tidak berhasil, anggota jemaat tersebut diperingatkan oleh dua atau tiga orang anggota Majelis Jemaat.</p>
                <p>3. Bila proses tahap dua tidak berhasil, anggota jemaat tersebut diundang untuk percakapan penggembalaan dalam rapat Majelis Jemaat .</p>
                <p>4. Bila proses tahap tiga tidak berhasil, diwartakan dalam dua kebaktian Minggu berturut – turut tanpa menyebut namanya supaya jemaat turut mendoakannya.</p>
                <p>5. Bila proses tahap empat tidak berhasil, diwartakan dalam dua Kebaktian Minggu berturut-turut dengan menyebut namanya supaya jemaat turut membantu dalam upaya penggembalaannya sambil tetap mendoakannya.</p>
                <p>6. Bila proses dalam tahap lima tidak membawa hasil, maka Majelis Jemaat menetapkan bahwa yang bersangkutan kehilangan haknya untuk mengikuti Perjamuan Kudus, diberkati pernikahannya, menyerahkan anaknya untuk dibaptis, memilih anggota Majelis Jemaat dan dipilih sebagai anggota Majelis Jemaat serta pengurus badan pembantu baik di jemaat maupun sinode. Keputusan ini diberitahukan secara khusus kepada yang bersangkutan dan diwartakan dalam dua Kebaktian Minggu berturut-turut.</p>
                <p style="margin-left: 2em;">a. Bila dalam tahap-tahap penggembalaan khusus di atas, anggota jemaat tersebut menyatakan penyesalannya di hadapan Majelis Jemaat serta menunjukkan sikap dan perilaku yang sesuai dengan pertobatannya, maka penggembalaan khusus dinyatakan berakhir dan hak-haknya selaku anggota jemaat dipulihkan.</p>
                <p style="margin-left: 2em;">b. Bila semua upaya, proses dan tahapan tersebut di atas telah ditempuh dan tidak membawa hasil, maka anggota jemaat tersebut kehilangan keanggotaannya atas keputusan Majelis Jemaat. Sebelum Majelis Jemaat mengambil tindakan ini, jika perlu dapat meminta pertimbangan Badan Pekerja Harian Sinode.</p>

                <h5 id="artp24" style="text-align: center;">PASAL 24</h5>
                <h5 style="text-align: center;">Pelaksanaan Penggembalaan Khusus Bagi Anggota Jemaat yang Menjabat Tugas Pelayanan Gereja</h5>
                <p>1. Dalam hal anggota jemaat itu adalah anggota Majelis Jemaat atau anggota badan pembantu di jemaat atau utusan jemaat pada lembaga lain, maka penggembalaan khusus atasnya dilakukan sesuai dengan pengaturan penggembalaan khusus kepada anggota jemaat sesuai Pasal 23 dengan tambahan :</p>
                <p style="margin-left: 2em;">a. Jika tiba pada ketentuan pasal 23 ayat 4 maka jabatannya / status pengutusannya untuk sementara dibekukan tanpa diwartakan. Adapun bila dalam tahap ini kemudian anggota jemaat tersebut menyatakan penyesalannya di hadapan Majelis Jemaat serta ,menunjukkan sikap dan perilaku yang sesuai dengan pertobatannya, maka penggembalaan khusus dinyatakan berakhir dan jabatan /status pengutusannya dipulihkan.</p>
                <p style="margin-left: 2em;">b. Jika tiba pada ketentuan pasal 23 ayat 5 maka jabatan atau status penugasannya ditanggalkan dengan keputusan Majelis Jemaat. Keputusan tersebut diwartakan kepada jemaat dan lembaga terkait.</p>
                <p>2. Dalam hal anggota jemaat itu adalah anggota Badan Pekerja Harian Sinode atau anggota badan pembantu di sinode atau utusan GEKINDO pada lembaga lain, maka penggembalaan khusus atasnya ditetapkan dan dilaksanakan oleh Majelis Jemaat seperti pengaturan penggembalaan khusus terhadap anggota jemaat sesuai pasal 23, dengan tambahan :</p>
                <p style="margin-left: 2em;">a. Jika tiba pada ketentuan pasal 23 ayat 3 maka persoalannya dibicarakan bersama Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">b. Jika tiba pada ketentuan pasal 23 ayat 4 maka jabatannya atau status pengutusannya untuk sementara dibekukan oleh Badan Pekerja Harian Sinode, dengan tidak mengumumkannya. Adapun bila dalam tahap ini kemudian anggota jemaat tersebut menyatakan penyesalan dan pertobatannya serta menunjukkan sikap dan perilaku yang sesuai dengan pertobatannya dihadapan Majelis Jemaat dan Badan Pekerja Harian Sinode, maka penggembalaan khusus berakhir dan jabatannya dipulihkan oleh Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">c. Jika tiba pada ketentuan pasal 23 ayat 5 maka jabatan dan status pengutusannya ditanggalkan oleh Badan Pekerja Harian Sinode. Keputusan ini diwartakan kepada jemaat-jemaat dan lembaga terkait.</p>
                <p>3. Dalam hal anggota tersebut adalah pendeta, ketentuan penggembalaan khusus diatur dalam pasal berikut ( pasal 25).</p>

                <h5 id="artp25" style="text-align: center;">PASAL 25</h5>
                <h5 style="text-align: center;">Pengembalaan Khusus Bagi Pendeta</h5>
                <p>1. Pelaksanaan penggembalaan khusus bagi pendeta ditetapkan dalam rapat Badan Pekerja Harian Sinode setelah :</p>
                <p style="margin-left: 2em;">a. Mendengar pertimbangan dari Majelis Jemaat atau lembaga tempat pendeta tersebut melayani.</p>
                <p style="margin-left: 2em;">b. Mendengar pertimbangan dari Penggembalaan Pendeta.</p>
                <p style="margin-left: 2em;">c. Melanggar kesepakatan dalam surat Perjanjian kependetaan dengan Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">d. Melanggar kode etik Pendeta Gekindo.</p>
                <p>2. Penggembalaan khusus dilakukan oleh Badan Pekerja Harian Sinode dengan tahapan sebagai berikut :</p>
                <p style="margin-left: 2em;">a. Penggembalaan oleh Penggembalaan Pendeta atas penugasan Badan Pekerja Harian Sinode</p>
                <p style="margin-left: 2em;">b. Penggembalaan oleh beberapa anggota Badan Pekerja Harian Sinode dan Penggembalaan Pendeta.</p>
                <p style="margin-left: 2em;">c. Pendeta tersebut diundang untuk percakapan penggembalaan dalam rapat Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">d. Bila penggembalaan khusus tersebut tidak membawa hasil maka Badan Pekerja Harian Sinode akan meminta masukan dari Badan Pengawasan dan Penilaian Kependetaan ( BP2K ) untuk menonaktifkan pendeta tersebut dan mengumumkannya kepada jemaat-jemaat serta lembaga-lembaga terkait. Pendeta tersebut selanjutnya berada dalam pembinaan dan koordinasi Badan Pekerja Harian Sinode. Selama dalam pembinaan dan koordinasi Badan Pekerja Harian Sinode, penggembalaan khusus tetap dilaksanakan oleh Badan Pekerja Harian Sinode bersama Penggembalaan Pendeta, dan Pendeta tersebut tidak diperkenankan untuk:</p>
                <p style="margin-left: 4em;">- Berkhotbah dan memberi pelajaran katekisasi.</p>
                <p style="margin-left: 4em;">- Melayani sakramen</p>
                <p style="margin-left: 4em;">- Melayani pemberkatan nikah</p>
                <p style="margin-left: 4em;">- Memimpin kebaktian dalam lingkungan GEKINDO dan diluar lingkungan GEKINDO sebagai pendeta GEKINDO.</p>
                <p>Adapun bila dalam tahap ini pendeta tersebut menyatakan penyesalannya di hadapan Badan Pekerja Harian Sinode serta menunjukkan sikap dan perilaku yang sesuai dengan pertobatannya, maka penggembalaan khusus dinyatakan berakhir dan jabatan kependetaannya dipulihkan.</p>
                <p style="margin-left: 2em;">e. Apabila seluruh upaya tersebut telah ditempuh dan tidak berhasil, maka Badan Pekerja Harian Sinode mengambil keputusan untuk mencabut jabatan kependetaannya, setelah meminta pertimbangan dan masukan dari Badan Pengawasan, Penilaian dan Penggembalaan Kependetaan (BP3K). Keputusan pencabutan kependetaan ini diumumkan oleh Badan Pekerja Harian Sinode kepada seluruh jemaat dan instansi atau lembaga yang dianggap perlu.</p>
                <p style="margin-left: 2em;">f. Pendeta yang telah dicabut kependetaannya, diwajibkan mengembalikan surat kependetaan kepada BPH Sinode GEKINDO dan seluruh atribut-atribut dalam pelayanan di GEKINDO.</p>

                <h5 id="artp26" style="text-align: center;">PASAL 26</h5>
                <h5 style="text-align: center;">Berakhirnya Penggembalaan Khusus</h5>
                <p>1. Berakhirnya penggembalaan khusus terhadap seseorang ditetapkan oleh Majelis Jemaat atau Badan Pekerja Harian Sinode atau Majelis Jemaat dan Badan Pekerja Harian Sinode secara bersama-sama, sesuai dengan keanggotaan dan status jabatan pelayanan yang bersangkutan.</p>
                <p>2. Apabila pelaksanaan penggembalaan khusus telah sampai pada tahap pewartaan, maka berakhirnya penggembalaan khusus terhadap seseorang juga diwartakan.</p>

                <h5 id="artp27" style="text-align: center;">PASAL 27</h5>
                <h5 style="text-align: center;">Pelaksanaan Pernikahan</h5>
                <p>1. GEKINDO bertanggung jawab untuk mempersiapkan dan memperlengkapi anggotanya yang hendak memasuki pernikahan, sesuai dengan panduan yang ditetapkan Badan Pekerja Harian Sinode.</p>
                <p>2. Pernikahan berlangsung menurut undang-undang yang berlaku dan dilaksanakan sesuai dengan tata cara yang ditetapkan oleh Badan Pekerja Harian Sinode.</p>

                <h5 id="artp28" style="text-align: center;">PASAL 28</h5>
                <h5 style="text-align: center;">Pemberkatan Pernikahan</h5>
                <p>1. Pemberkatan pernikahan dapat dilakukan dengan ketentuan :</p>
                <p style="margin-left: 2em;">a. Kedua mempelai melangsungkan perkawinan sesuai dengan ketentuan pasal 27 ayat 2.</p>
                <p style="margin-left: 2em;">b. Kedua mempelai atau salah seorang adalah anggota jemaat.</p>
                <p style="margin-left: 2em;">c. Rencana pemberkatan pernikahan diumumkan kepada jemaat sekurang-kurangnya dalam dua Kebaktian Minggu berturut-turut.</p>
                <p style="margin-left: 2em;">d. Dalam hal kedua mempelai atau salah seorang adalah anggota jemaat gereja lain diperlukan surat permohonan pelayanan dari Majelis Jemaatnya.</p>
                <p style="margin-left: 2em;">e. Kedua mempelai harus mengikuti pelayanan konseling pastoral pra nikah selama 3 bulan.</p>
                <p>2. Penetapan waktu penyelenggaraan pemberkatan dan peneguhan pernikahan diatur oleh Majelis Jemaat.</p>

                <h3 style="text-align: center;">BAB VI</h3>
                <h4 style="text-align: center;">SISTEM DAN PENGORGANISASIAN</h4>

                <h5 id="artp29" style="text-align: center;">PASAL 29</h5>
                <h5 style="text-align: center;">Tata Hubungan</h5>
                <p>1. GEKINDO menganut sistem (tata hubungan) presbiterial sinodal, di mana dikembangkan hubungan yang seimbang dan dinamis antara kehidupan jemaat dan sinode.</p>
                <p>2. Dalam rangka penatalayanan yang tertib dan teratur maka dibuat peraturan-peraturan :</p>
                <p style="margin-left: 2em;">a. Peraturan Jemaat, yaitu peraturan yang dibuat oleh Majelis Jemaat dan mengikat seluruh bagian jemaat.</p>
                <p style="margin-left: 2em;">b. Peraturan Sinodal, yaitu peraturan-peraturan dalam lingkup sinode yang terdiri :</p>
                <p style="margin-left: 4em;">b.i. Anggaran Dasar, yaitu tata dasar kehidupan bergereja yang ditetapkan dan disahkan oleh Sidang Sinode, yang mengikat seluruh bagian GEKINDO.</p>
                <p style="margin-left: 4em;">b.ii. Peraturan Sinode, yaitu peraturan-peraturan turunan dari Anggaran Dasar yang ditetapkan dan disahkan oleh Badan Pekerja Harian Sinode dan mengikat seluruh bagian GEKINDO.</p>
                <p style="margin-left: 4em;">b.iii. Anggaran Dasar badan pelayanan yang berbadan hukum sendiri, yaitu peraturan dasar yang mengikat kehidupan badan pelayanan yang berbadan hukum tersebut, yang ditetapkan dan disahkan oleh organ badan pelayanan yang berbadan hukum tersebut dan mendapat persetujuan dari Badan Pekerja Harian Sinode.</p>

                <h5 id="artp30" style="text-align: center;">PASAL 30</h5>
                <h5 style="text-align: center;">Jemaat</h5>
                <p>Jemaat adalah bentuk kehadiran GEKINDO yang ditandai dengan adanya :</p>
                <p>1. Anggota sidi yang diharapkan terdiri dari sekurang-kurangnya 50 (lima puluh) orang.</p>
                <p>2. Kemampuan dalam melaksanakan panggilan gereja untuk bersekutu, bersaksi dan melayani sebagai jemaat sesuai dengan ketentuan Anggaran Dasar GEKINDO.</p>
                <p>3. Rumah ibadah yang tetap, serta sarana dan prasarana lain yang memadai.</p>
                <p>4. Kemampuan membiayai keperluan dan kebutuhan jemaat dalam melaksanakan tugas panggilannya.</p>
                <p>5. Majelis Jemaat untuk melaksanakan kepemimpinan jemaat.</p>
                <p>6. Peresmian sebagai jemaat GEKINDO oleh Badan Pekerja Harian Sinode.</p>
                <p>7. Pelayanan pendeta jemaat. Dalam hal suatu jemaat tidak memiliki pendeta jemaat, dapat meminta bantuan pelayanan pendeta pelayanan umum untuk melaksanakan tugas .</p>
                <p>8. Dalam hal suatu persekutuan bermaksud menggabungkan diri ke dalam lingkungan GEKINDO dan menjadi suatu jemaat GEKINDO, maka persekutuan tersebut harus terlebih dahulu diresmikan menjadi suatu bakal jemaat dari jemaat GEKINDO terdekat.</p>

                <h5 id="artp31" style="text-align: center;">PASAL 31</h5>
                <h5 style="text-align: center;">Bakal Jemaat</h5>
                <p>Bakal Jemaat adalah bentuk kehadiran Jemaat GEKINDO yang belum memenuhi kriteria Pasal 30 yang ditandai dengan :</p>
                <p>1. Adanya aktifitas hidup bergereja yang bersifat tetap seperti : Kebaktian Minggu, kebaktian dalam rangka hari raya gerejawi, kebaktian rumah tangga dan kegiatan lainnya.</p>
                <p>2. Anggota sidi yang diharapkan terdiri dari sekurang-kurangnya 25 (tiga puluh) orang.</p>
                <p>3. Menyelenggarakan kegiatan administrasi pelayanan dan keuangan secara khusus.</p>
                <p>4. Adanya Majelis Jemaat yang secara khusus mengatur pelayanan sehari-hari yang statusnya melekat pada jemaat penanggung jawab.</p>
                <p>5. Telah diresmikan menjadi Bakal Jemaat dari suatu Jemaat GEKINDO, oleh Majelis Jemaat dalam suatu kebaktian yang dihadiri oleh Badan Pekerja Harian Sinode.</p>
                <p>6. Adanya kemampuan untuk melaksanakan panggilan GEKINDO untuk bersekutu, melayani dan bersaksi sebagai Jemaat sesuai dengan ketentuan Anggaran Dasar GEKINDO dalam proyeksi untuk menjadi Jemaat.</p>

                <h5 id="artp32" style="text-align: center;">PASAL 32</h5>
                <h5 style="text-align: center;">Pos PI</h5>
                <p>Pos PI adalah bentuk kehadiran Jemaat GEKINDO yang belum memenuhi kriteria pasal 31 yang ditandai dengan :</p>
                <p>1. Adanya aktivitas Kebaktian Minggu yang bersifat tetap.</p>
                <p>2. Menyelenggarakan kegiatan administrasi pelayanan dan keuangan secara khusus dalam koordinasi Majelis Jemaat.</p>
                <p>3. Adanya pengurus yang secara khusus mengatur pelayanan sehari-hari yang disebut Pengurus Pos PI. Pengurus ini ditetapkan dan bertanggung jawab kepada Majelis Jemaat yang bersangkutan.</p>
                <p>4. Telah diresmikan menjadi Pos PI dari suatu Jemaat GEKINDO oleh Majelis Jemaat yang bersangkutan.</p>

                <h5 id="artp33" style="text-align: center;">PASAL 33</h5>
                <h5 style="text-align: center;">Peresmian Jemaat</h5>
                <p>1. Tata cara peresmian Jemaat, Bakal Jemaat dan Pos PI diatur dalam peraturan sinode.</p>
                <p>2. Penerimaan Jemaat untuk masuk ke GEKINDO harus mengacu pada pasal 31.</p>

                <h5 id="artp34" style="text-align: center;">PASAL 34</h5>
                <h5 style="text-align: center;">Wilayah</h5>
                <p>Wilayah adalah bentuk kerjasama Jemaat-jemaat GEKINDO dalam satu wilayah yang berdekatan dan ditandai dengan adanya :</p>
                <p>1. Keputusan Peraturan Sinode yang menetapkan wilayah kerjasama wilayah.</p>
                <p>2. Keanggotan dalam wilayah terdiri dari sekurang-kurangnya 7 jemaat dalam wilayah tersebut.</p>
                <p>3. Adanya upaya saling membantu dalam mengatasi masalah persekutuan, pelayanan dan kesaksian.</p>
                <p>4. Adanya hubungan kerjasama antara Jemaat-jemaat di wilayah tertentu dalam rangka mengembangkan hidup bersinode dan melaksanakan keputusan-keputusan Sidang Sinode.</p>
                <p>5. Adanya Badan Pelaksana yang berfungsi mengkoordinasikan dan melaksanakan rencana kerja bersama yang dirumuskan dalam Rapat Wilayah.</p>
                <p>6. Badan Pelaksana Wilayah ditentukan oleh Badan Pekerja Harian Sinode.</p>

                <h5 id="artp35" style="text-align: center;">PASAL 35</h5>
                <h5 style="text-align: center;">Visitasi Wilayah</h5>
                <p>1. Visitasi Wilayah adalah perkunjungan Gerejawi yang dilakukan oleh para pejabat gerejawi yang ditunjuk oleh rapat wilayah ke suatu gereja sebagai wujud ikatan Gereja-gereja dalam lingkungan wilayah.</p>
                <p>2. Visitasi Wilayah bertujuan untuk saling mengingatkan dan menguatkan agar gereja-gereja senantiasa melaksanakan tanggung jawabnya, baik dalam pemberitaan penyelamatan Allah, pemeliharaan keselamatan, penataan organisasi, serta keuangan dan harta benda.</p>

                <h5 id="artp36" style="text-align: center;">PASAL 36</h5>
                <h5 style="text-align: center;">Sinode</h5>
                <p>Sinode adalah bentuk kehadiran GEKINDO yang ditandai adanya :</p>
                <p>1. Persidangan Gerejawi yang mencerminkan kebersamaan Jemaat-jemaat sebagai satu sinode.</p>
                <p>2. Kegiatan bersama seluruh bagian GEKINDO dalam bersekutu, melayani dan bersaksi.</p>
                <p>3. Kebersamaan yang diatur dalam Anggaran Dasar.</p>
                <p>4. Lembaga kepemimpinan yang berfungsi memimpin kehidupan bersinode yaitu Majelis Sinode, yang dilaksanakan oleh Badan Pekerja Harian Sinode.</p>
                <p>5. Kebersamaan dalam bidang teologi, daya dan dana dalam mewujudkan persekutuan, pelayanan dan kesaksian.</p>

                <h5 id="artp37" style="text-align: center;">PASAL 37</h5>
                <h5 style="text-align: center;">Visitasi Sinode</h5>
                <p>Sinode adalah bentuk kehadiran GEKINDO yang ditandai adanya :</p>
                <p>1. Visitasi Sinode adalah perkunjungan Gerejawi yang dilakukan oleh para pejabat gerejawi yang ditunjuk oleh persidangan Sinode ke suatu wilayah sebagai wujud ikatan Gereja-gereja dalam lingkungan Sinode.</p>
                <p>2. Visitasi Sinode bertujuan untuk melakukan pendampingan terhadap wilayah atau Gereja melalui wilayah yang divisitasi agar senantiasa melaksanakan tanggungjawabnya baik dalam pemberitaan penyelamatan Allah, pemeliharaan keselamatan, penataan organisasi, serta keuangan dan harta benda.</p>

                <h3 style="text-align: center;">BAB VII</h3>
                <h4 style="text-align: center;">KEANGGOTAAN</h4>

                <h5 id="artp38" style="text-align: center;">PASAL 38</h5>
                <h5 style="text-align: center;">Penerimaan Anggota</h5>
                <p>1. Keputusan penerimaan seseorang menjadi anggota di Jemaat ditetapkan oleh Majelis Jemaat.</p>
                <p>2. Seseorang menjadi anggota melalui cara baptisan yaitu :</p>
                <p style="margin-left: 2em;">a. Anak anggota jemaat yang dibaptis karena pengakuan iman orang tuanya.</p>
                <p style="margin-left: 2em;">b. Seseorang yang pada saat dewasa mengaku iman dan dibaptiskan.</p>
                <p>3. Seseorang yang menjadi anggota melalui surat atestasi/surat permohonan yaitu :</p>
                <p style="margin-left: 2em;">a. Dengan perpindahan dari jemaat atau gereja lain dengan membawa surat atestasi.</p>
                <p style="margin-left: 2em;">b. Dengan perpindahan dari jemaat atau gereja lain dengan mengajukan permohonan tertulis, jika yang bersangkutan tidak dapat menunjukkan surat atestasi dengan alasan-alasan yang dapat dipertanggungjawabkan.</p>
                <p>4. Semua anggota jemaat di pos PI menjadi anggota jemaat ketika Pos PI yang bersangkutan didewasakan menjadi Jemaat.</p>

                <h5 id="artp39" style="text-align: center;">PASAL 39</h5>
                <h5 style="text-align: center;">Masa Persiapan Menjadi Anggota</h5>
                <p>1. Masa persiapan adalah masa seseorang berada dalam proses untuk bisa menjadi anggota jemaat. Pada masa ini nama yang bersangkutan dicatat dan mendapatkan pembinaan serta pelayanan dari Majelis Jemaat.</p>
                <p>2. Anak anggota jemaat yang belum dibaptiskan ada dalam masa persiapan menjadi anggota, tidak lebih dari 2 (dua) tahun.</p>
                <p>3. Dalam hal seseorang sedang mengikuti katekisasi untuk baptisan dewasa, maka yang bersangkutan ada dalam masa persiapan menjadi anggota jemaat.</p>

                <h5 id="artp40" style="text-align: center;">PASAL 40</h5>
                <h5 style="text-align: center;">Kewajiban dan Tanggung Jawab Anggota</h5>
                <p>1. Hidup tertib sesuai pengajaran Alkitab dalam hidup bergereja dan bermasyarakat.</p>
                <p>2. Membimbing dan mendidik anak-anaknya di dalam pengenalan kepada Yesus Kristus.</p>
                <p>3. Mewujudkan persekutuan, pelayanan dan kesaksian gereja, dengan jalan mengambil bagian dalam kegiatan jemaat dan kegiatan kebersamaan GEKINDO.</p>
                <p>4. Menaati Anggaran Dasar GEKINDO dan peraturan-peraturan lainnya yang berlaku dalam lingkungan GEKINDO.</p>

                <h5 id="artp41" style="text-align: center;">PASAL 41</h5>
                <h5 style="text-align: center;">Hak Anggota</h5>
                <p>1. Setiap anggota jemaat mempunyai hak untuk melayani dalam rangka mewujudkan persekutuan, pelayanan dan kesaksian jemaat.</p>
                <p>2. Hak melayani dilakukan melalui :</p>
                <p style="margin-left: 2em;">a. Kehidupan sehari-hari sebagai perwujudan panggilan hidup tiap-tiap orang percaya untuk menolong, memperhatikan, mendukung dan menasihati.</p>
                <p style="margin-left: 2em;">b. Tugas dan tanggung jawab khusus yang memerlukan pengaturan lebih lanjut dari oleh Majelis Jemaat.</p>
                <p>3. Setiap anggota jemaat mempunyai hak untuk mendapatkan pelayanan dan pembinaan dari GEKINDO yang dilakukan oleh Majelis Jemaat, Badan Pekerja Harian Sinode dan badan-badan dibawah Majelis Sinode, sesuai dengan tata cara yang diberlakukan.</p>

                <h5 id="artp42" style="text-align: center;">PASAL 42</h5>
                <h5 style="text-align: center;">Hilang Keanggotaan</h5>
                <p>Seseorang hilang keanggotaan apabila :</p>
                <p>1. Yang bersangkutan pindah dan mendapatkan surat atestasi atas permintaan yang bersangkutan.</p>
                <p>2. Atas keputusan Majelis Jemaat sesuai dengan tata cara penggembalaan khusus pasal 23.</p>
                <p>3. Meninggal dunia.</p>
                <p>4. Menganut agama atau keyakinan lain.</p>

                <h3 style="text-align: center;">BAB VIII</h3>
                <h4 style="text-align: center;">RAPAT DAN SIDANG GEREJAWI</h4>

                <h5 id="artp43" style="text-align: center;">PASAL 43</h5>
                <h5 style="text-align: center;">Ketentuan Rapat Majelis Jemaat</h5>
                <p>1. Rapat Majelis Jemaat adalah forum pengambil keputusan, yang mengikat seluruh bagian jemaat, dalam lingkup jemaat.</p>
                <p>2. Rapat Majelis Jemaat bertugas untuk antara lain :</p>
                <p style="margin-left: 2em;">a. Menyusun peraturan-peraturan jemaat.</p>
                <p style="margin-left: 2em;">b. Menetapkan rencana pelaksanaan kerja dan rencana pelaksanaan anggaran jemaat.</p>
                <p style="margin-left: 2em;">c. Membentuk komisi-komisi dan panitia-panitia yang dianggap perlu.</p>
                <p style="margin-left: 2em;">d. Membahas dan mengambil keputusan terhadap masalah-masalah yang ada di jemaat.</p>
                <p style="margin-left: 2em;">e. Menetapkan kebijakan jemaat.</p>
                <p style="margin-left: 2em;">f. Mengevaluasi kegiatan-kegiatan pelayanan di jemaat.</p>
                <p>3. Rapat Majelis Jemaat diadakan satu kali sebulan.</p>
                <p>4. Rapat Majelis Jemaat dilaksanakan dan dianggap sah jika dihadiri lebih dari setengah jumlah anggota Majelis Jemaat.</p>
                <p>5. Rapat Majelis Jemaat dipimpin oleh ketua Majelis Jemaat atau anggota Majelis Jemaat sesuai dengan kesepakatan Majelis Jemaat.</p>
                <p>6. Keputusan Majelis jemaat diambil secara musyawarah dan tidak bertentangan dengan Anggaran Dasar GEKINDO dan peraturan sinode, keputusan Sidang Sinode.</p>

                <h5 id="artp44" style="text-align: center;">PASAL 44</h5>
                <h5 style="text-align: center;">Ketentuan Rapat Jemaat</h5>
                <p>1. Rapat Jemaat bertugas sebagai forum untuk :</p>
                <p style="margin-left: 2em;">a. Menghimpun pandangan dan tanggapan anggota jemaat tentang rencana kerja/rencana anggaran pendapatan dan belanja Jemaat, kegiatan-kegiatan jemaat dan masalah-masalah yang dihadapi jemaat.</p>
                <p style="margin-left: 2em;">b. Merumuskan rekomendasi rapat jemaat tentang masalah-masalah tertentu untuk menjadi perhatian khusus Majelis Jemaat.</p>
                <p>2. Rapat Jemaat harus dilaksanakan satu kali setahun.</p>
                <p>3. Rapat jemaat diselenggarakan serta dipimpin oleh Majelis Jemaat dan diikuti oleh perwakilan anggota jemaat.</p>

                <h5 id="artp45" style="text-align: center;">PASAL 45</h5>
                <h5 style="text-align: center;">Rapat Wilayah</h5>
                <p>1. Rapat Wilayah bertugas antara lain :</p>
                <p style="margin-left: 2em;">a. Menetapkan tata tertib dan acara Rapat Wilayah.</p>
                <p style="margin-left: 2em;">b. Membahas pelaksanaan keputusan Sidang Sinode di wilayahnya.</p>
                <p style="margin-left: 2em;">c. Menetapkan rencana kerja bersama Jemaat-jemaat dalam rangka memperkembangkan hubungan dan mewujudkan upaya saling membantu antar jemaat di wilayah.</p>
                <p>2. Rapat Wilayah dilaksanakan dua tahun sekali.</p>
                <p>3. Rapat Wilayah dihadiri oleh :</p>
                <p style="margin-left: 2em;">a. Utusan Jemaat-jemaat di wilayah itu.</p>
                <p style="margin-left: 2em;">b. Utusan Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">c. Badan Pelaksana Wilayah dan kelengkapannya.</p>
                <p style="margin-left: 2em;">d. Wakil Badan Pelaksana Wilayah dari wilayah lain.</p>
                <p style="margin-left: 2em;">e. Pendeta GEKINDO di wilayah tersebut.</p>
                <p style="margin-left: 2em;">f. Wakil dari tiap-tiap Badan Pelayanan.</p>
                <p style="margin-left: 2em;">g. Undangan-undangan.</p>
                <p>4. Rapat Wilayah dilaksanakan dan dianggap sah jika dihadiri sekurang-kurangnya tiga perempat dari jumlah Jemaat di wilayah itu, dan utusan Badan Pekerja Harian Sinode.</p>
                <p>5. Rapat Wilayah diselenggarakan dan dipimpin oleh Badan Pelaksana Wilayah dengan dukungan Jemaat-jemaat di wilayah tersebut dan utusan Badan Pekerja Harian Sinode.</p>
                <p>6. Setiap jemaat mempunyai satu hak suara dan keputusan Rapat Wilayah tidak boleh bertentangan dengan Anggaran Dasar GEKINDO dan peraturan-peraturan sinode lainnya.</p>

                <h5 id="artp46" style="text-align: center;">PASAL 46</h5>
                <h5 style="text-align: center;">Ketentuan Sidang Sinode</h5>
                <p>1. Sidang Sinode adalah wadah pengambil keputusan tertinggi dalam hidup kebersamaan jemaat-jemaat GEKINDO</p>
                <p>2. Sidang Sinode bertugas untuk antara lain :</p>
                <p style="margin-left: 2em;">a. Mengevaluasi secara menyeluruh pelayanan GEKINDO.</p>
                <p style="margin-left: 2em;">b. Menetapkan arah kehidupan GEKINDO dalam bentuk Rencana Kerja Dasar.</p>
                <p style="margin-left: 2em;">c. Memilih dan menetapkan ketua umum sinode Gekindo.</p>
                <p>3. Sidang Sinode dilaksanakan lima tahun sekali.</p>
                <p>4. Sidang Sinode dihadiri oleh :</p>
                <p style="margin-left: 2em;">a. Majelis utusan jemaat.</p>
                <p style="margin-left: 2em;">b. Anggota Majelis Sinode.</p>
                <p style="margin-left: 2em;">c. Pendeta GEKINDO.</p>
                <p style="margin-left: 2em;">d. Undangan-undangan.</p>
                <p>5. Sidang Sinode dilaksanakan dan dianggap sah jika lebih dari dua pertiga utusan Jemaat-jemaat hadir.</p>
                <p>6. Sidang Sinode diselenggarakan dalam tanggung jawab Badan Pekerja Harian Sinode.</p>
                <p>7. Keputusan Sidang Sinode diambil dengan cara musyawarah. Dalam hal diperlukan pemungutan suara, keputusan sidang dinyatakan sah apabila lebih dari dua pertiga Jemaat-jemaat yang hadir menyatakan persetujuannya. Tiap Jemaat mempunyai satu hak suara.</p>
                <p>8. Keputusan Sidang Sinode mengikat seluruh bagian GEKINDO.</p>
                <p>9. Hal-hal lain berkaitan dengan mekanisme pelaksanaan Sidang Sinode diatur dalam peraturan sinode.</p>

                <h5 id="artp47" style="text-align: center;">PASAL 47</h5>
                <h5 style="text-align: center;">Ketentuan Sidang Sinode Istimewa</h5>
                <p>1. Sidang Sinode Istimewa merupakan forum pengambilan keputusan dalam hidup kebersamaan jemaat-jemaat GEKINDO.</p>
                <p>2. Sidang Sinode Istimewa diselenggarakan karena ada hal-hal yang bersifat istimewa yang dapat merusak pelayanan, keberadaan dan kelangsungan GEKINDO.</p>
                <p>3. Harus dengan permintaan minimal dua pertiga dari seluruh jemaat-jemaat GEKINDO.</p>
                <p>4. Hal-hal lain berkaitan dengan mekanisme pelaksanaan Sidang Sinode Istimewa diatur dalam peraturan tersendiri.</p>

                <h5 id="artp48" style="text-align: center;">PASAL 48</h5>
                <h5 style="text-align: center;">Rapat Badan Pekerja Harian Sinode</h5>
                <p>1. Rapat Badan Pekerja Harian Sinode bertugas antara lain untuk :</p>
                <p style="margin-left: 2em;">a. Menyusun konsep rencana kerja dan rencana anggaran Badan Pekerja Harian Sinode dan lembaga pelayanan khusus yang tidak berbadan hukum, sesuai dengan rencana kerja dasar untuk disampaikan pada rapat kerja tahunan.</p>
                <p style="margin-left: 2em;">b. Menetapkan dan melaksanakan rencana kerja yang sesuai dengan konsep rencana kerja dan rencana anggaran yang sudah diratifikasi.</p>
                <p style="margin-left: 2em;">c. Mengevaluasi kegiatan pelayanan Badan Pekerja Harian Sinode dan kegiatan-kegiatan sinodal.</p>
                <p style="margin-left: 2em;">d. Menyusun peraturan-peraturan Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">e. Menetapkan kelembagaan dan personalia lembaga pelayanan khusus yang tidak berbadan hukum sendiri.</p>
                <p style="margin-left: 2em;">f. Menggambil keputusan terhadap masalah-masalah yang mendesak dalam rangka kehidupan bersinode.</p>
                <p style="margin-left: 2em;">g. Menetapkan kebijakan Badan Pekerja Harian Sinode.</p>
                <p>2. Rapat Badan Pekerja Harian Sinode dilaksanakan sekurang-kurangnya satu kali dalam satu bulan.</p>
                <p>3. Rapat Badan Pekerja Harian Sinode dapat dilaksanakan dan dianggap sah jika dihadiri oleh lebih dari dua pertiga jumlah anggota.</p>
                <p>4. Rapat Badan Pekerja Harian Sinode dipimpin oleh salah seorang ketua Badan Pekerja Harian Sinode atau anggota Badan Pekerja Harian Sinode lainnya, sesuai dengan kesepakatan rapat Badan Pekerja Harian Sinode.</p>

                <h5 id="artp49" style="text-align: center;">PASAL 49</h5>
                <h5 style="text-align: center;">Rapat Kerja Sinode</h5>
                <p>1. Rapat Kerja Sinode bertugas untuk antara lain :</p>
                <p style="margin-left: 2em;">a. Mengevaluasi pelaksanaan keputusan-keputusan Sidang Sinode, baik yang dilakukan oleh Badan Pekerja Harian Sinode maupun yang dilakukan oleh Majelis Sinode.</p>
                <p style="margin-left: 2em;">b. Menetapkan kebijakan-kebijakan sinodal dalam rangka pemantapan pelaksanaan keputusan-keputusan Sidang Sinode.</p>
                <p style="margin-left: 2em;">c. Membina kebersamaan dan mengkoordinasikan kegiatan-kegiatan dalam rangka pelaksanaan keputusan Sidang Sinode.</p>
                <p>2. Rapat Kerja Sinode dilaksanakan setiap tahun, setelah satu Sidang Sinode, berturut-turut dengan mengikuti fokus pembidangan tertentu sampai pelaksanaan Sidang Sinode berikutnya.</p>
                <p>3. Rapat Kerja Sinode dihadiri oleh :</p>
                <p style="margin-left: 2em;">a. Utusan Jemaat-jemaat yang menjadi anggota Majelis Sinode.</p>
                <p style="margin-left: 2em;">b. Anggota Badan Pekerja Harian Sinode dan lembaga pelayanan khusus.</p>
                <p style="margin-left: 2em;">c. Anggota Majelis Pertimbangan.</p>
                <p style="margin-left: 2em;">d. Anggota Pengawas Perbendaharaan.</p>
                <p style="margin-left: 2em;">e. Badan Pelaksana Wilayah.</p>
                <p style="margin-left: 2em;">f. Pendeta GEKINDO</p>
                <p style="margin-left: 2em;">g. Undangan-undangan.</p>
                <p>4. Rapat Kerja Sinode dapat dilaksanakan dan dianggap sah jika lebih dari dua pertiga utusan Jemaat-jemaat hadir.</p>
                <p>5. Rapat Kerja Sinode diselenggarakan dan dipimpin oleh Badan Pekerja Harian Sinode.</p>
                <p>6. Keputusan-keputusan Rapat Kerja Sinode tidak boleh bertentangan dengan keputusan-keputusan Sidang Sinode.</p>
                <p>7. Badan Pekerja Harian Sinode, dapat mengadakan Rapat Majelis Sinode untuk membuat Peraturan Majelis Sinode.</p>
                <p>8. Tata cara dan ketentuan lainnya mengenai Rapat kerja Sinode diatur dalam Peraturan Sinode.</p>

                <h3 style="text-align: center;">BAB IX</h3>
                <h4 style="text-align: center;">KEPEMIMPINAN</h4>

                <h5 id="artp50" style="text-align: center;">PASAL 50</h5>
                <h5 style="text-align: center;">Tugas Pokok Penatua</h5>
                <p>1. Menjadi teladan, pembimbing, dan pendorong bagi anggota jemaat dalam pertumbuhan iman dan hidup yang mencerminkan semangat untuk bersekutu, melayani dan bersaksi.</p>
                <p>2. Bersama dengan Pendeta bertanggung jawab atas pelaksanaan pemberitaan Firman Tuhan di setiap ibadah jemaat setempat.</p>
                <p>3. Melaksanakan pekerjaan-pekerjaan di bidang pendidikan dan peminaan iman jemaat.</p>
                <p>4. Bersama dengan Pendeta memelihara iman jemaat.</p>

                <h5 id="artp51" style="text-align: center;">PASAL 51</h5>
                <h5 style="text-align: center;">Tugas Pokok Diaken</h5>
                <p>1. Bersama dengan Pendeta memberikan perhatian dan pelayanan pastoral kepada sesama anggota jemaat dan masyarakat sekitar.</p>
                <p>2. Bersama dengan Penatua mengatur keperluan untuk pelayanan sakramen.</p>
                <p>3. Merencanakan, mengatur, dan melaksanakan diakonia bagi anggota jemaat dan masyarakat lainnya.</p>
                <p>4. Mengusahakan dan menjalin kerja sama dengan lembaga-lembaga kristen, lembaga pemerintah, lembaga masyarakat yang bergerak di bidang sosial, ekonomi, bantuan hukum, atau upaya-upaya hukum atas keputusan majelis jemaat.</p>

                <h5 id="artp52" style="text-align: center;">PASAL 52</h5>
                <h5 style="text-align: center;">Ketentuan Majelis Jemaat</h5>
                <p>1. Majelis Jemaat terdiri dari sekurang-kurangnya lima orang, yaitu: ketua, sekretaris, bendahara dan dua orang anggota.</p>
                <p>2. Masa pelayanan Majelis Jemaat berlangsung selama 5 (lima) tahun.</p>
                <p>3. Menunjukkan sikap keteladanan dalam ajaran dan perilaku di tengah keluarga, jemaat dan masyarakat dengan memperhatikan I Timotius 3 : 1-10 dan Titus I : 5-9.</p>
                <p>4. Sekurang-kurangnya telah enam tahun mengaku iman / sidi dan sekurang-kurangnya sudah tiga tahun menjadi anggota sidi jemaat yang bersangkutan terhitung sejak pendaftaran jika ia berasal dari gereja lain.</p>
                <p>5. Tidak kehilangan hak untuk menjadi anggota Majelis Jemaat sehubungan dengan ketentuan penggembalaan khusus.</p>
                <p>6. Telah berusia minimal 25 tahun dan dengan memperhatikan kemampuannya untuk melaksanakan tugas-tugas Majelis Jemaat.</p>

                <h5 id="artp53" style="text-align: center;">PASAL 53</h5>
                <h5 style="text-align: center;">Pemlihan Anggota Majelis Jemaat</h5>
                <p>Pokok-pokok yang harus dilakukan dalam pemilihan anggota Majelis Jemaat:</p>
                <p>1. Majelis Jemaat menjadi penanggung jawab atas pemilihan anggota Majelis Jemaat. Dalam pelaksanaannya, Majelis Jemaat dapat mengangkat panitia untuk membantu Majelis Jemaat melaksanakan pemilihan tersebut.</p>
                <p>2. Pendeta jemaat berperan sebagai pembimbing dalam proses persiapan dan pelaksanaan pemilihan anggota Majelis Jemaat.</p>
                <p>3. Rencana pemilihan anggota Majelis Jemaat diumumkan paling sedikit dalam tiga kali Kebaktian Minggu secara berturut-turut.</p>
                <p>4. Sebelum dilaksanakan pemilihan, jemaat perlu dipersiapkan agar memahami makna pemilihan anggota Majelis Jemaat serta turut mendukung secara aktif dan positif dalam proses pemilihan tersebut. Persiapan itu meliputi penyampaian pokok-pokok tentang: hak dan tanggung jawab anggota sidi jemaat berkaitan dengan pemilihan anggota Majelis Jemaat, makna pemilihan anggota Majelis Jemaat, tugas dan panggilan orang percaya, tugas kemajelisan dan hal lain-lain yang menunjang maksud tersebut, melalui berbagai bentuk dan kesepakatan.</p>
                <p>5. Peneguhan Majelis Jemaat dilaksanakan apabila tidak ada keberatan yang sah setelah diwartakan dalam dua Kebaktian Minggu berturut-turut.</p>
                <p>6. Tata cara pemilihan diatur lebih lanjut dalam peraturan Sinode.</p>

                <h5 id="artp54" style="text-align: center;">PASAL 54</h5>
                <h5 style="text-align: center;">Tugas dan Tanggung Jawab Majelis Jemaat</h5>
                <p>Majelis Jemaat yang terdiri dari Pendeta, Penatua dan Diaken, memiliki tugas dan tanggung jawab :</p>
                <p>1. Memimpin, membina dan menggembalakan anggota jemaat dalam melaksanakan panggilan yang dinyatakan dengan cara:</p>
                <p style="margin-left: 2em;">a. Menyelenggarakan kebaktian-kebaktian di Jemaat.</p>
                <p style="margin-left: 2em;">b. Menyelenggarakan pelayanan sakramen.</p>
                <p style="margin-left: 2em;">c. Mengunjungi anggota-anggota jemaat.</p>
                <p style="margin-left: 2em;">d. Melakukan percakapan penggembalaan dengan memelihara dan menjaga rahasia jabatan.</p>
                <p style="margin-left: 2em;">e. Menyelenggarakan katekisasi.</p>
                <p style="margin-left: 2em;">f. Melaksanakan kegiatan-kegiatan pembianaan / pelatihan di Jemaat.</p>
                <p style="margin-left: 2em;">g. Mengambil bagian dalam kegiatan di wilayah dan sinode.</p>
                <p style="margin-left: 2em;">h. Mengambil bagian dalam kegiatan oikumenis dan kemasyarakatan.</p>
                <p style="margin-left: 2em;">i. Mengupayakan adanya pendeta jemaat.</p>
                <p>2. Memimpin, mengatur dan mengkoordinasikan kegiatan kehidupan jemaat yang dinyatakan dengan cara:</p>
                <p style="margin-left: 2em;">a. Menyelenggarakan rapat-rapat.</p>
                <p style="margin-left: 2em;">b. Menyusun dan melaksanakan arah, rencana kerja jemaat dan peraturan-peraturan Jemaat.</p>
                <p style="margin-left: 2em;">c. Memberlakukan peraturan dan keputusan Sidang Sinode.</p>
                <p style="margin-left: 2em;">d. Menyampaikan laporan kegiatan pelayanan Majelis Jemaat kepada jemaat dan Badan Pekerja Harian Sinode.</p>
                <p>3. Mengelola dan mendayagunakan perbendaharaan dan harta milik gereja dalam rangka pelaksanaan panggilan gereja yang dinyatakan dengan cara:</p>
                <p style="margin-left: 2em;">a. Menyusun dan menetapkan rencana anggaran jemaat.</p>
                <p style="margin-left: 2em;">b. Melaksanakan penerimaan, penyimpanan dan pembiayaan sesuai dengan anggaran jemaat.</p>
                <p style="margin-left: 2em;">c. Melaksanakan kewajiban dalam mendukung hidup kebersamaan baik dalam lingkup wilayah, sinode maupun gerakan oikumenis.</p>
                <p style="margin-left: 2em;">d. Melaksanakan kewajiban jemaat dalam memberi jaminan hidup bagi pendeta jemaat dan keluarganya.</p>
                <p style="margin-left: 2em;">e. Menyelenggarakan tata usaha perbendaharaan jemaat.</p>
                <p style="margin-left: 2em;">f. Memelihara dan memanfaatkan harta milik gereja yang berada dalam pengelolaan jemaat, dalam konsultasi dengan Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">g. Menyampaikan laporan pengelolaan perbendaharaan kepada jemaat dan Badan Pekerja Harian Sinode secara berkala, sekurang-kurangnya setahun sekali setelah mendapat ratifikasi dari Majelis Jemaat.</p>
                <p>4. Majelis jemaat bertugas membentuk komisi pelayanan dalam jemaat.</p>

                <h5 id="artp55" style="text-align: center;">PASAL 55</h5>
                <h5 style="text-align: center;">Wewenang Majelis Jemaat</h5>
                <p>Dalam melaksanakan tanggung jawabnya, Majelis Jemaat berwenang:</p>
                <p>1. Bertindak untuk dan atas nama jemaat ke dalam dan keluar lingkungan jemaat.</p>
                <p>2. Mengangkat dan memberhentikan lembaga pelayanan khusus dan alat kelengkapan pelayanan, antara lain: panitia, tim, kelompok kerja.</p>
                <p>3. Menetapkan penerimaan anggota jemaat dan melakukan penggembalaan terhadap anggota jemaat yang menyimpang sehubungan dengan ketentuan penggembalaan khusus.</p>

                <h5 id="artp56" style="text-align: center;">PASAL 56</h5>
                <h5 style="text-align: center;">Ketentuan Majelis Sinode dan Badan Pekerja Harian Sinode</h5>
                <p>Dalam melaksanakan tanggung jawabnya, Majelis Jemaat berwenang:</p>
                <p>1. Majelis Sinode adalah salah satu wujud kelembagaan bersinode.</p>
                <p>2. Kegiatan sehari-hari dilaksanakan oleh Badan Pekerja Harian Sinode.</p>
                <p>3. Badan Pekerja Harian Sinode dipilih dari majelis jemaat utusan jemaat dan pendeta GEKINDO oleh Ketua Umum terpilih dan tim formatur.</p>
                <p>4. Anggota Majelis Sinode adalah satu orang utusan dari tiap-tiap Jemaat yang mempunyai kemampuan di bidang khusus, dengan keanggotaan bersifat tidak permanen, yang adalah anggota Majelis Jemaat.</p>
                <p>5. Pergantian Badan Pekerja Harian Sinode oleh karena sebab tertentu yang tidak dapat dihindari, dapat dilakukan dalam rapat BPH. Ketentuan pergantian tersebut diatur dalam peraturan sinode tersendiri.</p>
                <p>6. Masa bakti personalia Badan Pekerja Harian Sinode berlangsung lima tahun.</p>

                <h5 id="artp57" style="text-align: center;">PASAL 57</h5>
                <h5 style="text-align: center;">Syarat-syarat Menjadi dan Tata Cara Pemilihan Ketua Umum Sinode GEKINDO</h5>
                <p>1. Tata cara pemilihan Ketua Umum Sinode diatur tersendiri dalam peraturan sinode dan pelaksanaannya ditetapkan dalam Sidang Sinode.</p>
                <p>2. Syarat-syarat bagi orang yang dapat dipilih menjadi Ketua Umum Sinode:</p>
                <p style="margin-left: 2em;">a. Ketua Umum haruslah seorang pendeta GEKINDO yang ditahbiskan dan telah melayani minimal 10 tahun di jemaat otonom dan telah menyelesaikan minimal strata 2 teologi.</p>
                <p style="margin-left: 2em;">b. Memiliki integritas dan loyalitas yang telah teruji bagi GEKINDO.</p>
                <p>3. Ketua Umum terpilih dan tim formatur berkewajiban memilih dan menetapkan anggota Badan Pekerja Harian Sinode dan Majelis Sinode.</p>

                <h5 id="artp58" style="text-align: center;">PASAL 58</h5>
                <h5 style="text-align: center;">Tugas Dan Tanggung Jawab Badan Pekerja Harian Sinode</h5>
                <p>1. Memimpin, membina dan membimbing Jemaat-jemaat dalam melaksanakan panggilan bersama GEKINDO yang dinyatakan dengan cara:</p>
                <p style="margin-left: 2em;">a. Menyelenggarakan kebaktian-kebaktian dalam lingkup sinode.</p>
                <p style="margin-left: 2em;">b. Mengunjungi Jemaat-jemaat, Bakal-bakal Jemaat, Pos PI dengan sepengetahuan Majelis Jemaat.</p>
                <p style="margin-left: 2em;">c. Melakukan percakapan penggembalaan bagi Majelis Jemaat, pendeta, vikaris dan mahasiswa teologi utusan GEKINDO dan memelihara serta menjaga rahasia jabatan.</p>
                <p style="margin-left: 2em;">d. Menyelenggarakan pertemuan pendeta GEKINDO.</p>
                <p style="margin-left: 2em;">e. Melaksanakan kegiatan-kegiatan pembinaan dan pelatihan-pelatihan sinode.</p>
                <p style="margin-left: 2em;">f. Mengikuti kegiatan-kegiatan di Jemaat atas undangan Majelis Jemaat.</p>
                <p style="margin-left: 2em;">g. Mengupayakan adanya pendeta untuk melaksanakan tugas di suatu Jemaat.</p>
                <p style="margin-left: 2em;">h. Mengambil bagian dalam gerakan oikumenis dan kemasyarakatan atas nama GEKINDO.</p>
                <p>2. Memimpin, mengatur dan mengkoordinasi kegiatan kehidupan bersinode yang dinyatakan dengan cara :</p>
                <p style="margin-left: 2em;">a. Menyelenggarakan Sidang Sinode dan rapat sinode.</p>
                <p style="margin-left: 2em;">b. Menyusun arah dan rencana kerja Badan Pekerja Harian Sinode sesuai dengan Rencana Kerja Dasar GEKINDO.</p>
                <p style="margin-left: 2em;">c. Melaksanakan dan membimbing pelaksanaan keputusan-keputusan Sidang Sinode serta menyusun dan melaksanakan peraturan sinode.</p>
                <p style="margin-left: 2em;">d. Menyusun laporan tahunan dan menyampaikannya pada Rapat Kerja Sinode.</p>
                <p style="margin-left: 2em;">e. Menyusun laporan pertanggung jawaban pelaksanaan kegiatan-kegiatan Badan Pekerja Harian Sinode dan menyampaikannya pada Sidang Sinode.</p>
                <p>3. Mengkoordinasikan penatalayanan, mengelola dan mendayagunakan Perbendaharaan Sinode dalam rangka mewujudkan panggilan gereja dengan cara :</p>
                <p style="margin-left: 2em;">a. Menyusun dan menetapkan anggaran Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">b. Melaksanakan penerimaan, penyimpanan dan pembiayaan sesuai dengan anggaran Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">c. Melaksanakan kewajiban Badan Pekerja Harian Sinode dalam membantu bagian-bagian GEKINDO yang membutuhkan kebersamaan Jemaat-jemaat, dan kewajiban Badan Pekerja Harian Sinode dalam mendukung kehidupan oikumenis.</p>
                <p style="margin-left: 2em;">d. Berperan aktif dalam pelaksanaan pemberian pembiayaan bagi pendeta GEKINDO dan keluarganya.</p>
                <p style="margin-left: 2em;">e. Menyelenggarakan tata usaha perbendaharaan Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">f. Mengkoordinasi pengelolaan dan pemanfaatan perbendaharaan GEKINDO secara menyeluruh.</p>
                <p style="margin-left: 2em;">g. Mengelola dan memanfaatkan perbendaharaan GEKINDO yang berada dalam pengelolaan Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">h. Menyusun laporan pertanggung jawaban penatalayanan dan pengelolaan perbendaharaan GEKINDO dan menyampaikannya pada Sidang Sinode, setelah mendapat ratifikasi dari Pengawas Perbendaharaan Sinode.</p>
                <p>4. Dalam rangka Pelaksanaan Keputusan Sidang Sinode, Badan Pekerja Harian Sinode meminta dan atau memperhatikan pertimbangan-pertimbangan yang diberikan Majelis Pertimbangan.</p>

                <h5 id="artp59" style="text-align: center;">PASAL 59</h5>
                <h5 style="text-align: center;">Wewenang Badan Pekerja Harian Sinode.</h5>
                <p>1. Bertindak untuk dan atas nama GEKINDO di dalam dan di luar gereja.</p>
                <p>2. Mengangkat dan memberhentikan badan pembantu sinode dan alat kelengkapan lainnya, antara lain : panitia, tim, kelompok kerja.</p>
                <p>3. Menetapkan peresmian jemaat.</p>
                <p>4. Menetapkan penahbisan pendeta dan status tugas pendeta serta peresmiannya.</p>
                <p>5. Melakukan tindakan terhadap pendeta sesuai dengan ketentuan Anggaran Dasar serta peraturan sinode.</p>

                <h3 style="text-align: center;">BAB X</h3>
                <h4 style="text-align: center;">PENDETA</h4>

                <h5 id="artp60" style="text-align: center;">PASAL 60</h5>
                <h5 style="text-align: center;">Ketentuan Umum Menjadi Pendeta GEKINDO</h5>
                <p>Seseorang dapat diberikan jabatan pendeta GEKINDO dengan ketentuan sebagai berikut :</p>
                <p>1. Anggota sidi GEKINDO yang memiliki sikap, kelakuan serta kemampuan yang sesuai dan layak dengan panggilan pelayanan dalam jabatan pendeta</p>
                <p>2. Menyelesaikan pendidikan teologi minimal strata l.</p>
                <p>3. Bagi anggota sidi diluar GEKINDO yang terpanggil untuk melayani di GEKINDO haruslah memenuhi pasal 58 ayat 2 dan mengikuti orientasi selama 1 tahun sebelum masuk masa vikariat.</p>
                <p>4. Bagi setiap calon vikaris yang sedang mengikuti masa orientasi dibawah tanggung jawab Badan Pengawasan dan Penilaian Kependetaan ( BP2K ).</p>
                <p>5. Masa Vikariat berlangsung selama 2 tahun.</p>
                <p>6. Kelulusan menjalani masa orientasi dan vikariat ditentukan oleh Badan Pekerja Harian Sinode setelah mendapatkan masukan dan penilaian dari BP3K.</p>
                <p>7. Batasan usia saat ditahbiskan ke dalam jabatan pendeta GEKINDO berusia minimal 25 tahun dan maksimal 45 tahun.</p>
                <p>8. Ditahbiskan ke dalam jabatan pendeta oleh Badan Pekerja Harian Sinode GEKINDO dalam kebaktian di salah satu Jemaat GEKINDO.</p>
                <p>9. Masa pelayanan seorang pendeta tidak dibatasi oleh usia. Selama masih bisa melayani maka pendeta tersebut dapat melakukan pelayanan di dalam dan diluar GEKINDO.</p>
                <p>10. Seorang Pendeta GEKINDO wajib melaksanakan dan menjaga pokok-pokok ajaran GEKINDO.</p>

                <h5 id="artp61" style="text-align: center;">PASAL 61</h5>
                <h5 style="text-align: center;">Ketentuan Tentang Pendeta Jemaat</h5>
                <p>1. Pendeta jemaat adalah gembala jemaat yaitu pendeta yang bertugas purna waktu untuk memimpin, membina dan menggembalakan kehidupan jemaat dalam melaksanakan tugas panggilan gereja serta mengembangkan kerjasama dengan anggota Majelis Jemaat.</p>
                <p>2. Seorang pendeta ditetapkan menjadi pendeta jemaat harus berdasarkan kebutuhan dan bersifat mendesak untuk segera ditentukan, ditetapkan dan ditempatkan di jemaat oleh Badan Pekerja Harian Sinode.</p>
                <p>3. Peresmian penetapan pendeta jemaat dilakukan melalui suatu kebaktian khusus di jemaat yang dipimpin oleh Badan Pekerja Harian Sinode.</p>
                <p>4. Satu periode pelayanan pendeta jemaat di suatu jemaat selama 5 (lima) tahun.</p>
                <p>5. Pendeta jemaat yang sudah melayani 5 tahun di suatu Jemaat tertentu mendapat kesempatan mutasi ke Jemaat lain atau ke bidang pelayanan tertentu atas dasar persetujuan Badan Pekerja Harian Sinode.</p>
                <p>6. Seorang pendeta jemaat dapat melaksanakan tugas di jemaat tersebut sampai batas waktu yang ditentukan dan dapat diganti (mutasi), dan atau dapat diperpanjang masa penugasannya.</p>
                <p>7. Penempatan pendeta dalam jemaat adalah merupakan kewewenang penuh Badan Pekerja Harian Sinode.</p>
                <p>8. Masa tugas pendeta jemaat dalam suatu jemaat sampai berusia 65 tahun.</p>

                <h5 id="artp62" style="text-align: center;">PASAL 62</h5>
                <h5 style="text-align: center;">Ketentuan Pendeta Tugas Khusus</h5>
                <p>Pendeta tugas khusus adalah :</p>
                <p>1. Pendeta yang diutus melayani bidang pelayanan khusus, baik di lingkungan GEKINDO maupun diluar GEKINDO.</p>
                <p>2. Pendeta yang sedang menjalani tugas belajar penuh waktu dan tidak bertugas sebagai pendeta jemaat.</p>
                <p>3. Ketentuan lain diatur dalam peraturan sinode.</p>

                <h5 id="artp63" style="text-align: center;">PASAL 63</h5>
                <h5 style="text-align: center;">Ketentuan Pendeta Pelayanan Umum</h5>
                <p>Pendeta tugas khusus adalah :</p>
                <p>1. Pendeta pelayanan umum ditahbiskan oleh Badan Pekerja Harian Sinode di dalam satu Jemaat GEKINDO</p>
                <p>2. Pendeta pelayanan umum adalah pendeta yang membantu terlaksananya pelayanan suatu jemaat dalam lingkup GEKINDO dan di sinode.</p>

                <h5 id="artp64" style="text-align: center;">PASAL 64</h5>
                <h5 style="text-align: center;">Ketentuan Pendeta Emeritus</h5>
                <p>1. Status Emeritus diberikan oleh gereja sebagai penghargaan kepada seorang pendeta yang telah menyelesaikan masa pelayanannya sesuai dengan ketentuan yang berlaku di GEKINDO.</p>
                <p>2. Status tersebut diberikan jika sudah mencapai usia 65 tahun, atau sebelum usia tersebut jika keadaan fisik dan mental yang bersangkutan tidak memungkinkan untuk menjalankan tugas dan tanggung jawab sebagai pendeta.</p>
                <p>3. Peresmian status Emeritus dilakukan dalam kebaktian Emeritasi oleh BPH Sinode bersama majelis jemaat terkait di gereja tempat pendeta yang bersamgkutan melayani/ berjemaat atau di gereja jemaat GEKINDO lainnya.</p>
                <p>4. Sehubungan dengan jabatan kependetaannya, pendeta Emeritus mempunyai tanggung jawab memelihara hubungan dengan GEKINDO antara lain;</p>
                <p style="margin-left: 2em;">a. Menghadiri kegiatan-kegiatan kebersamaan GEKINDO baik lingkup sinodal, wilayah maupun jemaat berdasarkan undangan.</p>
                <p style="margin-left: 2em;">b. Melaksanakan fungsi kependetaannya berdasarkan permohonan majelis jemaat maupun dari gereja di lingkup GEKINDO maupun di luar GEKINDO.</p>

                <h5 id="artp65" style="text-align: center;">PASAL 65</h5>
                <h5 style="text-align: center;">Tugas dan Tanggung Jawab Pendeta Jemaat</h5>
                <p>1. Sebagai gembala jemaat, bertanggung jawab untuk menunjukkan sikap keteladanan hidup kekristenan dan rasa keterpautannya dengan jemaat yang digembalakan.</p>
                <p>2. Berkenaan dengan jabatannya, memimpin dan bersama-sama Majelis Jemaat melaksanakan tugas dan tanggung jawab Majelis Jemaat.</p>
                <p>3. Melaksanakan pelayanan khusus berkaitan dengan jabatannya yaitu : sakramen, pemberkatan nikah, peneguhan sidi, peneguhan Majelis Jemaat, Pengawas Perbendaharaan Jemaat, Komisi Jemaat dan lain-lain yang ditetapkan Majelis Jemaat.</p>
                <p>4. Membimbing proses pemilihan Majelis Jemaat, membina dan mempersiapkan calon anggota Majelis Jemaat, membina dan bekerja sama dengan anggota Majelis Jemaat dalam pelaksanaan tanggung jawab sebagai pemimpin jemaat.</p>
                <p>5. Memelihara dan menjaga rahasia jabatan.</p>
                <p>6. Menjalin dan memelihara serta mengembangkan hubungan baik dengan masyarakat dan aparat pemerintah sekitarnya sebagai warga masyarakat dan pemimpin kehidupan bergereja.</p>

                <h5 id="artp66" style="text-align: center;">PASAL 66</h5>
                <h5 style="text-align: center;">Tugas dan Tanggung Jawab Pendeta Tugas Khusus</h5>
                <p>1. Bertanggung jawab untuk menunjukkan sikap keteladanan hidup kekristenan dan rasa keterpautannya dengan GEKINDO.</p>
                <p>2. Melakukan tugas kepengutusannya sesuai dengan fungsinya di bidang pelayanan tersebut.</p>
                <p>3. Pendeta tugas khusus berkewajiban memelihara hubungan dengan GEKINDO dalam bentuk antara lain :</p>
                <p style="margin-left: 2em;">a. Ikut mengambil bagian dalam membantu pelayanan Jemaat-jemaat GEKINDO dalam koordinasi Majelis Jemaat setempat.</p>
                <p style="margin-left: 2em;">b. Wajib menghadiri dalam Sidang Sinode dan pertemuan sinode lainnya atas undangan Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">c. Melaporkan pekerjaannya setiap tahun kepada Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">d. Mencatatkan keanggotaannya di salah satu Jemaat GEKINDO.</p>
                <p style="margin-left: 2em;">e. Memenuhi tanggungjawabnya bagi sinode.</p>
                <p style="margin-left: 2em;">f. Ketentuan lain tentang pendeta tugas khusus diatur dalam peraturan sinode.</p>

                <h5 id="artp67" style="text-align: center;">PASAL 67</h5>
                <h5 style="text-align: center;">Tugas dan Tanggung Jawab Pendeta Pelayanan Umum</h5>
                <p>1. Bertanggung jawab untuk menunjukkan sikap dan keteladanan hidup kekristenan dan rasa keterpautan dengan GEKINDO.</p>
                <p>2. Melaksanakan tugasnya sesuai dengan fungsinya di bidang pelayanan umum.</p>
                <p>3. Pendeta pelayanan umum berkewajiban memelihara hubungan dengan GEKINDO dalam bentuk antara lain :</p>
                <p style="margin-left: 2em;">a. Ikut mengambil bagian dalam membantu pelayanan Jemaat-jemaat GEKINDO, dalam koordinasi Majelis Jemaat bersangkutan.</p>
                <p style="margin-left: 2em;">b. Wajib menghadiri dalam Sidang Raya Sinode dan pertemuan-pertemuan sinode lainnya atas undangan Badan Pekerja Harian Sinode.</p>
                <p style="margin-left: 2em;">c. Melaporkan kegiatan pelayanannya setiap tahun kepada Badan Pekerja</p>
                <p style="margin-left: 2em;">d. Harian Sinode.</p>
                <p style="margin-left: 2em;">e. Mencatat keanggotaannya di salah satu Jemaat GEKINDO.</p>
                <p>4. Ketentuan lain tentang tanggung jawab pendeta pelayanan umum diatur dalam peraturan sinode.</p>

                <h5 id="artp68" style="text-align: center;">PASAL 68</h5>
                <h5 style="text-align: center;">Pakaian Jabatan Pendeta</h5>
                <p>1. Pakaian jabatan Pendeta adalah:</p>
                <p style="margin-left: 2em;">a. Toga berwarna hitam, memakai ‘clerical collar’</p>
                <p style="margin-left: 2em;">b. Jas dengan kemeja hitam dan atau warna lain, memakai ‘clerical collar’</p>
                <p>2. Toga harus dipakai pada waktu melayani:</p>
                <p style="margin-left: 2em;">a. Sakramen yang dilaksanakan dalam kebaktian Minggu atau hari Raya Gerejawi.</p>
                <p style="margin-left: 2em;">b. Kebaktian Pentahbisan, Peneguhan dan Pengutusan Pendeta.</p>
                <p style="margin-left: 2em;">c. Kebaktian Peneguhan Majelis.</p>
                <p style="margin-left: 2em;">d. Kebaktian Peneguhan dan Pemberkatan Nikah.</p>
                <p>3. Jas dengan kemeja hitam dan atau warna lain dengan memakai ‘clerical collar’ atau toga harus dipakai pada waktu melayani:</p>
                <p style="margin-left: 2em;">a. Kebaktian Minggu.</p>
                <p style="margin-left: 2em;">b. Kebaktian Hari Raya Gerejawi.</p>
                <p style="margin-left: 2em;">c. Kebaktian Hari Raya Nasional.</p>
                <p style="margin-left: 2em;">d. Kebaktian Penghiburan dan Pemakaman.</p>
                <p style="margin-left: 2em;">e. Upacara sumpah jabatan atau janji di Pengadilan.</p>
                <p style="margin-left: 2em;">f. Sakramen di luar gedung gereja.</p>
                <p>4. Penggunaan Stola dalam setiap kebaktian haruslah sesuai dengan ketentuan yang ditetapkan oleh BPH Sinode.</p>

                <h5 id="artp69" style="text-align: center;">PASAL 69</h5>
                <h5 style="text-align: center;">Konven Pendeta</h5>
                <p>1. Konven pendeta dilaksanakan dan dipimpin oleh Badan Pekerja Harian Sinode sekurang-kurangnya dua tahun sekali.</p>
                <p>2. Hasil konven pendeta, tidak bertentangan dengan keputusan Sidang Sinode GEKINDO.</p>
                <p>3. Hasil konven pendeta mengikat seluruh bagian GEKINDO sampai dengan mendapat ratifikasi Sidang Sinode GEKINDO.</p>
                <p>4. Konven pendeta memilih dan menetapkan Penggembalaan Pendeta.</p>

                <h5 id="artp70" style="text-align: center;">PASAL 70</h5>
                <h5 style="text-align: center;">Ketentuan Tentang Penggembalaan Pendeta</h5>
                <p>1. Penggembalaan pendeta terdiri dari tiga pendeta GEKINDO yang dipilih dalam konven pendeta.</p>
                <p>2. Dalam rangka melaksanakan tugasnya, Penggembalaan pendeta antara lain melakukan :</p>
                <p style="margin-left: 2em;">a. Kunjungan kepada pendeta-pendeta.</p>
                <p style="margin-left: 2em;">b. Percakapan dengan pendeta-pendeta yang mengalami pergumulan dalam pelayanannya.</p>
                <p style="margin-left: 2em;">c. Membantu Badan Pekerja Harian Sinode dalam penggembalaan khusus pada pendeta.</p>
                <p>3. Pelaksanaan tugas penggembalaan pendeta dikoordinasikan oleh Badan Pekerja Harian Sinode dan berlangsung selama dua tahun.</p>

                <h3 style="text-align: center;">BAB XI</h3>
                <h4 style="text-align: center;">LEMBAGA PELAYANAN KHUSUS</h4>

                <h5 id="artp71" style="text-align: center;">PASAL 71</h5>
                <h5 style="text-align: center;">Ketentuan Tentang Badan Pelayanan yang Berbadan Hukum</h5>
                <p>1. Badan Pelayanan yang berbadan hukum tunduk pada peraturan perundangan yang berlaku.</p>
                <p>2. Penyusunan dan perubahan anggaran dasar dilakukan oleh badan pelayanan tersebut dan disetujui oleh Badan Pekerja Harian Sinode serta disahkan sesuai dengan ketentuan peraturan perundangan yang berlaku.</p>
                <p>3. Badan Pelayanan yang berbadan hukum tunduk pada Anggaran Dasar GEKINDO dan peraturan sinode.</p>
                <p>4. Ketentuan lainnya dari Badan Pelayanan yang berbadan hukum yang bermitra, diatur dalam peraturan sinode.</p>

                <h3 style="text-align: center;">BAB XII</h3>
                <h4 style="text-align: center;">MAJELIS PERTIMBANGAN</h4>

                <h5 id="artp72" style="text-align: center;">PASAL 72</h5>
                <h5 style="text-align: center;">Ketentuan Majelis Pertimbangan</h5>
                <p>1. Anggota Majelis Pertimbangan dipilih oleh Ketua Umum terpilih dan tim formatur, dari dan oleh anggota sidi jemaat dengan ketentuan sebagai berikut :</p>
                <p style="margin-left: 2em;">a. Jumlah anggota Majelis Pertimbangan sekurang-kurangnya tiga orang terdiri dari ketua, sekretaris, dan anggota.</p>
                <p style="margin-left: 2em;">b. Personalia Majelis Pertimbangan adalah anggota sidi jemaat yang tidak kehilangan haknya sehubungan dengan ketentuan penggembalaan khusus dan memiliki wawasan GEKINDO, wawasan oikumenis dan wawasan kemasyarakatan yang cukup mendalam, serta mempunyai pemahaman dan pengalaman yang memadai untuk menjalankan fungsinya.</p>
                <p style="margin-left: 2em;">c. Masa pelayanan Majelis Pertimbangan adalah 5 (lima) tahun..</p>
                <p style="margin-left: 2em;">d. Pergantian personalia Majelis Pertimbangan oleh karena sebab-sebab tertentu diusulkan oleh Badan Pekerja Harian Sinode dan ditetapkan dalam Rapat Kerja Sinode.</p>
                <p>2. Tugas dan tanggung jawab Majelis Pertimbangan adalah memberi pertimbangan, baik diminta atau tidak kepada Badan Pekerja Harian Sinode dalam Rapat Kerja Sinode tentang kebijakan kegiatan kehidupan bersinode.</p>
                <p>3. Majelis Pertimbangan mengadakan rapat 1 tahun sekali.</p>
                <p>4. Pembiayaan Majelis Pertimbangan menjadi tanggung jawab Badan Pekerja Harian Sinode.</p>

                <h3 style="text-align: center;">BAB XIII</h3>
                <h4 style="text-align: center;">PENGAWAS PERBENDAHARAAN</h4>

                <h5 id="artp73" style="text-align: center;">PASAL 73</h5>
                <h5 style="text-align: center;">Ketentuan Pengawas Perbendaharaan Sinode</h5>
                <p>1. Anggota Pengawas Perbendaharaan Sinode dipilih oleh Ketua Umum terpilih dan tim formatur, bersamaan dengan pemilihan anggota Badan Pekerja Harian Sinode, dengan ketentuan :</p>
                <p style="margin-left: 2em;">a. Jumlah anggota Pengawas Perbendaharaan Sinode, sekurang-kurangnya lima orang, terdiri dari seorang ketua dan empat orang anggota.</p>
                <p style="margin-left: 2em;">b. Anggota Pengawas Perbendaharaan Sinode adalah anggota sidi jemaat yang tidak kehilangan haknya sehubungan dengan ketentuan penggembalaan khusus dan memiliki pengetahuan cukup untuk mendukung tugasnya.</p>
                <p style="margin-left: 2em;">c. Masa pelayanan Pengawas Perbendaharaan Sinode adalah 5 (lima) tahun.</p>
                <p>2. Tugas dan tanggung jawab Pengawas Perbendaharaan Sinode adalah memeriksa dan membantu menata pengelolaan keuangan dan harta milik GEKINDO yang berada dalam pengelolaan Badan Pekerja Harian Sinode serta Badan-badan Pelayanan antara lain dengan cara :</p>
                <p style="margin-left: 2em;">a. Mengadakan pemeriksaan terhadap pertanggung jawaban keuangan dan harta milik yang dikuasai oleh Badan Pekerja Harian Sinode, Badan-badan Pelayanan di lingkungan sinode dan usaha-usaha lain milik GEKINDO secara berkala atau sewaktu-waktu bila dipandang perlu.</p>
                <p style="margin-left: 2em;">b. Menyampaikan koreksi dan saran-saran perbaikan atas penyelenggaraan pelayanan, dalam pertemuan dengan Badan Pekerja Harian Sinode / Badan Pelayanan.</p>
                <p style="margin-left: 2em;">c. Menyampaikan saran-saran dalam rangka peningkatan kemampuan keuangan Badan Pekerja Harian Sinode / Badan Pelayanan.</p>
                <p style="margin-left: 2em;">d. Menunjuk badan atau orang untuk dan atas nama Pengawas Perbendaharaan Sinode melakukan pengawasan / pemeriksaan dalam rangka tugas Pengawas Perbendaharaan Sinode.</p>
                <p style="margin-left: 2em;">e. Menyampaikan laporan pemeriksaan perbendaharaan GEKINDO pada Sidang Sinode dan Rapat Kerja Sinode.</p>
                <p>3. Untuk ketertiban jalannya pemeriksaan, jadwal pemeriksaan kepada Badan Pelayanan dilakukan dalam koordinasi Badan Pekerja Harian Sinode.</p>
                <p>4. Pembiayaan dalam rangka kegiatan pemeriksaan oleh Pengawas Perbendaharaan Sinode menjadi tanggung jawab Badan Pekerja Harian Sinode.</p>
                <p>5. Tata cara pemeriksaan perbendaharaan diatur lebih lanjut dalam peraturan sinode.</p>

                <h3 style="text-align: center;">BAB XIV</h3>
                <h4 style="text-align: center;">SARANA PENUNJANG</h4>

                <h5 id="artp74" style="text-align: center;">PASAL 74</h5>
                <h5 style="text-align: center;">Perbendaharaan</h5>
                <p>1. Bentuk-bentuk harta kekayaan GEKINDO yaitu :</p>
                <p style="margin-left: 2em;">a. Uang tunai dan kertas-kertas berharga berupa cek, obligasi dan sejenisnya.</p>
                <p style="margin-left: 2em;">b. Barang bergerak dan tidak bergerak.</p>
                <p>2. Harta kekayaan yang dimiliki oleh GEKINDO diperoleh melalui :</p>
                <p style="margin-left: 2em;">a. Persembahan dari anggota jemaat.</p>
                <p style="margin-left: 2em;">b. Persembahan Persepuluhan dari anggota jemaat.</p>
                <p style="margin-left: 2em;">c. Sumbangan-sumbangan atau hibah.</p>
                <p style="margin-left: 2em;">d. Pembelian atau penjualan.</p>
                <p style="margin-left: 2em;">e. Hasil-hasil pemanfaatan dan usaha-usaha yang tidak bertentangan dengan panggilan gereja.</p>

                <h5 id="artp75" style="text-align: center;">PASAL 75</h5>
                <h5 style="text-align: center;">Pengelolaan dan Pendayagunaan Perbendaharaan</h5>
                <p>1. Pengelolaan dan pendayagunaan harta kekayaan berupa uang tunai dan barang-barang dilakukan oleh Majelis Jemaat, Badan Pekerja Harian Sinode dan Badan Pelayanan, masing-masing untuk melaksanakan tugas panggilannya, dengan tetap memperhatikan ketentuan dan kepentingan bersama GEKINDO.</p>
                <p>2. Dalam rangka pengelolaan dan pendayagunaan harta kekayaan berupa tanah dan bangunan maka :</p>
                <p style="margin-left: 2em;">a. Majelis Jemaat, Badan Pekerja Harian Sinode dan Badan Pelayanan bertanggung jawab untuk memelihara dan memanfaatkan sebaik-baiknya tanah dan bangunan yang berada dalam pengelolaannya untuk pelaksanaan tugas panggilan gereja serta melaporkannya pada Badan Pekerja Harian Sinode satu kali dalam satu tahun.</p>
                <p style="margin-left: 2em;">b. Badan Pekerja Harian Sinode bertanggung jawab untuk mengatur pengelolaan tanah dan bangunan milik GEKINDO agar dapat dimanfaatkan secara optimal.</p>
                <p style="margin-left: 2em;">c. Pemanfaatan tanah dan bangunan yang berada dalam pengelolaan Majelis Jemaat atau Badan Pelayanan dengan cara menyewakan atau mengontrakkan pada pihak lain untuk waktu lebih dari satu tahun, hanya dapat dilakukan dengan seijin Badan Pekerja Harian Sinode, dan untuk Badan Pelayanan yang berbadan hukum sendiri, mengikuti peraturan perundangan yang berlaku.</p>
                <p style="margin-left: 2em;">d. Pelepasan atas hak tanah dan bangunan milik GEKINDO dan Badan Pelayanan yang tidak berbadan hukum sendiri, hanya dapat dilakukan oleh Badan Pekerja Harian Sinode berdasarkan keputusan Sidang Sinode atau Rapat Kerja Sinode.</p>
                <p style="margin-left: 2em;">e. Pelepasan hak atas tanah dan bangunan milik Badan Pelayanan yang berbadan hukum sendiri, dapat dilakukan oleh Badan Pelayanan tersebut berdasarkan keputusan Sidang Sinode atau Rapat Kerja Sinode.</p>
                <p style="margin-left: 2em;">f. Dana hasil pelepasan tanah dan bangunan GEKINDO dikelola oleh Badan Pekerja Harian Sinode untuk pengembangan seluruh bagian GEKINDO, sedangkan untuk Badan Pelayanan yang berbadan hukum sendiri dikelola sesuai dengan anggaran dasar dan anggaran rumah tangga masing-masing dengan mengikuti peraturan perundangan yang berlaku.</p>

                <h5 id="artp76" style="text-align: center;">PASAL 76</h5>
                <h5 style="text-align: center;">Keuangan Sinode</h5>
                <p>1. Untuk menunjang seluruh operasional Sinode GEKINDO maka anggaran yang dibutuhkanadalah berasal dari tanggungan/iuran jemaat-jemaat dalam jajaran GEKINDO, dengan pengaturannya, adalah</p>
                <p style="margin-left: 2em;">a. Iuran jemaat yang berasal dari pendapatan perbulan sebagai bentuk dari persembahan yang diperoleh dalam ibadah tiap minggu adalah merupakan bentuk tanggung jawab jemaat kepada Sinode dengan cara menyetor sebagai iuran wajib jemaat</p>
                <p style="margin-left: 2em;">b. Jumlah dari iuran wajib yang disetor/diserahkan dari jemaat ke Sinode adalah dalam segi perhitungan persentasi dari seluruh pendapatan yang diterima dalam jemaat (yang dihitung adalah persembahan kantong kolekte, jumlah perpuluhan, dan ucapan syukur).</p>
                <p style="margin-left: 2em;">c. Jumlah persentasi yang disetor oleh jemaat ke Sinode adalah sebesar 25 % dari total pendapatan sebagaimana (butir b diatas).</p>
                <p>2. Pendapatan lain yang sifatnya Hibah, Bantuan dan atau Sumbangan lain yang tidak megikat adalah merupakan bagian yang tak terpisahkan dari keuangan Sinode.</p>
                <p>3. Tanggung jawab setiap Hamba Tuhan/Pendeta GEKINDO yang dalam pelayanannya dapat memberikan bantuan bagi penambahan keuangan Sinode melalui para dermawan/donatur yang sifatnya tidak mengikat dan tidak terindikasi bantuankeuangan yang sifatnya gelap, dan atau dari hasil penyuapan dan lainnya.</p>

                <h3 style="text-align: center;">BAB XV</h3>
                <h4 style="text-align: center;">KETENTUAN PENUTUP</h4>

                <h5 id="artp77" style="text-align: center;">PASAL 77</h5>
                <h5 style="text-align: center;">Ketentuan Lebih Lanjut</h5>
                <p>Ketentuan-ketentuan dalam Anggaran Rumah Tangga yang perlu pengaturan lebih lanjut diatur dalam Peraturan Sinode, Peraturan Majelis Sinode, Peraturan Badan Pekerja Harian Sinode, Peraturan Majelis Jemaat, Anggaran Dasar Badan Pelayanan dan peraturan lainnya yang tidak bertentangan dengan Anggaran Dasar GEKINDO.</p>

                <h5 id="artp78" style="text-align: center;">PASAL 78</h5>
                <h5 style="text-align: center;">Perubahan Anggaran Rumah Tangga</h5>
                <p>1. Perubahan yang mencakup penambahan dan penghapusan atas bagian atau seluruh Anggaran Rumah Tangga ini hanya dapat dilakukan pada Sidang Sinode yang dihadiri dan disetujui paling sedikit oleh ¾ (tiga perempat) dari jumlah Jemaat-jemaat GEKINDO.</p>
                <p>2. Usul untuk mengubah Anggaran Rumah Tangga hanya dapat dilakukan oleh Badan Pekerja Harian Sinode atau 5 (lima) Jemaat melalui Badan Pekerja Harian Sinode. Usul perubahan ini harus sudah diterima paling lambat 3 (tiga) bulan sebelum Sidang Sinode kecuali untuk hal-hal yang mendesak.</p>

                <h5 id="artp79" style="text-align: center;">PASAL 79</h5>
                <h5 style="text-align: center;">Waktu Pemberlakuan Anggaran Rumah Tangga</h5>
                <p>Anggaran Rumah Tangga ini dirumuskan dan disahkan serta diberlakukan dalam sidang sinode pada tanggal 22 Maret 2021 yang dilaksanakan secara Virtual dengan menggunakan Link Zoom, dengan Meeting ID : 846 2369 5681 dan Passcode : 033470, bertempat di Jemaat GEKINDO Pondok Hijau Permai – Bekasi Timur.</p>


                <h5 style="text-align: right;">Jakarta, 22 Maret 2021</h5>
                <h5 style="text-align: right;">BADAN PEKRJA HARIAN SINODE</h5>
                <h5 style="text-align: right;">GEREJA KEESAAN INJILI INDONESIA</h5>
                <h5 style="text-align: right;">PERIODE 2021 - 2026</h5>

                <!-- ART END -->



            </div>

        </article>
    </div>
</div>

<?= $this->endSection(); ?>
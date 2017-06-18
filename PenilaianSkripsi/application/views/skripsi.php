<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Berita Acara Sidang Skripsi </title>

        <!-- Bootstrap Core CSS -->
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Scroll Nav CSS -->
        <link href="public/css/scrolling-nav.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="public/css/custom.css" rel="stylesheet">

        <!-- AngularJS -->
        <script src="public/js/angularJS/angular.min.js"></script>

        <!-- Mobile friendly bootstrap -->


    </head>
    <body ng-app="penilaian" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <form role="form" method="post" accept-charset="utf-8" action="<?php echo base_url() . "index.php/c_skripsi/tambahDataMahasiswa" ?>" ng-controller="DefaultValue" onsubmit="return confirm('Apakah anda yakin?');">


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li>
                                <a class="page-scroll" href="#page-top">Berita Acara Sidang Skripsi</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#rekKetua">Lembar Rekapitulasi Ketua Tim Penguji</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#rekAnggota">Lembar Rekapitulasi Anggota Tim Penguji</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#rekPembimbing">Lembar Rekapitulasi Pembimbing</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#selesai">Selesai</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>



        <!-- Berita Acara Sidang Skripsi -->
        <section id="intro" class="intro-section">
            <!-- Page Heading -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1>
                                Berita Acara Sidang Skripsi
                            </h1>

                            <div class="semester">
                                <p> 
                                    <label>Semester:</label>
                                    <!-- 1 -->
                                    <select name="semester">
                                        <option value="1">Ganjil</option>
                                        <option value="2">Genap</option>
                                    </select>
                                    <!-- 2 -->
                                    <input id="tahun" type="number" max="9999" ng-model="tahun" name="tahun" ng-init="tahun=2016"/>
                                    /
                                    <input id="tahun_1" type="number" max="9999" value="{{tahun + 1}}" disabled="disabled"/>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Isi -->
                <div class="row">
                    <div class="col-lg-12">

                        <div class="form-group">
                            Telah diselenggarakan Sidang Skripsi untuk mata kuliah AIF402-6 Skripsi 2 bagi:

                            <div id="pengenalMahasiswa">
                                <p>
                                    <!-- 3 -->
                                    <label class="col-md-1 col-xs-6" for="npm">NPM:</label><input minlength="10" id="npm" class="inline-form col-md-3 col-xs-6" ng-model="n_npm" name="npm" required />
                                    <!-- 4 -->
                                    <label class="col-md-1 col-xs-6" for="nama">Nama:</label><input id="nama" class="inline-form col-md-7 col-xs-6" name="nama"/>
                                </p>
                            </div>
                            <br/>
                            <div id="pengenalJudul">
                                <p>
                                    <!-- 5 -->
                                    <label class="col-md-1 col-xs-6" for="judul">Judul:</label><input id="judul" class="inline-form col-md-11 col-xs-6" name="judul"/>
                                </p>
                            </div>
                        </div>

                        <p> dengan pembimbing dan penguji:</p>


                        <div id="pengenalPembimbing">
                            <p>
                                <label class="col-md-3 col-xs-8" for="pembimbing">Pembimbing:</label>
                                <!-- 6 -->
                                <select class="col-md-9 col-xs-4" id="pembimbing" name="namaPembimbing" ng-model="namaPembimbing">
                                    <option value="Cecilia Esti Nugraheni">Cecilia Esti Nugraheni</option>
                                    <option value="Veronica Sri Moertini">Veronica Sri Moertini</option>
                                    <option value="Rosa De Lima">Rosa De Lima</option>
                                    <option value="Thomas Anung Basuki">Thomas Anung Basuki</option>
                                    <option value="Lionov">Lionov</option>
                                    <option value="Mariskha Tri Adithia">Mariskha Tri Adithia</option>
                                    <option value="Luciana Abednego">Luciana Abednego</option>
                                    <option value="Elisati Hulu">Elisati Hulu</option>
                                    <option value="Chandra Wijaya">Chandra Wijaya</option>
                                    <option value="Gede Karya">Gede Karya</option>
                                    <option value="Nico Saputro">Nico Saputro</option>
                                    <option value="Joanna Helga">Joanna Helga</option>
                                    <option value="Pascal Alfadian">Pascal Alfadian</option>
                                    <option value="Husnul Hakim">Husnul Hakim</option>
                                    <option value="Vania Natali">Vania Natali</option>
                                    <option value="Aditya Bagoes Saputra">Aditya Bagoes Saputra</option>
                                    <option value="Claudio Fransiscus">Claudio Fransiscus</option>
                                    <option value="Natalia">Natalia</option>
                                </select>
                            </p>
                        </div>
                        <br/>

                        <div id="pengenalPembimbingPendamping">
                            <p>
                                <label class="col-md-3 col-xs-8" for="pembimbing2">Pembimbing Pendamping:</label>
                                <!-- 7 -->
                                <select class="col-md-9 col-xs-4" id="pembimbing2" name="namaPembimbingPendamping" ng-model="namaPembimbingPendamping">
                                    <option value="Cecilia Esti Nugraheni">Cecilia Esti Nugraheni</option>
                                    <option value="Veronica Sri Moertini">Veronica Sri Moertini</option>
                                    <option value="Rosa De Lima">Rosa De Lima</option>
                                    <option value="Thomas Anung Basuki">Thomas Anung Basuki</option>
                                    <option value="Lionov">Lionov</option>
                                    <option value="Mariskha Tri Adithia">Mariskha Tri Adithia</option>
                                    <option value="Luciana Abednego">Luciana Abednego</option>
                                    <option value="Elisati Hulu">Elisati Hulu</option>
                                    <option value="Chandra Wijaya">Chandra Wijaya</option>
                                    <option value="Gede Karya">Gede Karya</option>
                                    <option value="Nico Saputro">Nico Saputro</option>
                                    <option value="Joanna Helga">Joanna Helga</option>
                                    <option value="Pascal Alfadian">Pascal Alfadian</option>
                                    <option value="Husnul Hakim">Husnul Hakim</option>
                                    <option value="Vania Natali">Vania Natali</option>
                                    <option value="Aditya Bagoes Saputra">Aditya Bagoes Saputra</option>
                                    <option value="Claudio Fransiscus">Claudio Fransiscus</option>
                                    <option value="Natalia">Natalia</option>
                                </select>       
                            </p>
                        </div>
                        <br/>
                        <div id="pengenalKetua">
                            <p>
                                <label class="col-md-3 col-xs-8" for="ketua">Ketua Tim Penguji:</label>
                                <!-- 8 -->
                                <select class="col-md-9 col-xs-4" id="ketua" name="namaKetuaTimPenguji" ng-model="namaKetuaTimPenguji">
                                    <option value="Cecilia Esti Nugraheni">Cecilia Esti Nugraheni</option>
                                    <option value="Veronica Sri Moertini">Veronica Sri Moertini</option>
                                    <option value="Rosa De Lima">Rosa De Lima</option>
                                    <option value="Thomas Anung Basuki">Thomas Anung Basuki</option>
                                    <option value="Lionov">Lionov</option>
                                    <option value="Mariskha Tri Adithia">Mariskha Tri Adithia</option>
                                    <option value="Luciana Abednego">Luciana Abednego</option>
                                    <option value="Elisati Hulu">Elisati Hulu</option>
                                    <option value="Chandra Wijaya">Chandra Wijaya</option>
                                    <option value="Gede Karya">Gede Karya</option>
                                    <option value="Nico Saputro">Nico Saputro</option>
                                    <option value="Joanna Helga">Joanna Helga</option>
                                    <option value="Pascal Alfadian">Pascal Alfadian</option>
                                    <option value="Husnul Hakim">Husnul Hakim</option>
                                    <option value="Vania Natali">Vania Natali</option>
                                    <option value="Aditya Bagoes Saputra">Aditya Bagoes Saputra</option>
                                    <option value="Claudio Fransiscus">Claudio Fransiscus</option>
                                    <option value="Natalia">Natalia</option>
                                </select>

                            </p>
                        </div>
                        <br/>

                        <div id="pengenalAnggota">
                            <p>
                                <label class="col-md-3 col-xs-8" for="anggota">Anggota Tim Penguji:</label>
                                <!-- 9 -->
                                <select class="col-md-9 col-xs-4" id="anggota" name="namaAnggotaTimPenguji" ng-model="namaAnggotaTimPenguji">
                                    <option value="Cecilia Esti Nugraheni">Cecilia Esti Nugraheni</option>
                                    <option value="Veronica Sri Moertini">Veronica Sri Moertini</option>
                                    <option value="Rosa De Lima">Rosa De Lima</option>
                                    <option value="Thomas Anung Basuki">Thomas Anung Basuki</option>
                                    <option value="Lionov">Lionov</option>
                                    <option value="Mariskha Tri Adithia">Mariskha Tri Adithia</option>
                                    <option value="Luciana Abednego">Luciana Abednego</option>
                                    <option value="Elisati Hulu">Elisati Hulu</option>
                                    <option value="Chandra Wijaya">Chandra Wijaya</option>
                                    <option value="Gede Karya">Gede Karya</option>
                                    <option value="Nico Saputro">Nico Saputro</option>
                                    <option value="Joanna Helga">Joanna Helga</option>
                                    <option value="Pascal Alfadian">Pascal Alfadian</option>
                                    <option value="Husnul Hakim">Husnul Hakim</option>
                                    <option value="Vania Natali">Vania Natali</option>
                                    <option value="Aditya Bagoes Saputra">Aditya Bagoes Saputra</option>
                                    <option value="Claudio Fransiscus">Claudio Fransiscus</option>
                                    <option value="Natalia">Natalia</option>
                                </select>

                            </p>
                        </div>
                        <br/>
                        <p>Rekapitulasi nilai Sidang Skripsi 2 yang diberikan oleh pembimbing, penguji & koordinator skripsi:</p>
                        <table class="col-md-8 col-xs-12 col-md-offset-4 col-md-pull-2 table-responsive">
                            <tr>
                                <th>No</th>
                                <th>Pembimbing/Penguji</th>
                                <th>Nilai</th>
                                <th>Bobot(%)</th>
                                <th>Nilai Akhir</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><label for="nKetua">Ketua Tim Penguji</label></td>
                                <td><input type="number" id="nKetua" max="100" ng-model="nilai_ketua" class="form-nilai" value="{{nilai_TTLaporanK * TTLaporanK.value / 100 + nilai_KMateriK * KMateriK.value / 100 + nilai_PMateriK * PMateriK.value / 100 + nilai_PresentasiK * presentasiK.value / 100 + nilai_PTujuanK * PTujuanK.value / 100}}" disabled="disabled" /></td>
                                <!-- 10 -->
                                <td><input type="number" ng-model="ketua.value" ng-init="ketua.value = 35" min="0" max="100" class="form-nilai" name="bobotKetuaTimPenguji" readonly="readonly" /></td>
                                <td><input type="number" value="{{(nilai_TTLaporanK * TTLaporanK.value / 100 + nilai_KMateriK * KMateriK.value / 100 + nilai_PMateriK * PMateriK.value / 100 + nilai_PresentasiK * presentasiK.value / 100 + nilai_PTujuanK * PTujuanK.value / 100) * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai" disabled="disabled" /></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><label for="nAnggota">Anggota Tim Penguji</label></td>
                                <td><input id="nAnggota" type="number" max="100" ng-model="nilai_anggota" class="form-nilai" value="{{nilai_TTLaporanA * TTLaporanA.value / 100 + nilai_KMateriA * KMateriA.value / 100 + nilai_PMateriA * PMateriA.value / 100 + nilai_PresentasiA * presentasiA.value / 100 + nilai_PTujuanA * PTujuanA.value / 100}}" disabled="disabled" /></td>
                                <!-- 11 -->
                                <td><input type="number" ng-model="anggota.value" ng-init="anggota.value = 35" min="0" max="100" class="form-nilai" name="bobotAnggotaTimPenguji" readonly="readonly" /></td>
                                <td><input type="number" value="{{(nilai_TTLaporanA * TTLaporanA.value / 100 + nilai_KMateriA * KMateriA.value / 100 + nilai_PMateriA * PMateriA.value / 100 + nilai_PresentasiA * presentasiA.value / 100 + nilai_PTujuanA * PTujuanA.value / 100) * anggota.value / 100}}" ng-model="total_anggota" class="form-nilai" disabled="disabled" /></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><label for="nPembimbing">Pembimbing</label></td>
                                <td><input id="nPembimbing" type="number" max="100" ng-model="nilai_pembimbing" class="form-nilai" min=0 value="{{nilai_TTLaporanP * TTLaporanP.value / 100 + nilai_KMateriP * KMateriP.value / 100 + nilai_PMateriP * PMateriP.value / 100 + nilai_PBimbinganP * PBimbinganP.value / 100}}" disabled="disabled" /></td>
                                <!-- 12 -->
                                <td><input type="number" ng-model="pembimbing.value" ng-init="pembimbing.value = 20" min="0" max="100" class="form-nilai" name="bobotPembimbing" readonly="readonly" /></td>
                                <td><input type="number" value="{{(nilai_TTLaporanP * TTLaporanP.value / 100 + nilai_KMateriP * KMateriP.value / 100 + nilai_PMateriP * PMateriP.value / 100 + nilai_PBimbinganP * PBimbinganP.value / 100) * pembimbing.value / 100}}" ng-model="total_pembimbing" class="form-nilai" disabled="disabled" /></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><label for="nKoordinator">Koordinator Skripsi</label></td>
                                <!-- 13 -->
                                <td><input id="nKoordinator" type="number" max="100" ng-model="nilai_koordinator" class="form-nilai" min=0 name="nilaiKoordinatorSkripsi"/></td>
                                <!-- 14 -->
                                <td><input type="number"  ng-model="koordinator.value" ng-init="koordinator.value = 10" min="0" max="100" class="form-nilai" name="bobotKoordinatorSkripsi" readonly="readonly" /></td>
                                <td><input type="number" value={{nilai_koordinator*koordinator.value/100}} ng-model="total_koodinator" class="form-nilai" disabled="disabled" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2" ><label for="nTotal">Total</label></td>
                                <td><input type="number" id="nTotal" max="100" disabled="disabled" value={{ketua.value+anggota.value+pembimbing.value+koordinator.value}} class="form-nilai"/></td>
                                <!-- 29 -->
                                <td><input type="number" name="nilaiAkhirMahasiswa" value= "{{(nilai_TTLaporanK * TTLaporanK.value / 100 + nilai_KMateriK * KMateriK.value / 100 + nilai_PMateriK * PMateriK.value / 100 + nilai_PresentasiK * presentasiK.value / 100 + nilai_PTujuanK * PTujuanK.value / 100 )* ketua.value / 100 + (nilai_TTLaporanA * TTLaporanA.value / 100 + nilai_KMateriA * KMateriA.value / 100 + nilai_PMateriA * PMateriA.value / 100 + nilai_PresentasiA * presentasiA.value / 100 + nilai_PTujuanA * PTujuanA.value / 100) * anggota.value / 100 + (nilai_TTLaporanP * TTLaporanP.value / 100 + nilai_KMateriP * KMateriP.value / 100 + nilai_PMateriP * PMateriP.value / 100 + nilai_PBimbinganP * PBimbinganP.value / 100) * pembimbing.value / 100 + nilai_koordinator * koordinator.value / 100}}" class="form-nilai"/></td>
                            </tr>
                        </table>
                    </div> 
                </div>
        </section>


        

        <!-- Rekapitulasi Ketua Tim Penguji -->
        <section id="rekKetua" class="rekKetua-section">
            <!-- Page Heading -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6.col-lg-offset-3">
                        <div class="page-header">
                            <h1>
                                Rekapitulasi Penilaian Skripsi 2 (Ketua Tim Penguji)
                            </h1>
                            <div class="semester">
                                <p> 
                                    <label for="npmK">NPM:</label><input id="nmpK" maxlength="10" value="{{ n_npm}}" disabled="disabled" />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Isi Rekapitulasi Ketua Tim Penguji -->
                <div class="row">
                    <div class="col-lg-12">
                        <table class="col-md-8 col-xs-12 col-md-offset-4 col-md-pull-2 table-responsive">
                            <tr>
                                <th>Komponen Penilaian</th>
                                <th>Nilai</th>
                                <th>Bobot(%)</th> 
                                <th>Nilai Akhir</th>
                            </tr>
                            <tr>
                                <td><label for="nTTLaporanK">Tata Tulis Laporan</label></td>
                                <td><input type="number" id="nTTLaporanK" max="100" ng-model="nilai_TTLaporanK" class="form-nilai"/></td>
                                <!-- 20 -->
                                <td><input type="number" name="bobotTataTulisLaporanKetua" ng-model="TTLaporanK.value" ng-init="TTLaporanK.value = 15" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_TTLaporanK * TTLaporanK.value / 100}}" ng-model="total_TTLaporanK" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nKMateriK">Kelengkapan Materi</label></td>
                                <td><input type="number" id="nKMateriK" max="100" ng-model="nilai_KMateriK" class="form-nilai"/></td>
                                <!-- 21 -->
                                <td><input type="number" name="bobotKelengkapanMateriKetua" ng-model="KMateriK.value" ng-init="KMateriK.value = 10" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_KMateriK * KMateriK.value / 100}}" ng-model="total_KMateriK" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nPMateriK">Penguasaan Materi</label></td>
                                <td><input type="number" id="nPMateriK" max="100" ng-model="nilai_PMateriK" class="form-nilai"/></td>
                                <!-- 22 -->
                                <td><input type="number" name="bobotPenguasaanMateriKetua" ng-model="PMateriK.value" ng-init="PMateriK.value = 30" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_PMateriK * PMateriK.value / 100}}" ng-model="total_PMateriA" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nPresentasiK">Presentasi</label></td>
                                <td><input type="number" id="nPresentasiK" max="100" ng-model="nilai_PresentasiK" class="form-nilai"/></td>
                                <!-- 23 -->
                                <td><input type="number" name="bobotPresentasiKetua" ng-model="presentasiK.value" ng-init="presentasiK.value = 15" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_PresentasiK * presentasiK.value / 100}}" ng-model="total_PresentasiK" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nPTujuanK">Pencapaian Tujuan</label></td>
                                <td><input type="number" id="nPTujuanK" max="100" ng-model="nilai_PTujuanK" class="form-nilai"/></td>
                                <!-- 24 -->
                                <td><input type="number" name="bobotPencapaianTujuanKetua" ng-model="PTujuanK.value" ng-init="PTujuanK.value = 30" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_PTujuanK * PTujuanK.value / 100}}" ng-model="total_PTujuanK" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" ><label for="nTotalBobotK">Total</label></td>
                                <td><input type="number" id="nTotalBobotK" max="100" disabled="disabled" value={{TTLaporanK.value+KMateriK.value+PMateriK.value+presentasiK.value+PTujuanK.value}} class="form-nilai"/></td>
                                <td><input type="number" id="nTotalKetua" ng-model="nTotalKetua" max="100" value= "{{nilai_TTLaporanK * TTLaporanK.value / 100 + nilai_KMateriK * KMateriK.value / 100 + nilai_PMateriK * PMateriK.value / 100 + nilai_PresentasiK * presentasiK.value / 100 + nilai_PTujuanK * PTujuanK.value / 100}}" class="form-nilai" disabled="disabled" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

<!-- Rekapitulasi Anggota Tim Penguji -->
        <section id="rekAnggota" class="rekAnggota-section">
            <!-- Page Heading -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6.col-lg-offset-3">
                        <div class="page-header">
                            <h1>
                                Rekapitulasi Penilaian Skripsi 2 (Anggota Tim Penguji)
                            </h1>
                            <div class="semester">
                                <p> 
                                    <label for="npmA">NPM:</label><input id="nmpA" maxlength="10" value="{{ n_npm}}" disabled="disabled" />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Isi Rekapitulasi Anggota Tim Penguji -->
                <div class="row">
                    <div class="col-lg-12">
                        <table class="col-md-8 col-xs-12 col-md-offset-4 col-md-pull-2 table-responsive">
                            <tr>
                                <th>Komponen Penilaian</th>
                                <th>Nilai</th>
                                <th>Bobot(%)</th>
                                <th>Nilai Akhir</th>
                            </tr>
                            <tr>
                                <td><label for="nTTLaporanA">Tata Tulis Laporan</label></td>
                                <td><input type="number" id="nTTLaporanA" max="100" ng-model="nilai_TTLaporanA" class="form-nilai"/></td>
                                <!-- 15 -->
                                <td><input type="number" name="bobotTataTulisLaporanAnggota" ng-model="TTLaporanA.value" ng-init="TTLaporanA.value = 15" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_TTLaporanA * TTLaporanA.value / 100}}" ng-model="total_TTLaporanA" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nKMateriA">Kelengkapan Materi</label></td>
                                <td><input type="number" id="nKMateriA" max="100" ng-model="nilai_KMateriA" class="form-nilai"/></td>
                                <!-- 16 -->
                                <td><input type="number" name="bobotKelengkapanMateriAnggota" ng-model="KMateriA.value" ng-init="KMateriA.value = 10" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_KMateriA * KMateriA.value / 100}}" ng-model="total_KMateriA" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nPMateriA">Penguasaan Materi</label></td>
                                <td><input type="number" id="nPMateriA" max="100" ng-model="nilai_PMateriA" class="form-nilai"/></td>
                                <!-- 17 -->
                                <td><input type="number" name="bobotPenguasaanMateriAnggota" ng-model="PMateriA.value"  ng-init="PMateriA.value = 30" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_PMateriA * PMateriA.value / 100}}" ng-model="total_PMateriA" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nPresentasiA">Presentasi</label></td>
                                <td><input type="number" id="nPresentasiA" max="100" ng-model="nilai_PresentasiA" class="form-nilai"/></td>
                                <!-- 18 -->
                                <td><input type="number" name="bobotPresentasiAnggota" ng-model="presentasiA.value" ng-init="presentasiA.value = 15" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_PresentasiA * presentasiA.value / 100}}" ng-model="total_PresentasiA" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nPTujuanA">Pencapaian Tujuan</label></td>
                                <td><input type="number" id="nPTujuanA" max="100" ng-model="nilai_PTujuanA" class="form-nilai"/></td>
                                <!-- 19 -->
                                <td><input type="number" name="bobotPencapaianTujuanAnggota" ng-model="PTujuanA.value" ng-init="PTujuanA.value = 30" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_PTujuanA * PTujuanA.value / 100}}" ng-model="total_PTujuanA" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" ><label for="nTotalBobotA">Total</label></td>
                                <td><input type="number" id="nTotalBobotA" max="100" disabled="disabled" value={{TTLaporanA.value+KMateriA.value+PMateriA.value+presentasiA.value+PTujuanA.value}} class="form-nilai"/></td>
                                <td><input type="number" id="nTotalAnggota" ng-model="nTotalAnggota" max="100" class="form-nilai" value= "{{nilai_TTLaporanA * TTLaporanA.value / 100 + nilai_KMateriA * KMateriA.value / 100 + nilai_PMateriA * PMateriA.value / 100 + nilai_PresentasiA * presentasiA.value / 100 + nilai_PTujuanA * PTujuanA.value / 100}}" disabled="disabled" /></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </section>

        <!-- Rekapitulasi Pembimbing -->
        <section id="rekPembimbing" class="rekPembimbing-section">
            <!-- Page Heading -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6.col-lg-offset-3">
                        <div class="page-header">
                            <h1>
                                Rekapitulasi Penilaian Skripsi 2 (Pembimbing)
                            </h1>
                            <div class="semester">
                                <p> 
                                    <label for="npmP">NPM:</label><input id="nmpP" maxlength="10" value="{{ n_npm}}" disabled="disabled" />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Isi Rekapitulasi Pembimbing -->
                <div class="row">
                    <div class="col-lg-12">
                        <table class="col-md-8 col-xs-12 col-md-offset-4 col-md-pull-2 table-responsive">
                            <tr>
                                <th>Komponen Penilaian</th>
                                <th>Nilai</th>
                                <th>Bobot(%)</th>
                                <th>Nilai Akhir</th>
                            </tr>
                            <tr>
                                <td><label for="nTTLaporanP">Tata Tulis Laporan</label></td>
                                <td><input type="number" id="nTTLaporanP" max="100" ng-model="nilai_TTLaporanP" class="form-nilai"/></td>
                                <!-- 25 -->
                                <td><input type="number" name="bobotTataTulisLaporanPembimbing" ng-model="TTLaporanP.value" ng-init="TTLaporanP.value = 20" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_TTLaporanP * TTLaporanP.value / 100}}" ng-model="total_TTLaporanP" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nKMateriP">Kelengkapan Materi</label></td>
                                <td><input type="number" id="nKMateriP" max="100" ng-model="nilai_KMateriP" class="form-nilai"/></td>
                                <!-- 26 -->
                                <td><input type="number" name="bobotKelengkapanMateriPembimbing" ng-model="KMateriP.value" ng-init="KMateriP.value = 20" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_KMateriP * KMateriP.value / 100}}" ng-model="total_KMateriP" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nPMateriP">Penguasaan Materi</label></td>
                                <td><input type="number" id="nPMateriP" max="100" ng-model="nilai_PMateriP" class="form-nilai"/></td>
                                <!-- 27 -->
                                <td><input type="number" name="bobotPenguasaanMateriPembimbing" ng-model="PMateriP.value" ng-init="PMateriP.value = 30" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_PMateriP * PMateriP.value / 100}}" ng-model="total_PMateriP" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td><label for="nPBimbinganP">Proses Bimbingan</label></td>
                                <td><input type="number" id="nPBimbinganP" max="100" ng-model="nilai_PBimbinganP" class="form-nilai"/></td>
                                <!-- 28 -->
                                <td><input type="number" name="prosesBimbinganPembimbing" ng-model="PBimbinganP.value" ng-init="PBimbinganP.value = 30" min="0" max="100" class="form-nilai" readonly="readonly" /></td>
                                <td><input type="number" disabled="disabled" value="{{nilai_PBimbinganP * PBimbinganP.value / 100}}" ng-model="total_PBimbinganP" class="form-nilai"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" ><label for="nTotalBobotP">Total</label></td>
                                <td><input type="number" id="nTotalBobotP" max="100" disabled="disabled" value={{TTLaporanP.value+KMateriP.value+PMateriP.value+PBimbinganP.value}} class="form-nilai"/></td>
                                <td><input type="number" id="nTotalPembimbing" ng-model="nTotalPembimbing" max="100"  value= "{{nilai_TTLaporanP * TTLaporanP.value / 100 + nilai_KMateriP * KMateriP.value / 100 + nilai_PMateriP * PMateriP.value / 100 + nilai_PBimbinganP * PBimbinganP.value / 100}}" class="form-nilai" disabled="disabled" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Selesai -->
        <section id="selesai" class="rekPembimbing-section">
            <!-- Page Heading -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6.col-lg-offset-3">
                        <div class="page-header">
                            <div class= "tanggal">
                            <p>
                                Ditetapkan di Bandung, <span id="date"></span>
                                <br>
                            </p>
                            <p>
                                Dengan persetujuan:
                                <p><input id="ketuaTimPengujiCheck" type="checkbox" value="1" required><label for="ketuaTimPengujiCheck">Ketua tim penguji (<span ng-bind="namaKetuaTimPenguji"></span>)</label></p>
                                <p><input id="anggotaTimPengujiCheck" type="checkbox" value="1" required><label for="anggotaTimPengujiCheck">Anggota tim penguji (<span ng-bind="namaAnggotaTimPenguji"></span>)</label></p>
                                <p><input id="pembimbingCheck" type="checkbox" value="1" required><label for="pembimbingCheck"> Pembimbing (<span ng-bind="namaPembimbing"></span>)</label></p>
                                <p><input class="submitBtn" type="submit" name="submit" value="Selesai" ></p>
                            </p>

                            <script>
                                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                                var date = new Date();
                                var day = date.getDate();
                                var month = date.getMonth();
                                var thisDay = date.getDay(),
                                        thisDay = myDays[thisDay];
                                var yy = date.getYear();
                                var year = (yy < 1000) ? yy + 1900 : yy;


                                newdate = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
                                document.getElementById("date").innerHTML = newdate;

                                newyear = parseInt(year);
                                document.getElementById("tahun").value = newyear;
                            </script>

                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>          
    </form>
    <!-- Set Default Value pada ng-model type number -->
    <script>
        angular.module('penilaian', [])
                .controller('DefaultValue', ['$scope', function ($scope) {
                        
                    }]);
    </script>

    <!-- jQuery -->
    <script src="public/js/jQuery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="public/js/jquery.easing.min.js"></script>
    <script src="public/js/scrolling-nav.js"></script>

</body>
</html>
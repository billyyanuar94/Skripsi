<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> Berita Acara Sidang Skripsi </title>

        <!-- Bootstrap Core CSS -->
        <link href="../public/css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../public/css/scrolling-nav.css" rel="stylesheet">

        <!-- AngularJS -->
        <script src="../public/js/angularJS/angular.min.js"></script>

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
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li>
                            <a class="page-scroll" href="#page-top">Berita Acara Sidang Skripsi</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#rekAnggota">Lembar Rekapitulasi Anggota Tim Penguji</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#rekKetua">Lembar Rekapitulasi Ketua Tim Penguji</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#rekPembimbing">Lembar Rekapitulasi Pembimbing</a>
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
                            <p> 
                            <div class="semester">
                                <label>Semester:</label>
                                <select>
                                    <option>Ganjil</option>
                                    <option>Genap</option>
                                </select>
                                <input id="tahun" type="number" max="9999" ng-model="tahun">
                                /
                                <input id="tahun_1" type="number" max="9999" value="{{tahun+1}}" disabled="disabled">
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Isi -->
                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" ng-controller="DefaultValue">

                            <div class="form-group">
                                Telah diselenggarakan Sidang Skripsi untuk mata kuliah AIF402-6 Skripsi 2 bagi:
                                <p>
                                <div id="pengenal">
                                    <label class="col-md-1 col-xs-6" for="npm">NPM:</label><input maxlength="10" id="npm" class="inline-form col-md-3 col-xs-6" ng-model="n_npm">
                                    <label class="col-md-1 col-xs-6" for="nama">Nama:</label><input id="nama" class="inline-form col-md-7 col-xs-6">
                                </div>
                                </p>
                                <br/>
                                <div id="pengenal">
                                    <p>
                                        <label class="col-md-1 col-xs-6" for="judul">Judul:</label><input id="judul" class="inline-form col-md-11 col-xs-6">
                                    </p>
                                </div>
                            </div>

                            <p> dengan pembimbing dan penguji:</p>

                            <p>
                            <div id="pengenal">
                                <label class="col-md-3 col-xs-6" for="pembimbing">Pembimbing:</label>
                                <input class="col-md-9 col-xs-6" id="pembimbing">
                            </div>
                            </p>
                            <br/>
                            <p>
                            <div id="pengenal">
                                <label class="col-md-3 col-xs-6" for="pembimbing2">Pembimbing Pendamping:</label>
                                <input class="col-md-9 col-xs-6" id="pembimbing2">
                            </div>
                            </p>
                            <br/>
                            <p>
                            <div id="pengenal">
                                <label class="col-md-3 col-xs-6" for="ketua">Ketua Tim Penguji:</label>
                                <input class="col-md-9 col-xs-6" id="ketua">
                            </div>
                            </p>
                            <br/>
                            <p>
                            <div id="pengenal">
                                <label class="col-md-3 col-xs-6" for="anggota">Anggota Tim Penguji:</label>
                                <input class="col-md-9 col-xs-6" id="anggota">
                            </div>
                            </p>
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
                                    <td><input type="number" id="nKetua" max="100" ng-model="nilai_ketua" class="form-nilai"></td>
                                    <td><input type="number" name="input" ng-model="ketua.value" min="0" max="100" class="form-nilai">
                                    <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><label for="nAnggota">Anggota Tim Penguji</label></td>
                                    <td><input id="nAnggota" type="number" max="100" ng-model="nilai_anggota" class="form-nilai"></td>
                                    <td><input type="number" name="input" ng-model="anggota.value" min="0" max="100" class="form-nilai">
                                    <td><input type="number" disabled="disabled" value="{{nilai_anggota * anggota.value / 100}}" ng-model="total_anggota" class="form-nilai"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><label for="nPembimbing">Pembimbing</label></td>
                                    <td><input id="nPembimbing" type="number" max="100" ng-model="nilai_pembimbing"class="form-nilai"></td>
                                    <td><input type="number" name="input" ng-model="pembimbing.value" min="0" max="100" class="form-nilai"></td>
                                    <td><input type="number" disabled="disabled" value={{nilai_pembimbing*pembimbing.value/100}} ng-model="total_pembimbing" class="form-nilai"></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><label for="nKoordinator">Koordinator Skripsi</label></td>
                                    <td><input id="nKoordinator" type="number" max="100" ng-model="nilai_koordinator"class="form-nilai"></td>
                                    <td><input type="number" name="input" ng-model="koordinator.value" min="0" max="100" class="form-nilai"></td>
                                    <td><input type="number" disabled="disabled" value={{nilai_koordinator*koordinator.value/100}} ng-model="total_koodinator" class="form-nilai"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2" ><label for="nTotal">Total</label></td>
                                    <td>100%</td>
                                    <td><input type="number" id="nTotal" max="100" disabled="disabled" value={{total_ketua+total_anggota+total_pembimbing+total_koordinator}} class="form-nilai"></td>
                                </tr>
                            </table>
                            <!-- Set Default Value pada ng-model type number -->
                            <script>
                                        angular.module('penilaian', [])
                                                .controller('DefaultValue', ['$scope', function ($scope) {
                                                        $scope.ketua = {
                                                            value: 35
                                                        };
                                                        $scope.anggota = {
                                                            value: 35
                                                        };
                                                        $scope.pembimbing = {
                                                            value: 20
                                                        };
                                                        $scope.koordinator = {
                                                            value: 10
                                                        };
                                                    }]);
                            </script>
                            <p>
                                Ditetapkan di Bandung, <span id="date"/></p>
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

                                        newyear= year+' ';
                                        document.getElementById("myText").value = newyear;
                            </script>
                    </div>
                    </form>
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
                        <p> 
                        <div class="semester">
                            <label for="npmA">NPM:</label><input id="nmpA" maxlength="10" value="{{ n_npm }}">
                        </div>
                        </p>
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
                            <td><input type="number" id="nTTLaporanA" max="100" ng-model="nilai_TTLaporanA" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="TTLaporanA.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nKMateriA">Kelengkapan Materi</label></td>
                            <td><input type="number" id="nKMateriA" max="100" ng-model="nilai_KMateriA" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="KMateriA.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nPMateriA">Penguasaan Materi</label></td>
                            <td><input type="number" id="nPMateriA" max="100" ng-model="nilai_PMateriA" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="PMateriA.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nPresentasiA">Presentasi</label></td>
                            <td><input type="number" id="nPresentasiA" max="100" ng-model="nilai_PresentasiA" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="presentasi.valueA" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nPTujuanA">Pencapaian Tujuan</label></td>
                            <td><input type="number" id="nPTujuanA" max="100" ng-model="nilai_PTujuanA" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="PTujuanA.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                    </table>
                </div>
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
                        <p> 
                        <div class="semester">
                            <label for="npmK">NPM:</label><input id="nmpK" maxlength="10" value="{{npm}}">
                        </div>
                        </p>
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
                        <td><label for="nTTLaporanK">Tata Tulis Laporan</label></td>
                            <td><input type="number" id="nTTLaporanK" max="100" ng-model="nilai_TTLaporanK" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="TTLaporanK.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nKMateriK">Kelengkapan Materi</label></td>
                            <td><input type="number" id="nKMateriK" max="100" ng-model="nilai_KMateriK" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="KMateriK.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nPMateriK">Penguasaan Materi</label></td>
                            <td><input type="number" id="nPMateriK" max="100" ng-model="nilai_PMateriK" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="PMateriK.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nPresentasiK">Presentasi</label></td>
                            <td><input type="number" id="nPresentasiK" max="100" ng-model="nilai_PresentasiK" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="presentasi.valueK" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nPTujuanK">Pencapaian Tujuan</label></td>
                            <td><input type="number" id="nPTujuanK" max="100" ng-model="nilai_PTujuanK" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="PTujuanK.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
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
                        <p> 
                        <div class="semester">
                            <label for="npmP">NPM:</label><input id="nmpP" maxlength="10" value="{{npm}}">
                        </div>
                        </p>
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
                        <td><label for="nTTLaporanP">Tata Tulis Laporan</label></td>
                            <td><input type="number" id="nTTLaporanP" max="100" ng-model="nilai_TTLaporanP" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="TTLaporanP.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nKMateriP">Kelengkapan Materi</label></td>
                            <td><input type="number" id="nKMateriP" max="100" ng-model="nilai_KMateriP" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="KMateriP.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nPMateriP">Penguasaan Materi</label></td>
                            <td><input type="number" id="nPMateriP" max="100" ng-model="nilai_PMateriP" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="PMateriP.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                        <tr>
                            <td><label for="nPBimbinganP">Proses Bimbingan</label></td>
                            <td><input type="number" id="nPBimbinganP" max="100" ng-model="nilai_PBimbinganP" class="form-nilai"></td>
                            <td><input type="number" name="input" ng-model="PBimbinganP.value" min="0" max="100" class="form-nilai">
                            <td><input type="number" disabled="disabled" value="{{nilai_ketua * ketua.value / 100}}" ng-model="total_ketua" class="form-nilai"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        </section>



        <!-- jQuery -->
        <script src="../public/js/jQuery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../public/js/bootstrap/bootstrap.min.js"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="../public/js/jquery.easing.min.js"></script>
        <script src="../public/js/scrolling-nav.js"></script>

    </body>
</html>

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
        <link rel="stylesheet" href="<?php echo base_url("public/css/bootstrap.css");?>">
        <script type="text/javascript" src="<?php echo base_url("public/js/bootstrap.js");?>"></script>
        <!-- AngularJS -->
        <script src="<?php echo base_url("public/js/angular.min.js") ?>"></script>


    </head>
    <body ng-app="penilaian">
        <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
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
                                <input id="form-quarter" type="number" max="9999" ng-model="tahun">
                                /
                                <input id="form-quarter"type="number" max="9999" value={{tahun+1}} disabled="disabled">
                            </div>
                    </div>
                </div>
            </div>
        <!-- Isi -->
                 <div class="row">
                    <div class="col-lg-12">

                        <form role="form" ng-controller="DefaultValue">

                            <div class="form-group">
                                Telah diselenggarakan Sidang Skripsi untuk mata kuliah AIF402-6 Skripsi 2 bagi:
                                <p><label class="col-md-1 col-xs-6">NPM:</label><input maxlength="10" class="inline-form col-md-3 col-xs-6">
                                <label class="col-md-1 col-xs-6">Nama:</label><input class="inline-form col-md-7 col-xs-6">
                                <p><label class="col-md-1 col-xs-6">Judul:</label><input class="inline-form col-md-11 col-xs-6">
                            </div>

                            <p> dengan pembimbing dan penguji:
                            <p>
                            
                            <div id="test">
                                <label class="col-md-3 col-xs-6">Pembimbing:</label>
                                <input class="col-md-9 col-xs-6">
                                <p>
                                <label class="col-md-3 col-xs-6">Pembimbing Pendamping:</label>
                                <input class="col-md-9 col-xs-6">
                                <p>
                                <label class="col-md-3 col-xs-6">Ketua Tim Penguji:</label>
                                <input class="col-md-9 col-xs-6">
                                <p>
                                <label class="col-md-3 col-xs-6">Anggota Tim Penguji:</label>
                                <input class="col-md-9 col-xs-6">
                                <p>
                            </div>
                                <p>
                                Rekapitulasi nilai Sidang Skripsi 2 yang diberikan oleh pembimbing, penguji & koordinator skripsi:
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
                                        <td>Ketua Tim Penguji</td>
                                        <td><input type="number" max="100" ng-model="nilai_ketua"class="form-nilai"></td>
                                        <td><input type="number" name="input" ng-model="ketua.value" min="0" max="100" class="form-nilai">
                                        <td><input type="number" disabled="disabled" value={{nilai_ketua*ketua.value/100}} ng-model="total_ketua" class="form-nilai"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Anggota Tim Penguji</td>
                                        <td><input type="number" max="100" ng-model="nilai_anggota"class="form-nilai"></td>
                                        <td><input type="number" name="input" ng-model="anggota.value" min="0" max="100" class="form-nilai">
                                        <td><input type="number" disabled="disabled" value={{nilai_anggota*anggota.value/100}} ng-model="total_anggota" class="form-nilai"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Pembimbing</td>
                                        <td><input type="number" max="100" ng-model="nilai_pembimbing"class="form-nilai"></td>
                                        <td><input type="number" name="input" ng-model="pembimbing.value" min="0" max="100" class="form-nilai"></td>
                                        <td><input type="number" disabled="disabled" value={{nilai_pembimbing*pembimbing.value/100}} ng-model="total_pembimbing" class="form-nilai"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Koordinator Skripsi</td>
                                        <td><input type="number" max="100" ng-model="nilai_koordinator"class="form-nilai"></td>
                                        <td><input type="number" name="input" ng-model="koordinator.value" min="0" max="100" class="form-nilai"></td>
                                        <td><input type="number" disabled="disabled" value={{nilai_koordinator*koordinator.value/100}} ng-model="total_koodinator" class="form-nilai"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2" >Total</td>
                                        <td>100%</td>
                                        <td><input type="number" max="100" disabled="disabled" value={{total_ketua+total_anggota+total_pembimbing+total_koordinator}} class="form-nilai"></td>
                                    </tr>
                                </table>
                                <!-- Set Default Value pada ng-model type number -->
                                    <script>
                                      angular.module('penilaian', [])
                                        .controller('DefaultValue', ['$scope', function($scope) {
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
                            Ditetapkan di Bandung, <span id="date"/>
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
//-->

                                    newdate = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
                                    document.getElementById("date").innerHTML = newdate;
                                </script>
                            </div>
                            <p>
                            <?php echo anchor('public/rekPembimbing.php', 'Lembar Rekapitulasi Pembimbing')?>
                            <p>
                            <?php echo anchor('public/rekKetua.php', 'Lembar Rekapitulasi Ketua Tim Penguji')?>
                            <p>
                            <?php echo anchor('public/rekAnggota.php', 'Lembar Rekapitulasi Anggota Tim Penguji')?>
                        </form>
                    </div> 
                </div>
    </body>
</html>

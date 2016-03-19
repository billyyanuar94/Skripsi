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

    </head>
    <body>
        <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-6.col-lg-offset-3">
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

                                <input id="form-quarter"type="number" max="9999">
                                /
                                <input id="form-quarter"type="number" max="9999">
                            </div>
                    </div>
                </div>
            </div>
        <!-- Isi -->
                 <div class="row">
                    <div class="col-lg-12">

                        <form role="form">

                            <div class="form-group">
                                Telah diselenggarakan Sidang Skripsi untuk mata kuliah AIF402-6 Skripsi 2 bagi:
                                <p><label>NPM:</label><input class="form-control" placeholder="Enter text">
                                <p><label>Nama:</label><input class="form-control" placeholder="Enter text">
                                <p><label>Judul:</label><input class="form-control" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                dengan pembimbing dan penguji:
                                <table>
                                    <tr>
                                        <td>Pembimbing <select class="form-control">
                                            <option>Utama</option>
                                            <option>Tunggal</option>
                                            </select>
                                        <td>
                                            <input class="form-control" placeholder="Enter text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pembimbing Pendamping:
                                        <td>
                                            <input class="form-control" placeholder="Enter text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ketua Tim Penguji:
                                        <td>
                                            <input class="form-control" placeholder="Enter text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Anggota Tim Penguji:
                                        <td>
                                            <input class="form-control" placeholder="Enter text">
                                        </td>
                                    </tr>
                                </table>
                                <p>
                                Rekapitulasi nilai Sidang Skripsi 2 yang diberikan oleh pembimbing, penguji & koordinator skripsi:
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Pembimbing/Penguji</th>
                                        <th>Nilai</th>
                                        <th>Bobot</th>
                                        <th>Nilai Akhir</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ketua Tim Penguji</td>
                                        <td><input type="number" max="9999"></td>
                                        <td>35%</td>
                                        <td><input type="number" max="9999"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Anggota Tim Penguji</td>
                                        <td><input type="number" max="9999"></td>
                                        <td>35%</td>
                                        <td><input type="number" max="9999"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Pembimbing</td>
                                        <td><input type="number" max="9999"></td>
                                        <td>20%</td>
                                        <td><input type="number" max="9999"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Koordinator Skripsi</td>
                                        <td><input type="number" max="9999"></td>
                                        <td>10%</td>
                                        <td><input type="number" max="9999"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2">Total</td>
                                        <td>100%</td>
                                        <td><input type="number" max="9999"></td>
                                    </tr>
                                </table>
                            </div>

                            <p>
                            Ditetapkan di Bandung,<input type="date">
                        </form>
                    </div>                
    </body>
</html>

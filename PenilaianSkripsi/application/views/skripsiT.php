<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <title> Berita Acara Sidang Skripsi </title>

        <!-- Bootstrap Core CSS -->
        <link href="../public/css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Scroll Nav CSS -->
        <link href="../public/css/scrolling-nav.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../public/css/custom.css" rel="stylesheet">

        <!-- AngularJS -->
        <script src="../public/js/angularJS/angular.min.js"></script>

    </head>
    <body ng-app="penilaian" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <form method="post" action="<?php echo base_url()."index.php/test/tambahDataMahasiswa"?>">
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
                                <input id="semester" type="text" name="semester"/>
                                <input id="tahun" type="number" max="9999" ng-model="tahun" name="tahun"/>
                                /
                                <input id="tahun_1" type="number" max="9999" value="{{tahun + 1}}"/>

                            </p>
                            </div>
                            <input type="submit" name="submit" value="Insert"/>
                        </div>
                        <a href="<?php echo base_url()."test/view_cekMahasiswa"?>">Lihat data mahasiswa</a>
                    </div>
                </div>
            </div>
    </form>
        


    <!-- jQuery -->
    <script src="../public/js/jQuery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="../public/js/jquery.easing.min.js"></script>
    <script src="../public/js/scrolling-nav.js"></script>

</body>
</html>


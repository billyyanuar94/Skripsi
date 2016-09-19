<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_skripsi extends CI_Controller {

        /**
         * Index Page for this controller.
         *
         * Maps to the following URL
         *              http://example.com/index.php/welcome
         *      - or -
         *              http://example.com/index.php/welcome/index
         *      - or -
         * Since this controller is set as the default controller in
         * config/routes.php, it's displayed at http://example.com/
         *
         * So any other public methods not prefixed with an underscore will
         * map to /index.php/welcome/<method_name>
         * @see https://codeigniter.com/user_guide/general/urls.html
         */
        public function index()
        {
                $this->load->view('skripsi');
        }
        //Check database
        public function view_cekMahasiswa(){
                $data = $this->skripsi_model->getAllMahasiswa();
                $this->load->view('cek_mahasiswa', array('data' => $data));
        }
        
        public function tambahDataMahasiswa(){
                $semester = $_POST['semester'];
                $tahun = $_POST['tahun'];
                $npm = $_POST['npm'];
                $nama = $_POST['nama'];
                $judul = $_POST['judul'];
                $namaPembimbing = $_POST['namaPembimbing'];
                $namaPembimbingPendamping = $_POST['namaPembimbingPendamping'];
                $namaKetuaTimPenguji = $_POST['namaKetuaTimPenguji'];
                $namaAnggotaTimPenguji = $_POST['namaAnggotaTimPenguji'];
                $bobotKetuaTimPenguji = $_POST['bobotKetuaTimPenguji'];
                $bobotAnggotaTimPenguji = $_POST['bobotAnggotaTimPenguji'];
                $bobotPembimbing = $_POST['bobotPembimbing'];
                $nilaiKoordinatorSkripsi = $_POST['nilaiKoordinatorSkripsi'];
                $bobotKoordinatorSkripsi = $_POST['bobotKoordinatorSkripsi'];
                $bobotTataTulisLaporanAnggota = $_POST['bobotTataTulisLaporanAnggota'];
                $bobotKelengkapanMateriAnggota = $_POST['bobotKelengkapanMateriAnggota'];
                $bobotPenguasaanMateriAnggota = $_POST['bobotPenguasaanMateriAnggota'];
                $bobotPresentasiAnggota = $_POST['bobotPresentasiAnggota'];
                $bobotPencapaianTujuanAnggota = $_POST['bobotPencapaianTujuanAnggota'];
                $bobotTataTulisLaporanKetua = $_POST['bobotTataTulisLaporanKetua'];
                $bobotKelengkapanMateriKetua = $_POST['bobotKelengkapanMateriKetua'];
                $bobotPenguasaanMateriKetua = $_POST['bobotPenguasaanMateriKetua'];
                $bobotPresentasiKetua = $_POST['bobotPresentasiKetua'];
                $bobotPencapaianTujuanKetua = $_POST['bobotPencapaianTujuanKetua'];
                $bobotTataTulisLaporanPembimbing = $_POST['bobotTataTulisLaporanPembimbing'];
                $bobotKelengkapanMateriPembimbing = $_POST['bobotKelengkapanMateriPembimbing'];
                $bobotPenguasaanMateriPembimbing = $_POST['bobotPenguasaanMateriPembimbing'];
                $prosesBimbinganPembimbing = $_POST['prosesBimbinganPembimbing'];
                //$nilaiAkhirMahasiswa = $_POST['nilaiAkhirMahasiswa'];
                $data_insert = array(
                        'semester' => $semester,
                        'tahun' => $tahun,
                        'npm' => $npm,
                        'nama' => $nama,
                        'judul' => $judul,
                        'namaPembimbing' => $namaPembimbing,
                        'namaPembimbingPendamping' => $namaPembimbingPendamping,
                        'namaKetuaTimPenguji' => $namaKetuaTimPenguji,
                        'namaAnggotaTimPenguji' => $namaAnggotaTimPenguji,
                        'bobotKetuaTimPenguji' => $bobotKetuaTimPenguji,
                        'bobotAnggotaTimPenguji' => $bobotAnggotaTimPenguji,
                        'bobotPembimbing' => $bobotPembimbing,
                        'nilaiKoordinatorSkripsi' => $nilaiKoordinatorSkripsi,
                        'bobotKoordinatorSkripsi' =>$bobotKoordinatorSkripsi,
                        'bobotTataTulisLaporanAnggota' => $bobotTataTulisLaporanAnggota,
                        'bobotKelengkapanMateriAnggota' => $bobotKelengkapanMateriAnggota,
                        'bobotPenguasaanMateriAnggota' => $bobotPenguasaanMateriAnggota,
                        'bobotPresentasiAnggota' => $bobotPresentasiAnggota,
                        'bobotPencapaianTujuanAnggota' => $bobotPencapaianTujuanAnggota,
                        'bobotTataTulisLaporanKetua' => $bobotTataTulisLaporanKetua,
                        'bobotKelengkapanMateriKetua' => $bobotKelengkapanMateriKetua,
                        'bobotPenguasaanMateriKetua' => $bobotPenguasaanMateriKetua,
                        'bobotPresentasiKetua' => $bobotPresentasiKetua,
                        'bobotPencapaianTujuanKetua' => $bobotPencapaianTujuanKetua,
                        'bobotTataTulisLaporanPembimbing' => $bobotTataTulisLaporanPembimbing,
                        'bobotKelengkapanMateriPembimbing' => $bobotKelengkapanMateriPembimbing,
                        'bobotPenguasaanMateriPembimbing' => $bobotPenguasaanMateriPembimbing,
                        'prosesBimbinganPembimbing' => $prosesBimbinganPembimbing,
                        //'nilaiAkhirMahasiswa' => $nilaiAkhirMahasiswa,
                        
                );
                $res = $this->skripsi_model->insertDataMahasiswa('beritaacarasidangskripsi',$data_insert);
                redirect('/c_skripsi/index', 'refresh');
        }
        
}

@extends('layouts.skm.main')

@section('container')
<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

    <!-- <nav>
      <ul class="cd-primary-nav">
       <li><a href="index.html" class="animated_link">Home</a></li>
       <li><a href="quotation-wizard-version.html" class="animated_link">Quote Version</a></li>
       <li><a href="review-wizard-version.html" class="animated_link">Review Version</a></li>
       <li><a href="registration-wizard-version.html" class="animated_link">Registration Version</a></li>
       <li><a href="about.html" class="animated_link">About Us</a></li>
       <li><a href="contacts.html" class="animated_link">Contact Us</a></li>
      </ul>
  </nav> -->
  <!-- /menu -->

<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-lg-6 content-left d-none d-md-block">
            <div class="content-left-wrapper">
                <a href="/" id="logo" style="color: white !important;">
                <img src="{{ asset('/assets/templateskm/assets/form/img/logoKab.png') }}" alt="" width="70" height="50"> Pemerintah Kabupaten Ciamis</a>
                <!-- <div id="social">
                    <ul>
                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        <li><a href="#0"><i class="icon-google"></i></a></li>
                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div> --><!-- /social -->
                <div>
                    <a href="/" class="btn_1 rounded">BUKU TAMU</a>
                    <a href="/skm" class="btn_1 rounded">SKM</a>
                    <a href="/statistik" class="btn_1 rounded">STATISTIK</a>
                    <a href="/login" class="btn_1 rounded">Login</a>
                    <figure><img src="{{ asset('assets/templateskm/assets/form/img/banner.png') }}" alt=""width="250" height="250" class="img-fluid"></figure>
                    <h3 style="color: white !important;">Survey Kepuasan Masyarakat</h3>
                    <h2 style="margin: 0 0 20px 0;">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</h2>
                    <p>Partisipasi masyarakat sebagai pengguna layanan dalam menilai kinerja penyelenggaraan pelayanan publik di pemerintah kabupaten ciamis.</p>
                    <a href="#start" class="btn_1 rounded mobile_btn">Mulai!</a>
                </div>
                
                <div class="copy">© 2022 pemerintah Kabupaten Ciamis</div>
            </div>
            <!-- /content-left-wrapper -->
                
        </div>
        <!-- /content-left -->

        <div class="col-lg-6 content-right" id="start" style="background: #F7F7F7 !important;">
            <div id="wizard_container">
                <!-- /top-wizard -->
                <form class="" method="post" action="../../external.html?link=https://bukutamu.ciamiskab.go.id/simpan_survey">
                    <input type="hidden" name="_token" value="Lrw2bgy8E1N4CpByfF2DYDm56fEwgMeYgSIXZn1X">
                    <input type="hidden" name="id_instansi" value="628">
                    <input id="website" name="website" type="text" value="">
                    <!-- Leave for security protection, read docs for details -->
                    <!-- //hitung jumlah $pertanyaan -->

                    <div id="middle-wizard" style="margin-top: 300px;">
                        <div class="step">
                            
                            <div class="row mb-3" style="align-items: end !important;">
                                <div class="col-md-6">
                                    <h3 class="main_question">Pilih Layanan</h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/0.jpg') }}" alt="" width="50%">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="container_radio version_2">REKOMENDASI SURAT PERSYARATAN PEGAWAI / TNI / POLRI
                                    <input type="radio" name="layanan" value="593" checked>
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container_radio version_2">REKOMENDASI PENGANTAR PERUBAHAN SURAT PEMBERITAHUAN PAJAK TERHUTANG (SPPT)
                                    <input type="radio" name="layanan" value="594" checked>
                                    <span class="checkmark"></span>
                                </label>
                                
                                <label class="container_radio version_2">PEMBAYARAN PBB (PAJAK BUMI &amp; BANGUNAN)
                                    <input type="radio" name="layanan" value="595" checked>
                                    <span class="checkmark"></span>
                                </label>
                                
                                <label class="container_radio version_2">REKOMENDASI SURAT KETERANGAN TIDAK MAMPU (SKTM)
                                    <input type="radio" name="layanan" value="596" checked>
                                    <span class="checkmark"></span>
                                </label>
                                
                                <label class="container_radio version_2">PERMOHONAN SURAT DISPENSASI NIKAH
                                    <input type="radio" name="layanan" value="597" checked>
                                    <span class="checkmark"></span>
                                </label>
                                
                                <label class="container_radio version_2">REKOMENDASI PERMOHONAN IJIN KERAMAIAN / HIBURAN
                                    <input type="radio" name="layanan" value="598" checked>
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container_radio version_2">SURAT KETERANGAN WARIS
                                    <input type="radio" name="layanan" value="599" checked>
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container_radio version_2">REKOMENDASI SURAT JALAN / BEPERGIAN
                                    <input type="radio" name="layanan" value="600" checked>
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container_radio version_2">REKOMENDASI PROPOSAL BANTUAN SOSIAL/AGAMA
                                    <input type="radio" name="layanan" value="601" checked>
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container_radio version_2">LAYANAN DATA DAN INFORMASI
                                    <input type="radio" name="layanan" value="602" checked>
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container_radio version_2">LAYANAN SOSIALISASI
                                    <input type="radio" name="layanan" value="605" checked>
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container_radio version_2">LAYANAN KONSULTASI
                                    <input type="radio" name="layanan" value="609" checked>
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container_radio version_2">LAYANAN PENGADUAN PELAYANAN PUBLIK
                                    <input type="radio" name="layanan" value="614" checked>
                                    <span class="checkmark"></span>
                                </label>

                                <label class="container_radio version_2">REKOMENDASI PENCAIRAN DANA DESA (DD)
                                    <input type="radio" name="layanan" value="2028" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="step">
                            <div class="row mb-3" style="align-items: end !important;">
                                <div class="col-md-6">
                                    <h3>Identitas Anda</h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/1.jpg') }}" lt="" width="50%">
                                </div>
                            </div>

                            <input type="hidden" name="id_buku_tamu" value="">
                            
                            <div class="form-group">
                                <input type="text" id="input_nama" name="nama" class="form-control required" placeholder="Nama Lengkap" required value="">
                                <small id="input_nama_text" class="form-text text-muted">*Nama anda tidak akan ditampilkan secara publik.</small>
                            </div>

                            <div class="form-group">
                                <input type="number" id="input_telp" name="telp" aria-describedby="input_telp_text" class="form-control required" placeholder="No Telepon">
                            </div>

                            <div class="form-group">
                                <div class="styled-select clearfix">
                                    <select class="wide required" id="input_pendidikan" name="pendidikan">
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="DIII">DIII</option>
                                        <option value="DIV">DIV</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group radio_input">
                                <label class="container_radio">Laki-laki
                                    <input type="radio" id="input_kelamin" name="kelamin" value="Laki-laki" class="required">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">Perempuan
                                    <input type="radio" id="input_kelamin" name="kelamin" value="Perempuan" class="required">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="step">
                            <div class="row" style="align-items: end !important;">
                                <div class="col-md-12 mb-3">
                                    <h3>Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</h3>
                                </div>

                                <div class="col-md-6">
                                    <label class="container_radio version_2">
                                       <img src="{{asset('assets/templateskm/survey/smiley/d.png')}}" alt="" width="10%"> Tidak Sesuai
                                       <input type="radio" id="opsi_3_15" name="respon[3]" value="15" class="required">
                                       <span class="checkmark"></span>
                                    </label>

                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/c.png')}}" alt="" width="10%"> Kurang Sesuai
                                        <input type="radio" id="opsi_3_16" name="respon[3]" value="16" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/b.png')}}" alt="" width="10%"> Sesuai
                                        <input type="radio" id="opsi_3_17" name="respon[3]" value="17" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/a.png')}}" alt="" width="10%"> Sangat Sesuai
                                        <input type="radio" id="opsi_3_18" name="respon[3]" value="18" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/3.jpg') }}" alt="" width="65%">
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="row" style="align-items: end !important;">
                                <div class="col-md-12 mb-3">
                                    <h3>Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini? </h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/d.png')}}" alt="" width="10%"> Tidak Mudah
                                        <input type="radio" id="opsi_4_19" name="respon[4]" value="19" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/c.png')}}" alt="" width="10%"> Kurang Mudah
                                        <input type="radio" id="opsi_4_20" name="respon[4]" value="20" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/b.png')}}" alt="" width="10%"> Mudah
                                        <input type="radio" id="opsi_4_21" name="respon[4]" value="21" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/a.png')}}" alt="" width="10%"> Sangat Mudah
                                        <input type="radio" id="opsi_4_22" name="respon[4]" value="22" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/4.jpg') }}" alt="" width="65%">
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="row" style="align-items: end !important;">
                                <div class="col-md-12 mb-3">
                                    <h3>Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan? </h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/d.png')}}" alt="" width="10%"> Tidak Cepat
                                        <input type="radio" id="opsi_5_23" name="respon[5]" value="23" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/c.png')}}" alt="" width="10%"> Kurang Cepat
                                        <input type="radio" id="opsi_5_24" name="respon[5]" value="24" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/b.png')}}" alt="" width="10%"> Cepat
                                        <input type="radio" id="opsi_5_25" name="respon[5]" value="25" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/a.png')}}" alt="" width="10%"> Sangat Cepat
                                        <input type="radio" id="opsi_5_26" name="respon[5]" value="26" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/5.jpg') }}" alt="" width="65%">
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="row" style="align-items: end !important;">
                                <div class="col-md-12 mb-3">
                                    <h3>Bagimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standard pelayanan dengan hasil yang diberikan?</h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/d.png')}}" alt="" width="10%"> Tidak Sesuai
                                        <input type="radio" id="opsi_6_27" name="respon[6]" value="27" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/c.png')}}" alt="" width="10%"> Kurang Sesuai
                                        <input type="radio" id="opsi_6_28" name="respon[6]" value="28" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/b.png')}}" alt="" width="10%"> Sesuai
                                        <input type="radio" id="opsi_6_29" name="respon[6]" value="29" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/a.png')}}" alt="" width="10%"> Sangat Sesuai
                                        <input type="radio" id="opsi_6_30" name="respon[6]" value="30" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/6.jpg') }}" alt="" width="65%">
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="row" style="align-items: end !important;">
                                <div class="col-md-12 mb-3">
                                    <h3>Bagaimana Kesesuaian biaya dengan aturan tarif layanan? (Apabila pelayanan tidak dipungut biaya/gratis dipilih Sesuai)</h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/d.png')}}" alt="" width="10%"> Tidak Sesuai
                                        <input type="radio" id="opsi_7_31" name="respon[7]" value="31" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/c.png')}}" alt="" width="10%"> Kadang Sesuai
                                        <input type="radio" id="opsi_7_32" name="respon[7]" value="32" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/b.png')}}" alt="" width="10%"> Kurang Sesuai
                                        <input type="radio" id="opsi_7_33" name="respon[7]" value="33" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/a.png')}}" alt="" width="10%"> Sesuai
                                        <input type="radio" id="opsi_7_34" name="respon[7]" value="34" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/7.jpg') }}" alt="" width="65%">
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="row" style="align-items: end !important;">
                                <div class="col-md-12 mb-3">
                                    <h3>Bagaimana pendapat Saudara tentang kompetensi / kemampuan petugas dalam pelayanan?</h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/d.png')}}" alt="" width="10%"> Tidak Kompeten
                                        <input type="radio" id="opsi_8_35" name="respon[8]" value="35" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/c.png')}}" alt="" width="10%"> Kurang Kompeten
                                        <input type="radio" id="opsi_8_36" name="respon[8]" value="36" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/b.png')}}" alt="" width="10%"> Kompeten
                                        <input type="radio" id="opsi_8_37" name="respon[8]" value="37" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/a.png')}}" alt="" width="10%"> Sangat Kompeten
                                        <input type="radio" id="opsi_8_38" name="respon[8]" value="38" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/8.jpg') }}" alt="" width="65%">
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="row" style="align-items: end !important;">
                                <div class="col-md-12 mb-3">
                                    <h3>Bagaimana pendapat Saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/d.png')}}" alt="" width="10%"> Tidak Sopan dan Ramah
                                        <input type="radio" id="opsi_9_39" name="respon[9]" value="39" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/c.png')}}" alt="" width="10%"> Kurang Sopan dan Ramah
                                        <input type="radio" id="opsi_9_40" name="respon[9]" value="40" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/b.png')}}" alt="" width="10%"> Sopan dan Ramah
                                        <input type="radio" id="opsi_9_41" name="respon[9]" value="41" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/a.png')}}" alt="" width="10%"> Sangat Sopan dan Ramah
                                        <input type="radio" id="opsi_9_42" name="respon[9]" value="42" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/9.jpg') }}" alt="" width="65%">
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="row" style="align-items: end !important;">
                                <div class="col-md-12 mb-3">
                                    <h3>Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?</h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/d.png')}}" alt="" width="10%"> Buruk
                                        <input type="radio" id="opsi_10_43" name="respon[10]" value="43" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/c.png')}}" alt="" width="10%"> Cukup
                                        <input type="radio" id="opsi_10_44" name="respon[10]" value="44" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/b.png')}}" alt="" width="10%"> Baik
                                        <input type="radio" id="opsi_10_45" name="respon[10]" value="45" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/a.png')}}" alt="" width="10%"> Sangat Baik
                                        <input type="radio" id="opsi_10_46" name="respon[10]" value="46" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/10.jpg') }}" alt="" width="65%">
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="row" style="align-items: end !important;">
                                <div class="col-md-12 mb-3">
                                    <h3>Bagaimana pendapat Saudara tentang penanganan pengaduan dan penggunaan layanan?</h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/d.png')}}" alt="" width="10%"> Tidak Ada
                                        <input type="radio" id="opsi_11_47" name="respon[11]" value="47" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/c.png')}}" alt="" width="10%"> Ada tetapi tidak berfungsi
                                        <input type="radio" id="opsi_11_48" name="respon[11]" value="48" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/b.png')}}" alt="" width="10%"> Berfungsi kurang maksimal
                                        <input type="radio" id="opsi_11_49" name="respon[11]" value="49" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/a.png')}}" alt="" width="10%"> Dikelolah dengan baik
                                        <input type="radio" id="opsi_11_50" name="respon[11]" value="50" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/11.jpg') }}" alt="" width="65%">
                                </div>
                            </div>
                        </div>

                        <div class="submit step">
                            <h3 class="main_question">Kritik dan Saran</h3>
                            <div class="form-group add_top_30">
                                <textarea id="saran" name="saran" aria-describedby="saran_text" class="form-control review_message"
                                placeholder="Tulis disini..."></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /middle-wizard -->

                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                
                    <div id="bottom-wizard">
                        <div class="row">
                            <div class="col-4" style="text-align: left !important;">9 Steps</div>
                            <div class="col-8">
                                <button type="button" name="backward" class="backward mb-2">Kembali</button>
                                <button type="button" name="forward" class="forward mb-2">Lanjut</button>
                                <button type="submit" name="process" class="submit mb-2">Selesai</button>
                            </div>
                        </div>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
            <!-- /Wizard container -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->

<!-- <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a> -->
<!-- /menu button -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei  ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection
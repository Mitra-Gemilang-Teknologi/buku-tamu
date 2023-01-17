@extends('layouts.skm.main')

@section('container')

<div id="beranda" class="d-flex flex-column justify-content-center w-100 h-100">

	<div class="d-flex flex-column justify-content-center align-items-center mylinks">
	<div class=" justify-content-center">
<figure><img src="{{ asset('assets/templateskm/assets/form/img/banner2.png') }}" alt=""
                                width="350" height="350" class="img-fluid"></figure>
																<h1 class="fw-light text-white m-0">Selamat Datang,Di<br>
			Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu
		</h1>
<br>
		</div>


<a href="#tamu">
	<button type="button" class="btn btn-outline-light btn-lg">Mulai</button>
</a>
		<a href="#" class="text-decoration-none">
			<h5 class="fw-light text-white m-0">— Pemerintah Kabupaten Ciamis —</h5>
		</a>
	</div>
</div>
</div>
<div id="tamu" class="mycooldiv">
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
                    <a href="/" id="logo"
                        style="color: white !important;">
												<img
                            src="{{ asset('/assets/templateskm/assets/form/img/logoKab.png') }}" alt=""
                            width="70" height="50"> Pemerintah Kabupaten Ciamis</a>
                    <!-- <div id="social">
                                <ul>
                                    <li><a href="#0"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#0"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#0"><i class="icon-google"></i></a></li>
                                    <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div> -->
                    <!-- /social -->
                    <div>
											 <a href="#beranda" class="btn_1 rounded">
                             Beranda</a>
														 <a href="/skm" class="btn_1 rounded">SKM</a>

												 <a href="/statistik" class="btn_1 rounded">STATISTIK</a>
												  <a href="/login" class="btn_1 rounded">LOGIN</a>

                        <h3 style="color: white !important;">Selamat Datang di Buku Tamu </h3>
                        <figure><img src="{{ asset('assets/templateskm/assets/form/img/banner.png') }}" alt=""
                                width="250" height="250" class="img-fluid"></figure>

                        <h2 style="margin: 0 0 20px 0;">Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu</h2>
                        <p>Partisipasi masyarakat sebagai pengguna layanan dalam
                            menilai kinerja penyelenggaraan pelayanan publik di pemerintah kabupaten ciamis.</p>

                        <a href="#start" class="btn_1 rounded mobile_btn">Mulai!</a>
                    </div>
                    <div class="copy">© {{date('Y')}} Pemerintah Kabupaten Ciamis</div>
                </div>
                <!-- /content-left-wrapper -->
            </div>
            <!-- /content-left -->

            <div class="col-lg-6 content-right" id="start" style="background: #F7F7F7 !important;">
                <div id="wizard_container">
                    <!-- /top-wizard -->
                    <form class="" method="post"
                        action="/kunjungan">
                        @csrf
                        <input type="hidden" name="id_instansi" value="628">
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <!-- //hitung jumlah $pertanyaan -->

                        <div id="middle-wizard" >

                            <div class="step"style="margin-top: 1000px;">
                                <div class="row mb-3" style="align-items: end !important;">
                                    <div class="col-md-6">
                                        <h3 class="main_question">Pilih Jenis Layanan</h3>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/0.jpg') }}"
                                            alt="" width="50%">

                                    </div>
                                </div>
                                <div class="form-group">


																	  @foreach ($jenisLayanan as $jenisLayanan)
																@if (old('id_jenis_layanan') == $jenisLayanan->id_jenis_layanan){
																<label class="container_radio version_2">{{$jenisLayanan->nama_jenis_layanan}}
                                        <input type="radio" name="layanan" value="593" >
                                        <span class="checkmark"></span>
                                    </label>
																}
																	@else
																 <label class="container_radio version_2">{{$jenisLayanan->nama_jenis_layanan}}
                                        <input type="radio" name="layanan" value="593" >
                                        <span class="checkmark"></span>
                                    </label>
																@endif

 													         @endforeach



                                </div>
                            </div>
                             <div class="step">
                                    <div class="row mb-3" style="align-items: end !important;">
                                        <div class="col-md-6">
                                            <h3>Form kunjungan</h3>
                                        </div>
                                        <div class="col-md-6 text-right">

                                            <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/1.jpg') }}"
                                                alt="" width="50%">
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <input type="date"
                                            class="form-control  @error('waktu_kunjungan') is-invalid @enderror"
                                            id="waktu_kunjungan" name="waktu_kunjungan" required autofocus
                                            value="{{ old('waktu_kunjungan') }}">
                                        @error('waktu_kunjungan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="form-group">
                                        <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                            id="nama" name="nama" required autofocus
                                            value="{{ old('nama') }}" placeholder="Nama Lengkap">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control  @error('usia') is-invalid @enderror"
                                            id="usia" name="usia" required autofocus
                                            value="{{ old('usia') }}"placeholder="Usia">
                                        @error('usia')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control  @error('tujuan') is-invalid @enderror"
                                            id="tujuan" name="tujuan" required autofocus
                                            value="{{ old('tujuan') }}"placeholder="Tujuan">
                                        @error('tujuan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control  @error('jml_pengunjung') is-invalid @enderror"
                                            id="jml_pengunjung" name="jml_pengunjung" required autofocus
                                            value="{{ old('jml_pengunjung') }}" placeholder="Jumlah Pengunjung">
                                        @error('jml_pengunjung')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <div class="styled-select clearfix">
                                            <select class="form-control required" id="input_pendidikan"
                                                name="pendidikan">
                                                <option value="">Pilih Pendidikan</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="DIII">DIII</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group radio_input">
                                        <label class="container_radio">Laki-laki
                                            <input type="radio" id="input_kelamin" name="jenis_kelamin"
                                                value="Laki-laki" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio">Perempuan
                                            <input type="radio" id="input_kelamin" name="jenis_kelamin"
                                                value="Perempuan" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

																  <div class="step">
                                    <div class="row" style="align-items: end !important;">
                                        <div class="col-md-12 mb-3">

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="styled-select clearfix">
                                                    <select class="wide form-control required"name="kecamatan" id="kecamatan">
                                                        <option value="">== Select Kecamatan ==</option>
                                                        @foreach ($kecamatan as $id => $name)
                                                            <option value="{{ $id }}">{{ $name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="styled-select clearfix">
                                                    <select class="form-control" name="desa" id="desa" required>
                                                        <option>==Pilih Salah Satu==</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="align-items: end !important;">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"placeholder="RT" name="rt"
                                                            id="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <input type="text"
																												placeholder="Rw"class="form-control" name="rw"
                                                            id="">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            <div class="submit step">
                                <h3 class="main_question">Keterangan</h3>
                                <div class="form-group add_top_30">
                                    <textarea id="saran" name="keterangan" aria-describedby="saran_text" class="form-control review_message"
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
                                <div class="col-4" style="text-align: left !important;">3 Steps</div>
                                <div class="col-8">
                                    <button type="button" name="backward" class="backward mb-2">Kembali</button>
                                    <button type="button" name="forward" class="forward mb-2">Lanjut</button>
                                    <button type="submit" name="process" class="submit mb-2">Selesai</button>
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
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei
                        ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne
                        quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam
                        dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt
                        sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum
                        accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum
                        sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam
                        dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt
                        sensibus.</p>
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
</div>
@endsection
    @push('scripts')
		<script>
      function onChangeSelect(url, id, name) {
            // send ajax request to get the cities of the selected province and append to the select tag
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#' + name).empty();
                    $('#' + name).append(`<option>==Pilih Salah Satu==</option>`);

                    $.each(data, function(key, value) {

                        $('#' + name).append(`<option value="${key}">${value} </option>`);
                    });
                }
            });
        }
        $(function() {
            $('#provinsi').on('change', function() {
                alert('oke')
                onChangeSelect('{{ route('cities') }}', $(this).val(), 'kota');
            });
            $('#kota').on('change', function() {
                onChangeSelect('{{ route('districts') }}', $(this).val(), 'kecamatan');
            })
            $('#kecamatan').on('change', function() {
                onChangeSelect('{{ route('villages') }}', $(this).val(), 'desa');
            })
        });
    </script>
   @endpush

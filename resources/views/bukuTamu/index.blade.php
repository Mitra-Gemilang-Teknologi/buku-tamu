@extends('layouts.skm.main')

@section('container')
    <div id="beranda" class="d-flex flex-column justify-content-center w-100 h-100">
        <div class="d-flex flex-column justify-content-center align-items-center mylinks">
            <div class=" justify-content-center">
                <figure><img src="{{ asset('assets/templateskm/assets/form/img/banner2.png') }}" alt="" width="350"
                        height="350" class="img-fluid"></figure>
                <h1 class="fw-light text-white m-0">Selamat Datang, Di <br>Aplikasi SUKMA,Survey Kepuasan Masyarakat</h1>
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

    <div id="tamu" class="mycooldiv">
        <div id="preloader">
            <div data-loader="circle-side"></div>
        </div><!-- /Preload -->

        <div id="loader_form">
            <div data-loader="circle-side-2"></div>
        </div><!-- /loader_form -->
        <div class="container-fluid full-height">
            <div class="row row-height">

                <div class="col-lg-6 content-left d-md-block">
                    <div class="content-left-wrapper">
                        <a href="/" id="logo" style="color: white !important;">
                            <img src="{{ asset('/assets/templateskm/assets/form/img/logoKab.png') }}" alt=""
                                width="70" height="50">Pemerintah Kabupaten Ciamis</a>

																	{{-- <div id="social">
																			<ul>
																					<li><a href="#0"><i class="icon-facebook"></i></a></li>
																					<li><a href="#0"><i class="icon-twitter"></i></a></li>
																					<li><a href="#0"><i class="icon-google"></i></a></li>
																					<li><a href="#0"><i class="icon-linkedin"></i></a></li>
																			</ul>
																	</div> --}}
                        <!-- /social -->

                        <div>
                            <!-- <div class="container-fluid"> -->
                                <div class="row d-flex justify-content-between" style="margin-bottom: 1em;">
                                  <div class="col-md-2 mt-2 mb-3">
                                    <a href="/"style="background-color: #5C007A !important; color:#F7F7F7; " class="btn btn-default roundedv2"> BERANDA</a>
                                  </div>
                                  <div class="col-sm-3 mt-2 mb-3">
                                    <a href="/list/buku-tamu" style="background-color: #5C007A !important; color:#F7F7F7 " class="btn btn-default roundedv2">DAFTAR TAMU</a>
                                  </div>
                                  <div class="col-sm-2 mt-2 mb-3">
                                    <a href="/statistik/buku-tamu" style="background-color: #5C007A !important; color:#F7F7F7 " class="btn btn-default roundedv2">STATISTIK</a>
                                  </div>
                                  <div class="col-sm-2 mt-2 mb-3">
                                  <a href="/login" style="background-color: #5C007A !important; color:#F7F7F7 " class="btn btn-default roundedv2">LOGIN</a>
                                  </div>

                                </div>
                                <!-- <div class="row d-flex justify-content-between mt-2">
                                    <div class="col-sm-4">

                                    </div>
                                    <div class="col-sm-3">
                                        
                                      </div>
                                    <div class="col-sm-4">

                                    </div>

                                  </div> -->

                              <!-- </div> -->

													{{-- <div class="container">
														<div class="row">
															<div class="col-sm">
																<a href="/" class="btn_1 rounded"> BERANDA</a>
															</div>
															<div class="col-sm">
																<a href="/list/buku-tamu" class="btn_1 rounded">DAFTAR TAMU</a>
															</div>
															<div class="col-sm">
																<a href="/statistik/buku-tamu" class="btn_1 rounded">STATISTIK</a>
															</div>
															<div class="col-sm">
																<a href="/login" class="btn_1 rounded">LOGIN</a>
															</div>
														</div>
													</div> --}}
                            <h3 style="color: white !important;">Selamat Datang di Buku Tamu </h3>
                            <figure><img src="{{ asset('assets/templateskm/assets/form/img/banner.png') }}" alt=""
                                    width="250" height="250" class="img-fluid"></figure>
                            <h2 style="margin: 0 0 20px 0;">Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu</h2>
                            <p>Partisipasi masyarakat sebagai pengguna layanan dalam menilai kinerja penyelenggaraan
                                pelayanan publik di pemerintah kabupaten ciamis.</p>

                        </div>

                        <div class="copy">© {{ date('Y') }} Pemerintah Kabupaten Ciamis</div>
                    </div>
                    <!-- /content-left-wrapper -->
                </div>
                <!-- /content-left -->

                <div class="col-lg-6 content-right  d-md-block" id="start" style="background: #F7F7F7 !important;">
                    <div id="wizard_container" style="margin-left: -30px; !important;">
                        <!-- /top-wizard -->
                        <form class="" method="post" action="/kunjungan">
                            @csrf

                            <!-- Leave for security protection, read docs for details -->
                            <!-- //hitung jumlah $pertanyaan -->
                            <input id="website" name="website" type="text" value="">
														<input type="hidden" name="status" value="0" id="">
                            <div id="middle-wizard">

                                <div class="step">
                                <div class="row mb-3" style="align-items: end !important;">
                                    <div class="col-md-6">
                                        <h3 class="main_question">Pilih Jenis Layanan</h3>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/0.jpg') }}" alt=""
                                            width="50%">
                                    </div>
                                </div>

                                <div class="form-group">
                                    @foreach ($serviceType as $serviceType)

                                        <label class="container_radio version_2">{{$serviceType->service_name}}

                                            <input class="pilihJenis" type="checkbox" required autofocus name="id_service_type[]"
    											value="{{$serviceType->id_service_type}}">

                                            <span class="checkmark"></span>
                                        </label>

                                    @endforeach
                                </div>
                            </div>



                                <div class="step">

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <h3 class="main_question">Pilih Jenis Layanan</h3>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/0.jpg') }}" alt=""
                                            width="50%">
                                    </div>
																		<div class="form-group" id="subLayanan">
                                </div>
                                </div>



                           		 </div>


                                <div class="step">
                                <div class="row mb-3" style="align-items: end !important;">
                                    <div class="col-md-6">
                                        <h3>Form kunjungan</h3>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/1.jpg') }}" alt=""
                                            width="50%">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="date"  value="{{now()->format('Y-m-d')}}" class="form-control  @error('visit_time') is-invalid @enderror"
                                        id="visit_time" name="visit_time" required autofocus
                                        value="{{ old('visit_time') }}">
                                    @error('visit_time')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control  @error('visitor_name') is-invalid @enderror"
                                        id="visitor_name" name="visitor_name" required autofocus
                                        value="{{ old('visitor_name') }}" placeholder="Nama Lengkap">
                                    @error('visitor_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="number" class="form-control  @error('visitor_age') is-invalid @enderror"
                                        id="visitor_age" name="visitor_age" required autofocus
                                        value="{{ old('visitor_age') }}" placeholder="Usia">
                                    @error('visitor_age')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text"
                                        class="form-control  @error('visit_purpose') is-invalid @enderror"
                                        id="visit_purpose" name="visit_purpose" required autofocus
                                        value="{{ old('visit_purpose') }}" placeholder="Tujuan">
                                    @error('visit_purpose')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <div class="styled-select clearfix">
                                        <select class="form-control required" id="input_pendidikan" name="visitor_education">
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
                                        <input type="radio" id="visitor_gender" name="visitor_gender" value="Laki-laki"
                                            class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio">Perempuan
                                        <input type="radio" id="visitor_gender" name="visitor_gender" value="Perempuan"
                                            class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                                <div class="step">
																	<a href="#tamu" id="thisCiamis" class="btn btn-success">Ciamis</a>
																	<a href="#tamu" class="btn btn-info"id="nonCiamis">Luar Ciamis</a>
                                    <div id="JuduldaerahCiamis" class="row mb-3" style="align-items: end !important;">
                                        <div class="col-md-6">

                                        </div>
                                    </div>

                                    <div class="row" id="daerahCiamis" style="align-items: end !important;">


                                        <div class="col-md-12"style="margin-left:20px">
                                            <div class="form-group">
                                                <label>Kecamatan / Kota</label>
                                                <div class="styled-select clearfix">
                                                    <select class="wide form-control " name="visitor_disctrict"
                                                        id="kecamatan" required>
                                                        <option value="">== Pilih Kecamatan ==</option>
                                                        @foreach ($kecamatan as $id => $name)
                                                            <option value="{{ $id }}">{{ $name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Desa / Kelurahan</label>
                                                <div class="styled-select clearfix">
                                                    <select class="form-control" name="visitor_village" id="desa" required>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row" style="align-items: end !important;">
                                                <div class="col-md-6">
                                                    <label>RT</label>
                                                    <div class="form-group">
                                                        <input id="rt" type="text" class="form-control"
                                                            placeholder="RT" name="visitor_neighborhood_association"
                                                            id="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>RW</label>
                                                    <div class="form-group">
                                                        <input id="rw" type="text" placeholder="Rw"
                                                            class="form-control" name="visitor_citizen_association"
                                                            id="">
                                                    </div>
                                                </div>
                                            </div>
											<label>Alamat</label>
                                            <div class="form-group add_top_30">
                                                <textarea id="alamat" name="visitor_address_detail" aria-describedby="visitor_address_detail"
                                                    class="form-control review_message" placeholder="Alamat Pelengkap"></textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-6" >

                                        </div>
                                    </div>
                                    <div id="luarCiamis">
                                        <div class="form-group add_top_30">
                                            <textarea id="alamat" name="visitor_address" aria-describedby="visitor_address"
                                                class="form-control review_message" placeholder="Alamat Lengkap"></textarea>
                                        </div>
                                    </div>

                                </div>


                                <div class="submit step">
                                    <h3 class="main_question">Keterangan</h3>
                                    <div class="form-group add_top_30">
                                        <textarea id="saran" name="visitor_description" aria-describedby="saran_text"
                                            class="form-control review_message" placeholder="Tulis disini..."></textarea>
                                    </div>
                                </div>

                            </div>
                            <!-- /middle-wizard -->

                            <div id="top-wizard">
                                <div id="progressbar"></div>
                            </div>

                            <div id="bottom-wizard">
                                <div class="row">
                                    <div class="col-4" style="margin-left:30px!important;text-align: left !important;">3 Steps</div>
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
    </div>
@endsection
@push('scripts')
    <script>

        //Buat Animasi
        $(document).ready(function() {

					var elements = document.querySelectorAll('.step');
					var values = [].map.call(elements, function(e) {
						return e.html;
						values[1].classList.remove("step");
					});
					console.log('values',values[1]);

            $("html,body").animate({
                scrollTop: 0
            }, "slow");
            $('#luarCiamis').hide();
							$('#thisCiamis').prop('checked',true)
            $('#nonCiamis').on('click', function() {
                $('#daerahCiamis').hide();
								$('#thisCiamis').prop('checked',false)
                $('#JuduldaerahCiamis').hide();
                $('#luarCiamis').show();
                $('#kecamatan').prop('required',false)
                $('#desa').prop('required',false)
            });
            $('#thisCiamis').on('click', function() {
                $('#daerahCiamis').show();
                $('#JuduldaerahCiamis').show();
								$('#nonCiamis').prop('checked',false)
                $('#luarCiamis').hide();
            });
        });

        //Buat Redirect


        // $('.swal2-confirm').on('click', function() {
        //     window.location.href = "/skm";
        // })

        // $('.swal2-cancel').on('click', function() {
        //     window.location.href = "/remove";
        // })

        //Buat Get Wilayah
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
                    $('#' + name).append(`<option>==Pilih Desa==</option>`);

                    $.each(data, function(key, value) {

                        $('#' + name).append(`<option value="${key}">${value}</option>`);
                    });
                }
            });
        }



        $(function() {
            $('#provinsi').on('change', function() {

                onChangeSelect('{{ route('cities') }}', $(this).val(), 'kota');
            });
            $('#kota').on('change', function() {
                onChangeSelect('{{ route('districts') }}', $(this).val(), 'kecamatan');
            })
            $('#kecamatan').on('change', function() {
                onChangeSelect('{{ route('villages') }}', $(this).val(), 'desa');
            })
        });

        //Buat Get SUb Jenis Layanann

        $('.pilihJenis').on('click', function() {


            var inps = $('input[name="id_service_type[]"]:checked');
            var data = [];
            for (var i = 0; i < inps.length; i++) {
                var inp = inps[i];

                data.push(parseInt(inp.value))
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: "{{ route('subJenisLayanan.post') }}",
                data: {
                    id: data
                },
                success: function(data) {

                    $('#subLayanan').empty();


                    $.each(data.data, function(key, value) {

                        let subLayanan = ``
                        $.each(value.sub_services, function(subKey, subValue) {

                            subLayanan += `<label class="container_radio version_2">
										${subValue.sub_service_name}
													  <input class="pilihJenis" type="checkbox" required autofocus name="id_sub_service_type[]"
    											value="${ value.id_service_type + '|' + subValue.id_sub_service_type}">
												<span class="checkmark"></span>
            				</label>
										`
                        });

                        $('#subLayanan').append(`
										 <label class="container_radio version_2">
											<b>
										${value.service_name}</b>
            				</label>
										${subLayanan}

										`);

                    });


                }
            });
        })
    </script>
@endpush

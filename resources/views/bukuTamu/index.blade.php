@extends('layouts.skm.main')

@section('container')
    <div id="beranda" class="d-flex flex-column justify-content-center w-100 h-100">
        <div class="d-flex flex-column justify-content-center align-items-center mylinks">
            <div class=" justify-content-center">
                <figure><img src="{{ asset('assets/templateskm/assets/form/img/banner2.png') }}" alt="" width="350"
                        height="350" class="img-fluid"></figure>
                <h1 class="fw-light text-white m-0">Selamat Okelah Datang, Di <br> Dinas Penanaman Modal dan Pelayanan
                    Terpadu Satu Pintu</h1>
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
                            <img src="{{ asset('/assets/templateskm/assets/form/img/logoKab.png') }}" alt=""
                                width="70" height="50">Pemerintah Kabupaten Ciamis</a>

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
                            <a href="#beranda" class="btn_1 rounded"> Beranda</a>
                            @if (Session::has('visitor_name'))
                                <a href="/skm" class="btn_1 rounded">SKM</a>
                            @endif

                            <a href="/statistik" class="btn_1 rounded">STATISTIK</a>
                            <a href="/login" class="btn_1 rounded">LOGIN</a>

                            <h3 style="color: white !important;">Selamat Datang di Buku Tamu </h3>
                            <figure><img src="{{ asset('assets/templateskm/assets/form/img/banner.png') }}" alt=""
                                    width="250" height="250" class="img-fluid"></figure>
                            <h2 style="margin: 0 0 20px 0;">Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu</h2>
                            <p>Partisipasi masyarakat sebagai pengguna layanan dalam menilai kinerja penyelenggaraan
                                pelayanan publik di pemerintah kabupaten ciamis.</p>
                            <a href="#start" class="btn_1 rounded mobile_btn">Mulai!</a>
                        </div>

                        <div class="copy">© {{ date('Y') }} Pemerintah Kabupaten Ciamis</div>
                    </div>
                    <!-- /content-left-wrapper -->
                </div>
                <!-- /content-left -->

                <div class="col-lg-6 content-right" id="start" style="background: #F7F7F7 !important;">
                    <div id="wizard_container">
                        <!-- /top-wizard -->
                        <form class="" method="post" action="/kunjungan">
                            @csrf

                            <!-- Leave for security protection, read docs for details -->
                            <!-- //hitung jumlah $pertanyaan -->
                            <input id="website" name="website" type="text" value="">

                            <div id="middle-wizard">

                                {{-- <div class="step" style="margin-top: 300px;">
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
                                        @if (old('id_service_type') == $serviceType->id_service_type){
                                        <label class="container_radio version_2">{{$serviceType->service_name}}
                                            <input type="radio" name="id_service_type"
    											value="{{$serviceType->id_service_type}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        }
                                        @else
                                        <label class="container_radio version_2">{{$serviceType->service_name}}
                                            <input type="radio" name="id_service_type"
    											value="{{$serviceType->id_service_type}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        @endif
                                    @endforeach
                                </div>
                            </div> --}}

                                {{-- <div class="step">
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
                                    <input type="date" readonly value="{{now()->format('Y-m-d')}}" class="form-control  @error('visit_time') is-invalid @enderror"
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
                                    <input type="text" class="form-control  @error('visitor_age') is-invalid @enderror"
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
                            </div> --}}

                                <div class="step">

                                    <div id="JuduldaerahCiamis" class="row mb-3" style="align-items: end !important;">
                                        <div class="col-md-6">
																					 <h3>Alamat</h3>
                                            <h5>Berada Di luar Kabupaten Ciamis ?</h5>
                                            <p id="nonCiamis"><u>Klik disini!</u></p>

                                        </div>
                                    </div>

                                    <div class="row" id="daerahCiamis" style="align-items: end !important;">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kecamatan</label>
                                                <div class="styled-select clearfix">
                                                    <select class="wide form-control required" name="visitor_disctrict"
                                                        id="kecamatan">
                                                        <option value="">== Select Kecamatan ==</option>
                                                        @foreach ($kecamatan as $id => $name)
                                                            <option value="{{ $id }}">{{ $name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Desa</label>
                                                <div class="styled-select clearfix">
                                                    <select class="form-control" name="visitor_village" id="desa"
                                                        required>
                                                        <option>==Pilih Salah Satu==</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row" style="align-items: end !important;">
                                                <div class="col-md-6">
                                                    <label>RT</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="RT"
                                                            name="visitor_neighborhood_association" id="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>RT</label>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Rw" class="form-control"
                                                            name="visitor_citizen_association" id="">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
																		<div id="luarCiamis">
																			<h3 class="main_question">Alamat Lengkap</h3>
																			  <h5>Berasal Dari Kabupaten Ciamis ?</h5>
                                            <p id="thisCiamis"><u>Klik disini!</u></p>
                                    <div class="form-group add_top_30">
                                        <textarea id="alamat" name="visitor_description" aria-describedby="saran_text"
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
                                    <div class="col-4" style="text-align: left !important;">3 Steps</div>
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
        <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>,
                            mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus,
                            pro ne quod dicunt sensibus.</p>
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
        	$(document).ready(function(){
        	$("html,body").animate({scrollTop:0},"slow");
				$('#luarCiamis').hide();

        $('#nonCiamis').on('click', function() {
           $('#daerahCiamis').hide();
					 $('#JuduldaerahCiamis').hide();
					 $('#luarCiamis').show();
        })
				 $('#thisCiamis').on('click', function() {
           $('#daerahCiamis').show();
					 $('#JuduldaerahCiamis').show();
					 $('#luarCiamis').hide();
        })
        });

        $('.swal2-confirm').on('click', function() {
            window.location.href = "/skm";
        })

        $('.swal2-cancel').on('click', function() {
            window.location.href = "/remove";
        })

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

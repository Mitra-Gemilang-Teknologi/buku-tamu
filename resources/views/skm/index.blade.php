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
                <form class="" method="post" action="/simpan_survey">
                    @csrf
                    <!-- <input type="hidden" name="_token" value="Lrw2bgy8E1N4CpByfF2DYDm56fEwgMeYgSIXZn1X"> -->
                    <!-- <input type="hidden" name="id_instansi" value="628"> -->
                    <input id="website" name="website" type="text" value="">
                    <!-- Leave for security protection, read docs for details -->
                    <!-- //hitung jumlah $pertanyaan -->

                    <div id="middle-wizard">
                        <div class="step">
                            <div class="row mb-3" style="align-items: end !important;">
                                <div class="col-md-6">
                                    <h3 class="main_question">SKM - Pilih Jenis Layanan</h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/0.jpg') }}" alt=""
                                    width="50%">
                                </div>
                            </div>

                            <div class="form-group">
                                @foreach ($serviceType as $serviceType)
                                <label class="container_radio version_2">{{$serviceType->service_name}}
                                    <input class="pilihJenisskm" type="checkbox" required autofocus name="id_service_type[]"
                                    value="{{$serviceType->id_service_type}}">

                                    <span class="checkmark"></span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="step">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h3 class="main_question">Pilih Sub Jenis Layanan</h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('assets/templateskm/survey/img_pertanyaan/0.jpg') }}" alt="" width="50%">
                                </div>
                                <div class="form-group" id="subLayananskm"> </div>
                            </div>
                        </div>


                        <!-- <input type="hidden" name="id_buku_tamu" value=""> -->

                        <div class="form-group">
                            <input type="hidden" id="input_nama" name="surveyor_name" value="{{Session::get('visitor_name')}}">
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="surveyor_education" value="{{Session::get('visitor_education')}}">
                        </div>

                        <div class="form-group radio_input">
                            <input type="hidden" name="surveyor_gender" value="{{Session::get('visitor_gender')}}">
                        </div>

                        @foreach ($Question as $Question)
                        <div class="step">
                            <div class="row" style="align-items: end !important;">
                                <div class="col-md-12 mb-3">
                                    <h3>{{$Question->question_description}}</h3>
                                </div>

                                <div class="col-md-6">
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/d.png')}}" alt="" width="10%"> Tidak Sesuai
                                       <input type="radio" id="opsi_3_15" name="id_answer_option[{{ $Question->id_question }}]" value="1" class="required">
                                       <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/c.png')}}" alt="" width="10%"> Kurang Sesuai
                                        <input type="radio" id="opsi_3_16" name="id_answer_option[{{ $Question->id_question }}]" value="2" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/b.png')}}" alt="" width="10%"> Sesuai
                                        <input type="radio" id="opsi_3_17" name="id_answer_option[{{ $Question->id_question }}]" value="3" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/a.png')}}" alt="" width="10%"> Sangat Sesuai
                                        <input type="radio" id="opsi_3_18" name="id_answer_option[{{ $Question->id_question }}]" value="4" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-md-6 text-right">
                                    <img src="{{ asset('templateskm/survey/img_pertanyaan/' . $Question->question_image, true) }}" alt="" width="65%">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- @foreach ($AnswerOption as $AnswerOption)
                            <label class="container_radio version_2"><img src="{{asset('assets/templateskm/survey/smiley/') .'/'.  $AnswerOption->answer_icon }}" alt="" width="10%"> {{ $AnswerOption->answer_description }}
                                <input type="radio" id="opsi_3_16" name="respon[3]" value="{{ $AnswerOption->answer_value }}" class="required">
                                <span class="checkmark"></span>
                            </label>
                        @endforeach -->

                        <div class="submit step">
                            <h3 class="main_question">Kritik dan Saran</h3>
                            <div class="form-group add_top_30">
                                <textarea id="saran" name="surveyor_description" aria-describedby="saran_text" class="form-control review_message"
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

@push('scripts')
<script>
    //Buat Get Sub Jenis Layanann
    $('.pilihJenisskm').on('click',function(){
        var inps = $('input[name="id_service_type[]"]:checked');
        var data = [];
        for (var i = 0; i <inps.length; i++) {
            var inp=inps[i];
            data.push(parseInt(inp.value))
        }

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:"{{ route('subJenisLayananskm.post') }}",
            data: {
                id: data
            },
            success: function(data) {

                $('#subLayananskm').empty();

                $.each(data.data, function(key, value) {

                    let subLayananskm = ``
                    $.each(value.sub_services,function(subKey,subValue){

                        subLayananskm += `<label class="container_radio version_2">
                        ${subValue.sub_service_name}
                        <input class="pilihJenisskm" type="checkbox" required autofocus name="id_sub_service_type[]"
                        value="${ value.id_service_type + '|' + subValue.id_sub_service_type}">
                        <span class="checkmark"></span>
                        </label>
                        `
                    });

                    $('#subLayananskm').append(`<label class="container_radio version_2"> <b>${value.service_name}</b> </label>
                        ${subLayananskm} `);
                });
            }
        });
    })

</script>
@endpush
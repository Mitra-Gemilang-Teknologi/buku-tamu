@extends('layouts.skm.main')

@section('container')
    <div id="beranda" class="d-flex flex-column justify-content-center w-100 h-100">
			<Center>
			<p class="text-white h1">Masukan Pendapat Anda</p>
			</Center>
        <div class="d-flex flex-column justify-content-center align-items-center mylinks">
            <div class="d-flex justify-content-between">

                <div class="card-deck">

                    <div class="card" style="background-color: #fb91">
												<form action="/addPoint" method="POST">
													@csrf
													<input type="hidden" name="point" value="3">
														<input type="hidden" value="{{Session::get('visitor_id')}}" name="visitor_id" id="">
                        	<input class="card-img-top" type="image" src="{{asset('assets/templateskm/survey/smiley/a.png')}}" >
												</form>
                    </div>
                    <div class="card"style="background-color: #fb91">
												<form action="/addPoint" method="POST">
													@csrf
													<input type="hidden" name="point" value="2">
													<input type="hidden" value="{{Session::get('visitor_id')}}" name="visitor_id" id="">
													<input class="card-img-top" type="image" src="{{asset('assets/templateskm/survey/smiley/b.png')}}" >

												</form>

                    </div>
                    <div class="card"style="background-color: #fb91">
                        	<form action="/addPoint" method="POST">
													@csrf
													<input type="hidden" name="point" value="1">
														<input type="hidden" value="{{Session::get('visitor_id')}}" name="visitor_id" id="">
                       	<input class="card-img-top" type="image" src="{{asset('assets/templateskm/survey/smiley/d.png')}}" name="" id="">
												</form>

                    </div>
                </div>
            </div>



        </div>




    </div>
    </div>
@endsection

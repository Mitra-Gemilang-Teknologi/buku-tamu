@extends('dashboard.layouts.main')

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">SUMMARY DASHBOARD SKM</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Statistik</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-6">
                    <select class="select-period form-control">
                        <option value="">Pilih Triwulan</option>
                        <option value="1">Triwulan 1</option>
                        <option value="2">Triwulan 2</option>
                        <option value="3">Triwulan 3</option>
                        <option value="4">Triwulan 4</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-default" style="height: 8em;">
                        <div class="inner">
                            <h5>Hasil Survey Kepuasan Masyarakat (SKM)</h5>
                            <div id="loading-triwulan"></div>
                            <h3 id="total-triwulan"></h3>
                            <p id="info-periode"> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-default" style="height: 8em;">
                        <div class="inner">
                            <div id="loading-responden"></div>
                            <h3 id="total-responden"></h3>
                            <p>Jumlah Responden </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$countDay}}</h3>

                            Kunjungan Hari ini
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$countWeek}}</h3>



                            Kunjungan Perminggu
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$countMonth}}</h3>



                            Kunjungan bulan ini
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $countYear }}</h3>
                            <p>Kunjungan Pertahun</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-6 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                JUMLAH RESPONDEN BERDASARKAN JENIS KELAMIN

                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">

                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane" id="revenue-chart" style="position: relative; height: 300px;">
                                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                                <div class="chart tab-pane active" id="sales-chart" style="position: relative; height: 300px;">
                                    <canvas id="sales-chart-canvas-skm" height="300" style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-bar mr-1"></i>
                                JUMLAH RESPONDEN SKM BERDASARKAN TIGKAT PENDIDIKAN
                            </h3>

                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="col-md-12">
                                    <canvas id="myChart-skm" width="200" height="100"></canvas>

                                </div>

                            </div>
                        </div><!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-6 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                JUMLAH KEPUASAN RESPONDEN

                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">

                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane" id="revenue-chart" style="position: relative; height: 300px;">
                                    <canvas id="revenue-chart-canvas-skm-kepuasan" height="300" style="height: 300px;"></canvas>
                                </div>
                                <div class="chart tab-pane active" id="sales-chart" style="position: relative; height: 300px;">
                                    <canvas id="sales-chart-canvas-skm-kepuasan" height="300" style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-bar mr-1"></i>
                                SUMMARY SURVEY KEPUASAN MASYARKAT BERDASARKAN JENIS LAYANAN
                            </h3>

                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="col-md-12">
                                    <canvas id="myChart-skm-layanan" width="200" height="100"></canvas>

                                </div>

                            </div>
                        </div><!-- /.card-body -->

                    </div>


                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->

            <section class="content">
                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                    Data Kunjungan
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#Harian" data-toggle="tab">Harian</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Mingguan" data-toggle="tab">Mingguan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Bulanan" data-toggle="tab">Bulanan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Layanan" data-toggle="tab">Layanan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content p-0">
                                    <!-- Morris chart - Sales -->
                                    <div class="col-md-12 chart tab-pane active" id="Harian">
                                        <canvas id="myChartHarian-skm" width="200" height="100"></canvas>

                                    </div>
                                    <div class="col-md-12 chart tab-pane " id="Mingguan">
                                        <canvas id="myChartMingguan-skm" width="200" height="100"></canvas>
                                    </div>
                                    <div class="col-md-12 chart tab-pane " id="Bulanan">
                                        <canvas id="myChartBulanan-skm" width="200" height="100"></canvas>
                                    </div>
                                    <div class="col-md-12 chart tab-pane " id="Layanan">
                                        <canvas id="myChartLayanan-skm" width="200" height="100"></canvas>
                                    </div>

                                </div>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </section>
                </div>
                <div class="container-fluid">
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </section>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/data/hasil/triwulan',
            dataType: 'json',
            method: 'get',
            beforeSend: function() {
                $("#loading-triwulan").html('Loading ...')
                $("#loading-responden").html('Loading ...')
            },
        }).done(function(response) {
            console.log(response)
            $("#loading-triwulan").html(' ')
            $("#loading-responden").html(' ')
            $("#total-triwulan").html(response.answer.toFixed(2))
            $("#total-responden").html(response.total_responden[0].total)
            $("#info-periode").html(response.label_survey)
        })

        // FUNCTION OPTION TRIWULAN
        $('body').on('change', '.select-period', function() {
            $.ajax({
                url: '/data/hasil/triwulan',
                dataType: 'json',
                method: 'get',
                data: {
                    param: $(this).val()
                },
                beforeSend: function() {
                    $("#loading-triwulan").html('Loading ...')
                    $("#loading-responden").html('Loading ...')
                },
            }).done(function(response) {
                $("#loading-triwulan").html(' ')
                $("#loading-responden").html(' ')
                $("#total-triwulan").html(response.answer.toFixed(2))
                $("#total-responden").html(response.total_responden[0].total)
                $("#info-periode").html(response.label_survey)
            })
        })
    })
</script>
@endpush
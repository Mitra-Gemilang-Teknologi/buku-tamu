@extends('layouts.main')

<style>
    .nav-link{
        color:blueviolet !important;
    }
    .submit{
        background-color: blueviolet !important;
        color: #ffffff !important;
    }
</style>
@section('container')

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

<div class="row">
    <section class="col-lg-6 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    JUMLAH RESPONDEN SKM BERDASARKAN JENIS KELAMIN
                </h3>
                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto"></ul>
                </div>
            </div><!-- /.card-header -->

            <div class="card-body">
                <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane" id="revenue-chart" style="position: relative; height: 300px;">
                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                    <div class="chart tab-pane active" id="sales-chart" style="position: relative; height: 300px;">
                        <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div><!-- /.card-body -->

        </div><!-- /.card -->


    </section>

    <section class="col-lg-6 connectedSortable">
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
                    <div class="col-md-12" style="background:rgb(170, 141, 208)">
                        <canvas id="myChart" width="200" height="100"></canvas>
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </section>
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
                                    <div class="card-tools" >
                                        <ul class="nav nav-pills ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#Harian" data-toggle="tab"style="color: black !important">Harian</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#Mingguan" data-toggle="tab"style="color: black !important">Mingguan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#Bulanan" data-toggle="tab"style="color: black !important">Bulanan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#Layanan" data-toggle="tab"style="color: black !important">Layanan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <!-- Morris chart - Sales -->
                                        <div class="col-md-12 chart tab-pane active"id="Harian">
                                            <canvas id="myChartHarian" width="200" height="100"></canvas>

                                        </div>
                                        <div class="col-md-12 chart tab-pane "id="Mingguan">
                                            <canvas id="myChartMingguan" width="200" height="100"></canvas>
                                        </div>
                                        <div class="col-md-12 chart tab-pane "id="Bulanan">
                                            <canvas id="myChartBulanan" width="200" height="100"></canvas>
                                        </div>
                                        <div class="col-md-12 chart tab-pane "id="Layanan">
                                            <canvas id="myChartLayanan" width="200" height="100"></canvas>
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


@endsection

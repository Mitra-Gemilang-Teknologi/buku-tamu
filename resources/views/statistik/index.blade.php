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
                <h3>150</h3>
                <p>Rata Rata<br>
                    Kunjungan Perhari
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
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Rata Rata<br>
                    Kunjungan Perminggu
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
        </div>
    </div><!-- ./col -->
    
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>44</h3>
                <p>Rata Rata<br>
                    Kunjungan Perbulan
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
        </div>
    </div><!-- ./col -->
    
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>
                <p>Rata Rata<br>
                    Kunjungan Pertahun
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
        </div>
    </div><!-- ./col -->

</div><!-- /.row -->

<div class="row">
    <section class="col-lg-6 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    JUMLAH RESPONDEN BERDASARKAN JENIS KELAMIN
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

    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-bar mr-1"></i>
                    JUMLAH RESPONDEN SKM BERDASARKAN JENIS PELAYANAN
                </h3>
            </div><!-- /.card-header -->

            <div class="card-body">
                <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="col-md-12">
                        <canvas id="myChartPelayanan" width="200" height="100"></canvas>
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div><!-- /.card -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-table mr-1"></i>
                    KETERANGAN REPONDEN
                </h3>
                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto"></ul>
                </div>
            </div><!-- /.card-header -->

            <div class="card-body">
                <div class="tab-content p-0">
                    <div class="container-fluid">
                        <div div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                    </div><!-- /.card-header -->

                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No Urut</th>
                                                    <th>Unsur Pelayanan</th>
                                                    <th>Rata-Rata</th>
                                                    <th>Keterangan</th>
                                                    <th>Interpretasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Other browsers</td>
                                                    <td>All others</td>
                                                    <td>Dani</td>
                                                    <td>Ok</td>
                                                    <td>USa</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div>
    </section>
</div>


@endsection
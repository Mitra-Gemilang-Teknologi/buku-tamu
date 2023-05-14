@extends('dashboard.layouts.main')

@section('container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ubah Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">

              <!-- /.card-header -->
              <!-- form start -->
              <form action="/user/update" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ auth()->user()->id }}">
                <div class="card-body">
									<div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama" value="{{ auth()->user()->name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" value="{{ auth()->user()->email }}"">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password Baru</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
									  <div class="form-group">
                    <label for="exampleInputPassword1">Ulangi Password</label>
                    <input type="password" class="form-control" name="passwordconfirm" id="exampleInputPassword1" placeholder="Password">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@extends('layouts.template')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title ">DAFTAR CALON PROGRAM</h3>
            </div>
            </div>
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('tambahcalonprogram.simpan')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="icnumber">Nombor Kad Pengenalan</label>
                    <input type="text" name="identification_number_pcandidate" class="form-control" id="icnumber" placeholder="Nombor Kad Pengenalan tanpa (-)">
                  </div>
                  @error('identification_number_pcandidate')
                  <div class="alert alert-danger alert-dismissible">{{ 'Sila masukkan nombor kad pengenalan calon!' }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="name">Nama Penuh Calon</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Calon">
                  </div>
                  @error('name')
                  <div class="alert alert-danger alert-dismissible">{{ 'Sila isi nama calon!' }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="program">Program Calon</label>
                    <input type="text" name="program" class="form-control" id="program" placeholder="Program">
                  </div>
                  @error('program')
                  <div class="alert alert-danger alert-dismissible">{{ 'Sila isi program calon!' }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="gambar">Gambar Calon</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Muat Naik</span>
                      </div>
                    </div>
                  </div>
                  @error('image')
                  <div class="alert alert-danger alert-dismissible">{{ 'Muatnaik gambar calon!' }}</div>
                  @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success toastsDefaultSuccess">Hantar</button>
                </div>
              </form>
        </div>
      </div>
    </div>
</section>
@endsection
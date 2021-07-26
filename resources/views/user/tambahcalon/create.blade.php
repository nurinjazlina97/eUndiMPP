@extends('layouts.template')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title ">DAFTAR CALON </h3>
            </div>
            </div>
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('tambahcalon.simpan')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Nama Penuh Calon</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Calon">
                  </div>
                  @error('name')
                  <div class="alert alert-danger alert-dismissible">{{ 'Sila isi nama calon!' }}</div>
                  @enderror
                  <div class="form-group">
                    <label>Jenis Calon</label>
                    <select class="select2" multiple="multiple" name="type_candidates" data-placeholder="Program" style="width: 50%;">
                      <option value="umum">Umum</option>
                      <option value="program">Program</option>
                    </select>
                  </div>
                  @error('program')
                  <div class="alert alert-danger alert-dismissible">{{ 'Sila isi program calon!' }}</div>
                  @enderror
                  <div class="form-group">
                    <label>Program</label>
                    <select class="select2" multiple="multiple" name="program" data-placeholder="Program" style="width: 50%;">
                      <option value="cs230">CS230</option>
                    </select>
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
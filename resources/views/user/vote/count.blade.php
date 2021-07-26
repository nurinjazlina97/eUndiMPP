@extends('layouts.template')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Keputusan Undian Calon Umum</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama Calon</th>
                      <th>Jumlah Undian</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($voteumums as $voteumum)
                    <tr>
                      <td>{{$voteumum->identification_number_gcandidate}}</td>
                      <td>{{$voteumum->vote_count}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>IC Calon</th>
                      <th>Jumlah Undian</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection
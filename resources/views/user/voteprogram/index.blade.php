@extends('layouts.template')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title ">UNDIAN CALON PROGRAM (ANDA HANYA DIBENARKAN UNTUK MEMILIH LIMA ORANG CALON DARI SENARAI SAHAJA)</h3>
            </div>
            <div class="card-body">
                    <div class="card-body pb-0">
                      <div class="row">
                        @foreach($calonprograms as $calonprogram)
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                          <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            </div>
                            <div class="card-body pt-0">
                              <div class="row">
                                <div class="col-7">
                                  <h2 class="lead"><b>{{$calonprogram->name}}</b></h2>
                                  <p class="text-muted text-sm"><b>Program: </b>{{$calonprogram->program}}</p>
                                  <ul class="ml-4 mb-0 fa-ul text-muted">
                                  </ul>
                                </div>
                                <div class="col-5 text-center">
                                  <img src="{{ asset('/storage/'.$calonprogram->image)}}" alt="user-avatar" class="img-circle img-fluid" width="50" height="50">
                                </div>
                              </div>
                            </div>
                            <div class="card-footer">
                              <div class="text-right">
                                <a href="#" class="btn btn-sm btn-primary">
                                  <i class="fas fa-user"></i> Vote
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div><div class="card-footer">
                      <div class="text-right">
                        <a href="{{ route('voteprogram') }}" class="btn btn-sm btn-primary">
                          <i class="fas fa-user"></i> Submit
                        </a>
                      </div>
                    </div>

                    <!-- /.card-body -->
                    <!-- /.card-footer -->
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

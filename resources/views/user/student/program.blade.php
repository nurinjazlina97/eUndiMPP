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
                  <h3 class="card-title">Senarai Calon Program</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>IC Number</th>
                      <th>Program</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($calonprograms as $calonprogram)
                    <tr>
                      <td>{{$calonprogram->name}}</td>
                      <td>{{$calonprogram->identification_number_pcandidate}}</td>
                      <td>{{$calonprogram->program}}</td>
                      <td><img src="{{asset('/storage/'.$calonprogram->image)}}" width="80" height="70"></td>
                      <td>
                        <form action="{{route('student.delete', $calonprogram)}}">
                          @csrf
                          @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>IC Number</th>
                      <th>Program</th>
                      <th>Image</th>
                      <th>Action</th>
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
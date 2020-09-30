@extends('panel.base')
@section('content')

            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('storetingkat')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tingkat" placeholder="Tingkat" name="tingkat">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
@endsection

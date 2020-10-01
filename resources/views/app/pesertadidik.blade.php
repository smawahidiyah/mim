@extends('panel.base')
@section('content')

            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('storepesertadidik')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="tingkat_id" class="col-sm-2 col-form-label">Tingkat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tingkat_id" placeholder="Tingkat" name="tingkat_id">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nipd" class="col-sm-2 col-form-label">NIPD</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nipd" placeholder="NIPD" name="nipd">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namapd" class="col-sm-2 col-form-label">Nama Peserta Didik</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="namapd" placeholder="Nama" name="namapd">
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

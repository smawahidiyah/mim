@extends('panel.base')
@section('content')

            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('storesaldo')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="pesertadidik_id" class="col-sm-2 col-form-label">Peserta Didik</label>
                    <select class="col form-control" id="pesertadidik_id" placeholder="pesertadidik_id" name="pesertadidik_id">
                      @foreach($pesertadidiks as $pesertadidik )
                      <option value="{{ $pesertadidik->id }}">{{ $pesertadidik->namapd }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="saldo" class="col-sm-2 col-form-label">Saldo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="saldo" placeholder="Nama" name="saldo">
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

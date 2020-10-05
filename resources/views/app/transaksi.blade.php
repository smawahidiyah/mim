@extends('panel.base')

@section('css')
@endsection

@section('content')

            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('storetransaksi')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="tingkat_id" class="col-sm-2 col-form-label">Tingkat</label>
                    <select class="col form-control select2 js-states" id="tingkat_id" placeholder="Tingkat" name="tingkat_id">
                      @foreach($tingkats as $id => $tingkat )
                      <option value="{{ $id }}">{{$tingkat}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="pesertadidik_id" class="col-sm-2 col-form-label">Nama Peserta Didik</label>
                    <select class="col form-control select2 js-states" id="pesertadidik_id" placeholder="Nama Peserta Didik" name="pesertadidik_id">
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="saldo" class="col-sm-2 col-form-label">Saldo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="saldo" name="saldo" value="" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="transaksi" class="col-sm-2 col-form-label">Transaksi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="transaksi" name="transaksi">
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

@section('js')
@endsection

@section('script')

<script>
    $(function() {
        $('select[name="tingkat_id"]').on('change', function () {
            var PDID = $(this).val();

            if (PDID) {
                $.get('getpesertadidik/' + PDID, function(data) {
                    $('select[name="pesertadidik_id"]').empty();

                    $.each(data,function(key, value) {
                        $('select[name="pesertadidik_id"]').append('<option value="' + key + '">' + value + '</option>');
                    });
                }, 'json');
            } else {
                $('select[name="pesertadidik_id"]').empty();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
          $('select[name="pesertadidik_id"]').on("change", function() {
              var pesertadidik_id = $(this).val();
              if (pesertadidik_id) {
                $.get('getsaldo/' + pesertadidik_id, function(data){
                  $('input[name="saldo"]').empty();
                  $.each(data, function(x, y){
                    $('input[name="saldo"]').val(y);
                  });
                })
              }
          });
        });
</script>
@endsection

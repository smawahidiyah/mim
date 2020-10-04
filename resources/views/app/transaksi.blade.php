@extends('panel.base')
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
                    <select class="col form-control" id="tingkat_id" placeholder="Tingkat" name="tingkat_id">
                      @foreach($tingkats as $id => $tingkat )
                      <option value="{{ $id }}">{{$tingkat}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="pesertadidik_id" class="col-sm-2 col-form-label">Nama Peserta Didik</label>
                    <select class="col form-control" id="pesertadidik_id" placeholder="Tingkat" name="pesertadidik_id">
                    </select>
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

@section('script')
<script>
    $('#tingkat_id').change(function(){
    var tingkat_id = $(this).val();
    if(tingkat_id){
        $.ajax({
           type:"get",
           url:"{{url('getPesertaDidik')}}?tingkat_id="+tingkat_id,
           success:function(res){
            if(res){
                $("#pesertadidik_id").empty();
                $("#pesertadidik_id").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#pesertadidik_id").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#pesertadidik_id").empty();
            }
           }
        });
    }else{
        $("#pesertadidik_id").empty();
        $("#city").empty();
    }
   });
</script>
@endsection

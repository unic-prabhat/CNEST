@foreach(App\QtnTowelRailValves::where('uniqid',Session::get('unq'))->get() as $data)
<div class="row mt-3">
  <div class="col-md-5">
    <input type="text" class="form-control" value="{{$data->torv_type}}"  readonly>
  </div>
  <div class="col-md-4">
    <input type="text" class="form-control" value="{{$data->torv_angel}}" readonly>
  </div>
  <div class="col-md-2">
    <input type="text" class="form-control" value="{{$data->torv_number}}" readonly>
  </div>
  <div class="col-md-1">
    <button id="radiotorsreqBtnDelete" onclick="return qtnTowelRailValvesDelete('{{$data->id}}');" type="button" name="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
  </div>
</div>
@endforeach

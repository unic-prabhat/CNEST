@foreach(App\QtnThermostaticRadiatorValves::where('uniqid',Session::get('unq'))->get() as $data)
<div class="row mt-3">
  <div class="col-md-5">
    <input type="text" class="form-control" value="{{$data->trv_size}}" readonly>
  </div>
  <div class="col-md-3">
    <input type="text" class="form-control" value="{{$data->trv_type}}" readonly>
  </div>
  <div class="col-md-3">
    <input type="text" class="form-control" value="{{$data->trv_quantity}}" readonly>
  </div>
  <div class="col-md-1">
    <button id="radiotorsreqBtnDelete" onclick="return thermostaticRadiatorValvesDelete('{{$data->id}}');" type="button" name="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
  </div>
</div>
@endforeach

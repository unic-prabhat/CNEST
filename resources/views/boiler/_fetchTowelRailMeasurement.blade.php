@foreach(App\QtnTowelRailMeasurement::where('uniqid',Session::get('unq'))->get() as $data)
<div class="row mt-3">
  <div class="col-md-5">
    <input type="text" class="form-control" value="{{$data->trm_location}}" readonly>
  </div>
  <div class="col-md-2">
    <input type="text" class="form-control" value="{{$data->trm_height}}" readonly>
  </div>
  <div class="col-md-2">
    <input type="text" class="form-control" value="{{$data->trm_width}}" readonly>
  </div>
  <div class="col-md-2">
    <input type="text" class="form-control" value="{{$data->trm_color}}" readonly>
  </div>
  <div class="col-md-1">
    <button id="radiotorsreqBtnDelete" onclick="return qtnTowelRailMeasurementDelete('{{$data->id}}');" type="button" name="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
  </div>
</div>
@endforeach

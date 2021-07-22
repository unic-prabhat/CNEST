@foreach(App\QtnRadiatorMeasurementLocation::where('uniqid',Session::get('unq'))->get() as $data)
<div class="row mt-3">
  <div class="col-md-3">
    <input type="text" class="form-control" value="{{$data->rml_location}}" readonly>
  </div>
  <div class="col-md-2">
    <input type="text" class="form-control" value="{{$data->rml_height}}" readonly>
  </div>
  <div class="col-md-2">
    <input type="text" class="form-control" value="{{$data->rml_width}}" readonly>
  </div>
  <div class="col-md-4">
    <input type="text" class="form-control" value="{{$data->rml_psd}}" readonly>
  </div>
  <div class="col-md-1">
    <button id="radiotorsreqBtnDelete" onclick="return radiatorMeasurementLocationDelete('{{$data->id}}');" type="button" name="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
  </div>
</div>
@endforeach

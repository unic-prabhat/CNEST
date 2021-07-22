@foreach(App\QtnOptionalDescription::where('uniqid',Session::get('unq'))->get() as $data)
<div id="">
   <div class="row parent col-lg-12" id="">
      <div class="child">
         <div class="form-group">
            <input type="text" value="{{$data->oe_description}}" class="form-control"/>
         </div>
      </div>
      <div class="child">
         <div class="form-group">
            <input type="text" value="{{$data->oe_quantity}}" class="form-control"/>
         </div>
      </div>
      <div class="child">
         <div class="form-group">
            <input type="text" value="{{$data->oe_price}}" class="form-control"/>
         </div>
      </div>
      <button class="btn btn-danger" onclick="return optionalExtrasDelete('{{$data->id}}');" type="button" style="margin-top:-20px"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
</div>
@endforeach

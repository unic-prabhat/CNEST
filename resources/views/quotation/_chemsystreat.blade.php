@foreach(App\ChemicalSystemTreatment::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-11">
     <input type="text" class="form-control" name="boilertype" value="{{$bt->name}}" readonly>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return ChemicalSystemTreatmentDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
@endforeach

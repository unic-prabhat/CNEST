@foreach(App\ChemicalSystemTreatment::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-7">
     <input type="text" class="form-control" id="chemsysname{{$bt->id}}" value="{{$bt->name}}" onchange="return chesystreatupd{{$bt->id}}();" required>
   </div>
   <div class="col-md-4">
     <input type="text" class="form-control" id="chemsysnameprice{{$bt->id}}" value="{{$bt->price}}" onchange="return chesystreatupd{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return chemicalSystemTreatmentDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function chesystreatupd{{$bt->id}}(){
    // alert($('#nwflutyp{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/chesystreatupd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#chemsysname{{$bt->id}}').val(),
        price:$('#chemsysnameprice{{$bt->id}}').val(),

      },
      success:function(data){
        // alert(data);
      },
      error:function(data){
        //alert('Failed');
      }
    })

    return false;
  }
</script>
@endforeach

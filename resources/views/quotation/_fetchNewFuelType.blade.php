@foreach(App\newfuleType::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-6">
     <input type="text" class="form-control" id="newfltype{{$bt->id}}" value="{{$bt->name}}" onchange="return newfltypeupd{{$bt->id}}();">
   </div>
   <div class="col-md-5">
     <input type="text" class="form-control" id="newfltype_price{{$bt->id}}" value="{{$bt->price}}" onchange="return newfltypeupd{{$bt->id}}();">
   </div>

   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return newFuelTypeDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function newfltypeupd{{$bt->id}}(){
    // alert($('#nwflutyp{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/newfltypeupd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#newfltype{{$bt->id}}').val(),
        price:$('#newfltype_price{{$bt->id}}').val()

      },
      success:function(data){
        // alert(data);
      },
      error:function(data){
        //alert('Enter Some Value');
      }
    })

    return false;
  }
</script>
@endforeach

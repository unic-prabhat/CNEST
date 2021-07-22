@foreach(App\FlueKitDetails::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-8">
     <input type="text" class="form-control" id="flukitname{{$bt->id}}" value="{{$bt->name}}" onchange="return flukitdetupd{{$bt->id}}();" required>
   </div>
   <div class="col-md-3">
     <input type="text" class="form-control" id="flukitprice{{$bt->id}}" value="{{$bt->price}}" onchange="return flukitdetupd{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return flueKitDetailsDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function flukitdetupd{{$bt->id}}(){
    // alert($('#nwflutyp{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/flukitdetupd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#flukitname{{$bt->id}}').val(),
        price:$('#flukitprice{{$bt->id}}').val(),
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

@foreach(App\GasSupplyLength::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-6">
     <input type="text" class="form-control" id="gassuplengh{{$bt->id}}" value="{{$bt->name}}" onchange="return gassuplenghpriceupd{{$bt->id}}();" required>
   </div>
   <div class="col-md-5">
     <input type="text" class="form-control" id="gassuplenghprice{{$bt->id}}" value="{{$bt->price}}" onchange="return gassuplenghpriceupd{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return gasSupplyLengthDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function gassuplenghpriceupd{{$bt->id}}(){
    // alert($('#nwflutyp{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/gassuplenghpriceupd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#gassuplengh{{$bt->id}}').val(),
        price:$('#gassuplenghprice{{$bt->id}}').val(),

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

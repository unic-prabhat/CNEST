<div class="row">
  <div class="col-md-6"><label><strong>Bolts on name</strong></label></div>
  <div class="col-md-5"><label><strong>Bolts on value</strong></label></div>
  <div class="col-md-1"><label><strong>Action</strong></label></div>
</div>

@foreach(App\BoltOns::all() as $bt)
<form class="mt-2">
 <div class="row">
   <input type="hidden" name="boilerchoise_id" value="1">
   <div class="col-md-6">
     <input type="text" class="form-control" id="boltsnameS{{$bt->id}}" value="{{$bt->name}}" onchange="return boltsOnC{{$bt->id}}();" required>
   </div>
   <div class="col-md-5">
     <input type="text" class="form-control" id="boltspriceS{{$bt->id}}" value="{{$bt->value}}" onchange="return boltsOnC{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return boltsOnDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function boltsOnC{{$bt->id}}(){

    $.ajax({
      type:'POST',
      url:'{{URL::to("/boltsonupdate")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#boltsnameS{{$bt->id}}').val(),
        value:$('#boltspriceS{{$bt->id}}').val(),
      },
      success:function(data){
        // alert('Success');
      },
      error:function(data){
        //alert('Failed');
      }
    })

    return false;
  }
</script>
@endforeach

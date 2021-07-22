<div class="row">
  <div class="col-md-6">
   <label><strong>Name</strong></label>
  </div>
  <div class="col-md-5">
   <label><strong>Price</strong></label>
  </div>
  <div class="col-md-1">
   <label><strong>Action</strong></label>
  </div>
</div>
@foreach(App\CupboardNeedAlt::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-6">
     <input type="text" class="form-control" id="cupbrdneed{{$bt->id}}" value="{{$bt->name}}" onchange="return cupbrdneedupd{{$bt->id}}();" required>
   </div>
   <div class="col-md-5">
     <input type="text" class="form-control" id="cupbrdneed_price{{$bt->id}}" value="{{$bt->price}}" onchange="return cupbrdneedupd{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return cupboardnaltDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function cupbrdneedupd{{$bt->id}}(){
    // alert($('#nwflutyp{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/cupbrdneedupd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#cupbrdneed{{$bt->id}}').val(),
        price:$('#cupbrdneed_price{{$bt->id}}').val(),
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

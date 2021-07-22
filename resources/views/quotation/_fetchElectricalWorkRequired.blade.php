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
@foreach(App\ElectricalWorkRequired::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-6">
     <input type="text" class="form-control" id="eleworkreq{{$bt->id}}" value="{{$bt->name}}" onchange="return eleworkrequpd{{$bt->id}}();" required>

   </div>
   <div class="col-md-5">
     <input type="text" class="form-control" id="eleworkreq_price{{$bt->id}}" value="{{$bt->price}}" onchange="return eleworkrequpd{{$bt->id}}();" required>

   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return electricalWorkRequiredDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function eleworkrequpd{{$bt->id}}(){
    // alert($('#nwflutyp{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/eleworkrequpd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#eleworkreq{{$bt->id}}').val(),
        price:$('#eleworkreq_price{{$bt->id}}').val()
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

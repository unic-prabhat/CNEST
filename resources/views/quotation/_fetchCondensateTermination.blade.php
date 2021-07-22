<div class="row">
  <div class="col-md-11">
    <label><strong>Name</strong></label>
  </div>

  <div class="col-md-1">
    <label><strong>Action</strong></label>
  </div>
</div>
@foreach(App\CondensateTermination::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-11">
     <input type="text" class="form-control" id="nwconter{{$bt->id}}" value="{{$bt->name}}" onchange="return nwconterupd{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return condensateTerminationDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>

<script type="text/javascript">
  function nwconterupd{{$bt->id}}(){
    // alert($('#nwflutyp{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/nwconterupd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#nwconter{{$bt->id}}').val(),
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

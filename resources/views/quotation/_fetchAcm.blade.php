<div class="row">
  <div class="col-md-11">Name</div>
  <div class="col-md-1">Action</div>
</div>

@foreach(App\ACM::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-11">
     <input type="text" class="form-control" id="acmins{{$bt->id}}" value="{{$bt->name}}" onchange="return acmupd{{$bt->id}}();" required>

   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return acmDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function acmupd{{$bt->id}}(){
    // alert($('#nwflutyp{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/acmupd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#acmins{{$bt->id}}').val(),

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

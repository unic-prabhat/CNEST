@foreach(App\Height::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-11">
     <input type="text" class="form-control" id="heightu{{$bt->id}}" value="{{$bt->name}}" onchange="return heightupdate{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return heightDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function heightupdate{{$bt->id}}(){
    //alert($('#heightu{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/heightupdater")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#heightu{{$bt->id}}').val()
      },
      success:function(data){
        //console.log(data);
      },
      error:function(data){
        //alert('Enter Some Value');
      }
    })

    return false;
  }
</script>
@endforeach

@foreach(App\Width::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-11">
     <input type="text" class="form-control" id="withcol{{$bt->id}}" value="{{$bt->name}}" onchange="return withcolupdate{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return widthDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
@endforeach
<script type="text/javascript">
  function withcolupdate{{$bt->id}}(){
    //alert($('#withcol{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/widthsetupdate")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#withcol{{$bt->id}}').val()
      },
      success:function(data){
         //alert(data);
      },
      error:function(data){
        //alert('Enter Some Value');
      }
    })

    return false;
  }
</script>

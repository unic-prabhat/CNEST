@foreach(App\CurrentBoilerType::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-11">
     <input type="text" class="form-control" id="curbt{{$bt->id}}" value="{{$bt->name}}" onchange="return currentBT{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return currentBoilerTypeDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function currentBT{{$bt->id}}(){

    $.ajax({
      type:'POST',
      url:'{{URL::to("/currboilerupd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#curbt{{$bt->id}}').val(),
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

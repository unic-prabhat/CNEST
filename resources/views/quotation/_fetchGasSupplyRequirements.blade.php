@foreach(App\GasSupplyRequirements::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-11">
     <input type="text" class="form-control" id="gassupreqs{{$bt->id}}" value="{{$bt->name}}" onchange="return gassupreqsupd{{$bt->id}}();" required>

   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return gasSupplyRequirementsDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function gassupreqsupd{{$bt->id}}(){
    // alert($('#nwflutyp{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/gassupreqsupd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#gassupreqs{{$bt->id}}').val(),
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

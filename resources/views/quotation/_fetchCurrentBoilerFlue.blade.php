<div class="row">
  <div class="col-md-11"><label><strong>Name</strong></label></div>
  <div class="col-md-1"><label><strong>Action</strong></label></div>
</div>
@foreach(App\CurrentFlue::all() as $bt)
<form class="mt-2">
 <div class="row">
   <div class="col-md-11">
     <input type="text" class="form-control" id="boilerlocation{{$bt->id}}" value="{{$bt->name}}" onchange="return boilerlocationupd{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return currentBoilerFlueDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function boilerlocationupd{{$bt->id}}(){
    // alert($('#nwflutyp{{$bt->id}}').val());
    $.ajax({
      type:'POST',
      url:'{{URL::to("/boilerlocationupd")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        name:$('#boilerlocation{{$bt->id}}').val()

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

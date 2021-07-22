 <div class="row">
  <div class="col-md-8"><label><strong>Boiler Pack</strong></label><label><strong></strong></label><label><strong></strong></label></div>
  <div class="col-md-3"><label><strong>Boiler Price</strong></label><label><strong></strong></label></div>
  <div class="col-md-1"><label><strong>Action</strong></label></div>
</div>
@foreach(App\BoilerControls::all() as $bt)
<form class="mt-2">
 <div class="row">
   <input type="hidden" name="boilerchoise_id" value="1">
   <div class="col-md-8">
     <input type="text" class="form-control" id="boilercontrolsw{{$bt->id}}" value="{{$bt->pack}}" onchange="return boilerControls{{$bt->id}}();" required>
   </div>
   <div class="col-md-3">
     <input type="text" class="form-control" id="boilercontrolspricew{{$bt->id}}" value="{{$bt->price}}" onchange="return boilerControls{{$bt->id}}();" required>
   </div>
   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return boilerControlsDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function boilerControls{{$bt->id}}(){
    // alert($('#boilercontrolsw{{$bt->id}}').val())
    // alert($('#boilercontrolspricew{{$bt->id}}').val())

    //alert('Boiler Pack => '+ $('#boilercontrolsw{{$bt->id}}').val() + ' Boiler Price => ' + $('#boilercontrolspricew{{$bt->id}}').val())

    $.ajax({
      type:'POST',
      url:'{{URL::to("/boilercontrolsupdate")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        pack:$('#boilercontrolsw{{$bt->id}}').val(),
        price:$('#boilercontrolspricew{{$bt->id}}').val(),

      },
      success:function(data){
      },
      error:function(data){
        //alert('Enter Some Value');
      }
    })

    return false;
  }
</script>
@endforeach

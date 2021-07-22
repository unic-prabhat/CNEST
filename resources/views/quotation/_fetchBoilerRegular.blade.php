
<div class="row">
  <div class="col-md-1">
     <label style="margin-left: 10px;"><strong>Image</strong></label>
  </div>

    <div class="col-md-3"><label><strong>Boiler Company</strong></label></div>
    <div class="col-md-3"><label><strong>Boiler Pack</strong></label></div>
    <div class="col-md-2"><label><strong>Boiler Price</strong></label></div>
    <div class="col-md-2"><label><strong>Boiler Warranty</strong></label></div>
    <div class="col-md-1"><label><strong>Action</strong></label></div>

</div>
@foreach(App\Boilertype::where('boilerchoise_id',1)->get() as $bt)
<form class="mt-2" method="post" id="boilerchoise">
 <div class="row">
   <div class="col-md-1">


<img src="{{URL::to($bt->image)}}" id="showimageid{{$bt->id}}" width="100%" alt="" class="browse-image-modification">
        <label><span class="browse-option-modification">Browse</span> <input type="file" id="boilerimg{{$bt->id}}" onchange="return boilerImageChange{{$bt->id}}();" style="display: none;"><label>


     <!-- <input type="file" id="boilerimg{{$bt->id}}" onchange="return boilerImageChange{{$bt->id}}();" class="custom-input-dis"> -->

   </div>
   <div class="col-md-3">

     <input type="text" class="form-control" id="boilercompany{{$bt->id}}" value="{{$bt->company}}" onchange="return boilerchoise{{$bt->id}}();" required>
   </div>
   <div class="col-md-3">
     <input type="text" class="form-control" id="boilertype{{$bt->id}}" value="{{$bt->boilertype}}" onchange="return boilerchoise{{$bt->id}}();" required>
   </div>

   <div class="col-md-2">
     <input type="text" class="form-control" id="boilertypeprice{{$bt->id}}" value="{{$bt->price}}" onchange="return boilerchoise{{$bt->id}}();" required>
   </div>

   <div class="col-md-2">
     <input type="text" class="form-control" id="boilertypew{{$bt->id}}" value="{{$bt->warranty}}"  onchange="return boilerchoise{{$bt->id}}();" required>
   </div>

   <div class="col-md-1">
     <button type="button" name="button" class="btn btn-danger" onclick="return boilerRegularDelete({{$bt->id}});"><i class="fa fa-trash" aria-hidden="true"></i></button>
   </div>
 </div>
</form>
<script type="text/javascript">
  function boilerchoise{{$bt->id}}(){
    $.ajax({
      type:'POST',
      url:'{{URL::to("/boilertypeupdate")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        id:{{$bt->id}},
        company:$('#boilercompany{{$bt->id}}').val(),
        boilertype:$('#boilertype{{$bt->id}}').val(),
        price:$('#boilertypeprice{{$bt->id}}').val(),
        boilerchoise_id:1,
        warranty:$('#boilertypew{{$bt->id}}').val(),
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
<script type="text/javascript">
  function boilerImageChange{{$bt->id}}(){


    var formdata = new FormData();
    formdata.append('_token', "{{ csrf_token() }}");
    formdata.append('file', document.getElementById('boilerimg{{$bt->id}}').files[0]);
    formdata.append('id', {{$bt->id}});


    // console.log(formData);

    $.ajax({
        url: "{{url('boilerchoiceregular/imageupdate')}}",
        data: formdata,
        type: 'post',
        contentType: false,
        processData: false,
        success: function(data)
        {
          fetchBoilerElectric();
          console.log(data);
          if(data=='Success'){
            var showimg = window.URL.createObjectURL(document.getElementById('boilerimg{{$bt->id}}').files[0]);

            $('#showimageid{{$bt->id}}').attr('src', showimg);
          }else{
            //alert('Enter Some Value')
          }
        }
    });

    // alert(123);

    return false;
  }
</script>
@endforeach

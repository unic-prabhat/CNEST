<div class="col-lg-12 bolts">
   <label>
      Bolt Ons @if($boltsonoption!=NULL)
      @foreach($boltsonoption as $datas)
      <p>{{$datas->boltsid}}-
         {{$datas->value}}-
         {{$datas->qty}}
      </p>
      @endforeach
      @else @endif

      <br><br>


        @foreach(App\BoltOns::all() as $bto)

        <h2>{{$bto->id}}</h2>
        <li>
           <input type="checkbox" class="form-control check" name="boltson" id="boltsonall{{$bto->id}}" >
           <label>{{$bto->id}} {{$bto->name}}</label>
           <input type="number" class="mynumshow input-decorate" name="boltsonnum" id="boltsonnum{{$bto->id}}" >
        </li>

          @foreach($boltsonoption as $datas)
            <h6>{{$datas->boltsid}}</h6>
          @endforeach

      @endforeach


   </label>
   <ul>
      @foreach(App\BoltOns::all() as $bto)
      <li>
         <input type="checkbox" class="form-control check" name="boltson" id="boltsonall{{$bto->id}}" @if(!empty($boltsonoption->boltsid) && $boltsonoption->boltsid == $bto->id) value="{{$bto->value}}" checked @else value="{{$bto->value}}" unchecked @endif  onclick="onbold{{$bto->id}}()">
         <label>{{$bto->id}} {{$bto->name}}</label>
         <input type="number" class="mynumshow input-decorate" name="boltsonnum" id="boltsonnum{{$bto->id}}" @if(!empty($boltsonoption->value)) value="{{$bto->value}}"  @else @endif>
      </li>
      <script type="text/javascript">
         function onbold{{$bto->id}}(){

             var boltson = $('#boltsonall{{$bto->id}}').val();
             var boltsonnum = $('#boltsonnum{{$bto->id}}').val();
             var globalid = '{{$bto->id}}';
             var unique_id = '{{$lead_quotation->main_uniqid}}';
             var checkBox = document.getElementById("boltsonall{{$bto->id}}");
             if (checkBox.checked == true){

                if(boltsonnum !=''){

                   $.ajax({

                     type:'POST',
                     url:'{{URL::to("/choosenboltsstore")}}',
                     data:{

                       "_token": "{{ csrf_token() }}",

                       unique_id:unique_id,
                       boltsid:globalid,
                       value:boltson,
                       qty:boltsonnum,
                       action:'Addition'

                     },

                     success:function(data){

                       alert(data);

                     },
                     error:function(data){

                       alert('error');

                     }

                   });

                }else{
                 alert('Set With Qty');
                }

             } else {

                  $.ajax({

                     type:'POST',
                     url:'{{URL::to("/choosenboltsstore")}}',
                     data:{

                       "_token": "{{ csrf_token() }}",

                       unique_id:unique_id,
                       boltsid:globalid,
                       value:boltson,
                       qty:boltsonnum,
                       action:'Removeval'

                     },

                     success:function(data){

                       alert(data);

                     },
                     error:function(data){

                       alert('error');

                     }

                 });


             }


           return false;

         }

      </script>
      @endforeach
   </ul>
</div>

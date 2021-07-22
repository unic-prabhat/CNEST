<div class="col-lg-12 bolts">
 <label for="example-password-input" class="col-form-label text-left">Bolts On</label>
   <ul>

      @foreach(App\BoltOns::all() as $bto)

      <li>

         <input type="checkbox" class="form-control check" name="boltson" id="boltsonall{{$bto->id}}" value="{{$bto->value}}"  onclick="onbold{{$bto->id}}()">

         <label>{{$bto->name}}</label>

         <input type="number" class="mynumshow input-decorate" name="boltsonnum" id="boltsonnum{{$bto->id}}">

      </li>

      @foreach($boltsonoption as $datas)

         @if($datas->boltsid == $bto->id)

         <script type="text/javascript">
             $( "#boltsonall{{$bto->id}}").prop('checked', true);

             $('#boltsonnum{{$bto->id}}').val("{{$datas->qty}}");
         </script>

         @endif

      @endforeach

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

                      if(data == 'success'){
                        swal("Added!", "Successfully Addeded!", "success")
                      } 



                     },

                     error:function(data){



                       alert('error');



                     }



                   });



                }else{

                 swal("Quentity!", "Set the Quentity & Check the box!", "error")
                 $("#boltsonall{{$bto->id}}").prop('checked', false);

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
                      
                      if(data == 'unchecked'){
                        swal("Removed!", "Successfully Removed!", "error")
                        $('#boltsonnum{{$bto->id}}').val("");
                      } 



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


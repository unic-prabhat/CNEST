<div class="ginput_container ginput_container_checkbox">
      <label for="example-password-input" class="col-form-label text-left">60/100mm Flue Components*</label>
                     <ul class="gfield_checkbox" id="input_230_414">

                       @if($lead_quotation->materials_check_options!=NULL)
                        @php($yourJson = trim($lead_quotation->materials_check_options, '[]'))
                        @php($originalstr = str_replace('"', '', $yourJson))
                        @php($myArray = explode(',', $originalstr))
                       @endif

                        @foreach(App\FlueKitDetails::all() as $bt)

                        <li class="gchoice">

                           <input name="materials_check_options[]" type="checkbox" value="{{$bt->id}}" id="{{$bt->id}}" @if(@in_array($bt->id, @$myArray)) checked @endif>

                           <label for="{{$bt->id}}" id="{{$bt->id}}" price=" +£ 20.79">{{$bt->name}}</label>

                        </li>



                        @endforeach



                     </ul>

                  </div>
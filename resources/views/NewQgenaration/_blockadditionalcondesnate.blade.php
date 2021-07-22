<div class="form-group">

                     <label> Additional Condensate Components*</label>

                     <ul class="gfield_checkbox" id="input_230_309">

                      @if($lead_quotation->condesnate_input!=NULL)
                        @php($yourJson = trim($lead_quotation->condesnate_input, '[]'))
                        @php($originalstr = str_replace('"', '', $yourJson))
                        @php($myArray = explode(',', $originalstr))
                       @endif

                        <li class="gchoice_230_309_1">

                           <input name="condesnate_input[]" type="checkbox" value="(1x) Condense Pump|0" id="choice_230_309_1" @if(@in_array('(1x) Condense Pump|0', @$myArray)) checked @endif>

                           <label for="choice_230_309_1" id="label_230_309_1" price="">(1x) Condense Pump</label>

                        </li>

                        <li class="gchoice_230_309_2">

                           <input name="condesnate_input[]" type="checkbox" value="(1x) Soakaway|0" id="choice_230_309_2" @if(@in_array('(1x) Soakaway|0', @$myArray)) checked @endif>

                           <label for="choice_230_309_2" id="label_230_309_2" price="">(1x) Soakaway</label>

                        </li>

                     </ul>

                  </div>
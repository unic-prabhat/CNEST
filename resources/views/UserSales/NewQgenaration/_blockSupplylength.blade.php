       <label>Gas Supply Length*</label>

               <select class="form-control input-decorate" name="gas_supply_length">

                  <option value=""  class="gf_placeholder">Please select</option>

                  @foreach(App\GasSupplyLength::all() as $bt)

                  <option value="{{$bt->id}}" @if($lead_quotation->gas_supply_length == $bt->id) selected @else @endif>{{$bt->name}}</option>

                  @endforeach

               </select>
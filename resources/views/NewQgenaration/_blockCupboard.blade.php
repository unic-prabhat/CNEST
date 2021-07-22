  <div class="col-lg-12">
            <div class="form-group">
               <label>Will the Cupboard Need Altering*</label>
               <select class="form-control input-decorate" name="will_the_cupboard_need_altering">
                  <option class="gf_placeholder" value="">Please select</option>
                  @foreach(App\CupboardNeedAlt::all() as $bt)
                  <option value="{{$bt->id}}" @if($lead_quotation->will_the_cupboard_need_altering == $bt->id) selected @endif>{{$bt->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
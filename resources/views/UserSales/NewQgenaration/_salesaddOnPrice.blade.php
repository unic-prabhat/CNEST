       @php($lead = App\LeadQuotation::where('main_uniqid',$uniqid)->first())

       <!--- ADDON PRICE START--->
              @php($boltsonprice = App\Boltschoosen::where('unique_id',$uniqid)->sum('total_price'))

              @if($lead->new_fuel_type!=NULL)
              @php($newfueltypeprice= App\newfuleType::where('id',$lead->new_fuel_type)->first()->price)
              @endif

              @if($lead->new_boiler_yype!=NULL)
              @php($newboilertypeprice=App\NewBoilerType::where('id',$lead->new_boiler_yype)->first()->price)
              @endif

             @if($lead->new_flue!=NULL)
             @php($newfluepeprice=App\NewFlue::where('id',$lead->new_flue)->first()->price)
             @endif

              @if($lead->new_controls!=NULL)
              @php($newcontrolsprice=App\NewControls::where('id',$lead->new_controls)->first()->price)
              @endif

              @if($lead->will_the_cupboard_need_altering!=NULL)
              @php($cupboardaltprice=App\CupboardNeedAlt::where('id',$lead->will_the_cupboard_need_altering)->first()->price)
              @endif

              @if($lead->chemical_system_treatment!=NULL)
              @php($chemicalsystemprice=App\ChemicalSystemTreatment::where('id',$lead->chemical_system_treatment)->first()->price)
              @endif

              @if($lead->gas_supply_length!=NULL)
               @php($gassupplylengthprice=App\GasSupplyLength::where('id',$lead->gas_supply_length)->first()->price)
              @endif


               @if($lead->electrical_work_required!=NULL)
                    @php($yourJson = trim($lead->electrical_work_required, '[]'))
                    @php($originalstr = str_replace('"', '', $yourJson))
                    @php($myArray = explode(',', $originalstr))


               @php($electricalworkprice = App\ElectricalWorkRequired::whereIn('id',$myArray)->sum('price'))
              @endif


              @if($lead->materials_check!=NULL)
              @php($fluekitprice=App\FlueKit::where('id',$lead->materials_check)->first()->price)
              @endif



              @if($lead->materials_check_options!=NULL)
                    @php($yourJsonmatoptions = trim($lead->materials_check_options, '[]'))
                    @php($originalstrmaterial = str_replace('"', '', $yourJsonmatoptions))
                    @php($myArraymaterial = explode(',', $originalstrmaterial))

               @php($materialchekoptionsprice = App\FlueKitDetails::whereIn('id',$myArraymaterial)->sum('price'))
              @endif

              @if($lead->flue_components!=NULL)
              @php($fluecomponentsprice=App\FlueKitDetails::where('id',$lead->flue_components)->first()->price)
              @endif

              @if($lead->vented_cylinder_dimensions!=NULL)
              @php($ventedcylinderprice=App\VentedCylinderDimension::where('id',$lead->vented_cylinder_dimensions)->first()->price)
              @endif

               @if($lead->magnetic_system_filter!=NULL)
               @php($magneticsystemfilterprice=App\MagneticSystemFilter::where('id',$lead->magnetic_system_filter)->first()->price)
               @endif



              @php($optionalprice = App\QtnOptionalDescription::where('uniqid',$uniqid)->sum('total_oe_price'))


              @php($totalAddonprice = @$boltsonprice+@$newfueltypeprice+@$newboilertypeprice+@$newfluepeprice+@$newcontrolsprice+@$cupboardaltprice+@$chemicalsystemprice+@$gassupplylengthprice+@$electricalworkprice+@$fluekitprice+@$materialchekoptionsprice+@$fluecomponentsprice+@$ventedcylinderprice+@$magneticsystemfilterprice+@$optionalprice)

              <p><strong>Addon Price: </strong> {{$totalAddonprice}}</p>

              <!--- ADDON PRICE END--->



                @php($firstregularboilerchoice=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->first_regular_boiler_choice)

                <?php if(!empty($firstregularboilerchoice)){ ?>

                @php($boilerprice=App\Boilertype::where('id',$firstregularboilerchoice)->first()->price)
              <?php }else{

                    $boilerprice=0;

                 }

              ?>

                @php($firstboilercontrol=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->first_boiler_controls)

                @if($firstboilercontrol!=NULL)

                   @php($firstboilercontrolprice = App\BoilerControls::where('id',$firstboilercontrol)->first()->price)
                @endif

                @php($totalbonePrice=$boilerprice+$firstboilercontrolprice+$totalAddonprice)


               @php($secondregularboilerchoice=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->second_regular_boiler_choice)

               @php($secondboilerprice=App\Boilertype::where('id',$secondregularboilerchoice)->first()->price)

               @php($secondboilercontrol=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->second_boiler_controls)


                @if($secondboilercontrol!=NULL)

                   @php($secondboilercontrolprice = App\BoilerControls::where('id',$secondboilercontrol)->first()->price)
                @endif

               @php($totalbtwoPrice=$secondboilerprice+$secondboilercontrolprice+$totalAddonprice)



               @php($thirdregularboilerchoice=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->third_regular_boiler_choice)

               @php($thirdboilerprice=App\Boilertype::where('id',$thirdregularboilerchoice)->first()->price)

               @php($thirdboilercontrol=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->third_boiler_controls)


                @if($thirdboilercontrol!=NULL)

                   @php($thirdboilercontrolprice = App\BoilerControls::where('id',$thirdboilercontrol)->first()->price)
                @endif

               @php($totalbthreePrice=$thirdboilerprice+$thirdboilercontrolprice+$totalAddonprice)


               <input type="number" name="boiler_1_guide_price" value="{{$totalbonePrice}}" readonly>
               <input type="number" name="boiler_2_guide_price" value="{{$totalbtwoPrice}}" readonly>
               <input type="number" name="boiler_3_guide_price" value="{{$totalbthreePrice}}" readonly>

               <input type="number" name="boiler_1_Amend"  @if($lead->boiler_1_Amend!=NULL) value="{{$lead->boiler_1_Amend}}" @endif readonly>

               <input type="number" name="boiler_2_Amend" @if($lead->boiler_2_Amend!=NULL) value="{{$lead->boiler_2_Amend}}" @endif readonly>

               <input type="number" name="boiler_3_Amend" @if($lead->boiler_3_Amend!=NULL) value="{{$lead->boiler_3_Amend}}" @endif readonly>

               <input type="number" name="boiler1_total_price" value="{{$totalbonePrice+$lead->boiler_1_Amend}}" readonly>

               <input type="number" name="boiler2_total_price" value="{{$totalbtwoPrice+$lead->boiler_2_Amend}}" readonly>

              <input type="number" name="boiler3_total_price" value="{{$totalbthreePrice+$lead->boiler_3_Amend}}" readonly>
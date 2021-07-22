 @extends('layouts.master')
@section('content')
<div class="container-fluid">
   <div class="container">
         <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <label><h3>Boilers Choice</h3></label>
                </div>
                <div class="card-body">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="regular-tab" data-toggle="tab" href="#regular" role="tab" aria-controls="home" aria-selected="true">Regular</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="system-tab" data-toggle="tab" href="#system" role="tab" aria-controls="profile" aria-selected="false">System</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="combi-tab" data-toggle="tab" href="#combi" role="tab" aria-controls="contact" aria-selected="false">Combi</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="electric-tab" data-toggle="tab" href="#electric" role="tab" aria-controls="contact" aria-selected="false">Electric</a>
                     </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                     <!--=================REGULAR=================-->
                     <div class="tab-pane fade show active" id="regular" role="tabpanel" aria-labelledby="regular-tab">
                      <br>
                      <!-- SHOW BOILER REGULAR DATA -->
                      <div id="fetchBoilerRegular">
                        <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                      </div>
                      <!-- SHOW BOILER REGULAR DATA -->
                      <br>
                      <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px" id="boilerRegularFormLoader" style="display:none"></center>
                      <form id="boilerRegularForm" method="post" enctype="multipart/form-data">
                        <!-- <form onsubmit="return boilerRegular();" id="boilerRegularForm" enctype="multipart/form-data"> -->

                       <div class="row">
                         <!-- <input type="text" name="" value=""> -->
                         <div class="col-md-3">
                           <input type="text" class="form-control" placeholder="Boiler Pack" id="boiler_regular_pack">
                         </div>
                         <div class="col-md-2">
                           <input type="text" class="form-control" placeholder="Boiler Price" id="boiler_regular_price">
                         </div>
                         <div class="col-md-2">
                           <input type="text" class="form-control" placeholder="Boiler Warranty" id="boiler_regular_warranty">
                         </div>
                         <div class="col-md-4">
                           <input type="file" class="form-control" id="boiler_regular_image" accept="image/jpeg" name="image">
                         </div>
                         <div class="col-md-1">
                           <button type="submit" name="button" class="btn btn-primary" id="imageUpload"><i class="fa fa-plus" aria-hidden="true"></i></button>
                         </div>
                         <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                        </div>
                       </form>
                     </div>
                     <!--=================REGULAR=================-->
                     <!--=================SYSTEM=================-->
                     <div class="tab-pane fade" id="system" role="tabpanel" aria-labelledby="system-tab">
                       <div class="tab-pane fade show active" id="regular" role="tabpanel" aria-labelledby="regular-tab">
                        <br>
                        <!-- SHOW BOILER SYSTEM DATA -->
                        <div id="fetchBoilerSystem">
                          <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                        </div>
                        <!-- SHOW BOILER SYSTEM DATA -->
                        <br>
                        <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px" id="boilerSystemFormLoader" style="display:none"></center>
                        <form onsubmit="return boilerSystem();" id="boilerSystemForm">
                         <div class="row">
                           <!-- <input type="text" name="" value=""> -->
                           <div class="col-md-3">
                             <input type="text" class="form-control" placeholder="Boiler Pack" id="boiler_system_pack">
                           </div>
                           <div class="col-md-2">
                             <input type="text" class="form-control" placeholder="Boiler Price" id="boiler_system_price">
                           </div>
                           <div class="col-md-2">
                             <input type="text" class="form-control" placeholder="Boiler Warranty" id="boiler_system_warranty">
                           </div>
                           <div class="col-md-4">
                             <input type="file" class="form-control" id="boiler_system_image" accept="image/jpeg" name="image">
                           </div>
                           <div class="col-md-1">
                             <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                           </div>
                           <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                          </div>
                         </form>
                       </div>
                     </div>
                     <!--=================SYSTEM=================-->
                     <!--=================COMBI=================-->
                     <div class="tab-pane fade" id="combi" role="tabpanel" aria-labelledby="combi-tab">
                       <br>
                       <!-- SHOW BOILER COMBI DATA -->
                       <div id="fetchBoilerCombi">
                         <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                       </div>
                       <!-- SHOW BOILER COMBI DATA -->
                       <br>
                       <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px" id="boilerCombiFormLoader" style="display:none"></center>
                       <form onsubmit="return boilerCombi();" id="boilerCombiForm">
                        <div class="row">
                          <!-- <input type="text" name="" value=""> -->
                          <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Boiler Pack" id="boiler_combi_pack">
                          </div>
                          <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="Boiler Price" id="boiler_combi_price">
                          </div>
                          <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="Boiler Warranty" id="boiler_combi_warranty">
                          </div>
                          <div class="col-md-4">
                            <input type="file" class="form-control" id="boiler_combi_image" accept="image/jpeg" name="image">
                          </div>
                          <div class="col-md-1">
                            <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                          </div>
                          <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                         </div>
                        </form>
                     </div>
                     <!--=================COMBI=================-->
                     <!--=================EELECTRIC=================-->
                     <div class="tab-pane fade" id="electric" role="tabpanel" aria-labelledby="electric-tab">
                       <br>
                       <!-- SHOW BOILER EELECTRIC DATA -->
                       <div id="fetchBoilerElectric">
                         <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                       </div>
                       <!-- SHOW BOILER EELECTRIC DATA -->
                       <br>
                       <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px" id="boilerElectricFormLoader" style="display:none"></center>
                       <form onsubmit="return boilerElectric();" id="boilerElectricForm">
                        <div class="row">
                          <!-- <input type="text" name="" value=""> -->
                          <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Boiler Pack" id="boiler_electric_pack">
                          </div>
                          <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="Boiler Price" id="boiler_electric_price">
                          </div>
                          <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="Boiler Warranty" id="boiler_electric_warranty">
                          </div>
                          <div class="col-md-4">
                            <input type="file" class="form-control" id="boiler_electric_image" accept="image/jpeg" name="image">
                          </div>
                          <div class="col-md-1">
                            <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                          </div>
                          <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                         </div>
                        </form>
                     </div>
                     <!--=================ELECTRIC=================-->
                  </div>
                </div>
              </div>


               <!-- <div class="card">
                  <div class="card-header">
                     <label>Boiler Choice</label>
                  </div>
                  <div class="card-body">
                     <div class="row boier-tabs">
                        @php
                        $choices = App\Boilerchoise::all();
                        @endphp
                        @if($choices->count() > 0)
                        <ul class="nav nav-tabs" role="tablist">
                           @foreach(App\Boiler::all() as $boiler)
                           <li class="nav-item">
                              <a class="nav-link fetch-boiler" data-toggle="tab" href="#home" role="tab" data-id="{{$boiler->id}}" data-sid="{{$boiler->name}}">{{$boiler->name}}</a>
                           </li>
                           @endforeach
                        </ul>
                        <div class="col-md-12">
                           <div class="row" id="selectParent">
                              <div class="col-md-12">
                                 <div class="row main_row_idd">
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endif
                        </div>
                  </div>
               </div> -->
               <div class="allboicerschoice">
                  <div class="col-md-12" id="byid">
                  </div>
               </div>
            </div>
         </div>


      <!--========================BOILERS CONTROLS========================-->
      <!--========================BOILERS CONTROLS========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
               <label><h3>Boilers Controls</h3></label>

             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchBoilersControls">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return boilersControls();" id="boilersControlsForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-8">
                       <input type="text" class="form-control" placeholder="Boiler Pack" id="boiler_controls">
                     </div>
                     <div class="col-md-3">
                       <input type="text" class="form-control" placeholder="Boiler Price" id="boiler_controls_price">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================BOILERS CONTROLS========================-->
      <!--========================BOILERS CONTROLS========================-->



      <!--========================BOLTS ON========================-->
      <!--========================BOLTS ON========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Bolts On</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchBoltsOn">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return boltsOn();" id="boltsOnForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-6">
                       <input type="text" class="form-control" placeholder="Bolts on name" id="bolts_on_name">
                     </div>
                     <div class="col-md-5">
                       <input type="text" class="form-control" placeholder="Bolts on value" id="bolts_on_value">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================BOLTS ON========================-->
      <!--========================BOLTS ON========================-->



      <!--========================CURRENT BOILER TYPE========================-->
      <!--========================CURRENT BOILER TYPE========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Current Boiler Type</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchCurrentBoilerType">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return currentBoilerType();" id="currentBoilerTypeForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="Current Boiler Type" id="current_boiler_type">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================CURRENT BOILER TYPE========================-->
      <!--========================CURRENT BOILER TYPE========================-->



      <!--========================CURRENT BOILER LOCATION========================-->
      <!--========================CURRENT BOILER LOCATION========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Current Boiler Location</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchCurrentBoilerLocation">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return currentBoilerLocation();" id="currentBoilerLocationForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="Current Boiler Type" id="current_boiler_location">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================CURRENT BOILER LOCATION========================-->
      <!--========================CURRENT BOILER LOCATION========================-->



      <!--========================CURRENT BOILER FLUE========================-->
      <!--========================CURRENT BOILER FLUE========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Current Boiler Flue</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchCurrentBoilerFlue">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return currentBoilerFlue();" id="currentBoilerFlueForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="Current Boiler Flue" id="current_boiler_flue">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================CURRENT BOILER FLUE========================-->
      <!--========================CURRENT BOILER FLUE========================-->



      <!--========================Existing Shower========================-->
      <!--========================Existing Shower========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Existing Shower</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchExistingShower">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return existingShower();" id="existingShowerForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="Current Boiler Flue" id="existing_shower">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Existing Shower========================-->
      <!--========================Existing Shower========================-->

      <!--========================New Fuel Type========================-->
      <!--========================New Fuel Type========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>New Fuel Type</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="newfuelType">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return newFuelType();" id="newfuelTypeForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="New Fuel Type" id="newfuel_type">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================New Fuel Type========================-->
      <!--========================New Fuel Type========================-->


      <!--========================NewBoilerType========================-->
      <!--========================NewBoilerType========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>New Boiler Typer</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchNewBoilerType">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return NewBoilerType();" id="NewBoilerTypeForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="New Boiler Type" id="newboiler_type">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================NewBoilerType========================-->
      <!--========================NewBoilerType========================-->




      <!--========================NEW FLUE TYPE========================-->
      <!--========================NEW FLUE TYPE========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>New Flue Type</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchNewFlueType">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return newFlueType();" id="newFlueTypeForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="New Flue Type" id="new_flue_type">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================NEW FLUE TYPE========================-->
      <!--========================NEW FLUE TYPE========================-->




      <!--========================NEW FLUE LOCATION========================-->
      <!--========================NEW FLUE LOCATION========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>New Flue Location</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchNewFlueLocation">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return newFlueLocation();" id="newFlueLocationForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="New Flue Location" id="new_flue_location">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================NEW FLUE LOCATION========================-->
      <!--========================NEW FLUE LOCATION========================-->





      <!--========================CONDENSATE TERMINATION========================-->
      <!--========================CONDENSATE TERMINATION========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Condensate Termination</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchCondensateTermination">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return condensateTermination();" id="condensateTerminationForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="Condencate Termination" id="condence_termination">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================CONDENSATE TERMINATION========================-->
      <!--========================CONDENSATE TERMINATION========================-->



      <!--========================NEW CONTROLS========================-->
      <!--========================NEW CONTROLS========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>New Controls</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchNewControls">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return newControls();" id="newControlsForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="New Controls" id="newcontrols">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================NEW CONTROLS========================-->
      <!--========================NEW CONTROLS========================-->



      <!--========================REMOVALS========================-->
      <!--========================REMOVALS========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Removals</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchRemovals">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                  <form onsubmit="return removals();" id="removalsForm" method="post">
                   <div class="row">
                     <!-- <input type="text" name="" value=""> -->
                     <div class="col-md-11">
                       <input type="text" class="form-control" placeholder="Removals" id="removal">
                     </div>
                     <div class="col-md-1">
                       <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>
                     <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                    </div>
                   </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================REMOVALS========================-->
      <!--========================REMOVALS========================-->




      <!--========================Cupboard Need Altering========================-->
      <!--========================Cupboard Need Altering========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Cupboard Need Altering</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchCupboardnalt">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>


                   <form onsubmit="return cupboardnalt();" id="cupboardnaltForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Removals" id="cupboardnalt_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Cupboard Need Altering========================-->
      <!--========================Cupboard Need Altering========================-->




      <!--========================Chemical System Treatment========================-->
      <!--========================Chemical System Treatment========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Chemical System Treatment</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchChemicalSystemTreatment">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>


                   <form onsubmit="return chemicalSystemTreatment();" id="chemicalSystemTreatmentForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Chemical System Treatment" id="chemicalsystemtreatment_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Chemical System Treatment========================-->
      <!--========================Chemical System Treatment========================-->






      <!--========================Gas Supply Requirements========================-->
      <!--========================Gas Supply Requirements========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Gas Supply Requirements</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchGasSupplyRequirements">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>


                   <form onsubmit="return gasSupplyRequirements();" id="gasSupplyRequirementsForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Gas Supply Requirements" id="gassupplyrequirements_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Gas Supply Requirements========================-->
      <!--========================Gas Supply Requirements========================-->





      <!--========================Electrical Work Required========================-->
      <!--========================Electrical Work Required========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Electrical Work Required</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchElectricalWorkRequired">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>


                   <form onsubmit="return electricalWorkRequired();" id="electricalWorkRequiredForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Electrical Work Required" id="electricalworkrequired_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Electrical Work Required========================-->
      <!--========================Electrical Work Required========================-->







      <!--========================Gas Supply Length========================-->
      <!--========================Gas Supply Length========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Gas Supply Length</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchGasSupplyLength">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>


                   <form onsubmit="return gasSupplyLength();" id="gasSupplyLengthForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Gas Supply Length" id="gassupplylength_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Gas Supply Length========================-->
      <!--========================Gas Supply Length========================-->








      <!--========================ACM========================-->
      <!--========================ACM========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Asbestos Containing Materials (ACM) Identified</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchAcm">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>


                   <form onsubmit="return acm();" id="acmForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Asbestos Containing Materials (ACM) Identified" id="acm_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================ACM========================-->
      <!--========================ACM========================-->




      <!--========================Parking Requirements========================-->
      <!--========================Parking Requirements========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Parking Requirements</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchParReq">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>


                   <form onsubmit="return parReq();" id="parReqForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Parking Requirements" id="parreq_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Parking Requirements========================-->
      <!--========================Parking Requirements========================-->






      <!--========================Flue Kit========================-->
      <!--========================Flue Kit========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Flue Kit</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchFlueKit">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>


                   <form onsubmit="return flueKit();" id="flueKitForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Flue Kit" id="fluekit_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Flue Kit========================-->
      <!--========================Flue Kit========================-->








      <!--========================Flue Kit Details========================-->
      <!--========================Flue Kit Details========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Flue Kit Details</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchFlueKitDetails">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>


                   <form onsubmit="return flueKitDetails();" id="flueKitDetailsForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Flue Kit Details" id="fluekitdetails_value">
                      </div>
                      <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Price" id="fluekitdetails_price">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Flue Kit Details========================-->
      <!--========================Flue Kit Details========================-->










      <!--========================Magnetic System Filter========================-->
      <!--========================Magnetic System Filter========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Magnetic System Filter</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchMagneticSystemFilter">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>


                   <form onsubmit="return magneticSystemFilter();" id="magneticSystemFilterForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Magnetic System Filter" id="magneticsystemfilter_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Magnetic System Filter========================-->
      <!--========================Magnetic System Filter========================-->








      <!--========================Vented Cylinder Dimensions========================-->
      <!--========================Vented Cylinder Dimensions========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Vented Cylinder Dimensions</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchVentedCylinderDimensions">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                   <form onsubmit="return ventedCylinderDimensions();" id="ventedCylinderDimensionsForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Vented Cylinder Dimensions" id="ventedcylinderdimensions_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Vented Cylinder Dimensions========================-->
      <!--========================Vented Cylinder Dimensions========================-->







      <!--========================Radiator Requirements========================-->
      <!--========================Radiator Requirements========================-->
      <div class="row">
        <!-- <div class="row"> -->
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <label><h3>Radiator Requirements</h3></label>
             </div>
             <div class="card-body">
                <div class="col-md-12">
                  <br>
                  <!-- Boilers Controls -->
                  <div id="fetchRadiatorRequirements">
                    <center><img src="{{URL::to('public/myloader.gif')}}" alt="loader" height="50px"></center>
                  </div>
                  <!-- Boilers Controls -->
                  <br>
                   <form onsubmit="return radiatorRequirement();" id="radiatorRequirementsForm" method="post">
                    <div class="row">
                      <!-- <input type="text" name="" value=""> -->
                      <div class="col-md-11">
                        <input type="text" class="form-control" placeholder="Radiator Requirements" id="radiatorrequirements_value">
                      </div>
                      <div class="col-md-1">
                        <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <!-- <button type="button" name="button" class="btn btn-primary">AddMore</button> -->
                     </div>
                    </form>
                </div>
             </div>
           </div>
         </div>
      </div>
      <!--========================Radiator Requirements========================-->
      <!--========================Radiator Requirements========================-->









      <!-- <div class="row">
         <div class="col-md-12">
            <div class="card-header">
               <label>Bolts On</label>
            </div>
            <div class="card-body">
               <div class="col-md-12">
                  <div class="form-group mt-3 select-bolts">
                     <div class="main_class_bolt">
                        <div class="custom-control custom-radio">
                           <div class="my-2 selectwhich">
                              <div class="custom-control custom-radio"><input type="radio" id="customRadio4" checked="" name="customRadio" class="custom-control-input" data-ra = '0'> <label class="custom-control-label" for="customRadio4">Radio Button</label></div>
                              <div class="custom-control custom-radio"><input type="radio" id="customRadio5" checked="" name="customRadio" class="custom-control-input" data-ra = '1'> <label class="custom-control-label" for="customRadio5">Checkbox</label></div>
                           </div>
                        </div>
                     </div>
                     <div id="choice-input">
                        <div class="col-md-12 twothree" sid="1">
                           <input type="text" name="bo[]" class="form-control boilerpart" width="85%" placeholder="Boiler pack" ><input class="df form-control" name="price[]" placeholder="price">
                           <div class="mnp"><span class="add-more-check-radio" data-val="1">+</span><span class="remove-more">-</span></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
   </div>
</div>
</div>
@endsection
@section('js')
<script type="text/javascript">
  fetchBoilerRegular();
  function fetchBoilerRegular(){
    $('#fetchBoilerRegular').load('{{URL::to("_fetchBoilerRegular")}}');
  }
  fetchBoilerSystem();
  function fetchBoilerSystem(){
    $('#fetchBoilerSystem').load('{{URL::to("_fetchBoilerSystem")}}');
  }
  fetchBoilerCombi();
  function fetchBoilerCombi(){
    $('#fetchBoilerCombi').load('{{URL::to("_fetchBoilerCombi")}}');
  }
  fetchBoilerElectric();
  function fetchBoilerElectric(){
    $('#fetchBoilerElectric').load('{{URL::to("_fetchBoilerElectric")}}');
  }
</script>


<script type="text/javascript">
$('#boilerRegularForm').submit(function(e){
      e.preventDefault();
      $('#boilerRegularFormLoader').show();
      $('#boilerRegularForm').hide();


      var formdata = new FormData();
      formdata.append('_token', "{{ csrf_token() }}");
      formdata.append('file', document.getElementById('boiler_regular_image').files[0]);
      formdata.append('boilertype', $('#boiler_regular_pack').val());
      formdata.append('price', $('#boiler_regular_price').val());
      formdata.append('boilerchoise_id', 1);
      formdata.append('warranty', $('#boiler_regular_warranty').val());


      $.ajax({
          url: "{{url('boilerchoiceregular')}}",
          data: formdata,
          type: 'post',
          contentType: false,
          processData: false,
          success: function(data)
          {
            if(data=='Success'){
              $('#boilerRegularForm').trigger("reset");
              $('#boilerRegularFormLoader').hide();
              $('#boilerRegularForm').show();
              fetchBoilerRegular();
            }else{
              alert('Failed')
            }
          }
      });
    });
</script>
<script type="text/javascript">
function boilerRegularDelete(data){
  $.ajax({
    type:'get',
    url:'{{URL::to("/boilerchoiceregular/delete/")}}'+'/'+data,
    success:function(data){
      // alert(data);
      console.log(data);
      if(data=='Success'){
        $('#boilerRegularForm').trigger("reset");
        fetchBoilerRegular();
      }else{
        alert('Failed')
      }
    },
    error:function(data){
      alert(data)
    }

  })
  return false;
}
</script>




<script type="text/javascript">
  function boilerSystem(){
    $('#boilerSystemFormLoader').show();
    $('#boilerSystemForm').hide();


    var formdata = new FormData();
    formdata.append('_token', "{{ csrf_token() }}");
    formdata.append('file', document.getElementById('boiler_system_image').files[0]);
    formdata.append('boilertype', $('#boiler_system_pack').val());
    formdata.append('price', $('#boiler_system_price').val());
    formdata.append('boilerchoise_id', 2);
    formdata.append('warranty', $('#boiler_system_warranty').val());

    $.ajax({
        url: "{{url('boilerchoicesystem')}}",
        data: formdata,
        type: 'post',
        contentType: false,
        processData: false,
        success: function(data)
        {
          if(data=='Success'){
            $('#boilerSystemForm').trigger("reset");
            $('#boilerSystemFormLoader').hide();
            $('#boilerSystemForm').show();
            fetchBoilerSystem();
          }else{
            alert('Failed')
          }
        }
    });
    return false;
  }
</script>
<script type="text/javascript">
function boilerSystemDelete(data){
  alert(data);
  $.ajax({
    type:'get',
    url:'{{URL::to("/boilerchoicesystem/delete/")}}'+'/'+data,
    success:function(data){
      // alert(data);
      console.log(data);
      if(data=='Success'){
        alert(data);
        $('#boilerSystemForm').trigger("reset");
        fetchBoilerSystem();

      }else{
        alert('Failed')
      }
    },
    error:function(data){
      alert(data)
    }

  })
  return false;
}
</script>
<script type="text/javascript">
  function boilerCombi(){
    $('#boilerCombiFormLoader').show();
    $('#boilerCombiForm').hide();


    var formdata = new FormData();
    formdata.append('_token', "{{ csrf_token() }}");
    formdata.append('file', document.getElementById('boiler_combi_image').files[0]);
    formdata.append('boilertype', $('#boiler_combi_pack').val());
    formdata.append('price', $('#boiler_combi_price').val());
    formdata.append('boilerchoise_id', 3);
    formdata.append('warranty', $('#boiler_combi_warranty').val());

    $.ajax({
        url: "{{url('boilerchoicecombi')}}",
        data: formdata,
        type: 'post',
        contentType: false,
        processData: false,
        success: function(data)
        {
          if(data=='Success'){
            $('#boilerCombiForm').trigger("reset");
            $('#boilerCombiFormLoader').hide();
            $('#boilerCombiForm').show();
            fetchBoilerCombi();
          }else{
            alert('Failed')
          }
        }
    });
    return false;
  }
</script>
<script type="text/javascript">
function boilerCombiDelete(data){
  $.ajax({
    type:'get',
    url:'{{URL::to("/boilerchoicecombi/delete/")}}'+'/'+data,
    success:function(data){
      // alert(data);
      console.log(data);
      if(data=='Success'){
        $('#boilerCombiForm').trigger("reset");
        fetchBoilerCombi();
      }else{
        alert('Failed')
      }
    },
    error:function(data){
      alert(data)
    }

  })
  return false;
}
</script>
<script type="text/javascript">
  function boilerElectric(){
    $('#boilerElectricFormLoader').show();
    $('#boilerElectricForm').hide();

    var formdata = new FormData();
    formdata.append('_token', "{{ csrf_token() }}");
    formdata.append('file', document.getElementById('boiler_electric_image').files[0]);
    formdata.append('boilertype', $('#boiler_electric_pack').val());
    formdata.append('price', $('#boiler_electric_price').val());
    formdata.append('boilerchoise_id', 4);
    formdata.append('warranty', $('#boiler_electric_warranty').val());

    $.ajax({
        url: "{{url('boilerchoiceelectric')}}",
        data: formdata,
        type: 'post',
        contentType: false,
        processData: false,
        success: function(data)
        {
          if(data=='Success'){
            $('#boilerElectricForm').trigger("reset");
            $('#boilerElectricFormLoader').hide();
            $('#boilerElectricForm').show();
            fetchBoilerElectric();
          }else{
            alert('Failed')
          }
        }
    });



    // $.ajax({
    //   type:'post',
    //   url:'{{URL::to("/boilerchoiceelectric")}}',
    //   data:{
    //     "_token": "{{ csrf_token() }}",
    //     boilertype:pack,
    //     price:price,
    //     boilerchoise_id:4
    //   },
    //   success:function(data){
    //     console.log(data);
    //     if(data=='Success'){
    //       $('#boilerElectricForm').trigger("reset");
    //       $('#boilerElectricFormLoader').hide();
    //       $('#boilerElectricForm').show();
    //       fetchBoilerElectric();
    //     }else{
    //       alert('Failed')
    //     }
    //   },
    //   error:function(data){
    //     alert(data)
    //   }
    // })
    return false;
  }
</script>
<script type="text/javascript">
function boilerSystemDelete(data){
  $.ajax({
    type:'get',
    url:'{{URL::to("/boilerchoiceelectric/delete/")}}'+'/'+data,
    success:function(data){
      // alert(data);
      console.log(data);
      if(data=='Success'){
        $('#boilerElectricForm').trigger("reset");
        fetchBoilerElectric();
      }else{
        alert('Failed')
      }
    },
    error:function(data){
      alert(data)
    }

  })
  return false;
}
</script>


<!--=============BoilersControls=============-->
<script type="text/javascript">
fetchBoilersControls();
function fetchBoilersControls(){
  $('#fetchBoilersControls').load('{{URL::to("_fetchBoilersControls")}}');
}
</script>
<script type="text/javascript">
  function boilersControls(){

    var pack= $('#boiler_controls').val();
    var price= $('#boiler_controls_price').val();

    // alert(pack)

    $.ajax({
      type:'post',
      url:'{{URL::to("/boilercontrols")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        pack:pack,
        price:price,
      },
      success:function(data){
        // console.log(data);
        if(data=='Success'){
          // alert('Success');
          $('#boilersControlsForm').trigger("reset");
          fetchBoilersControls();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })

    return false;
  }
</script>
<script type="text/javascript">
  function boilerControlsDelete(id){

    $.ajax({
      type:'get',
      url:'{{URL::to("/boilercontrols/")}}'+'/'+id,
      success:function(data){
        if(data=='Success'){
          fetchBoilersControls();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }

    })

    return false;
  }
</script>
<!--=============BoilersControls=============-->




<!--=============BOLTS ON=============-->
<script type="text/javascript">
fetchBoltsOn();
function fetchBoltsOn(){
  $('#fetchBoltsOn').load('{{URL::to("_fetchBoltsOn")}}');
}
</script>
<script type="text/javascript">
  function boltsOn(){
    var name= $('#bolts_on_name').val();
    var value= $('#bolts_on_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/boltson")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:name,
        value:value,
      },
      success:function(data){
        // console.log(data);
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#boltsOnForm').trigger("reset");
          fetchBoltsOn();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<script type="text/javascript">
  function boltsOnDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/boltson/")}}'+'/'+id,
      success:function(data){
        if(data=='Success'){
          fetchBoltsOn();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============BOLTS ON=============-->




<!--=============CURRENT BOILER TYPE=============-->
<script type="text/javascript">
fetchCurrentBoilerType();
function fetchCurrentBoilerType(){
  $('#fetchCurrentBoilerType').load('{{URL::to("_fetchCurrentBoilerType")}}');
}
</script>
<script type="text/javascript">
  function currentBoilerType(){
    var current_boiler_type= $('#current_boiler_type').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/current-boiler-type")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:current_boiler_type,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#currentBoilerTypeForm').trigger("reset");
          fetchCurrentBoilerType();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function currentBoilerTypeDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/current-boiler-type/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchCurrentBoilerType();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============CURRENT BOILER TYPE=============-->





<!--=============CURRENT BOILER LOCATION=============-->
<script type="text/javascript">
fetchCurrentBoilerLocation();
function fetchCurrentBoilerLocation(){
  $('#fetchCurrentBoilerLocation').load('{{URL::to("_fetchCurrentBoilerLocation")}}');
}
</script>
<script type="text/javascript">
  function currentBoilerLocation(){
    var current_boiler_location= $('#current_boiler_location').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/current-boiler-location")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:current_boiler_location,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#currentBoilerLocationForm').trigger("reset");
          fetchCurrentBoilerLocation();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function currentBoilerLocationDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/current-boiler-location/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchCurrentBoilerLocation();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============CURRENT BOILER LOCATION=============-->




<!--=============CURRENT BOILER FLUE=============-->
<script type="text/javascript">
fetchCurrentBoilerFlue();
function fetchCurrentBoilerFlue(){
  $('#fetchCurrentBoilerFlue').load('{{URL::to("_fetchCurrentBoilerFlue")}}');
}
</script>
<script type="text/javascript">
  function currentBoilerFlue(){
    var current_boiler_flue= $('#current_boiler_flue').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/current-boiler-flue")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:current_boiler_flue,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#currentBoilerFlueForm').trigger("reset");
          fetchCurrentBoilerFlue();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function currentBoilerFlueDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/current-boiler-flue/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchCurrentBoilerFlue();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============CURRENT BOILER FLUE=============-->



<!--=============Existing Shower=============-->
<script type="text/javascript">
fetchExistingShower();
function fetchExistingShower(){
  $('#fetchExistingShower').load('{{URL::to("_fetchExistingShower")}}');
}
</script>
<script type="text/javascript">
  function existingShower(){
    var existing_shower= $('#existing_shower').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/existing-shower")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:existing_shower,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#existingShowerForm').trigger("reset");
          fetchExistingShower();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function existingShowerDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/existing-shower/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchExistingShower();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============Existing Shower=============-->

<!--=============New Fuel Type=============-->
<script type="text/javascript">
fetchNewFuelType();
function fetchNewFuelType(){
  $('#newfuelType').load('{{URL::to("_fetchNewFuelType")}}');
}
</script>

<script type="text/javascript">
  function newFuelType(){
    var newfuel_type= $('#newfuel_type').val();
    //alert(newfuel_type);
    $.ajax({
      type:'post',
      url:'{{URL::to("/newfueltype")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:newfuel_type,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#newfuelTypeForm').trigger("reset");
          fetchNewFuelType();
        }else{
          alert('Failed');
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>

<script type="text/javascript">
  function newFuelTypeDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/newfueltype/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchNewFuelType();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============New Fuel Type=============-->


<!--=============New Boiler Type=============-->
<script type="text/javascript">
fetchNewBoilerType();
function fetchNewBoilerType(){
  $('#fetchNewBoilerType').load('{{URL::to("_fetchNewBoilerType")}}');
}
</script>
<script type="text/javascript">
  function NewBoilerType(){
    var newboiler_type= $('#newboiler_type').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/newboilertype")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:newboiler_type,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#NewBoilerTypeForm').trigger("reset");
          fetchNewBoilerType();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function NewBoilerTypeDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/newboilertype/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchNewBoilerType();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============New Boiler Type=============-->





<!--=============NEW FLUE TYPE=============-->
<script type="text/javascript">
fetchNewFlueType();
function fetchNewFlueType(){
  $('#fetchNewFlueType').load('{{URL::to("_fetchNewFlueType")}}');
}
</script>
<script type="text/javascript">
  function newFlueType(){
    var new_flue_type= $('#new_flue_type').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/newflue")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:new_flue_type,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#newFlueTypeForm').trigger("reset");
          fetchNewFlueType();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function newFlueDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/newflue/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchNewFlueType();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============NEW FLUE TYPE=============-->




<!--=============NEW FLUE LOCATION=============-->
<script type="text/javascript">
fetchNewFlueLocation();
function fetchNewFlueLocation(){
  $('#fetchNewFlueLocation').load('{{URL::to("_fetchNewFlueLocation")}}');
}
</script>
<script type="text/javascript">
  function newFlueLocation(){
    var new_flue_location= $('#new_flue_location').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/newfluelocation")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:new_flue_location,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#newFlueLocationForm').trigger("reset");
          fetchNewFlueLocation();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function newFlueLocationDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/newfluelocation/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchNewFlueLocation();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============NEW FLUE LOCATION=============-->





<!--=============CONDENSATE TERMINATION=============-->
<script type="text/javascript">
fetchCondensateTermination();
function fetchCondensateTermination(){
  $('#fetchCondensateTermination').load('{{URL::to("_fetchCondensateTermination")}}');
}
</script>
<script type="text/javascript">
  function condensateTermination(){
    var condence_termination= $('#condence_termination').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/condensate-termination")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:condence_termination,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#condensateTerminationForm').trigger("reset");
          fetchCondensateTermination();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function condensateTerminationDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/condensate-termination/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchCondensateTermination();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============CONDENSATE TERMINATION=============-->



<!--=============NEW CONTROLS=============-->
<script type="text/javascript">
fetchNewControls();
function fetchNewControls(){
  $('#fetchNewControls').load('{{URL::to("_fetchNewControls")}}');
}
</script>
<script type="text/javascript">
  function newControls(){
    var newcontrols= $('#newcontrols').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/newcontrols")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:newcontrols,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#newControlsForm').trigger("reset");
          fetchNewControls();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function newControlsDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/newcontrols/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchNewControls();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============NEW CONTROLS=============-->




<!--=============REMOVALS=============-->
<script type="text/javascript">
fetchRemovals();
function fetchRemovals(){
  $('#fetchRemovals').load('{{URL::to("_fetchRemovals")}}');
}
</script>
<script type="text/javascript">
  function removals(){
    var removal= $('#removal').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/removals")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:removal,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#removalsForm').trigger("reset");
          fetchRemovals();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function removalsDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/removals/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchRemovals();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--=============REMOVALS=============-->

<!--========================Cupboard Need Altering========================-->
<script type="text/javascript">
fetchCupboardnalt();
function fetchCupboardnalt(){
  $('#fetchCupboardnalt').load('{{URL::to("_fetchCupboardnalt")}}');
}
</script>


<script type="text/javascript">
  function cupboardnalt(){
    var cupboardnalt= $('#cupboardnalt_value').val();


    $.ajax({
      type:'post',
      url:'{{URL::to("/cupboard-n-alt")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:cupboardnalt,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#cupboardnaltForm').trigger("reset");
          fetchCupboardnalt();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function cupboardnaltDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/cupboard-n-alt/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchCupboardnalt();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Cupboard Need Altering========================-->





<!--========================Chemical System Treatment========================-->
<script type="text/javascript">
fetchChemicalSystemTreatment();
function fetchChemicalSystemTreatment(){
  $('#fetchChemicalSystemTreatment').load('{{URL::to("_fetchChemicalSystemTreatment")}}');
}
</script>
<script type="text/javascript">
fetchChemicalSystemTreatment1();
function fetchChemicalSystemTreatment1(){
  $('#fetchChemicalSystemTreatment').load('{{URL::to("_fetchChemicalSystemTreatment")}}');
}
</script>

<script type="text/javascript">
  function chemicalSystemTreatment(){
    var fetchChemicalSystemTreatment= $('#chemicalsystemtreatment_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/chemsystreat")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:fetchChemicalSystemTreatment,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#chemicalSystemTreatmentForm').trigger("reset");
          fetchChemicalSystemTreatment1();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function chemicalSystemTreatmentDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/chemsystreat/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchChemicalSystemTreatment();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Chemical System Treatment========================-->




<!--========================Gas Supply Requirements========================-->
<script type="text/javascript">
fetchGasSupplyRequirements();
function fetchGasSupplyRequirements(){
  $('#fetchGasSupplyRequirements').load('{{URL::to("_fetchGasSupplyRequirements")}}');
}
</script>
<script type="text/javascript">
fetchGasSupplyRequirements12();
function fetchGasSupplyRequirements12(){
  $('#fetchGasSupplyRequirements').load('{{URL::to("_fetchGasSupplyRequirements")}}');
}
</script>

<script type="text/javascript">
  function gasSupplyRequirements(){
    var fetchGasSupplyRequirements= $('#gassupplyrequirements_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/gassupplyreq")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:fetchGasSupplyRequirements,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#gasSupplyRequirementsForm').trigger("reset");
          fetchGasSupplyRequirements12();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function gasSupplyRequirementsDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/gassupplyreq/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchGasSupplyRequirements();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Gas Supply Requirements========================-->




<!--========================Electrical Work Required========================-->
<script type="text/javascript">
fetchElectricalWorkRequired();
function fetchElectricalWorkRequired(){
  $('#fetchElectricalWorkRequired').load('{{URL::to("_fetchElectricalWorkRequired")}}');
}
</script>
<script type="text/javascript">
fetchElectricalWorkRequired122();
function fetchElectricalWorkRequired122(){
  $('#fetchElectricalWorkRequired').load('{{URL::to("_fetchElectricalWorkRequired")}}');
}
</script>

<script type="text/javascript">
  function electricalWorkRequired(){
    var fetchElectricalWorkRequired= $('#electricalworkrequired_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/electricalwork")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:fetchElectricalWorkRequired,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#electricalWorkRequiredForm').trigger("reset");
          fetchElectricalWorkRequired122();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function electricalWorkRequiredDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/electricalwork/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchElectricalWorkRequired();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Electrical Work Required========================-->






<!--========================Gas Supply Length========================-->
<script type="text/javascript">
fetchGasSupplyLength();
function fetchGasSupplyLength(){
  $('#fetchGasSupplyLength').load('{{URL::to("_fetchGasSupplyLength")}}');
}
</script>
<script type="text/javascript">
fetchGasSupplyLength121();
function fetchGasSupplyLength121(){
  $('#fetchGasSupplyLength').load('{{URL::to("_fetchGasSupplyLength")}}');
}
</script>

<script type="text/javascript">
  function gasSupplyLength(){
    var gassupplylength= $('#gassupplylength_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/gasupplylength")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:gassupplylength,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#gasSupplyLengthForm').trigger("reset");
          fetchGasSupplyLength121();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function gasSupplyLengthDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/gasupplylength/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchGasSupplyLength();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Gas Supply Length========================-->







<!--========================ACM========================-->
<script type="text/javascript">
fetchAcm();
function fetchAcm(){
  $('#fetchAcm').load('{{URL::to("_fetchAcm")}}');
}
</script>
<!-- <script type="text/javascript">
fetchGasSupplyLength121();
function fetchGasSupplyLength121(){
  $('#fetchGasSupplyLength').load('{{URL::to("_fetchGasSupplyLength")}}');
}
</script> -->

<script type="text/javascript">
  function acm(){
    var acm_value= $('#acm_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/acmpart")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:acm_value,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#acmForm').trigger("reset");
          fetchAcm();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function acmDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/acmpart/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchAcm();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================ACM========================-->









<!--========================Parking Requirements========================-->
<script type="text/javascript">
fetchParReq();
function fetchParReq(){
  $('#fetchParReq').load('{{URL::to("_fetchParReq")}}');
}
</script>
<!-- <script type="text/javascript">
fetchGasSupplyLength121();
function fetchGasSupplyLength121(){
  $('#fetchGasSupplyLength').load('{{URL::to("_fetchGasSupplyLength")}}');
}
</script> -->

<script type="text/javascript">
  function parReq(){
    var parreq_value= $('#parreq_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/parking-req")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:parreq_value,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#parReqForm').trigger("reset");
          fetchParReq();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function parkingRequirementDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/parking-req/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchParReq();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Parking Requirements========================-->









<!--========================FlueKit========================-->
<script type="text/javascript">
fetchFlueKit();
function fetchFlueKit(){
  $('#fetchFlueKit').load('{{URL::to("_fetchFlueKit")}}');
}
</script>
<!-- <script type="text/javascript">
fetchGasSupplyLength121();
function fetchGasSupplyLength121(){
  $('#fetchGasSupplyLength').load('{{URL::to("_fetchGasSupplyLength")}}');
}
</script> -->

<script type="text/javascript">
  function flueKit(){
    var fluekit_value= $('#fluekit_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/fluekitss")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:fluekit_value,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#flueKitForm').trigger("reset");
          fetchFlueKit();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function flueKitDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/fluekitss/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchFlueKit();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================FlueKit========================-->







<!--========================FlueKitDetails========================-->
<script type="text/javascript">
fetchFlueKitDetails();
function fetchFlueKitDetails(){
  $('#fetchFlueKitDetails').load('{{URL::to("_fetchFlueKitDetails")}}');
}
</script>
<!-- <script type="text/javascript">
fetchGasSupplyLength121();
function fetchGasSupplyLength121(){
  $('#fetchGasSupplyLength').load('{{URL::to("_fetchGasSupplyLength")}}');
}
</script> -->

<script type="text/javascript">
  function flueKitDetails(){
    var fluekitdetails_value= $('#fluekitdetails_value').val();
    var fluekitdetails_price= $('#fluekitdetails_price').val();


    $.ajax({
      type:'post',
      url:'{{URL::to("/fluekitdetails")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:fluekitdetails_value,
        price:fluekitdetails_price
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#flueKitDetailsForm').trigger("reset");
          fetchFlueKitDetails();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function flueKitDetailsDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/fluekitdetails/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchFlueKitDetails();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================FlueKitDetails========================-->








<!--========================Magnetic System Filter========================-->
<script type="text/javascript">
fetchMagneticSystemFilter();
function fetchMagneticSystemFilter(){
  $('#fetchMagneticSystemFilter').load('{{URL::to("_fetchMagneticSystemFilter")}}');
}
</script>
<!-- <script type="text/javascript">
fetchGasSupplyLength121();
function fetchGasSupplyLength121(){
  $('#fetchGasSupplyLength').load('{{URL::to("_fetchGasSupplyLength")}}');
}
</script> -->

<script type="text/javascript">
  function magneticSystemFilter(){
    var magneticsystemfilter_value= $('#magneticsystemfilter_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/magsysfil")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:magneticsystemfilter_value,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#magneticSystemFilterForm').trigger("reset");
          fetchMagneticSystemFilter();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function magneticSystemFilterDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/magsysfil/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchMagneticSystemFilter();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Magnetic System Filter========================-->





<!--========================Vented Cylinder Dimensions========================-->
<script type="text/javascript">
fetchVentedCylinderDimensions();
function fetchVentedCylinderDimensions(){
  $('#fetchVentedCylinderDimensions').load('{{URL::to("_fetchVenCylDim")}}');
}
</script>
<!-- <script type="text/javascript">
fetchGasSupplyLength121();
function fetchGasSupplyLength121(){
  $('#fetchGasSupplyLength').load('{{URL::to("_fetchGasSupplyLength")}}');
}
</script> -->

<script type="text/javascript">
  function ventedCylinderDimensions(){
    var ventedcylinderdimensions_value= $('#ventedcylinderdimensions_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/vencyldim")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:ventedcylinderdimensions_value,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#ventedCylinderDimensionsForm').trigger("reset");
          fetchVentedCylinderDimensions();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function ventedCylinderDimensionsDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/vencyldim/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchVentedCylinderDimensions();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Vented Cylinder Dimensions========================-->












<!--========================Radiator Requirements========================-->
<script type="text/javascript">
fetchRadiatorRequirements();
function fetchRadiatorRequirements(){
  $('#fetchRadiatorRequirements').load('{{URL::to("_fetchRadiatorRequirements")}}');
}
</script>
<!-- <script type="text/javascript">
fetchGasSupplyLength121();
function fetchGasSupplyLength121(){
  $('#fetchGasSupplyLength').load('{{URL::to("_fetchGasSupplyLength")}}');
}
</script> -->

<script type="text/javascript">
  function radiatorRequirement(){
    var radiatorrequirements_value= $('#radiatorrequirements_value').val();

    $.ajax({
      type:'post',
      url:'{{URL::to("/radiatorrequirement")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        name:radiatorrequirements_value,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#radiatorRequirementsForm').trigger("reset");
          fetchRadiatorRequirements();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function radiatorRequirementsDelete(id){
    $.ajax({
      type:'get',
      url:'{{URL::to("/radiatorrequirement/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchRadiatorRequirements();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Radiator Requirements========================-->













<!-- <script type="text/javascript">
$.ajax({
  type: 'post',
  url: "{{url('/equipment-fitting-model')}}",
  data:{
    "_token": "{{ csrf_token() }}",
    main_product_id:main_product_id,
    auth_main_user_id:auth_main_user_id,
    fitting_category:fitting_category,
    make:make,
    model:model,
    detail_model:detail_model,
    year:year
  },
  success: function(data) {
    // alert(data);
    // $('#detail_model').html(data);
    // loadCar();
    loadFittingTable();
  },
  error: function(data) {
    alert('Failed');
  }
})
</script> -->
<!-- <script>
    var btn = document.getElementById('imageUpload');
    btn.addEventListener('click', () => {

       var image = document.getElementById('boiler_regular_image').files[0];
       if(!image)
       {
           alert('not a image');
       }
       else
       {
       var formdata = new FormData();
       formdata.append('image', image);
       formdata.append('_token', "{{ csrf_token() }}");
       $.ajax({

           url: '/crmnest/postimage',
           data: formdata,
           type: 'post',
           contentType: false,
           processData: false,
           success: function(data)
           {
               console.log(data);
           }
       });
       }
    })

</script> -->
@endsection

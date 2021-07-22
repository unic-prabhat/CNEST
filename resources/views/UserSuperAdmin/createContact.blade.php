@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/css/intlTelInput.css">
@endsection
@section('content')

<br>

              <div class="row justify-content-center">
                  <div class="col-lg-10">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="mt-0 header-title">Add Contact</h4>
                           <form class="text-center" action="{{ action('SuperAdmin\ContactlistController@store') }}" method="post" enctype="multipart/form-data">
                             {{ csrf_field() }}

                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-4 col-form-label text-right">First Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-4 col-form-label text-right">Last Name</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-4 col-form-label text-right">Email</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" placeholder="Email Addess" name="email">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Contact</label>
                                    <div class="col-sm-8">
                                      <input type="tel" id="phone" class="form-control" placeholder="Phone" value="+91" name="phone_number">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group row">
                                   <label for="example-tel-input" class="col-sm-4 col-form-label text-right">Website URL</label>
                                   <div class="col-sm-8">
                                     <input type="text" class="form-control" placeholder="Website URL" name="website_url">
                                   </div>
                                </div>
                                <div class="form-group row">
                                   <label for="example-tel-input" class="col-sm-4 col-form-label text-right">Company</label>
                                   <div class="col-sm-8">
                                     <input type="text" class="form-control" placeholder="Company Name" name="company_name">
                                   </div>
                                </div>
                                <div class="form-group row">
                                   <label for="example-tel-input" class="col-sm-4 col-form-label text-right">Country</label>
                                   <div class="col-sm-8">
                                     <input list="country" name="country" class="datalist-input form-control"/ placeholder="Country">
                                       <datalist id="country">
                                           <option value="Afghanistan" />
                                           <option value="Albania" />
                                           <option value="Algeria" />
                                           <option value="American Samoa" />
                                           <option value="Andorra" />
                                           <option value="Angola" />
                                           <option value="Anguilla" />
                                           <option value="Antarctica" />
                                           <option value="Antigua and Barbuda" />
                                           <option value="Argentina" />
                                           <option value="Armenia" />
                                           <option value="Aruba" />
                                           <option value="Australia" />
                                           <option value="Austria" />
                                           <option value="Azerbaijan" />
                                           <option value="Bahamas" />
                                           <option value="Bahrain" />
                                           <option value="Bangladesh" />
                                           <option value="Barbados" />
                                           <option value="Belarus" />
                                           <option value="Belgium" />
                                           <option value="Belize" />
                                           <option value="Benin" />
                                           <option value="Bermuda" />
                                           <option value="Bhutan" />
                                           <option value="Bolivia" />
                                           <option value="Bosnia and Herzegovina" />
                                           <option value="Botswana" />
                                           <option value="Bouvet Island" />
                                           <option value="Brazil" />
                                           <option value="British Indian Ocean Territory" />
                                           <option value="Brunei Darussalam" />
                                           <option value="Bulgaria" />
                                           <option value="Burkina Faso" />
                                           <option value="Burundi" />
                                           <option value="Cambodia" />
                                           <option value="Cameroon" />
                                           <option value="Canada" />
                                           <option value="Cape Verde" />
                                           <option value="Cayman Islands" />
                                           <option value="Central African Republic" />
                                           <option value="Chad" />
                                           <option value="Chile" />
                                           <option value="China" />
                                           <option value="Christmas Island" />
                                           <option value="Cocos (Keeling) Islands" />
                                           <option value="Colombia" />
                                           <option value="Comoros" />
                                           <option value="Congo" />
                                           <option value="Congo, The Democratic Republic of The" />
                                           <option value="Cook Islands" />
                                           <option value="Costa Rica" />
                                           <option value="Cote D'ivoire" />
                                           <option value="Croatia" />
                                           <option value="Cuba" />
                                           <option value="Cyprus" />
                                           <option value="Czech Republic" />
                                           <option value="Denmark" />
                                           <option value="Djibouti" />
                                           <option value="Dominica" />
                                           <option value="Dominican Republic" />
                                           <option value="Ecuador" />
                                           <option value="Egypt" />
                                           <option value="El Salvador" />
                                           <option value="Equatorial Guinea" />
                                           <option value="Eritrea" />
                                           <option value="Estonia" />
                                           <option value="Ethiopia" />
                                           <option value="Falkland Islands (Malvinas)" />
                                           <option value="Faroe Islands" />
                                           <option value="Fiji" />
                                           <option value="Finland" />
                                           <option value="France" />
                                           <option value="French Guiana" />
                                           <option value="French Polynesia" />
                                           <option value="French Southern Territories" />
                                           <option value="Gabon" />
                                           <option value="Gambia" />
                                           <option value="Georgia" />
                                           <option value="Germany" />
                                           <option value="Ghana" />
                                           <option value="Gibraltar" />
                                           <option value="Greece" />
                                           <option value="Greenland" />
                                           <option value="Grenada" />
                                           <option value="Guadeloupe" />
                                           <option value="Guam" />
                                           <option value="Guatemala" />
                                           <option value="Guinea" />
                                           <option value="Guinea-bissau" />
                                           <option value="Guyana" />
                                           <option value="Haiti" />
                                           <option value="Heard Island and Mcdonald Islands" />
                                           <option value="Holy See (Vatican City State)" />
                                           <option value="Honduras" />
                                           <option value="Hong Kong" />
                                           <option value="Hungary" />
                                           <option value="Iceland" />
                                           <option value="India" />
                                           <option value="Indonesia" />
                                           <option value="Iran, Islamic Republic of" />
                                           <option value="Iraq" />
                                           <option value="Ireland" />
                                           <option value="Israel" />
                                           <option value="Italy" />
                                           <option value="Jamaica" />
                                           <option value="Japan" />
                                           <option value="Jordan" />
                                           <option value="Kazakhstan" />
                                           <option value="Kenya" />
                                           <option value="Kiribati" />
                                           <option value="Korea, Democratic People's Republic of" />
                                           <option value="Korea, Republic of" />
                                           <option value="Kuwait" />
                                           <option value="Kyrgyzstan" />
                                           <option value="Lao People's Democratic Republic" />
                                           <option value="Latvia" />
                                           <option value="Lebanon" />
                                           <option value="Lesotho" />
                                           <option value="Liberia" />
                                           <option value="Libyan Arab Jamahiriya" />
                                           <option value="Liechtenstein" />
                                           <option value="Lithuania" />
                                           <option value="Luxembourg" />
                                           <option value="Macao" />
                                           <option value="Macedonia, The Former Yugoslav Republic of" />
                                           <option value="Madagascar" />
                                           <option value="Malawi" />
                                           <option value="Malaysia" />
                                           <option value="Maldives" />
                                           <option value="Mali" />
                                           <option value="Malta" />
                                           <option value="Marshall Islands" />
                                           <option value="Martinique" />
                                           <option value="Mauritania" />
                                           <option value="Mauritius" />
                                           <option value="Mayotte" />
                                           <option value="Mexico" />
                                           <option value="Micronesia, Federated States of" />
                                           <option value="Moldova, Republic of" />
                                           <option value="Monaco" />
                                           <option value="Mongolia" />
                                           <option value="Montserrat" />
                                           <option value="Morocco" />
                                           <option value="Mozambique" />
                                           <option value="Myanmar" />
                                           <option value="Namibia" />
                                           <option value="Nauru" />
                                           <option value="Nepal" />
                                           <option value="Netherlands" />
                                           <option value="Netherlands Antilles" />
                                           <option value="New Caledonia" />
                                           <option value="New Zealand" />
                                           <option value="Nicaragua" />
                                           <option value="Niger" />
                                           <option value="Nigeria" />
                                           <option value="Niue" />
                                           <option value="Norfolk Island" />
                                           <option value="Northern Mariana Islands" />
                                           <option value="Norway" />
                                           <option value="Oman" />
                                           <option value="Pakistan" />
                                           <option value="Palau" />
                                           <option value="Palestinian Territory, Occupied" />
                                           <option value="Panama" />
                                           <option value="Papua New Guinea" />
                                           <option value="Paraguay" />
                                           <option value="Peru" />
                                           <option value="Philippines" />
                                           <option value="Pitcairn" />
                                           <option value="Poland" />
                                           <option value="Portugal" />
                                           <option value="Puerto Rico" />
                                           <option value="Qatar" />
                                           <option value="Reunion" />
                                           <option value="Romania" />
                                           <option value="Russian Federation" />
                                           <option value="Rwanda" />
                                           <option value="Saint Helena" />
                                           <option value="Saint Kitts and Nevis" />
                                           <option value="Saint Lucia" />
                                           <option value="Saint Pierre and Miquelon" />
                                           <option value="Saint Vincent and The Grenadines" />
                                           <option value="Samoa" />
                                           <option value="San Marino" />
                                           <option value="Sao Tome and Principe" />
                                           <option value="Saudi Arabia" />
                                           <option value="Senegal" />
                                           <option value="Serbia and Montenegro" />
                                           <option value="Seychelles" />
                                           <option value="Sierra Leone" />
                                           <option value="Singapore" />
                                           <option value="Slovakia" />
                                           <option value="Slovenia" />
                                           <option value="Solomon Islands" />
                                           <option value="Somalia" />
                                           <option value="South Africa" />
                                           <option value="South Georgia and The South Sandwich Islands" />
                                           <option value="Spain" />
                                           <option value="Sri Lanka" />
                                           <option value="Sudan" />
                                           <option value="Suriname" />
                                           <option value="Svalbard and Jan Mayen" />
                                           <option value="Swaziland" />
                                           <option value="Sweden" />
                                           <option value="Switzerland" />
                                           <option value="Syrian Arab Republic" />
                                           <option value="Taiwan, Province of China" />
                                           <option value="Tajikistan" />
                                           <option value="Tanzania, United Republic of" />
                                           <option value="Thailand" />
                                           <option value="Timor-leste" />
                                           <option value="Togo" />
                                           <option value="Tokelau" />
                                           <option value="Tonga" />
                                           <option value="Trinidad and Tobago" />
                                           <option value="Tunisia" />
                                           <option value="Turkey" />
                                           <option value="Turkmenistan" />
                                           <option value="Turks and Caicos Islands" />
                                           <option value="Tuvalu" />
                                           <option value="Uganda" />
                                           <option value="Ukraine" />
                                           <option value="United Arab Emirates" />
                                           <option value="United Kingdom" />
                                           <option value="United States" />
                                           <option value="United States Minor Outlying Islands" />
                                           <option value="Uruguay" />
                                           <option value="Uzbekistan" />
                                           <option value="Vanuatu" />
                                           <option value="Venezuela" />
                                           <option value="Viet Nam" />
                                           <option value="Virgin Islands, British" />
                                           <option value="Virgin Islands, U.S" />
                                           <option value="Wallis and Futuna" />
                                           <option value="Western Sahara" />
                                           <option value="Yemen" />
                                           <option value="Zambia" />
                                           <option value="Zimbabwe" />
                                       </datalist>
                                   </div>
                                </div>
                                <div class="form-group row">
                                   <label for="example-tel-input" class="col-sm-4 col-form-label text-right">Company</label>
                                   <div class="col-sm-8">
                                     <input type="file" name="image_file"  class="form-control" accept="image/jpeg">
                                   </div>
                                </div>
                                <br>
                                <button class="btn btn-primary" type="submit" style="float:right"><i class="fa fa-plus" aria-hidden="true"></i>Add now</button>
                              </div>
                           </div>
                         </form>
                        </div>
                        <!--end card-body-->
                     </div>
                     <!--end card-->
                  </div>
                  <!--end col-->
               </div>



<br><br><br><br><br><br><br><br><br><br>




















<div class="container-fluid" hidden>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Contact</div>

                @if (count($errors) > 0)
                  @foreach ($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong></strong> {{ $error }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endforeach
                @endif

                <div class="card-body">
                      <form class="text-center" action="{{ action('SuperAdmin\ContactlistController@store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <p class="h4 mb-4">Add Contact</p>
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="FirstName" name="first_name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="LastName" name="last_name">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col">
                                <input type="tel" id="phone" class="form-control" placeholder="Phone" value="+91" name="phone_number">
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Website URL" name="website_url">
                        <br>
                        <input type="text" class="form-control" placeholder="Company Name" name="company_name">
                        <br>
                        <!-- <input type="text" class="form-control" placeholder="Country" name="country"> -->
                        <!-- <select class="browser-default custom-select"  name="country">
                          <option>Select Country</option>
                          <option>Afghanistan</option>
                          <option>Australia</option>
                          <option>Brazil</option>
                          <option>Canada</option>
                          <option>Denmark</option>
                          <option>France</option>
                          <option>Germany</option>
                          <option>India</option>
                          <option>Italy</option>
                          <option>Japan</option>
                          <option>Lebanon</option>
                          <option>Libya</option>
                          <option>Malaysia</option>
                          <option>Mexico</option>
                          <option>Monaco</option>
                          <option>Norway</option>
                          <option>Poland</option>
                          <option>Russia</option>
                          <option>Singapore</option>
                          <option>Spain</option>
                          <option>Switzerland</option>
                          <option>United Arab Emirates</option>
                          <option>United Kingdom</option>
                          <option>United States of America</option>
                        </select> -->


                        <input list="country" name="country" class="datalist-input form-control"/ placeholder="Country">
    <datalist id="country">
        <option value="Afghanistan" />
        <option value="Albania" />
        <option value="Algeria" />
        <option value="American Samoa" />
        <option value="Andorra" />
        <option value="Angola" />
        <option value="Anguilla" />
        <option value="Antarctica" />
        <option value="Antigua and Barbuda" />
        <option value="Argentina" />
        <option value="Armenia" />
        <option value="Aruba" />
        <option value="Australia" />
        <option value="Austria" />
        <option value="Azerbaijan" />
        <option value="Bahamas" />
        <option value="Bahrain" />
        <option value="Bangladesh" />
        <option value="Barbados" />
        <option value="Belarus" />
        <option value="Belgium" />
        <option value="Belize" />
        <option value="Benin" />
        <option value="Bermuda" />
        <option value="Bhutan" />
        <option value="Bolivia" />
        <option value="Bosnia and Herzegovina" />
        <option value="Botswana" />
        <option value="Bouvet Island" />
        <option value="Brazil" />
        <option value="British Indian Ocean Territory" />
        <option value="Brunei Darussalam" />
        <option value="Bulgaria" />
        <option value="Burkina Faso" />
        <option value="Burundi" />
        <option value="Cambodia" />
        <option value="Cameroon" />
        <option value="Canada" />
        <option value="Cape Verde" />
        <option value="Cayman Islands" />
        <option value="Central African Republic" />
        <option value="Chad" />
        <option value="Chile" />
        <option value="China" />
        <option value="Christmas Island" />
        <option value="Cocos (Keeling) Islands" />
        <option value="Colombia" />
        <option value="Comoros" />
        <option value="Congo" />
        <option value="Congo, The Democratic Republic of The" />
        <option value="Cook Islands" />
        <option value="Costa Rica" />
        <option value="Cote D'ivoire" />
        <option value="Croatia" />
        <option value="Cuba" />
        <option value="Cyprus" />
        <option value="Czech Republic" />
        <option value="Denmark" />
        <option value="Djibouti" />
        <option value="Dominica" />
        <option value="Dominican Republic" />
        <option value="Ecuador" />
        <option value="Egypt" />
        <option value="El Salvador" />
        <option value="Equatorial Guinea" />
        <option value="Eritrea" />
        <option value="Estonia" />
        <option value="Ethiopia" />
        <option value="Falkland Islands (Malvinas)" />
        <option value="Faroe Islands" />
        <option value="Fiji" />
        <option value="Finland" />
        <option value="France" />
        <option value="French Guiana" />
        <option value="French Polynesia" />
        <option value="French Southern Territories" />
        <option value="Gabon" />
        <option value="Gambia" />
        <option value="Georgia" />
        <option value="Germany" />
        <option value="Ghana" />
        <option value="Gibraltar" />
        <option value="Greece" />
        <option value="Greenland" />
        <option value="Grenada" />
        <option value="Guadeloupe" />
        <option value="Guam" />
        <option value="Guatemala" />
        <option value="Guinea" />
        <option value="Guinea-bissau" />
        <option value="Guyana" />
        <option value="Haiti" />
        <option value="Heard Island and Mcdonald Islands" />
        <option value="Holy See (Vatican City State)" />
        <option value="Honduras" />
        <option value="Hong Kong" />
        <option value="Hungary" />
        <option value="Iceland" />
        <option value="India" />
        <option value="Indonesia" />
        <option value="Iran, Islamic Republic of" />
        <option value="Iraq" />
        <option value="Ireland" />
        <option value="Israel" />
        <option value="Italy" />
        <option value="Jamaica" />
        <option value="Japan" />
        <option value="Jordan" />
        <option value="Kazakhstan" />
        <option value="Kenya" />
        <option value="Kiribati" />
        <option value="Korea, Democratic People's Republic of" />
        <option value="Korea, Republic of" />
        <option value="Kuwait" />
        <option value="Kyrgyzstan" />
        <option value="Lao People's Democratic Republic" />
        <option value="Latvia" />
        <option value="Lebanon" />
        <option value="Lesotho" />
        <option value="Liberia" />
        <option value="Libyan Arab Jamahiriya" />
        <option value="Liechtenstein" />
        <option value="Lithuania" />
        <option value="Luxembourg" />
        <option value="Macao" />
        <option value="Macedonia, The Former Yugoslav Republic of" />
        <option value="Madagascar" />
        <option value="Malawi" />
        <option value="Malaysia" />
        <option value="Maldives" />
        <option value="Mali" />
        <option value="Malta" />
        <option value="Marshall Islands" />
        <option value="Martinique" />
        <option value="Mauritania" />
        <option value="Mauritius" />
        <option value="Mayotte" />
        <option value="Mexico" />
        <option value="Micronesia, Federated States of" />
        <option value="Moldova, Republic of" />
        <option value="Monaco" />
        <option value="Mongolia" />
        <option value="Montserrat" />
        <option value="Morocco" />
        <option value="Mozambique" />
        <option value="Myanmar" />
        <option value="Namibia" />
        <option value="Nauru" />
        <option value="Nepal" />
        <option value="Netherlands" />
        <option value="Netherlands Antilles" />
        <option value="New Caledonia" />
        <option value="New Zealand" />
        <option value="Nicaragua" />
        <option value="Niger" />
        <option value="Nigeria" />
        <option value="Niue" />
        <option value="Norfolk Island" />
        <option value="Northern Mariana Islands" />
        <option value="Norway" />
        <option value="Oman" />
        <option value="Pakistan" />
        <option value="Palau" />
        <option value="Palestinian Territory, Occupied" />
        <option value="Panama" />
        <option value="Papua New Guinea" />
        <option value="Paraguay" />
        <option value="Peru" />
        <option value="Philippines" />
        <option value="Pitcairn" />
        <option value="Poland" />
        <option value="Portugal" />
        <option value="Puerto Rico" />
        <option value="Qatar" />
        <option value="Reunion" />
        <option value="Romania" />
        <option value="Russian Federation" />
        <option value="Rwanda" />
        <option value="Saint Helena" />
        <option value="Saint Kitts and Nevis" />
        <option value="Saint Lucia" />
        <option value="Saint Pierre and Miquelon" />
        <option value="Saint Vincent and The Grenadines" />
        <option value="Samoa" />
        <option value="San Marino" />
        <option value="Sao Tome and Principe" />
        <option value="Saudi Arabia" />
        <option value="Senegal" />
        <option value="Serbia and Montenegro" />
        <option value="Seychelles" />
        <option value="Sierra Leone" />
        <option value="Singapore" />
        <option value="Slovakia" />
        <option value="Slovenia" />
        <option value="Solomon Islands" />
        <option value="Somalia" />
        <option value="South Africa" />
        <option value="South Georgia and The South Sandwich Islands" />
        <option value="Spain" />
        <option value="Sri Lanka" />
        <option value="Sudan" />
        <option value="Suriname" />
        <option value="Svalbard and Jan Mayen" />
        <option value="Swaziland" />
        <option value="Sweden" />
        <option value="Switzerland" />
        <option value="Syrian Arab Republic" />
        <option value="Taiwan, Province of China" />
        <option value="Tajikistan" />
        <option value="Tanzania, United Republic of" />
        <option value="Thailand" />
        <option value="Timor-leste" />
        <option value="Togo" />
        <option value="Tokelau" />
        <option value="Tonga" />
        <option value="Trinidad and Tobago" />
        <option value="Tunisia" />
        <option value="Turkey" />
        <option value="Turkmenistan" />
        <option value="Turks and Caicos Islands" />
        <option value="Tuvalu" />
        <option value="Uganda" />
        <option value="Ukraine" />
        <option value="United Arab Emirates" />
        <option value="United Kingdom" />
        <option value="United States" />
        <option value="United States Minor Outlying Islands" />
        <option value="Uruguay" />
        <option value="Uzbekistan" />
        <option value="Vanuatu" />
        <option value="Venezuela" />
        <option value="Viet Nam" />
        <option value="Virgin Islands, British" />
        <option value="Virgin Islands, U.S" />
        <option value="Wallis and Futuna" />
        <option value="Western Sahara" />
        <option value="Yemen" />
        <option value="Zambia" />
        <option value="Zimbabwe" />
    </datalist>


                        <br>
                        <input type="file" name="image_file"  class="form-control" accept="image/jpeg">
                        <br>
                        <input type="text" class="form-control" placeholder="Country" name="generated_by" value="{{Auth::user()->username}}" hidden>
                        <br>
                        <!-- <div class="form-group">
                         <label for="sel1">Generated By:</label>
                         <select class="form-control" name="generated_by">
                           @if(count($datas)>0)
                             @foreach($datas as $data)
                             <option>{{$data->first_name}}</option>
                             @endforeach
                           @endif
                         </select>
                        </div>
                        <br>
                        <div class="form-group">
                         <label for="sel1">Lead Owner:</label>
                         <select class="form-control" name="lead_owner">
                           @if(count($datas1)>0)
                             @foreach($datas1 as $data1)
                             <option>{{$data1->username}}</option>
                             @endforeach
                           @endif
                         </select>
                        </div> -->
                        <br>
                        <button class="btn btn-primary" type="submit"><i class="fa fa-plus" aria-hidden="true"></i>
 Add now</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/intlTelInput.js"></script>
<script>
  // var input = document.querySelector("#phone");
  // window.intlTelInput(input);

  var input = document.querySelector("#phone");
	window.intlTelInput(input,({
	  autoPlaceholder: "polite",
    formatOnDisplay: true
	}));
</script>
@endsection

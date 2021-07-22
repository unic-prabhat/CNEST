<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/logoutadmin', function(){
   Auth::logout();
   return Redirect::to('/login');
});



Route::get('/XXdeletescheduletask/{id}',function($id){
  // echo $id;
  App\Scheduletask::find($id)->delete();
  return redirect()->back();
});


Route::get('/XXdeletecallscheduletask/{id}',function($id){
  // echo $id;
  App\Cmodel::find($id)->delete();
  return redirect()->back();
});

Route::get('/XXdeletenotescheduletask/{id}',function($id){
  // echo $id;
  App\Cmodel::find($id)->delete();
  return redirect()->back();
});


Route::get('/XXdeletenote/{id}',function($id){
  // echo $id;
  App\Note::find($id)->delete();
  App\Cmodel::where('note_id',$id)->first()->delete();
  echo 'success';
});
Route::get('/XXdeletecall/{id}',function($id){
  // echo $id;
  App\Call::find($id)->delete();
  App\Cmodel::where('call_id',$id)->first()->delete();
  echo 'success';
});
Route::get('/XXdeletedeleteScheduleTask/{id}',function($id){
  // echo $id;
  App\Scheduletask::find($id)->delete();
  App\Cmodel::where('schedule_id',$id)->first()->delete();
  echo 'success';
});
Route::get('/XXdeletedeleteAttach/{id}',function($id){
  // echo $id;
  App\Cmodel::find($id)->delete();
  echo 'success';
});




//========================= NEW FILES ADMIN =========================//
// FETCH ALL
Route::get('/_fetchAll/{leadid}',function($leadid){
  return view('crm_new._fetchAll',compact('leadid'));
});
// FETCH ATTACHMENT
Route::get('/_fetchAttachments/{leadid}',function($leadid){
  return view('crm_new._fetchAttachments',compact('leadid'));
});
// FETCH MEETING
Route::get('/_fetchMeeting/{leadid}',function($leadid){
  return view('crm_new._fetchMeeting',compact('leadid'));
});
// FETCH CALL
Route::get('/_fetchCall/{leadid}',function($leadid){
  return view('crm_new._fetchCall',compact('leadid'));
});
// FETCH NOTES
Route::get('/_fetchNotes/{leadid}',function($leadid){
  return view('crm_new._fetchNotes',compact('leadid'));
});
//========================= NEW FILES ADMIN =========================//



//========================= NEW FILES SALES USER =========================//
// FETCH ALL
Route::get('/_salesuserfetchAll/{leadid}',function($leadid){
  return view('UserSales._salesuserfetchAll',compact('leadid'));
});
// FETCH ATTACHMENT
Route::get('/_salesuserfetchAttachments/{leadid}',function($leadid){
  return view('UserSales._salesuserfetchAttachments',compact('leadid'));
});
// FETCH MEETING
Route::get('/_salesuserfetchMeeting/{leadid}',function($leadid){
  return view('UserSales._salesuserfetchMeeting',compact('leadid'));
});
// FETCH CALL
Route::get('/_salesuserfetchCall/{leadid}',function($leadid){
  return view('UserSales._salesuserfetchCall',compact('leadid'));
});
// FETCH NOTES
Route::get('/_salesuserfetchNotes/{leadid}',function($leadid){
  return view('UserSales._salesuserfetchNotes',compact('leadid'));
});
//========================= NEW FILES SALES USER =========================//




//APR Calculation
Route::get('/calculate',function(){
  // $amount = 2700;
  // $rate = 8.2 / 12; // Monthly interest rate
  // // $rate = 0; // Monthly interest rate
  //
  // $term = 60; // Term in months
  //
  // $emi = $amount * $rate * (pow(1 + $rate, $term) / (pow(1 + $rate, $term) - 1));
  // echo $emi;


  // $princ =2700;
  // $term = 120;
  // $intr = 8.2/ 120;
  // $EMI= ceil($princ * $intr / (1 - (pow(1/(1 + $intr), $term))));
  // $TOT_INTEREST= ceil(($princ * $intr / (1 - (pow(1/(1 + $intr), $term))))*$term) - $princ;
  // echo $EMI;

  // $larry=2700;
  // $moe=8.2;
  // $curly = 60;
  // $answer_two = ( $larry * (($moe/12) / 100) / ( 1 – pow( 1 + (($moe/12) / 100), – $months)) );
  // echo $answer_two;


  $apr = 8.2; // 15.9% APR
  $totalPaymentsPerYear = 2700;
  $compoundPerYear = 1;
  $interest = pow((1 + $apr/$compoundPerYear), $compoundPerYear/$totalPaymentsPerYear)-1;

  echo $interest;
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/runcommand', function () {
   //Artisan::call('make:controller NewSalesuserQuotationBoilerController');
   //Artisan::call('make:model Boltschoosen -m');
   //Artisan::call('migrate');
    return 'Done';
});

Auth::routes();


//==**==SUPER ADMIN==**==//
////resource

Route::resource('/SuperAdmin','SuperAdmin\ContactlistController');
Route::resource('/usersales','UserSales\UserSalesController');
Route::get('/manageuser/delete/{id}','UserSales\manageSalesuserController@deletenow');
Route::get('/logfile','NotificationController@getallnotification');
Route::get('/userprofileud/{id}','UserprofileUpdateController@profileedit');
Route::put('/userprofileup/{id}','UserprofileUpdateController@profileupdate');
Route::get('/saleesuserprofileud/{id}','UserSales\Salesuserprofileupdate@salesprofileedit');
Route::put('/usersalesprofileup/{id}','UserSales\Salesuserprofileupdate@salesprofilupdate');
Route::resource('/manageuser','UserSales\manageSalesuserController');
Route::resource('/salesuser','UserSales\salesuserManagementController');
Route::post('/activeinactivest', 'StatusmodificationController@getid');
Route::post('/regme', 'OnlyRegisterController@registme');
Route::get('/forgotpasw', 'PasswordresetController@forgotpload');
Route::post('/resetpassword', 'PasswordresetController@resetfpass');
Route::get('/reset-mypassword/{code}', 'PasswordresetController@resetmypass');
Route::post('/setnewpass', 'PasswordresetController@updatepass');




///resource
//==
Route::get('/SuperAdmin','HomeController@index'); //<===SuperAdmin DashBoard
Route::get('/SuperAdmin/create','SuperAdmin\ContactlistController@create'); //<===Add Contact

Route::get('/SuperAdminAllCompanyList','SuperAdmin\AllCompanyController@showAllCompany'); //<===All Company Lists (group)
Route::get('/SuperAdminAllCompanyList/CompanyDetails/{company_name}','SuperAdmin\AllCompanyController@viewCompany'); //<===Company Details

Route::get('/SuperAdminAllLeadsList','SuperAdmin\AllCompanyController@showAllLeads'); //<===All Leads Lists


////resource
Route::resource('/UsersDetails','SuperAdmin\AllUserController');
///resource
//==
Route::get('/UsersDetails','SuperAdmin\AllUserController@index'); //<===Show All Users
Route::get('/UsersDetails/create','SuperAdmin\AllUserController@create')->name('user.create')->middleware('auth'); //<===Add Contact
//=

////resource
Route::resource('/Deal','SuperAdmin\DealController');
///resource
Route::get('/Deal','SuperAdmin\DealController@index')->middleware('auth'); //<===View All Deals
Route::get('/Deal/create/{id}','SuperAdmin\DealController@create'); //<===Add Deal
Route::put('/Deal/{id}/kanbanUpd','SuperAdmin\DealController@kanbanUpd'); //<===Update KANBAN Deal
Route::post('/DealShowAmount','SuperAdmin\DealController@showAmount'); //<===Update KANBAN Amount

//FETCH DEALS
Route::get('/_viewFetchDealTable','SuperAdmin\DealController@fetchAll');

Route::resource('/User','Users\ContactlistController');
///resource
//==
Route::get('/User','HomeController@index'); //<===User DashBoard
Route::get('/User/create','Users\ContactlistController@create'); //<===Add Contact



Route::get('/UserAllCompanyList','Users\AllCompanyController@showAllCompany'); //<===All Company Lists (group)
Route::get('/UserAllCompanyList/CompanyDetails/{company_name}','Users\AllCompanyController@viewCompany'); //<===All Company Details

Route::get('/UserAllLeadsList','Users\AllCompanyController@showAllLeads'); //<===All Leads Lists

Route::get('contact/{id}/edit','conta\ContactController@edit')->name('contact.edit');
Route::post('contact/delete/{id}','conta\ContactController@delete')->name('contact.delete');



Route::get('scheduletask/get/{id}', 'ScheduletaskController@getSchedulle');
Route::group(array('namespace'=>'Lead','middleware'=> 'auth'),function(){
    Route::get('/lead/update','LeadController@leadUpdate');
   Route::get('/leadfilters/{leadfilter}','LeadController@leadfilters');
   Route::get('/getCityState/{text}','LeadController@getText');
    Route::get('/lead/calender','LeadController@calender')->name('home.calender');
    Route::get('lead/{id}','LeadController@show')->name('lead.show');
   Route::post('/lead/store','LeadController@leadstore')->name('lead.store');
   Route::get('/fetch/lead','LeadController@fetcheditablelead');
   Route::post('/updateLeadind','LeadController@updateLeadStatus');
   Route::post('/attachment','LeadController@uploadAttachment');
   Route::post('/updateAddress','LeadController@updateAddress');
   Route::post('/shownotification','LeadController@showReminder');
   Route::post('scheduletask/update','LeadController@ajaxUpdateScheduleTask');
   Route::get('scheduletask/delete/{id}','LeadController@scheduletaskdelete');

});



  Route::get('/generate-quotation/salesuser/{id}','NewSalesuserQuotationBoilerController@index');
   Route::put('/generate-quotation/salesuser/{uniqueid}','NewSalesuserQuotationBoilerController@step1post');
   Route::put('/generate-quotation/salesuser/step2/{uniqueid}','NewSalesuserQuotationBoilerController@step2post');
   Route::put('/generate-quotation/salesuser/step3/{uniqueid}','NewSalesuserQuotationBoilerController@step3post');
   Route::put('/generate-quotation/salesuser/step4/{uniqueid}','NewSalesuserQuotationBoilerController@step4post');

  Route::post('/generate-quotation/salesuser/step4back','NewSalesuserQuotationBoilerController@step4back');


   Route::get('/showblockregular/{uniqueid}','NewSalesuserQuotationBoilerController@showblockregular');
   Route::get('/showblocksystem/{uniqueid}','NewSalesuserQuotationBoilerController@showblocksystem');
   Route::get('/showblockcombi/{uniqueid}','NewSalesuserQuotationBoilerController@showbloccombir');
   Route::get('/showblockelectric/{uniqueid}','NewSalesuserQuotationBoilerController@showblelectriclar');
   Route::get('/showblockoil/{uniqueid}','NewSalesuserQuotationBoilerController@showblockoil');
   Route::get('/showblockallboilercontroller/{uniqueid}','NewSalesuserQuotationBoilerController@showblockallboilercontroller');
   Route::get('/showblockallboltsonoption/{uniqueid}','NewSalesuserQuotationBoilerController@showblockallboltsonoption');
   Route::get('/showblockcupboard/{uniqueid}','NewSalesuserQuotationBoilerController@showblockcupboard');
   Route::get('/showblocksupplylength/{uniqueid}','NewSalesuserQuotationBoilerController@showblocksupplylength');
   Route::get('/showblockmaterialcheck/{uniqueid}','NewSalesuserQuotationBoilerController@showblockmaterialcheck');
   Route::get('/showblockadditionalcondesnate/{uniqueid}','NewSalesuserQuotationBoilerController@showblockadditionalcondesnate');

    Route::get('/showblockextraoptions/{uniqueid}','NewSalesuserQuotationBoilerController@showblockextraoptions');



   Route::get('/generate-quotation/salesuser/step1/{id}/{uniqid}','NewSalesuserQuotationBoilerController@step1');
   Route::get('/generate-quotation/salesuser/step2/{id}/{uniqid}','NewSalesuserQuotationBoilerController@step2');
   Route::get('/generate-quotation/salesuser/step3/{id}/{uniqid}','NewSalesuserQuotationBoilerController@step3');
   Route::get('/generate-quotation/salesuser/step4/{id}/{uniqid}','NewSalesuserQuotationBoilerController@step4');


Route::post('removeattachments','DealController@removeattachments');
Route::get('/salesdeal','UserSales\Task\TaskController@dealGet');
Route::group(['middleware'=>'auth'],function(){
Route::get('/deal','TaskController@dealGet')->name('deal');
Route::get('/removenote/{id}','NoteController@removeNote');
Route::get('/removeallall/{id}','NoteController@removeAllAll');
Route::get('/removeallcall/{id}','CallController@removeAllcall');
Route::get('/lead/{lead_id}/deal','TaskController@index');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/deleteschedule/{id}', 'ScheduletaskController@deleteMetting');
Route::get('/leads', 'HomeController@allLeads')->name('home.leads');
Route::get('/leads/deletes/{id}','HomeController@deleteleadnow');
Route::get('/leadofweek', 'HomeController@weeklylead');
Route::get('/lastmlead', 'HomeController@lastmonthlead');
Route::get('/saleslead', 'UserSales\Lead\HomeController@allLeads');
Route::get('/saleslead/calenders','UserSales\Lead\LeadController@calender');
Route::get('saleslead/{id}','UserSales\Lead\LeadController@show');
Route::post('note/store','NoteController@store')->name('note.store');
Route::get('note/fetch_note', 'NoteController@fetch_note');
Route::post('/callupdatestatus','CallController@updateNotification');
Route::post('call/store','CallController@store')->name('call.store');
Route::get('call/fetch_data', 'CallController@fetch_data');
Route::post('fetch/all_ev', 'CallController@all_call_note');
Route::post('/leadfilter','HomeController@leadFilter');
Route::get('/completed/{id}', 'ScheduletaskController@updateCompleted');
Route::get('/getleadDetails/{id}','ScheduletaskController@leadDetailsLoad');
Route::get('/loadEvents','ScheduletaskController@getEvents');
Route::post('getupdatedevent','ScheduletaskController@getupdatedevent');
Route::post('schedule/store','ScheduletaskController@store')->name('scheduletask.store');
Route::post('schedule/status/update','ScheduletaskController@statusUpdate')->name('scheduletask.status_update');
Route::get('/boiler/create','BoilerController@create')->name('boiler.create');
Route::post('/boiler/store','BoilerController@store')->name('boiler.store');
Route::get('/boiler/choice/type','BoilertypechildrenController@create')->name('boiler.choice.type');
Route::post('/boiler/choice/type','BoilertypechildrenController@store')->name('boiler.choice.store');
Route::get('/boiler/choice','BoilerController@choice')->name('boiler.choice');
Route::post('/boiler/choice/store','BoilerController@choicestore')->name('boilerchoice.store');
Route::post('/cmodeModel','CallController@cmodelUpdate');

   Route::get('/generate-quotation/{id}','NewQuotationBoilerController@index');
   Route::put('/generate-quotation/{uniqueid}','NewQuotationBoilerController@step1post');
   Route::put('/generate-quotation/step2/{uniqueid}','NewQuotationBoilerController@step2post');
   Route::put('/generate-quotation/step3/{uniqueid}','NewQuotationBoilerController@step3post');
   Route::put('/generate-quotation/step4/{uniqueid}','NewQuotationBoilerController@step4post');


   Route::post('/generate-quotation/step4back','NewQuotationBoilerController@step4back');





   Route::get('/showblockregular/{uniqueid}','NewQuotationBoilerController@showblockregular');
   Route::get('/showblocksystem/{uniqueid}','NewQuotationBoilerController@showblocksystem');
   Route::get('/showblockcombi/{uniqueid}','NewQuotationBoilerController@showbloccombir');
   Route::get('/showblockelectric/{uniqueid}','NewQuotationBoilerController@showblelectriclar');
   Route::get('/showblockoil/{uniqueid}','NewQuotationBoilerController@showblockoil');
   Route::get('/showblockallboilercontroller/{uniqueid}','NewQuotationBoilerController@showblockallboilercontroller');
   Route::get('/showblockallboltsonoption/{uniqueid}','NewQuotationBoilerController@showblockallboltsonoption');
   Route::get('/showblockcupboard/{uniqueid}','NewQuotationBoilerController@showblockcupboard');
   Route::get('/showblocksupplylength/{uniqueid}','NewQuotationBoilerController@showblocksupplylength');
   Route::get('/showblockmaterialcheck/{uniqueid}','NewQuotationBoilerController@showblockmaterialcheck');
   Route::get('/showblockadditionalcondesnate/{uniqueid}','NewQuotationBoilerController@showblockadditionalcondesnate');
   Route::get('/showblockextraoptions/{uniqueid}','NewQuotationBoilerController@showblockextraoptions');



   Route::get('/generate-quotation/step1/{id}/{uniqid}','NewQuotationBoilerController@step1');
   Route::get('/generate-quotation/step2/{id}/{uniqid}','NewQuotationBoilerController@step2');
   Route::get('/generate-quotation/step3/{id}/{uniqid}','NewQuotationBoilerController@step3');
   Route::get('/generate-quotation/step4/{id}/{uniqid}','NewQuotationBoilerController@step4');

   Route::get('/quotation/delete/{id}','NewQuotationBoilerController@quotdelete');



   Route::get('/boiler/{id}','BoilerController@index')->name('boiler.index');
   Route::post('/choosenboltsstore','BoilerController@choosenboltsstore');
   Route::get('/boiler/edit/{id}/{leadid}','BoilerController@editid')->name('boiler.edit');
   Route::post('/boiler/update','BoilerController@update');



   Route::get('/uploadExcel','ExcelController@index');
   Route::post('/storeExcel','ExcelController@store')->name('upload.excel');
   Route::get('/getallboilerchildren/{id}', 'BoilertypechildrenController@getallboilerchildren');
   Route::post('/boiler/pdf', 'BoilerpdfController@generated')->name('pdf.genearted');
   Route::post('/deal/create','DealController@create')->name('deal.create');
   Route::post('/updateDeal','DealController@dealUpdate');
   Route::post('/updateDeleteRow','DealController@dealRowUpdate');
   Route::post('/updateOld','DealController@dealUpdateRowUpdate');
   Route::post('/task/store','TaskController@store')->name('task.store');
   Route::post('/task/sync','TaskController@sync');
   Route::post('/taskDestroy','TaskController@deleteTask');
});







Route::get('/boilers/{id}','UserSales\BoilersalesuserController@index')->name('boiler.index');

Route::group(['middleware'=>['auth','admin']], function(){
    Route::get('/extractrangereport');
    Route::get('/monthlyreport','ReportingController@monthlyreport')->name('lead.report');
    Route::post('/monthlyleadreport','ReportingController@getmonthlyreport');
    Route::post('/daterangefilter','ReportingController@getrangereportfilter')->name('filter.daterange');

});
Route::post('/monthlysalesleadreport','UserSales\UserSalesController@salesreport');
Route::post('/weeklymonthlysalesreport','UserSales\UserSalesController@getweeklymonthlysalesreport');
Route::post('/weeklysalesreport','UserSales\UserSalesController@getweeklysalesreport');
Route::post('/filtersalesreport','UserSales\UserSalesController@getfiltersalesreport');
Route::post('/totalmettingschedule','UserSales\UserSalesController@mettingschedule');
Route::post('/totalsalesclosed','UserSales\UserSalesController@salesclosed');

Route::post('/weeklymonthlyleadreport','ReportingController@getweeklymonthlyleadreport');
Route::post('/weeklymonthlyleadreportone','ReportingController@getwymyleadreport');

Route::group(['namespace'=>'template','middleware' => ['auth','admin']], function(){

    Route::get('/template/create','TemplateController@create')->name('template.create');
    Route::post('/template/store','TemplateController@store')->name('template.store');


});
Route::group(['namespace'=>'Campaign','middleware' => ['auth','admin']], function(){

      Route::post('/campaign/store', 'CampaignController@store')->name('campaign.store');
      Route::get('/template/slug/{slug}','CampaignController@getTemplate')->name('template.slug');
      Route::post('/template/store','CampaignController@template')->name('template.store');
});

Route::group(['namespace' =>'Quotation','middleware'=>['auth','admin']], function(){

    Route::get('/quotation/index', 'QuotationAdminController@index')->name('quotation.index');
});

Route::group(['namespace' =>'Boiler','middleware'=>['auth','admin']], function(){
    Route::get('/boiler/get/allbyid/{id}', 'BoilerController@fetchbyid');
    Route::post('/boiler/quotationtypefetch', 'BoilerController@fetchparentone');
    Route::post('/boiler/store', 'BoilerController@store')->name('boiler.create');
    Route::post('/boilertype/add', 'BoilerController@createBoilerAdd');

});

Route::group(['namespace' => 'Quotation', 'middleware'=>['auth','admin']], function(){

    Route::post('/quotation/post-choice', 'QuotationAdminController@postingcehckradio');
});


// MY PARTS // MY PARTS // MY PARTS // MY PARTS // MY PARTS // MY PARTS // MY PARTS // MY PARTS // MY PARTS

Route::post('boilertypeupdate', 'QuotationSettingsUpdateController@boilertypeupdate');
Route::post('boilercontrolsupdate', 'QuotationSettingsUpdateController@boilercontrolsupdate');
Route::post('boltsonupdate', 'QuotationSettingsUpdateController@boltsonupdate');
Route::post('currboilerupd', 'QuotationSettingsUpdateController@currboilerupd');
Route::post('currboilerlocupd', 'QuotationSettingsUpdateController@currboilerlocupd');
Route::post('newfluttypeupd', 'QuotationSettingsUpdateController@newfluttypeupd');
Route::post('newfluttypelocch', 'QuotationSettingsUpdateController@newfluttypelocch');
Route::post('nwconterupd', 'QuotationSettingsUpdateController@nwconterupd');
Route::post('newcontrolsqwupd', 'QuotationSettingsUpdateController@newcontrolsqwupd');
Route::post('boiremovalsupd', 'QuotationSettingsUpdateController@boiremovalsupd');
Route::post('cupbrdneedupd', 'QuotationSettingsUpdateController@cupbrdneedupd');
Route::post('chesystreatupd', 'QuotationSettingsUpdateController@chesystreatupd');
Route::post('gassupreqsupd', 'QuotationSettingsUpdateController@gassupreqsupd');
Route::post('eleworkrequpd', 'QuotationSettingsUpdateController@eleworkrequpd');
Route::post('gassuplenghpriceupd', 'QuotationSettingsUpdateController@gassuplenghpriceupd');
Route::post('acmupd', 'QuotationSettingsUpdateController@acmupd');
Route::post('parrequpd', 'QuotationSettingsUpdateController@parrequpd');
Route::post('flukitupd', 'QuotationSettingsUpdateController@flukitupd');
Route::post('flukitdetupd', 'QuotationSettingsUpdateController@flukitdetupd');
Route::post('magsysfiltupd', 'QuotationSettingsUpdateController@magsysfiltupd');
Route::post('vencyldimupd', 'QuotationSettingsUpdateController@vencyldimupd');
Route::post('newboilertypeupd', 'QuotationSettingsUpdateController@newboilertypeupd');
Route::post('boilerlocationupd', 'QuotationSettingsUpdateController@boilerlocationupd');
Route::post('boilertypeexshupd', 'QuotationSettingsUpdateController@boilertypeexshupd');
Route::post('newfltypeupd', 'QuotationSettingsUpdateController@newfltypeupd');
Route::post('boilerchoiceoilupdate', 'QuotationSettingsUpdateController@boilerchoiceoilupdate');

//QUOTATION SETTINGS
Route::get('/boilerchoiceregular/delete/{id}','QuotationSettingsController@boilerchoiceregulardelete');
Route::post('/boilerchoiceregular','QuotationSettingsController@boilerchoiceregular');

Route::get('/boilerchoicesystem/delete/{id}','QuotationSettingsController@boilerchoicesystemdelete');
Route::post('/boilerchoicesystem','QuotationSettingsController@boilerchoicesystem');

Route::get('/boilerchoicecombi/delete/{id}','QuotationSettingsController@boilerchoicecombidelete');
Route::post('/boilerchoicecombi','QuotationSettingsController@boilerchoicecombi');

Route::get('/boilerchoiceelectric/delete/{id}','QuotationSettingsController@boilerchoiceelectricdelete');
Route::post('/boilerchoiceelectric','QuotationSettingsController@boilerchoiceelectric');


Route::post('/boilerchoiceregular/imageupdate','QuotationSettingsController@ragularboilerimageupdate');
Route::post('/boilerchoicesystems/imageupdate','QuotationSettingsController@systemboilerimageupdate');
Route::post('/boilerchoicecombi/imageupdate','QuotationSettingsController@combiboilerimageupdate');
Route::post('/boilerchoiceelectric/imageupdate','QuotationSettingsController@electricboilerimageupdate');
Route::post('/boilerchoiceoil/imageupdate','QuotationSettingsController@boileroilimageupdate');
//OIL SECTION
Route::get('/boilerchoiceoil/delete/{id}','QuotationSettingsController@boilerchoiceoilsystemdelete');
Route::post('/boilerchoiceoil','QuotationSettingsController@boilerchoiceoil');
Route::get('/firstregularprice/{firstregularid}','QuotationSettingsController@firstregularprice');
Route::get('/secondregularprice/{secondregularid}','QuotationSettingsController@secondregularprice');
Route::get('/thirdregularprice/{thirdregularid}','QuotationSettingsController@thirdregularprice');


//FETCH DETAILS
Route::get('_fetchBoilerRegular',function(){return view('quotation._fetchBoilerRegular');});
Route::get('_fetchBoilerSystem',function(){return view('quotation._fetchBoilerSystem');});
Route::get('_fetchBoilerCombi',function(){return view('quotation._fetchBoilerCombi');});
Route::get('_fetchBoilerElectric',function(){return view('quotation._fetchBoilerElectric');});
Route::get('_fetchBoilersControls',function(){return view('quotation._fetchBoilersControls');});
Route::get('_fetchBoltsOn',function(){return view('quotation._fetchBoltsOn');});
Route::get('_fetchCurrentBoilerType',function(){return view('quotation._fetchCurrentBoilerType');});
Route::get('_fetchCurrentBoilerLocation',function(){return view('quotation._fetchCurrentBoilerLocation');});
Route::get('_fetchCurrentBoilerFlue',function(){return view('quotation._fetchCurrentBoilerFlue');});
Route::get('_fetchExistingShower',function(){return view('quotation._fetchExistingShower');});
Route::get('_fetchNewFuelType',function(){return view('quotation._fetchNewFuelType');});
Route::get('_fetchNewBoilerType',function(){return view('quotation._fetchNewBoilerType');});
Route::get('_fetchNewFlueType',function(){return view('quotation._fetchNewFlueType');});
Route::get('_fetchNewFlueLocation',function(){return view('quotation._fetchNewFlueLocation');});
Route::get('_fetchCondensateTermination',function(){return view('quotation._fetchCondensateTermination');});
Route::get('_fetchNewControls',function(){return view('quotation._fetchNewControls');});
Route::get('_fetchRemovals',function(){return view('quotation._fetchRemovals');});
Route::get('_fetchCupboardnalt',function(){return view('quotation._fetchCupboardnalt');});
Route::get('_fetchChemicalSystemTreatment',function(){return view('quotation._fetchChemicalSystemTreatment');});
Route::get('_fetchGasSupplyRequirements',function(){return view('quotation._fetchGasSupplyRequirements');});
Route::get('_fetchElectricalWorkRequired',function(){return view('quotation._fetchElectricalWorkRequired');});
Route::get('_fetchGasSupplyLength',function(){return view('quotation._fetchGasSupplyLength');});
Route::get('_fetchAcm',function(){return view('quotation._fetchAcm');});
Route::get('_fetchParReq',function(){return view('quotation._fetchParReq');});
Route::get('_fetchFlueKit',function(){return view('quotation._fetchFlueKit');});
Route::get('_fetchFlueKitDetails',function(){return view('quotation._fetchFlueKitDetails');});
Route::get('_fetchMagneticSystemFilter',function(){return view('quotation._fetchMagneticSystemFilter');});
Route::get('_fetchVenCylDim',function(){return view('quotation._fetchVenCylDim');});
Route::get('_fetchRadiatorRequirement',function(){return view('quotation._fetchRadiatorRequirement');});
Route::get('_fetchRadiatorRequirements',function(){return view('quotation._fetchRadiatorRequirements');});
Route::get('_fetchRadiatorMeasurementLocation',function(){return view('boiler._fetchRadiatorMeasurementLocation');});
Route::get('_fetchThermostaticRadiatorValves',function(){return view('boiler._fetchThermostaticRadiatorValves');});
Route::get('_fetchTowelRailMeasurement',function(){return view('boiler._fetchTowelRailMeasurement');});
Route::get('_fetchTowelRailValves',function(){return view('boiler._fetchTowelRailValves');});
Route::get('_fetchHeight',function(){return view('quotation._fetchHeight');});
Route::get('_fetchWidth',function(){return view('quotation._fetchWidth');});
Route::get('_fetchBoilerOil',function(){return view('quotation._fetchBoilerOil');});
Route::get('/_fetchCallPopup/{id}','HomeController@fetchpopupcall');








Route::post('/postimage', 'QuotationSettingsController@upimgty');



//BOILER CONTROLLER
Route::resource('boilercontrols','BoilerControlsController');
//BOLTS ON
Route::resource('boltson','BoltOnsController');
//CURRENT BOILER TYPE
Route::resource('current-boiler-type','CurrentBoilerTypeController');
//CURRENT BOILER LOCATION
Route::resource('current-boiler-location','CurrentBoilerLocationController');
//CURRENT BOILER FLUE
Route::resource('current-boiler-flue','CurrentFlueController');
//Existing Shower
Route::resource('existing-shower','ExistingShowerController');
//Newfuel Type
Route::resource('newfueltype','NewfuleTypeController');
//NEW BOILER TYPE
Route::resource('newboilertype','NewBoilerTypeController');
//NEW FLUE
Route::resource('newflue','NewFlueController');
//NEW FLUE LOCATION
Route::resource('newfluelocation','NewFlueLocationController');
//CONDENSATE TERMINATION
Route::resource('condensate-termination','CondensateTerminationController');
//NEW CONTROLS
Route::resource('newcontrols','NewControlsController');
//NEW REMOVALS
Route::resource('removals','RemovalsController');
//Cupboard Need Altering
Route::resource('cupboard-n-alt','CupboardNeedAltController');
//Cupboard Need Altering
Route::resource('chemsystreat','ChemicalSystemTreatmentController');
//Gas Supply Requirements
Route::resource('gassupplyreq','GasSupplyRequirementsController');
//Gas Supply Requirements
Route::resource('electricalwork','ElectricalWorkRequiredController');
//Gas Supply Length
Route::resource('gasupplylength','GasSupplyLengthController');
//ACM
Route::resource('acmpart','ACMController');
//Parking Requirements
Route::resource('parking-req','ParkingRequirementController');
//Flue Kits
Route::resource('fluekitss','FlueKitController');
//Flue Kits Details
Route::resource('fluekitdetails','FlueKitDetailsController');
//Magnetic System Filter
Route::resource('magsysfil','MagneticSystemFilterController');
//Magnetic System Filter
Route::resource('vencyldim','VentedCylinderDimensionController');
//Radiator Requirements
Route::resource('radiatorrequirement','RadiatorRequirementsController');

Route::get('/showaddonprice/{uniqid}',function($uniqid){

 return view('NewQgenaration._addOnPrice',compact('uniqid'));
});


Route::get('/salesusershowaddonprice/{uniqid}',function($uniqid){

 return view('UserSales.NewQgenaration._salesaddOnPrice',compact('uniqid'));
});



//Radiator Measurement / Location*
Route::resource('qtn-radi-mesur-location','QtnRadiatorMeasurementLocationController');
//Thermostatic Radiator Valves*
Route::resource('qtn-thermo-radi-valvs','QtnThermostaticRadiatorValvesController');
//Towel Rail Measurement / Location
Route::resource('qtn-tow-rail-meas','QtnTowelRailMeasurementController');
//Towel Rail Valves*
Route::resource('qtn-tow-rail-valv','QtnTowelRailValvesController');
//Towel Rail Valves*
Route::resource('qtn_optional_descriptions','QtnOptionalDescriptionController');
//Height
Route::resource('heightset','HeightController');
//Height update
Route::post('heightupdater', 'HeightController@heightupdater');
//Width
Route::resource('widthset','WidthController');

//Width update
Route::post('widthsetupdate', 'WidthController@widthsetupdater');



//LEAD QUOTAION
Route::resource('lead-quotaion','LeadQuotationController');

Route::resource('pdfgenerate','PDFController');

Route::get('/geteventbyuser/{userid}','ScheduletaskController@getEventsByuser');

Route::get('/clear', function() {
   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');
   return "Cleared!";
});

@extends('layouts.master')
@section('css')
<style>
.row{
  margin-left: 7px !important;
}
</style>
@endsection
@section('content')

<div class="container-fluid">

   <div class="row">

      <div class="col-lg-8">

         <div class="card">

            <div class="card-body">

               <div id="saleschartContainer" style="height: 370px; width: 100%;"></div>

               <div class="input-group">

                  <div id="apex_line2">

                  </div>

                  <div class="col-md-12">

                     <div class="mainDateRange">

                        <h3>Monthly Lead Report</h3>

                        <div class="dateMain">

                           <div class="range">

                              <div id="salesreportrange" class="pull-right" style="background: #fff;cursor: pointer;padding: 5px 10px;border: 1px solid #ccc;width: 250px;margin-right: 18px;">

                                 <i class="fa fa-calendar"></i>&nbsp;

                                 <span>July 7, 2020 - August 5, 2020</span> <i class="fa fa-caret-down"></i>

                              </div>

                              <button type="button" class="btn btn-primary waves-effect waves-light" style="box-shadow: none" data-toggle="modal" data-animation="bounce" data-target="#filter_modal_report">

                              Advance Search <i class="mdi mdi-chevron-right"></i></button>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <!--end card-body-->

            </div>

            <!--end card-->

         </div>

      </div>

      <div class="col-lg-4">

         <div class="card">

            <div class="card-body">

              <div id="chartContainermeschedule" style="height: 215px; width: 100%;"></div>

							 <div id="chartContainersalesclosed" style="height: 215px; width: 100%;"></div>

            </div>

         </div>

      </div>



   </div>

</div>

<div class="row">

   <div class="col-md-12">

      <div class="loader"></div>

      <div class="get_sales_data_month">

      </div>

   </div>

</div>

@section('modal')

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-modal="true" style="padding-right: 17px;" id="filter_modal_report">

   <div class="modal-dialog modal-sm">

      <div class="modal-content">

         <div class="modal-body p-0">

            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">

               <div class="toast-header to-he">

                  <button type="button" class="ml-2 mb-1 close float-right" data-dismiss="modal" aria-label="Close">

                  <span aria-hidden="true">×</span>

                  </button>

               </div>

               <div class="toast-body">

                  <form>

                     <div class="form-row">

                        <div class="col-md-6">

                           <div class="form-group">

                              <label>Lead Source</label>

                              @php

                              $leadsource = App\Lead::select('leadsource')->distinct()->get();

                              @endphp

                              <select class="form-control" name="leadsourcefilter">

                                 <option></option>

                                 @foreach($leadsource as $key => $val)

                                 <option value="{{$val->leadsource}}">{{$val->leadsource}}</option>

                                 @endforeach

                              </select>

                           </div>

                        </div>

                        <div class="col-md-6">

                           <div class="form-group">

                              <label>Lead Owner</label>

                              @php

                              $users = App\User::select('name','id')->distinct()->get();

                              @endphp

                              <select class="form-control" name="leadownerfilter">

                                 <option></option>

                                 @foreach($users as $key => $val)

                                 <option value="{{$val->id}}">{{$val->name}}</option>

                                 @endforeach

                              </select>

                           </div>

                        </div>

                     </div>

                  </form>

               </div>

            </div>

         </div>

      </div>

      <!-- /.modal-content -->

   </div>

   <!-- /.modal-dialog -->

</div>

@endsection

@endsection

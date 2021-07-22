@extends('layouts.master')
@section('content')
<div class="container-fluid">

       @if(count($alltemplates) > 0)
       <div data-v-39d973b5="" class="hl_marketing--heading --info"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info" style="margin-top:20px;margin-right: 10px;"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg><div data-v-39d973b5="" class="hl_marketing--heading-text"><h3 data-v-39d973b5="">Draft Mode</h3><p data-v-39d973b5="">This campaign is a draft. It cannot be used until it is published.</p></div></div>
              @foreach($alltemplates as $key => $val)
                  
                  <div class="card">  
                      <div class="card-body">
                              <div class="main-sms">
                      <div class="sms-child">
                          <div class="calendar-day">
                            <div class="calendar-day-inner">
                              <p style="margin:0">0</p>
                              <h5>Minutes</h5>
                            </div>
                          </div>
                          <div class="event-card">
                              <div class="event-card--top">
                                  <div class="row event-card--title">
                                    {!! $val->body !!}
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                      </div>
                  </div>  
              @endforeach
            @else
      <div class="card card-default">
        <div class="card-body card-addevent">
                
            <button type="button" class="btn btn-success" style="box-shadow:none" data-toggle="modal" data-target="#smsid">Add Event</button>
            
        </div>
      </div>
       </div>
       @endif

<div class="modal fade" id="smsid">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <button type="button" class="close float-right" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

              <form action="{{route('template.store')}}" method="POST">
                @csrf
                <input type="hidden" name="slug" value="{{$slug}}"/>
                <div class="card" style="box-shadow:none; margin:0">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title" name="title"/>
                      </div>
                    <textarea id="myarea" name="template"></textarea>
                    <div class="row mt-3 ml-0">
                      <label >Custom Time</label>&nbsp;
                      <label class="switch" style="margin-left:37px">
                        <input type="checkbox" id="con">
                        <span class="slider round" ></span>
                      </label>
                    </div>
                    <div class="scheduling">
                        <div class="condition">
                          <div class="row mt-3">
                              
                              <div class="col-md-4">
                                  <label>Start time</label>
                              </div>
                              <div class="col-md-8">
                                  <select class="form-control" name="start_time">
                                      <option>12:00 am</option>
                                      <option>12:30 am</option>
                                      <option>01:00 am</option>
                                      <option>01:30 am</option>
                                      <option>02:00 am</option>
                                      <option>02:30 am</option>
                                      <option>03:00 am</option>
                                      <option>03:30 am</option>
                                      <option>04:00 am</option>
                                      <option>04:30 am</option>
                                      <option>05:00 am</option>
                                      <option>05:30 am</option>
                                      <option>06:00 am</option>
                                      <option>06:30 am</option>
                                      <option>07:00 am</option>
                                      <option>07:30 am</option>
                                      <option>07:30 am</option>
                                      <option>08:00 am</option>
                                      <option>08:30 am</option>
                                      <option>09:00 am</option>
                                      <option>09:30 am</option>
                                      <option>10:00 am</option>
                                      <option>10:30 am</option>
                                      <option>11:00 am</option>
                                      <option>11:30 am</option>
                                      <option>12:00 pm</option>
                                      <option>12:30 pm</option>
                                      <option>01:00 pm</option>
                                      <option>01:30 pm</option>
                                      <option>02:00 pm</option>
                                      <option>02:30 pm</option>
                                      <option>03:00 pm</option>
                                      <option>03:30 pm</option>
                                      <option>04:00 pm</option>
                                      <option>04:30 pm</option>
                                      <option>05:00 pm</option>
                                      <option>05:30 pm</option>
                                      <option>06:00 pm</option>
                                      <option>06:30 pm</option>
                                      <option>07:00 pm</option>
                                      <option>07:30 pm</option>
                                      <option>08:00 pm</option>
                                      <option>08:30 pm</option>
                                      <option>09:00 pm</option>
                                      <option>09:30 pm</option>
                                      <option>10:00 pm</option>
                                      <option>10:30 pm</option>
                                      <option>11:00 pm</option>
                                      <option>11:30 pm</option>

                                  </select>
                              </div>
                          </div>

                           <div class="row mt-3">
                              
                              <div class="col-md-4">
                                  <label>End time</label>
                              </div>
                              <div class="col-md-8">
                                  <select class="form-control" name="end_time">
                                      <option>12:00 am</option>
                                      <option>12:30 am</option>
                                      <option>01:00 am</option>
                                      <option>01:30 am</option>
                                      <option>02:00 am</option>
                                      <option>02:30 am</option>
                                      <option>03:00 am</option>
                                      <option>03:30 am</option>
                                      <option>04:00 am</option>
                                      <option>04:30 am</option>
                                      <option>05:00 am</option>
                                      <option>05:30 am</option>
                                      <option>06:00 am</option>
                                      <option>06:30 am</option>
                                      <option>07:00 am</option>
                                      <option>07:30 am</option>
                                      <option>07:30 am</option>
                                      <option selected>08:00 am</option>
                                      <option>08:30 am</option>
                                      <option>09:00 am</option>
                                      <option>09:30 am</option>
                                      <option>10:00 am</option>
                                      <option>10:30 am</option>
                                      <option>11:00 am</option>
                                      <option>11:30 am</option>
                                      <option>12:00 pm</option>
                                      <option>12:30 pm</option>
                                      <option>01:00 pm</option>
                                      <option>01:30 pm</option>
                                      <option>02:00 pm</option>
                                      <option>02:30 pm</option>
                                      <option>03:00 pm</option>
                                      <option>03:30 pm</option>
                                      <option>04:00 pm</option>
                                      <option>04:30 pm</option>
                                      <option>05:00 pm</option>
                                      <option>05:30 pm</option>
                                      <option>06:00 pm</option>
                                      <option>06:30 pm</option>
                                      <option>07:00 pm</option>
                                      <option>07:30 pm</option>
                                      <option>08:00 pm</option>
                                      <option>08:30 pm</option>
                                      <option>09:00 pm</option>
                                      <option>09:30 pm</option>
                                      <option>10:00 pm</option>
                                      <option>10:30 pm</option>
                                      <option>11:00 pm</option>
                                      <option>11:30 pm</option>

                                  </select>
                              </div>
                          </div>
                         
                        </div>
                    </div>
                    <div class="form-group mt-4 text-center mb-1">
                      <button tupe="submit" class="btn btn-primary" style="box-shadow:none">Save</button>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection
@extends('layouts.master')
@section('content')

                    <!-- Page-Title -->
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="master">
                                            
                                             @if($tasks->count() > 0)

                                                @foreach($tasks as $key=>$task)
                                                      <div class="list mytask">
                                                            <div class="head">
                                                                <h3 class="mb-3 mt-3">{{$task->title}}</h3>
                                                                <span class="badge badge-md badge-soft-danger" style="color:#fff !important;" id="leadcount">

                                                                @php ($to = App\Task::where('status_id',$task->id)->where('lead_id',$lead_id)->get()) @endphp
                                                                {{count($to)}}&nbsp;Leads</span>
                                                                <span class="badge badge-md badge-soft-success float-right" id="price">
                                                                     @php ($total = 0) @endphp
                                                            @foreach(App\Task::where('status_id',$task->id)->where('lead_id',$lead_id)->get() as $all)
                                                                           @php ($total +=$all->amount) @endphp
                                                                         @endforeach
                                                                    $&nbsp;{{$total}}
                                                                </span>
                                                            </div>
                                                            @php ($ss = App\Task::where('status_id',$task->id)->where('lead_id',$lead_id)->get()) @endphp
                                                            <div class="list-item {{count($ss) > 0 ? '' : 'dropify-wrapper' }}" id="project{{$key+1}}" status="{{$task->id}}">
                                                                    
                                                            
                                                            @if(count($ss) > 0)
                                                                            @foreach($ss as $key => $val)
                                                                            
                                                                              <div class="chh" status-id="{{$task->id}}" row-id="{{$val->id}}" id="dealdelete{{$val->id}}">
                                                                                <div class="d-flex" style="justify-content:space-between"><strong style="
    font-size: 12px;
    color: red;
">{{App\User::where('id',$val->lead->userAssign_id)->select('name')->first()->name}}</strong></p><span class="destroy float-right" data-id="{{$val->id}}" lead-id="{{$val->lead_id}}"><i class="fas fa-window-close"></i></span></div>
                                                                                
                                                                                <div class="ch">
                                                                                       <h5 class="mb-2" style="font-weight: 600">{{$val->description}}
                                                                                            <span class="price float-right">{{$val->amount}}</span>
                                                                                      </h5>
                                                                                
                                                                                 <div class="child">
                                                                                <p class="lname">{{$val->lead->firstname}}</p>
                                                                                <p class="dt">{{\Carbon\Carbon::parse($val->lead->created_at)->format('d-m-Y H:i:s')}}</p>
                                                                                </div>

                                                                                </div>
                                                                              
                                                                             </div>
                                                               
                                                                            @endforeach
                                                                            @else
                                                                                                                                                      
                                                                    <div class="ch">
                                                                                
                                                                             </div>
                                                                             @endif
                                                                    
                                                                    
                                                              </div>
                                                            </div>
                                                @endforeach

                                             @endif

                                        </div>
                                      
                                   
                    </div><!-- /.modal-dialog -->
                </div>

@endsection
@section('script')

@endsection
<style>
.dealStage{
  padding: 2px 12px;
  color: white !important;
  border-radius: 10px;
  font-weight: 800;
  font-size: 11px;

  -webkit-box-shadow: 0px 6px 15px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 6px 15px -4px rgba(0,0,0,0.75);
box-shadow: 0px 6px 15px -4px rgba(0,0,0,0.75);
}
.dealAmount{
  font-weight: 900;
}
</style>
@if(count($lists)>0)
  @foreach($lists as $list)
  <tr>
    <td><img src="{{URL::to($list->image_path)}}" class="z-depth-1 rounded-circle" height="50px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';" style="-webkit-box-shadow: 0px 6px 15px -4px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 6px 15px -4px rgba(0,0,0,0.75);
  box-shadow: 0px 6px 15px -4px rgba(0,0,0,0.75);"></td>
    <td><a href="{{URL::to('SuperAdmin/'.$list->id)}}">{{$list->first_name}} {{$list->last_name}}</a></td>
    <td><a href="{{URL::to('SuperAdmin/'.$list->id)}}">{{$list->company_name}}</a></td>
    <td><a href="{{URL::to('SuperAdmin/'.$list->id)}}">{{$list->phone_number}}</a></td>
    <td><a href="{{URL::to('SuperAdmin/'.$list->id)}}">{{$list->website_url}}</a></td>
    <td><a href="{{URL::to('SuperAdmin/'.$list->id)}}">{{$list->deal_name}}</a></td>
    <td><a href="{{URL::to('SuperAdmin/'.$list->id)}}">
      @if($list->deal_stage == 'ideal_proposal')
        <span  class="dealStage" style="background-color:#4285F4; color: white">Ideal Proposal</span>
      @elseif($list->deal_stage == 'follow_up')
        <span  class="dealStage" style="background-color:#2BBBAD; color: white">Follow Up</span>
      @elseif($list->deal_stage == 'negotiation')
        <span  class="dealStage" style="background-color:#ffbb33; color: white">Negotiation</span>
      @elseif($list->deal_stage == 'lost')
        <span  class="dealStage" style="background-color:#ff4444; color: white">Lost</span>
      @elseif($list->deal_stage == 'won')
        <span  class="dealStage" style="background-color:#00C851; color: white">Won</span>
      @endif
    </a></td>
    <td><a href="{{URL::to('SuperAdmin/'.$list->id)}}" class="dealAmount">${{$list->deal_amount}}</a></td>
    <td><a href="{{URL::to('SuperAdmin/'.$list->id)}}">{{$list->country}}</a></td>
  </tr>
  @endforeach
@endif

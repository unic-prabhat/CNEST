@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="hl_marketing--header">
		<div class="container-fluid">
			<div class="hl_controls">
				<div class="hl_controls--left flex">
					<h2>Customer Acquisition</h2>
				</div>
				<div class="hl_controls--right">
					<button type="button" class="btn btn-info" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> New Folder</button>&nbsp;
						<button class="btn btn-info" data-toggle="modal" data-animation="bounce" data-target=".bs-exa"><i class="icon icon-plus"></i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Create Campaign </button>
					</div></div><ul class="hl_marketing--nav">
						<li class="active">
							<a href="javascript:void(0);">My Campaigns</a>
						</li>
					</ul>

          <div class="hl_marketing--heading-text"><h3>Get More Customers</h3><p> Customer acquisition campaigns help you to produce more "hot" sales leads who are ready to engage. </p></div>
				</div>
			</div>

			<div class="card card-default">
				<div class="card-body">
               @if(isset($data))
               <ul class="parent_templ">

                   @forelse($data as $folder)
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> {{$folder->folder_name}}&nbsp;({{$folder->campaigns->count()}})

                        <ul id="child{{$folder->id}}" class="child">
                          @if(!empty($folder->campaigns))
                              @foreach($folder->campaigns as $campaign)
                              <li><a href="{{route('template.slug',$campaign->slug)}}">{{$campaign->campaign_name}}</a></li>
                              @endforeach
                          @endif
                        </ul>

                    </li>
                @empty
                    no folder found
                @endforelse
               </ul>
              @endif
                @if(isset($df))
                    <ul class="parent_templ2">
                    @foreach($df as $dm)
                        <li><a href="{{route('template.slug',$dm->slug)}}">{{$dm->campaign_name}}</a></li>
                    @endforeach
                    </ul>
                @endif
				</div>
			</div>
      <div class="modal fade bs-example-modal-sm col-md-12" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-modal="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="mySmallModalLabel">Small modal</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{route('template.store')}}" method="post">
                                                                      @csrf
                                                                        <div class="form-group">
                                                                            <label>Folder Name</label>
                                                                            <input type="text" name="folder_name" class="form-control"/>
                                                                        </div>
                                                                        <div class="form-group">
                                                                         <button type="submit" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>

                                                     <div class="modal fade bs-exa col-md-12" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-modal="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="mySmallModalLabel">Create Campaign</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{route('campaign.store')}}" method="post">
                                                                      @csrf
                                                                        <div class="form-group">
                                                                            <label>Folder Name</label>
                                                                            <select name="folder_id" id="" class="form-control">
                                                                              <option value=""></option>
                                                                              @foreach(App\Folder::all() as $fol)
                                                                                    <option value="{{$fol->id}}">{{$fol->folder_name}}</option>
                                                                              @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="">Campaign</label>
                                                                        <input type="text" name="campaign_name" id="" class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                         <button type="submit" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
</div>



@endsection

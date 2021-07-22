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
					<button type="button" class="btn btn-info" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-sm">New Folder</button>&nbsp;
						<button class="btn btn-success"><i class="icon icon-plus"></i> Create Campaign </button>
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
            @if($data->count() > 0)
             {{$data}}
            @endif
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
</div>



@endsection
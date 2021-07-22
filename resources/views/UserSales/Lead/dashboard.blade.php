@extends('UserSales.layouts.master')
@section('content')

        <!-- Top Bar End -->

            <!-- Page Content-->
                    @include('UserSales.common.message')
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Dashboard</li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="smile" class="align-self-center icon-lg icon-dual-warning"></i>
                                            </div>
                                        </div>
                                        <div class="col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-1 text-muted">Total Leads</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold">{{count(App\Lead::get())}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="users" class="align-self-center icon-lg icon-dual-purple"></i>
                                            </div>
                                        </div>
                                        <div class="col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-1 text-muted">New Leads</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold">{{count(App\Lead::where('created_at','>=',date('Y-m-d'))->get())}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="headphones" class="align-self-center icon-lg icon-dual-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-0 text-muted">Lead Of Week</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold d-inline-block">{{count(App\Lead::whereBetween('created_at', [Carbon\Carbon::now()->startOfWeek(),
                                                Carbon\Carbon::now()->endOfWeek()])->get())}}
</h3>
                                                <span class="badge badge-soft-success mt-1 shadow-none">Active</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="check-square" class="align-self-center icon-lg icon-dual-pink"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-1 text-muted">Last Month</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold">{{count(App\Lead::where(
    'created_at', '>=', Carbon\Carbon::now()->firstOfMonth()->toDateTimeString()
)->get())}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                            <div class="progress-bar bg-pink" role="progressbar" style="width: 22%;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->


                </div>



@endsection
@section('script')

@endsection

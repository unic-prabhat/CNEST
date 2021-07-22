@extends('layouts.master')
@section('css')
<style>
.row {
    margin-left: 7px !important;
  }
</style>
@endsection
@section('content')

        <!-- Top Bar End -->

            <!-- Page Content-->
                    @include('crm_new.common.message')
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
                                                <h3 class="mt-0 mb-1 font-weight-semibold"><a href="{{URL::to('leads')}}">{{count(App\Lead::get())}}</a></h3>
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
                                                <h3 class="mt-0 mb-1 font-weight-semibold d-inline-block"><a href="{{URL::to('leadofweek')}}">{{count(App\Lead::whereBetween('created_at', [Carbon\Carbon::now()->startOfWeek(),
                                                Carbon\Carbon::now()->endOfWeek()])->get())}}</a>

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
                                                <h3 class="mt-0 mb-1 font-weight-semibold"><a href="{{URL::to('lastmlead')}}">{{count(App\Lead::where(
    'created_at', '>=', Carbon\Carbon::now()->firstOfMonth()->toDateTimeString()
)->get())}}</a></h3>
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

                    <!-- <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Leads And Vendors</h4>
                                    <div class="" style="position: relative;">
                                        <div id="liveVisits" class="apex-charts" style="min-height: 395px;"><div id="apexchartsbfdb6" class="apexcharts-canvas apexchartsbfdb6 apexcharts-theme-light apexcharts-zoomable" style="width: 642px; height: 380px;"><svg id="SvgjsSvg1189" width="642" height="380" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="642" height="380"><div class="apexcharts-legend apexcharts-align-right position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 0px;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(42, 119, 244); color: rgb(42, 119, 244); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="New%20Visits" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">New Visits</span></div><div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(28, 202, 184); color: rgb(28, 202, 184); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Unique%20Visits" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Unique Visits</span></div></div><style type="text/css">

      .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
      }
      .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
        flex-wrap: wrap
      }
      .apexcharts-legend.position-right, .apexcharts-legend.position-left {
        flex-direction: column;
        bottom: 0;
      }
      .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
        justify-content: flex-start;
      }
      .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {
        justify-content: center;
      }
      .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {
        justify-content: flex-end;
      }
      .apexcharts-legend-series {
        cursor: pointer;
        line-height: normal;
      }
      .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
        display: flex;
        align-items: center;
      }
      .apexcharts-legend-text {
        position: relative;
        font-size: 14px;
      }
      .apexcharts-legend-text *, .apexcharts-legend-marker * {
        pointer-events: none;
      }
      .apexcharts-legend-marker {
        position: relative;
        display: inline-block;
        cursor: pointer;
        margin-right: 3px;
        border-style: solid;
      }

      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
        display: inline-block;
      }
      .apexcharts-legend-series.apexcharts-no-click {
        cursor: auto;
      }
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
        display: none !important;
      }
      .apexcharts-inactive-legend {
        opacity: 0.45;
      }</style></foreignObject><g id="SvgjsG1191" class="apexcharts-inner apexcharts-graphical" transform="translate(33.5625, 50)"><defs id="SvgjsDefs1190"><clipPath id="gridRectMaskbfdb6"><rect id="SvgjsRect1196" width="604.1640625" height="296.348" x="-4" y="-2" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskbfdb6"><rect id="SvgjsRect1197" width="598.1640625" height="294.348" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1203" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1204" stop-opacity="1" stop-color="rgba(245,85,85,1)" offset="0"></stop><stop id="SvgjsStop1205" stop-opacity="1" stop-color="rgba(42,119,244,1)" offset="0.5"></stop><stop id="SvgjsStop1206" stop-opacity="1" stop-color="rgba(42,119,244,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1208" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1209" flood-color="#45404a2e" flood-opacity="0.35" result="SvgjsFeFlood1209Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1210" in="SvgjsFeFlood1209Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1210Out"></feComposite><feOffset id="SvgjsFeOffset1211" dx="0" dy="12" result="SvgjsFeOffset1211Out" in="SvgjsFeComposite1210Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1212" stdDeviation="2 " result="SvgjsFeGaussianBlur1212Out" in="SvgjsFeOffset1211Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1213" result="SvgjsFeMerge1213Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1214" in="SvgjsFeGaussianBlur1212Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1215" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1216" in="SourceGraphic" in2="SvgjsFeMerge1213Out" mode="normal" result="SvgjsFeBlend1216Out"></feBlend></filter><linearGradient id="SvgjsLinearGradient1220" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1221" stop-opacity="1" stop-color="rgba(181,172,73,1)" offset="0"></stop><stop id="SvgjsStop1222" stop-opacity="1" stop-color="rgba(28,202,184,1)" offset="0.5"></stop><stop id="SvgjsStop1223" stop-opacity="1" stop-color="rgba(28,202,184,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1225" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1226" flood-color="#45404a2e" flood-opacity="0.35" result="SvgjsFeFlood1226Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1227" in="SvgjsFeFlood1226Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1227Out"></feComposite><feOffset id="SvgjsFeOffset1228" dx="0" dy="12" result="SvgjsFeOffset1228Out" in="SvgjsFeComposite1227Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1229" stdDeviation="2 " result="SvgjsFeGaussianBlur1229Out" in="SvgjsFeOffset1228Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1230" result="SvgjsFeMerge1230Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1231" in="SvgjsFeGaussianBlur1229Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1232" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1233" in="SourceGraphic" in2="SvgjsFeMerge1230Out" mode="normal" result="SvgjsFeBlend1233Out"></feBlend></filter></defs><line id="SvgjsLine1195" x1="270.4836647727273" y1="0" x2="270.4836647727273" y2="292.348" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="270.4836647727273" y="0" width="1" height="292.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1234" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1235" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1237" font-family="Helvetica, Arial, sans-serif" x="0" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1238">Jan</tspan><title>Jan</title></text><text id="SvgjsText1240" font-family="Helvetica, Arial, sans-serif" x="54.19673295454546" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1241">Feb</tspan><title>Feb</title></text><text id="SvgjsText1243" font-family="Helvetica, Arial, sans-serif" x="108.3934659090909" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1244">Mar</tspan><title>Mar</title></text><text id="SvgjsText1246" font-family="Helvetica, Arial, sans-serif" x="162.59019886363635" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1247">Apr</tspan><title>Apr</title></text><text id="SvgjsText1249" font-family="Helvetica, Arial, sans-serif" x="216.78693181818178" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1250">May</tspan><title>May</title></text><text id="SvgjsText1252" font-family="Helvetica, Arial, sans-serif" x="270.9836647727272" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1253">Jun</tspan><title>Jun</title></text><text id="SvgjsText1255" font-family="Helvetica, Arial, sans-serif" x="325.18039772727263" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1256">Jul</tspan><title>Jul</title></text><text id="SvgjsText1258" font-family="Helvetica, Arial, sans-serif" x="379.3771306818181" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1259">Aug</tspan><title>Aug</title></text><text id="SvgjsText1261" font-family="Helvetica, Arial, sans-serif" x="433.5738636363635" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1262">Sep</tspan><title>Sep</title></text><text id="SvgjsText1264" font-family="Helvetica, Arial, sans-serif" x="487.770596590909" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1265">Oct</tspan><title>Oct</title></text><text id="SvgjsText1267" font-family="Helvetica, Arial, sans-serif" x="541.9673295454545" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1268">Nov</tspan><title>Nov</title></text><text id="SvgjsText1270" font-family="Helvetica, Arial, sans-serif" x="596.1640625" y="321.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1271">Dec</tspan><title>Dec</title></text></g><line id="SvgjsLine1272" x1="0" y1="293.348" x2="596.1640625" y2="293.348" stroke="#45404a2e" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1285" class="apexcharts-grid"><g id="SvgjsG1286" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1300" x1="0" y1="0" x2="596.1640625" y2="0" stroke="#45404a2e" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1301" x1="0" y1="73.087" x2="596.1640625" y2="73.087" stroke="#45404a2e" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1302" x1="0" y1="146.174" x2="596.1640625" y2="146.174" stroke="#45404a2e" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1303" x1="0" y1="219.26100000000002" x2="596.1640625" y2="219.26100000000002" stroke="#45404a2e" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1304" x1="0" y1="292.348" x2="596.1640625" y2="292.348" stroke="#45404a2e" stroke-dasharray="4" class="apexcharts-gridline"></line></g><g id="SvgjsG1287" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1288" x1="0" y1="293.348" x2="0" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1289" x1="54.19673295454545" y1="293.348" x2="54.19673295454545" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1290" x1="108.3934659090909" y1="293.348" x2="108.3934659090909" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1291" x1="162.59019886363637" y1="293.348" x2="162.59019886363637" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1292" x1="216.7869318181818" y1="293.348" x2="216.7869318181818" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1293" x1="270.98366477272725" y1="293.348" x2="270.98366477272725" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1294" x1="325.1803977272727" y1="293.348" x2="325.1803977272727" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1295" x1="379.37713068181813" y1="293.348" x2="379.37713068181813" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1296" x1="433.57386363636357" y1="293.348" x2="433.57386363636357" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1297" x1="487.770596590909" y1="293.348" x2="487.770596590909" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1298" x1="541.9673295454545" y1="293.348" x2="541.9673295454545" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1299" x1="596.1640625" y1="293.348" x2="596.1640625" y2="299.348" stroke="#45404a2e" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1306" x1="0" y1="292.348" x2="596.1640625" y2="292.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1305" x1="0" y1="1" x2="0" y2="292.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1199" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1217" class="apexcharts-series" seriesName="UniquexVisits" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1224" d="M 0 292.348C 18.968856534090907 292.348 35.22787642045455 215.60665 54.19673295454545 215.60665C 73.16558948863636 215.60665 89.424609375 270.42190000000005 108.3934659090909 270.42190000000005C 127.36232244318182 270.42190000000005 143.62134232954546 171.75445000000002 162.59019886363637 171.75445000000002C 181.55905539772726 171.75445000000002 197.81807528409092 233.8784 216.7869318181818 233.8784C 235.75578835227273 233.8784 252.0148082386364 143.25052 270.9836647727273 143.25052C 289.9525213068182 143.25052 306.21154119318186 222.91535 325.18039772727275 222.91535C 344.14925426136364 222.91535 360.4082741477273 113.28485 379.3771306818182 113.28485C 398.3459872159091 113.28485 414.60500710227274 238.26362000000003 433.5738636363636 238.26362000000003C 452.5427201704546 238.26362000000003 468.8017400568182 135.21095000000003 487.7705965909091 135.21095000000003C 506.73945312500007 135.21095000000003 522.9984730113637 190.02620000000002 541.9673295454546 190.02620000000002C 560.9361860795455 190.02620000000002 577.1952059659092 7.308700000000016 596.1640625 7.308700000000016" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1220)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="3" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskbfdb6)" filter="url(#SvgjsFilter1225)" pathTo="M 0 292.348C 18.968856534090907 292.348 35.22787642045455 215.60665 54.19673295454545 215.60665C 73.16558948863636 215.60665 89.424609375 270.42190000000005 108.3934659090909 270.42190000000005C 127.36232244318182 270.42190000000005 143.62134232954546 171.75445000000002 162.59019886363637 171.75445000000002C 181.55905539772726 171.75445000000002 197.81807528409092 233.8784 216.7869318181818 233.8784C 235.75578835227273 233.8784 252.0148082386364 143.25052 270.9836647727273 143.25052C 289.9525213068182 143.25052 306.21154119318186 222.91535 325.18039772727275 222.91535C 344.14925426136364 222.91535 360.4082741477273 113.28485 379.3771306818182 113.28485C 398.3459872159091 113.28485 414.60500710227274 238.26362000000003 433.5738636363636 238.26362000000003C 452.5427201704546 238.26362000000003 468.8017400568182 135.21095000000003 487.7705965909091 135.21095000000003C 506.73945312500007 135.21095000000003 522.9984730113637 190.02620000000002 541.9673295454546 190.02620000000002C 560.9361860795455 190.02620000000002 577.1952059659092 7.308700000000016 596.1640625 7.308700000000016" pathFrom="M -1 292.348L -1 292.348L 54.19673295454545 292.348L 108.3934659090909 292.348L 162.59019886363637 292.348L 216.7869318181818 292.348L 270.9836647727273 292.348L 325.18039772727275 292.348L 379.3771306818182 292.348L 433.5738636363636 292.348L 487.7705965909091 292.348L 541.9673295454546 292.348L 596.1640625 292.348"></path><g id="SvgjsG1218" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1312" r="0" cx="270.9836647727273" cy="143.25052" class="apexcharts-marker wa34y70eo no-pointer-events" stroke="#ffffff" fill="#1ccab8" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1200" class="apexcharts-series" seriesName="NewxVisits" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1207" d="M 0 292.348C 18.968856534090907 292.348 35.22787642045455 248.4958 54.19673295454545 248.4958C 73.16558948863636 248.4958 89.424609375 277.73060000000004 108.3934659090909 277.73060000000004C 127.36232244318182 277.73060000000004 143.62134232954546 226.5697 162.59019886363637 226.5697C 181.55905539772726 226.5697 197.81807528409092 259.45885 216.7869318181818 259.45885C 235.75578835227273 259.45885 252.0148082386364 211.9523 270.9836647727273 211.9523C 289.9525213068182 211.9523 306.21154119318186 252.15015 325.18039772727275 252.15015C 344.14925426136364 252.15015 360.4082741477273 197.3349 379.3771306818182 197.3349C 398.3459872159091 197.3349 414.60500710227274 260.18972 433.5738636363636 260.18972C 452.5427201704546 260.18972 468.8017400568182 211.9523 487.7705965909091 211.9523C 506.73945312500007 211.9523 522.9984730113637 237.53275000000002 541.9673295454546 237.53275000000002C 560.9361860795455 237.53275000000002 577.1952059659092 146.174 596.1640625 146.174" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1203)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskbfdb6)" filter="url(#SvgjsFilter1208)" pathTo="M 0 292.348C 18.968856534090907 292.348 35.22787642045455 248.4958 54.19673295454545 248.4958C 73.16558948863636 248.4958 89.424609375 277.73060000000004 108.3934659090909 277.73060000000004C 127.36232244318182 277.73060000000004 143.62134232954546 226.5697 162.59019886363637 226.5697C 181.55905539772726 226.5697 197.81807528409092 259.45885 216.7869318181818 259.45885C 235.75578835227273 259.45885 252.0148082386364 211.9523 270.9836647727273 211.9523C 289.9525213068182 211.9523 306.21154119318186 252.15015 325.18039772727275 252.15015C 344.14925426136364 252.15015 360.4082741477273 197.3349 379.3771306818182 197.3349C 398.3459872159091 197.3349 414.60500710227274 260.18972 433.5738636363636 260.18972C 452.5427201704546 260.18972 468.8017400568182 211.9523 487.7705965909091 211.9523C 506.73945312500007 211.9523 522.9984730113637 237.53275000000002 541.9673295454546 237.53275000000002C 560.9361860795455 237.53275000000002 577.1952059659092 146.174 596.1640625 146.174" pathFrom="M -1 292.348L -1 292.348L 54.19673295454545 292.348L 108.3934659090909 292.348L 162.59019886363637 292.348L 216.7869318181818 292.348L 270.9836647727273 292.348L 325.18039772727275 292.348L 379.3771306818182 292.348L 433.5738636363636 292.348L 487.7705965909091 292.348L 541.9673295454546 292.348L 596.1640625 292.348"></path><g id="SvgjsG1201" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1313" r="0" cx="270.9836647727273" cy="211.9523" class="apexcharts-marker wl0de907l no-pointer-events" stroke="#ffffff" fill="#2a77f4" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1219" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1202" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1307" x1="0" y1="0" x2="596.1640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1308" x1="0" y1="0" x2="596.1640625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1309" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1310" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1311" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1314" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1315" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1194" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1273" class="apexcharts-yaxis" rel="0" transform="translate(15.5625, 0)"><g id="SvgjsG1274" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1275" font-family="Helvetica, Arial, sans-serif" x="20" y="51.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="regular" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1276">400</tspan></text><text id="SvgjsText1277" font-family="Helvetica, Arial, sans-serif" x="20" y="124.48700000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="regular" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1278">300</tspan></text><text id="SvgjsText1279" font-family="Helvetica, Arial, sans-serif" x="20" y="197.574" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="regular" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1280">200</tspan></text><text id="SvgjsText1281" font-family="Helvetica, Arial, sans-serif" x="20" y="270.661" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="regular" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1282">100</tspan></text><text id="SvgjsText1283" font-family="Helvetica, Arial, sans-serif" x="20" y="343.748" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="regular" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1284">0</tspan></text></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 309.546px; top: 239.348px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; display: flex;">Jun</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(42, 119, 244);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">New Visits: </span><span class="apexcharts-tooltip-text-value">110</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(28, 202, 184);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Unique Visits: </span><span class="apexcharts-tooltip-text-value">94</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 281.804px; top: 344.348px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 22.4844px;">Jun</div></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 643px; height: 381px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class=" d-flex justify-content-between">
                                                <img src="../assets/images/widgets/monthly-re.png" alt="" height="80">
                                                <div class="align-self-center">
                                                    <h2 class="mt-0 mb-2 font-weight-semibold">$955<span class="badge badge-soft-success font-11 ml-2"><i class="fas fa-arrow-up"></i> 8.6%</span></h2>
                                                    <h4 class="title-text mb-0">Monthly Revenue</h4>
                                                </div>
                                            </div>
                                            <hr class="hr-dashed">
                                            <div class="d-flex justify-content-between bg-light p-2 mt-3 rounded">
                                                <div class="align-self-center">
                                                    <h6 class="m-0 font-weight-semibold">Last Month</h6>
                                                </div>
                                                <div class="align-self-center">
                                                    <h4 class=" m-0 font-weight-semibold font-20">$3512.00</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card dash-data-card text-center">
                                                <div class="card-body">
                                                    <div class="icon-info mb-3">
                                                        <i class="fab fa-facebook bg-soft-primary"></i>
                                                    </div>
                                                    <h3 class="text-dark">184k</h3>
                                                    <h6 class="font-14 text-dark">Followers</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card dash-data-card text-center">
                                                <div class="card-body">
                                                    <div class="icon-info mb-3">
                                                        <i class="fab fa-twitter bg-soft-secondary"></i>
                                                    </div>
                                                    <h3 class="text-dark">101k</h3>
                                                    <h6 class="font-14 text-dark">Followers</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body dash-info-carousel">
                                    <h4 class="mt-0 header-title mb-4">New Leads</h4>
                                    <div id="carousel_2" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="media">
                                                    <img src="../assets/images/users/user-1.jpg" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h4 class="mt-0 mb-1 title-text text-dark">Important Watch</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="media">
                                                    <img src="../assets/images/users/user-2.jpg" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h4 class="mt-0 mb-1 title-text">Wireless Headphone</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="media">
                                                    <img src="../assets/images/users/user-3.jpg" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h4 class="mt-0 mb-1 title-text">Leather Bag</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel_2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel_2" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                    <div class="m-0" style="position: relative;">
                                        <div id="apex_radialbar3" class="apex-charts" style="min-height: 267.1px;"><div id="apexchartsbfe0e" class="apexcharts-canvas apexchartsbfe0e apexcharts-theme-light" style="width: 289px; height: 267.1px;"><svg id="SvgjsSvg1316" width="289" height="267.1" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1318" class="apexcharts-inner apexcharts-graphical" transform="translate(7.5, 0)"><defs id="SvgjsDefs1317"><clipPath id="gridRectMaskbfe0e"><rect id="SvgjsRect1319" width="282" height="300" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskbfe0e"><rect id="SvgjsRect1320" width="278" height="300" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><filter id="SvgjsFilter1334" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1335" flood-color="#45404a2e" flood-opacity="0.35" result="SvgjsFeFlood1335Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1336" in="SvgjsFeFlood1335Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1336Out"></feComposite><feOffset id="SvgjsFeOffset1337" dx="0" dy="10" result="SvgjsFeOffset1337Out" in="SvgjsFeComposite1336Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1338" stdDeviation="2 " result="SvgjsFeGaussianBlur1338Out" in="SvgjsFeOffset1337Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1339" result="SvgjsFeMerge1339Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1340" in="SvgjsFeGaussianBlur1338Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1341" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1342" in="SourceGraphic" in2="SvgjsFeMerge1339Out" mode="normal" result="SvgjsFeBlend1342Out"></feBlend></filter></defs><g id="SvgjsG1322" class="apexcharts-radialbar"><g id="SvgjsG1323"><g id="SvgjsG1324" class="apexcharts-tracks"><g id="SvgjsG1325" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 78.49955133918074 197.50044866081925 A 84.14634146341464 84.14634146341464 0 1 1 197.50044866081925 197.50044866081925" fill="none" fill-opacity="1" stroke="rgba(185,193,212,0.85)" stroke-opacity="0.3" stroke-linecap="butt" stroke-width="26.828780487804885" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 78.49955133918074 197.50044866081925 A 84.14634146341464 84.14634146341464 0 1 1 197.50044866081925 197.50044866081925"></path></g></g><g id="SvgjsG1327"><g id="SvgjsG1332" class="apexcharts-series apexcharts-radial-series" seriesName="NewxLeadsxTarget" rel="1" data:realIndex="0"><path id="SvgjsPath1333" d="M 78.49955133918074 197.50044866081925 A 84.14634146341464 84.14634146341464 0 1 1 198.52981246752066 79.54703955893802" fill="none" fill-opacity="0.85" stroke="rgba(114,124,245,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="27.65853658536586" stroke-dasharray="4" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="181" data:value="67" filter="url(#SvgjsFilter1334)" index="0" j="0" data:pathOrig="M 78.49955133918074 197.50044866081925 A 84.14634146341464 84.14634146341464 0 1 1 198.52981246752066 79.54703955893802"></path></g><circle id="SvgjsCircle1328" r="65.7319512195122" cx="138" cy="138" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1329" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1330" font-family="Helvetica, Arial, sans-serif" x="138" y="238" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#8997bd" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">New Leads Target</text><text id="SvgjsText1331" font-family="Helvetica, Arial, sans-serif" x="138" y="204" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="400" fill="#8997bd" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">67%</text></g></g></g></g><line id="SvgjsLine1343" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1344" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 290px; height: 268px;"></div></div><div class="contract-trigger"></div></div></div>
                                    <div class="bg-light p-3 d-flex justify-content-between">
                                        <div>
                                            <h2 class="mb-1 font-weight-semibold">402</h2>
                                            <p class="text-muted mb-0">Recent Leads</p>
                                        </div>
                                        <div class="img-group align-self-center">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="../assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="../assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="../assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="../assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+25</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media mt-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe align-self-center icon-lg icon-dual-primary mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 mb-1">Website</h5>
                                            <a href="#" class="text-primary mb-0 font-14 pr-5">www.example123.com</a>
                                        </div>
                                    </div>
                                    <hr class="hr-dashed">
                                    <div class="media mt-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag align-self-center icon-lg icon-dual-primary mr-2"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 mb-1">Tags</h5>
                                            <span class="badge badge-light">HTML5</span>
                                            <span class="badge badge-light">Css3</span>
                                            <span class="badge badge-light">Python</span>
                                            <span class="badge badge-light">Flutter</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                                    </div>


                <!--  Modal content for the above example -->



            <!-- end page content -->
        <!-- end page-wrapper -->


@endsection
@section('script')

@endsection

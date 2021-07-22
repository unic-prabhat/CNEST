<!DOCTYPE html>

<html lang="en">



    <head>

        <meta charset="utf-8" />

        <title>MPH BOILER</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />

        <meta content="" name="author" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="csrf-token" content="{{ csrf_token() }}" />



        <!-- App favicon -->

        <link rel="shortcut icon" href="../assets/images/favicon.ico">



        <!-- App css -->
         <script src="{{asset('public/new/assets/js/jquery.min.js')}}"></script>
        <link href="{{asset('public/new/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('public/new/assets/css/jquery-ui.min.css')}}" rel="stylesheet">

        <link href="{{asset('public/new/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('public/new/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('public/new/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('public/new/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/themeassets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet"/>
        <link href="{{asset('public/themeassets/plugins/dragula.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/themeassets/css/main.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/themeassets/css/main2.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/themeassets/css/main3.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/themeassets/css/main4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/themeassets/css/main5.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.7/dist/sweetalert2.min.css">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

        <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet"/>

        <link href="{{asset('public/themeassets/plugins/datatables/address.css')}}" rel="stylesheet">
        <link href="{{asset('public/progessbar/progressbar.css')}}" rel="stylesheet">
       
        <link href="https://unpkg.com/smartwizard@5.0.0/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" rel="stylesheet"/>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

        <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
       type="text/css" />
       <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

        <style media="screen">
        a.canvasjs-chart-credit {
                    display: none !important;
        }
        .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
        }

        button#custom-btn {
            position: relative;
            left: -7px;
            border-radius: 6px !important;
            border: 1px solid #7088e9;
            background: #7088e9;
        }

        a.add-new-user {
          position: relative;
          background: #7088e9;
          color: #fff;
          padding: 4px 8px 4px 8px;
          border-radius: 4px;
          left: 0%;
          top: -9px;
          box-shadow: 0 7px 14px 0 rgba(80,110,228,0.5);
        }

        /* Safari */
        @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
        }
        img#uperprofileimg {
    width: 100px;
    position: relative;
    top: 5px;
    border-radius: 50%;
}

        </style>
        @notifyCss





    </head>



    <body>

   @include('notify::messages')

@include('crm_new.sidebar.sidebar')

@include('crm_new.topbar.topbar')





    <div class="page-wrapper">
        <div class="page-content-tab">

                <div class="container-fluid">
@yield('content')
@include('crm_new.footer.footer')
</div>
</div>
        </div>

@include('notify::messages')

        @notifyJs

@yield('css')

@yield('modal')

            <!-- jQuery  -->

            

            <script src="{{asset('public/new/assets/js/jquery-ui.min.js')}}"></script>

            <script src="{{asset('public/new/assets/js/bootstrap.bundle.min.js')}}"></script>

            <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

            <script src="{{asset('public/new/assets/js/metismenu.min.js')}}"></script>

            <script src="{{asset('public/new/assets/js/waves.js')}}"></script>

            <script src="{{asset('public/new/assets/js/feather.min.js')}}"></script>

            <script src="{{asset('public/new/assets/js/jquery.slimscroll.min.js')}}"></script>

            <script src="{{asset('public/new/plugins/apexcharts/apexcharts.min.js')}}"></script>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.7/dist/sweetalert2.min.js" charset="utf-8"></script>

            <script src="{{asset('public/themeassets/plugins/apexcharts/apexcharts.min.js')}}"></script>

                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



        <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

        <!-- Main js -->

    @notifyJs

            <!-- App js -->

            <script src="{{asset('public/new/assets/pages/bootstrap-editable.min.js')}}"></script>

            <script src="https://unpkg.com/smartwizard@5.0.0/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

            <script src="{{asset('public/new/assets/js/app.js')}}"></script>

            <script src="{{asset('public/new/assets/js/main.js')}}"></script>

            <script src="{{asset('public/new/assets/pages/jquery.form-xeditable.init.js')}}"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

            <script src="{{asset('public/themeassets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('public/themeassets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
            <script src="{{asset('public/themeassets/plugins/datatables/address.js')}}"></script>
            <script src="{{asset('public/themeassets/js/dragula.min.js')}}"></script>
            <script src="{{asset('public/themeassets/js/jquery.dragula.init.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
            <script src="{{asset('public/new/assets/pages/fullcalendar.min.js')}}"></script>
            <script src="{{asset('public/new/assets/pages/jquery.calendar.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>
        @if(session()->has('success-message'))
            <script type="text/javascript">
               Swal.fire(
                 '{{ session()->get("success-message") }}',
                 '{{ session()->get("success-message-details") }}',
                 'success'
                 )
            </script>
            @endif
            @if(session()->has('failed-message'))
            <script type="text/javascript">
               Swal.fire({
                 icon: 'error',
                 title: '{{ session()->get("failed-message") }}',
                 text: '{{ session()->get("failed-message-details") }}',
                 })
            </script>
            @endif
        <script>

            $('#datatable').DataTable({

                "bSort" : false

            });

        </script>
        <script>
        $(document).ready(function () {
          $('#dtBasicExample').DataTable();
          $('.dataTables_length').addClass('bs-select');
        });
        </script>
        <script>
        $(document).ready(function(){
        $('.noti_close').click(function(){
             location.reload();
         });
        });
        </script>
        <script src="{{asset('public/new/assets/js/custom.js')}}"></script>
        <script src="{{asset('public/new/assets/pages/jquery.crm_dashboard.init.js')}}"></script>
        <script>
//           var options = {
//     chart: { height: 374, type: "line", dropShadow: { enabled: !0, top: 10, left: 0, bottom: 0, right: 0, blur: 2, color: "#45404a2e", opacity: 0.35 } },
//     stroke: { width: 5, curve: "smooth" },
//     series: [{ name: "Likes", data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5] }],
//     xaxis: {
//         type: "datetime",
//         categories: [
//             "1/11/2000",
//             "2/11/2000",
//             "3/11/2000",
//             "4/11/2000",
//             "5/11/2000",
//             "6/11/2000",
//             "7/11/2000",
//             "8/11/2000",
//             "9/11/2000",
//             "10/11/2000",
//             "11/11/2000",
//             "12/11/2000",
//             "1/11/2001",
//             "2/11/2001",
//             "3/11/2001",
//             "4/11/2001",
//             "5/11/2001",
//             "6/11/2001",
//         ],
//         axisBorder: { show: !0, color: "#bec7e0" },
//         axisTicks: { show: !0, color: "#bec7e0" },
//     },
//     title: { text: "Social Media", align: "left", style: { fontSize: "14px", color: "#8997bd" } },
//     fill: { type: "gradient", gradient: { shade: "dark", gradientToColors: ["#43cea2"], shadeIntensity: 1, type: "horizontal", opacityFrom: 1, opacityTo: 1, stops: [0, 100, 100, 100] } },
//     markers: { size: 4, opacity: 0.9, colors: ["#ffbc00"], strokeColor: "#fff", strokeWidth: 2, style: "inverted", hover: { size: 7 } },
//     yaxis: { min: -10, max: 40, floating: !0, title: { text: "Engagement" } },
//     grid: { row: { colors: ["transparent", "transparent"], opacity: 0.2 }, borderColor: "#185a9d" },
//     responsive: [{ breakpoint: 600, options: { chart: { toolbar: { show: !1 } }, legend: { show: !1 } } }],
// };
// (chart = new ApexCharts(document.querySelector("#apex_line1"), options)).render();
</script>
<script src="{{asset('public/new/assets/js/irregular-data-series.js')}}"></script>
<script src="{{asset('public/new/assets/js/cm.js')}}"></script>
<script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datetimepicker({
                minDate: 0,
            });
        });
    </script>
        @yield('script')
        @yield('js')

        </body>
</html>

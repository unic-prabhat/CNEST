<!DOCTYPE html>



<html lang="en">







    <head>



        <meta charset="utf-8" />



        <title>Metrica - Admin & Dashboard Template</title>



        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />



        <meta content="" name="author" />



        <meta http-equiv="X-UA-Compatible" content="IE=edge" />



        <meta name="csrf-token" content="{{ csrf_token() }}" />







        <!-- App favicon -->



        <link rel="shortcut icon" href="../assets/images/favicon.ico">







        <!-- App css -->



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



        <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" rel="stylesheet" type="text/css" />



        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">



        <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>



        <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet"/>



        <link href="{{asset('public/themeassets/plugins/datatables/address.css')}}" rel="stylesheet">

         <link href="{{asset('public/progessbar/progressbar.css')}}" rel="stylesheet">



        <link href="https://unpkg.com/smartwizard@5.0.0/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />



        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" rel="stylesheet"/>

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <link href="https://mannatthemes.com/metrica/metrica_live/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <script src="https://mannatthemes.com/metrica/metrica_live/plugins/sweet-alert2/sweetalert2.min.js"></script>

        <script src="https://mannatthemes.com/metrica/metrica_live/assets/pages/jquery.sweet-alert.init.js"></script>





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



        img#uperprofileimg {

         width: 7%;

         border-radius: 50%;

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



        </style>

        @notifyCss











    </head>







    <body>



   @include('notify::messages')



@include('UserSales.sidebar.sidebar')



@include('UserSales.topbar.topbar')











    <div class="page-wrapper">

        <div class="page-content-tab">



                <div class="container-fluid">

@yield('content')

@include('UserSales.footer.footer')

</div>

</div>

        </div>



@include('notify::messages')



        @notifyJs



@yield('css')



@yield('modal')



            <!-- jQuery  -->



            <script src="{{asset('public/new/assets/js/jquery.min.js')}}"></script>



            <script src="{{asset('public/new/assets/js/jquery-ui.min.js')}}"></script>



            <script src="{{asset('public/new/assets/js/bootstrap.bundle.min.js')}}"></script>



            <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>



            <script src="{{asset('public/new/assets/js/metismenu.min.js')}}"></script>



            <script src="{{asset('public/new/assets/js/waves.js')}}"></script>



            <script src="{{asset('public/new/assets/js/feather.min.js')}}"></script>



            <script src="{{asset('public/new/assets/js/jquery.slimscroll.min.js')}}"></script>



            <script src="{{asset('public/new/plugins/apexcharts/apexcharts.min.js')}}"></script>

            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>



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



            <script src="{{asset('public/new/assets/pages/jquery.calendar.js')}}"></script>



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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

        <script src="{{asset('public/new/assets/pages/jquery.calendar.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>



        <script>



            $('#datatable').DataTable({



                "bSort" : false



            });



        </script>

        <script src="{{asset('public/new/assets/js/custom.js')}}"></script>

        <script src="{{asset('public/new/assets/pages/jquery.crm_dashboard.init.js')}}"></script>

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


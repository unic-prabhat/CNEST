<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta content="A premium admin dashboard template by Mannatthemes" name="description">
      <meta content="Mannatthemes" name="author">
      <!-- App favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico">
      <!-- App css -->
      <link href="{{URL::to('public/themeassets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
      <!-- <link href="{{URL::to('plugins/dragula.min.css')}}" rel="stylesheet" type="text/css"> -->
      <!-- App css -->
      <link href="{{URL::to('public/themeassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
      <!-- <link href="{{URL::to('public/themeassets/css/icons.css')}}" rel="stylesheet" type="text/css"> -->
      <link href="{{URL::to('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css')}}" rel="stylesheet" type="text/css">
      <link href="{{URL::to('public/themeassets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{URL::to('public/themeassets/css/style.css')}}" rel="stylesheet" type="text/css">
      @yield('style')
   </head>
   <body class="account-body accountbg">
     @yield('content')
      <script src="{{URL::to('public/themeassets/js/jquery.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/js/metisMenu.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/js/waves.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/js/jquery.slimscroll.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/plugins/moment/moment.js')}}"></script>
      <script src="{{URL::to('public/themeassets/plugins/apexcharts/apexcharts.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
      <script src="{{URL::to('public/themeassets/pages/jquery.crm_dashboard.init.js')}}"></script>
      <!-- <script src="{{URL::to('public/themeassets/js/dragula/dragula.min.js')}}"></script> -->
      <!-- <script src="{{URL::to('public/themeassets/js/jquery.projects_kanabn.init.js')}}"></script> -->
      <script src="{{URL::to('public/themeassets/js/app.js')}}"></script>
   </body>
</html>

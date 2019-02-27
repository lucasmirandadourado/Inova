<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
    <title>Inova - @yield('titulo')</title>
    
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE-2.4.5/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="AdminLTE-2.4.5/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="AdminLTE-2.4.5/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="AdminLTE-2.4.5/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="AdminLTE-2.4.5/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="AdminLTE-2.4.5/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="AdminLTE-2.4.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    <link rel="stylesheet" href="/css/inova.css">

</head>

<body>
    {{-- <header> --}}
        @section('navbar')
            @include('layout._includes._header')    
        @show
        
    {{-- </header> --}}

    @yield('conteudo')
  

    <footer>
          @section('footer')
            @include('layout._includes._footer')      
          @show            
    </footer>
    
    <script src="AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/lib/jquery-3.3.1.js"></script>
    <script src="js/lib/jquery.dataTables.min.js"></script>
    <script src="js/lib/dataTables.bootstrap.min.js"></script>
    <script src="js/inova.js"></script>
 
</body>
</html>
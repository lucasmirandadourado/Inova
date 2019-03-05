  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="#">Dev. Lucas Dourado</a>.</strong> All rights
    reserved.
  </footer>

  <script src="{{ url('js/lib/jquery-3.3.1.js') }}"></script>
  <script src="{{ url('AdminLTE-2.4.5/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
  {{-- <script src="js/lib/jquery-3.3.1.js"></script> --}}
  <script src="{{ url('AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  
  <script src="{{ url('js/lib/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('js/lib/dataTables.bootstrap.min.js') }}"></script> 
  <!-- Morris.js charts -->
  <script src="{{ url('AdminLTE-2.4.5/bower_components/raphael/raphael.min.js') }}"></script>
  <script src="{{ url('AdminLTE-2.4.5/bower_components/morris.js/morris.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ url('AdminLTE-2.4.5/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
  <!-- jvectormap -->
  <script src="{{ url('AdminLTE-2.4.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ url('AdminLTE-2.4.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ url('AdminLTE-2.4.5/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ url('AdminLTE-2.4.5/bower_components/moment/min/moment.min.js') }}"></script>
  <script src="{{ url('AdminLTE-2.4.5/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <!-- datepicker -->
  <script src="{{ url('AdminLTE-2.4.5/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{ url('AdminLTE-2.4.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <!-- Slimscroll -->
  <script src="{{ url('AdminLTE-2.4.5/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ url('AdminLTE-2.4.5/bower_components/fastclick/lib/fastclick.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ url('AdminLTE-2.4.5/dist/js/adminlte.min.js') }}"></script>

  <script src="{{ url('js/script.js') }}"></script>
  @stack('scripts')

</body>
</html>
  
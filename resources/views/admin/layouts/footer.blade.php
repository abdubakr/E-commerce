
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>
</div>
<!-- jQuery 2.2.3 -->
<script src="{{url($plugin_path)}}/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url($bootstrap_path)}}/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<!-- Sparkline -->
<script src="{{url($plugin_path)}}/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{url($plugin_path)}}/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{url($plugin_path)}}/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url($plugin_path)}}/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{url($plugin_path)}}/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{url($plugin_path)}}/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url($plugin_path)}}/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{url($plugin_path)}}/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{url($plugin_path)}}/fastclick/fastclick.js"></script>
<!-- DataTables -->
<script src="{{url('/public/panel')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{url('/public/panel')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="{{url($js_path)}}/app.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{url($js_path)}}/demo.js"></script>
<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
@yield('script')
</body>
</html>

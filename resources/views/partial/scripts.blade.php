

    <!-- Bootstrap -->
    <script src="{{asset('plugin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('plugin/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('plugin/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('plugin/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('plugin/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('plugin/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('plugin/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('plugin/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('plugin/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('plugin/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('plugin/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('plugin/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('plugin/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('plugin/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('plugin/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('plugin/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('plugin/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('plugin/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('plugin/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('plugin/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('js/moment/moment.min.js')}}"></script>
    <script src="{{asset('js/datepicker/daterangepicker.js')}}"></script>
<!-- jQuery custom content scroller -->
    <script src="{{asset('plugin/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('/js/custom.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('plugin/iCheck/icheck.min.js')}}"></script>
<!-- PNotify -->
<script src="{{asset('plugin/pnotify/dist/pnotify.js')}}"></script>
<script src="{{asset('plugin/pnotify/dist/pnotify.buttons.js')}}"></script>
<script src="{{asset('plugin/pnotify/dist/pnotify.nonblock.js')}}"></script>

<!-- Custom Notification -->
<script>
    $(document).ready(function() {
        var cnt = 10;

        TabbedNotification = function(options) {
            var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
                    "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

            if (!document.getElementById('custom_notifications')) {
                alert('doesnt exists');
            } else {
                $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
                $('#custom_notifications #notif-group').append(message);
                cnt++;
                CustomTabs(options);
            }
        };

        CustomTabs = function(options) {
            $('.tabbed_notifications > div').hide();
            $('.tabbed_notifications > div:first-of-type').show();
            $('#custom_notifications').removeClass('dsp_none');
            $('.notifications a').click(function(e) {
                e.preventDefault();
                var $this = $(this),
                        tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
                        others = $this.closest('li').siblings().children('a'),
                        target = $this.attr('href');
                others.removeClass('active');
                $this.addClass('active');
                $(tabbed_notifications).children('div').hide();
                $(target).show();
            });
        };

        CustomTabs();

        var tabid = idname = '';

        $(document).on('click', '.notification_close', function(e) {
            idname = $(this).parent().parent().attr("id");
            tabid = idname.substr(-2);
            $('#ntf' + tabid).remove();
            $('#ntlink' + tabid).parent().remove();
            $('.notifications a').first().addClass('active');
            $('#notif-group div').first().css('display', 'block');
        });
    });
</script>
<!-- /Custom Notification -->
<script type="text/javascript">
    var baseURL="{!!url('/')!!}";
    //alert(baseURL)
</script>
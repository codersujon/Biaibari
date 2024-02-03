  <!--start overlay-->
  <div class="overlay toggle-icon"></div>
  <!--end overlay-->
  <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
          class='bx bxs-up-arrow-alt'></i></a>
  <!--End Back To Top Button-->

<footer class="page-footer">
    <p class="mb-0">Copyright © {{ now()->year }} Biaibari. All right reserved. Developed By <a href="https://www.codersujon.com">CODERSUJON</a></p>
</footer>
</div>
<!--end wrapper-->

<!-- Bootstrap JS -->
<script src="{{ asset('backend') }}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js">
</script>
<script src="{{ asset('backend') }}/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js">
</script>
<script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js">
</script>
<script
src="{{ asset('backend') }}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js">
</script>
<script src="{{ asset('backend') }}/assets/plugins/sparkline-charts/jquery.sparkline.min.js">
</script>
<script src="{{ asset('backend') }}/assets/plugins/jquery-knob/excanvas.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>
<script>
$(function () {
    $(".knob").knob();
});

</script>
<script src="{{ asset('backend') }}/assets/js/index.js"></script>
<!--app JS-->
<script src="{{ asset('backend') }}/assets/js/app.js"></script>
</body>

</html>

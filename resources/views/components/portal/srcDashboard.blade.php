   <!-- Core JS Files -->
   <script src="{{ asset('portal/assets-dash/js/core/jquery-3.7.1.min.js') }}"></script>
   <script src="{{ asset('portal/assets-dash/js/core/popper.min.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
   <script src="{{ asset('portal/assets-dash/js/core/bootstrap.min.js') }}"></script>
   <!-- jQuery Scrollbar -->
   <script src="{{ asset('portal/assets-dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

   <!-- Chart JS -->
   <script src="{{ asset('portal/assets-dash/js/plugin/chart.js/chart.min.js') }}"></script>

   <!-- jQuery Sparkline -->
   <script src="{{ asset('portal/assets-dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

   <!-- Chart Circle -->
   <script src="{{ asset('portal/assets-dash/js/plugin/chart-circle/circles.min.js') }}"></script>

   <!-- Datatables -->
   <script src="{{ asset('portal/assets-dash/js/plugin/datatables/datatables.min.js') }}"></script>

   <!-- Bootstrap Notify -->
   <script src="{{ asset('portal/assets-dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

   <!-- jQuery Vector Maps -->
   <script src="{{ asset('portal/assets-dash/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
   <script src="{{ asset('portal/assets-dash/js/plugin/jsvectormap/world.js') }}"></script>

   <!-- Sweet Alert -->
   <script src="{{ asset('portal/assets-dash/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

   <!-- Kaiadmin JS -->
   <script src="{{ asset('portal/assets-dash/js/kaiadmin.min.js') }}"></script>

   <!-- Kaiadmin DEMO methods, don't include it in your project! -->
   <script src="{{ asset('portal/assets-dash/js/setting-demo.js') }}"></script>
   <script src="{{ asset('portal/assets-dash/js/demo.js') }}"></script>
   <!-- Core JS Files -->
   <script>
       $(document).ready(function() {
           $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
               type: "line",
               height: "70",
               width: "100%",
               lineWidth: "2",
               lineColor: "#177dff",
               fillColor: "rgba(23, 125, 255, 0.14)"
           });

           // إذا كنت تستخدم lineChart2 أو lineChart3 تأكد من وجودهما في HTML
           $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
               type: "line",
               height: "70",
               width: "100%",
               lineWidth: "2",
               lineColor: "#177dff",
               fillColor: "rgba(23, 125, 255, 0.14)"
           });

           $("#lineChart3").sparkline([105, 103], {
               type: "line",
               height: "70",
               width: "100%",
               lineWidth: "2",
               lineColor: "#fff",
               fillColor: "rgba(255, 255, 255, 0.5)"
           });
       });
   </script>
   @stack('end_js')

   </body>

   </html>

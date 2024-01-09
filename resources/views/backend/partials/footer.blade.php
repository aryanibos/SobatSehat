  <!-- /.content-wrapper -->
  <footer class="main-footer">
      <strong>Copyright &copy; 2023-2024 <a href="#">sobatsehat.com</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0
      </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('dashboard') }}/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('dashboard') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
      $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('dashboard') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="{{ asset('dashboard') }}/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="{{ asset('dashboard') }}/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="{{ asset('dashboard') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('dashboard') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('dashboard') }}/plugins/moment/moment.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('dashboard') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="{{ asset('dashboard') }}/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('dashboard') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dashboard') }}/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('dashboard') }}/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('dashboard') }}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/jszip/jszip.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="{{ asset('dashboard') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
      $(function() {
          $("#example1").DataTable({
              "responsive": true,
              "lengthChange": false,
              "autoWidth": false,
              "buttons": ["excel", "pdf", "print"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
          });
      });
  </script>

  <!-- Code injected by live-server -->
  <script>
      // <![CDATA[  <-- For SVG support
      if ('WebSocket' in window) {
          (function() {
              function refreshCSS() {
                  var sheets = [].slice.call(document.getElementsByTagName("link"));
                  var head = document.getElementsByTagName("head")[0];
                  for (var i = 0; i < sheets.length; ++i) {
                      var elem = sheets[i];
                      var parent = elem.parentElement || head;
                      parent.removeChild(elem);
                      var rel = elem.rel;
                      if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                          "stylesheet") {
                          var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                          elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                              .valueOf());
                      }
                      parent.appendChild(elem);
                  }
              }
              var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
              var address = protocol + window.location.host + window.location.pathname + '/ws';
              var socket = new WebSocket(address);
              socket.onmessage = function(msg) {
                  if (msg.data == 'reload') window.location.reload();
                  else if (msg.data == 'refreshcss') refreshCSS();
              };
              if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                  console.log('Live reload enabled.');
                  sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
              }
          })();
      } else {
          console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
      }
      // ]]>
  </script>
  </body>

  </html>

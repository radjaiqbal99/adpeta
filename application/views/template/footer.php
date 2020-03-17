  <!-- /.content-wrapper -->
  <footer class="main-footer">

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="assets/plugins/moment/moment.min.js"></script>
  <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/dist/js/demo.js"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

  <!-- DataTables -->
  <script src="assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
    $(document).ready(function() {
      $("#formButton").click(function() {
        $("#form1").slideToggle();
      });
      $(".formEdit").click(function() {
        var idNya =$(this).attr("idNya")
        var nid =$(this).attr("nid")
        var nama =$(this).attr("nama")
        var username =$(this).attr("username")
        var password =$(this).attr("password")
        var prodi =$(this).attr("prodi")
        var role =$(this).attr("role")
        
        $("#idNya").val(idNya)
        $("#nid").val(nid)
        $("#nama").val(nama)
        $("#username").val(username)
        $("#password").val(password)
        $("#prodi").val(prodi)
        $("#role").val(role)
        $("#form2").slideToggle();
        

      
      });

      $("#submit-edit").click(function(e){
        e.preventDefault();
          $.ajax({
              url : "<?php echo base_url(). 'datamaster/edit_data'; ?>",
              type : "POST",
              data : $("#form2").serialize(),
              dataType : "JSON",
               statusCode: {
                  200: function(response) {
                    alert( response.responseText );
                    window.location = window.location.href
                  }
                }
          })

      })


      $(".hapus_user").click(function(e){
        e.preventDefault();
          var idHapus =$(this).attr("idHapus")
          $.ajax({
              url : "<?php echo base_url(). 'datamaster/hapus_user'; ?>",
              type : "POST",
              data : { id : idHapus },
              dataType : "JSON",
               statusCode: {
                  200: function(response) {
                    alert( response.responseText );
                    window.location = window.location.href
                  }
                }
          })

        
      })
    });

    function asd(a) {
      if (a == 1)
        document.getElementById("asd").style.display = "none";
      else
        document.getElementById("asd").style.display = "block";
    }
  </script>
  </body>

  </html>
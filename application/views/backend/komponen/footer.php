<footer class="main-footer">
    <strong>Copyright &copy; 
        <a href="<?= base_url()?>">PPM NURBA</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b>
        3.1.0
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
<script src="<?= base_url()?>assets/backend/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url()?>assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$
    .widget
    .bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script
src="<?= base_url()?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url()?>assets/backend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url()?>assets/backend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url()?>assets/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script
src="<?= base_url()?>assets/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script
src="<?= base_url()?>assets/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url()?>assets/backend/plugins/moment/moment.min.js"></script>
<script
src="<?= base_url()?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script
src="<?= base_url()?>assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script
src="<?= base_url()?>assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script
src="<?= base_url()?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/backend/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/backend/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url()?>assets/backend/dist/js/pages/dashboard.js"></script>

<!-- DataTables & Plugins -->
<script
src="<?= base_url()?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script
src="<?= base_url()?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script
src="<?= base_url()?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script
src="<?= base_url()?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script
src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script
src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/pdfmake/vfs_fonts.js"></script>
<script
src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script
src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script
src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Summernote -->
<script src="<?= base_url()?>assets/backend/plugins/summernote/summernote-bs4.min.js"></script>


<script>
$(document).ready(function () {

    if (window.location.href.indexOf('#ganti_password') != -1) {
        $('#ganti_password').modal('show');
    }

});
</script>

<script>
$(function () {
    $("#example1")
        .DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": [
                "copy",
                "csv",
                "excel",
                "pdf",
                "print",
                "colvis"
            ]
        })
        .buttons()
        .container()
        .appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true
    });
});
</script>

<script>
$(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
    });
})
</script>

<script>
        // Jquery draggable
        $('.modal-dialog').draggable({
            handle: ".modal-header"
        });
</script> 

</body>
</html>

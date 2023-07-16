<!-- Bootstrap core JavaScript-->
<script src="{{ asset ('vendor/vendor/sb-admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset ('vendor/vendor/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset ('vendor/vendor/sb-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset ('vendor/vendor/sb-admin/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{( asset ('vendor/vendor/sb-admin/vendor/chart.js/Chart.min.js'))}"></script>

<!-- Datatables -->
<!-- DataTables Bootstrap -->
<script src="{{ asset ('vendor/vendor/sb-admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('vendor/vendor/sb-admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.js"></script>

<!-- DataTables Bootstrap-->
<script>
    $(document).ready(function() {
        var table = $('#myTable').DataTable({
            responsive: true,
        });
        table.buttons().container()
            .appendTo('#myTable_wrapper .col-md-6:eq(0)');
    });
</script>

<!-- Filter Button Datatables -->
<script>
    $(document).ready(function() {
        $(".btn-group .btn").click(function() {
            var inputValue = $(this).find("input").val();
            if (inputValue != 'all') {
                var target = $('table tr[data-status="' + inputValue + '"]');
                $("table tbody tr").not(target).hide();
                target.fadeIn();
            } else {
                $("table tbody tr").fadeIn();
            }
        });
    });
</script>

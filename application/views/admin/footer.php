</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
	<strong>Copyright &copy; 2021 E-Complaint.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/template/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/template/AdminLTE/') ?>dist/js/demo.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script
	src="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script
	src="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script
	src="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script
	src="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script
	src="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/template/AdminLTE/') ?>plugins/toastr/toastr.min.js"></script>
<script>
	<?= $this->session->flashdata('failed_msg') ?>
	<?= $this->session->flashdata('success_msg') ?>
</script>

<!-- Page specific script -->
<script>
	$(function () {
		$("#example1").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
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
</body>

</html>

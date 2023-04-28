</div> <!-- container -->


	<script>
		var getSidebar = document.querySelector('nav');
		var getToggle = document.getElementsByClassName('toggle');
		for (var i = 0; i <= getToggle.length; i++) {
			getToggle[i].addEventListener('click', function() {
				getSidebar.classList.toggle('active');
			});
		}
	</script>
	<!-- file input -->
	<script src="assests/plugins/fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
	<script src="assests/plugins/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>
	<script src="assests/plugins/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="assests/plugins/fileinput/js/fileinput.min.js"></script>


	<!-- DataTables -->
	<script src="assests/plugins/datatables/jquery.dataTables.min.js"></script>

</body>

</html>
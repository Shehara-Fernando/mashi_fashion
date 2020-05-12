<footer class="py-4 bg-light mt-auto">
	<div class="container-fluid">
		<div class="d-flex align-items-center justify-content-between small">
			<div class="text-muted">Copyright &copy; Mashi fashion <?php echo date("Y");?></div>
		</div>
	</div>
</footer>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script>
	$.validate();
</script>
<script>
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	if(dd<10) {
		dd='0'+dd
	}

	if(mm<10) {
		mm='0'+mm
	}

	today = mm+'/'+dd+'/'+yyyy;
	document.getElementById("date").innerHTML = today;
	var myVar=setInterval(function(){myTimer()},1000);

	function myTimer() {
		var d = new Date();
		document.getElementById("time").innerHTML = d.toLocaleTimeString();
	}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
</body>
</html>

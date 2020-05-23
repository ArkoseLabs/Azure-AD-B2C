<!DOCTYPE html>
<html>
<head>
	<title>Callback</title>
</head>
<body>
	<script>

		if(window.location.href.indexOf('id_token') > -1){
			document.body.innerHTML = 'Authenticated!';
		} else if(window.location.href.indexOf('error') > -1) {
			document.body.innerHTML = window.location.href.split('#error')[1];
		} else {
			window.location.href = "add run_user_flow_endpoint";
		}

	</script>
</body>
</html>

<!Doctype html>
<html>
<head>
	<title>Internship page</title>
</head>


		<h2 style = "margin-left:50px">Customer care assistant person</h2>

		<form method="POST" action="delete.php">

			<label>Id</label>
			<input type="text" name="Id" placeholder="ID">
			<br><br>

			<input type="submit"  onclick = "decnfirm()"  value="Delete">
			
		</form>

		<script>
			function decnfirm(){

				confirm("do you want to  proceed !");
			}

		</script>


</html>
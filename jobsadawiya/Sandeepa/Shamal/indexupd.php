<!Doctype html>
<html>
<head>
	<title>Internship page</title>
</head>


		<h2 style = "margin-left:50px">Customer care assistant person</h2>

		<form method="POST" action="update.php">

			<label>Id</label>
			<input type="text" name="Id" id="Id" placeholder="ID">
			<br>

			<label>Name</label>
			<input type="text" name="name" id="name" placeholder="Name">
			<br>

			<label>Email</label>
			<input type="email" name="email" id="email" placeholder="mail@example.com">
			<br>

			<label>Address</label>
			<input type="text" name="address"  id="address"placeholder="Address" style="width:300px; height:100px;"></textarea>
			<br>

			<label>Mobile Number</label>
			<input type="text" name="MobileNumber" id="MobileNumber" placeholder="Enter your phone number">
			<br>

			<label>Educational qualification</label>
			<input type="text" name="EducationQualification" id="EducationQualification" placeholder="Qualification" style="width:300px; height:100px;"></textarea>
			<br><br>
			<label id="display" style="color: red;"> </label>

			<input type="submit"  onclick=" return vali()"   value="Update">
			
		</form>

		<script>
		function vali(){

			let id,nm,eml,adrs,mble,edu;
			let err = "";

			id = document.getElementById("Id").value;
			nm = document.getElementById("name").value;
			eml = document.getElementById("email").value;
			adrs = document.getElementById("address").value;
			mble = document.getElementById("MobileNumber").value;
			edu = document.getElementById("EducationQualification").value;

			if (id=="")
			 {
				err += "please enter id <br>";
			 }

			 if (nm=="")
			 {
				err += "please enter name <br>";
			 }
			 if (eml=="")
			 {
				err += "please enter email <br>";
			 }
			 if (adrs=="")
			 {
				err += "please enter adress <br>";
			 }
			 if (mble=="")
			 {
				err += "please enter mobile number <br>";
			 }
			 if (edu=="")
			 {
				err += "please enter educational qualifications <br>";
			 }
    
			 if (err!=="")
			 {
				document.getElementById("display").innerHTML =err;
				return false;
				
			 }

			 return true;

		}
		</script>


</html>
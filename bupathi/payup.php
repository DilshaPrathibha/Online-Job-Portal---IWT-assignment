<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>
<body>
  <form method="post" action="updatepayinfo.php">
    
    <label>eneter txt id want to change</label><br>
    <input type="text" name="txtid" placeholder="xxxxxx"><br>


    <label>enter new email</label><br>
    <input type="text" name="email" placeholder="Hello@example.com"><br>
    
    <label>eneter new phone</label><br>
    <input type="text" name="phone" placeholder="077XXXXXXX"><br>
    
    <!--<label>eneter  new adress</label><br>
    <input type="text" name="addres" placeholder="NO 113/TRACK 04/RAJANGANAYA"><br>-->
    
    <label>eneter  holder new name</label><br>
    <input type="text" name="name" placeholder="Saman Kumara Thennakoon"><br>

    <label>eneter new NIC</label><br>
    <input type="text" name="nic" placeholder="200238394848V"><br>

    <select class="pgtwayinpts" name="package">
          <option disabled selected>select a  packege from this list</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>

        <br>
        <br>

    <select class="pgtwayinpts" name="bank">
          <option disabled selected>select your bank from this list</option>
          <option>BOC</option>
          <option>HNB</option>
          <option>COMERSIAL</option>
          <option>SDB</option>
          <option>UNION BANK</option>
          <option>PEOPLES BANK</option>
        </select>

      <br>
      <br>
      
      
      <select class="pgtwayinpts"  name = "additional">
          <option disabled selected>select additional services if you want</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>

        <br>
        <br>




    <input type="submit" value="update">

  </form>
</body>
</html>

<html>
<body>
  <form  method="POST">

  Name: <input type="text" name="name" />
  Age: <input type="text" name="age" />
  Address: <input type="text" name="address" />

  <input type="submit" />
  <?php
  if( $_POST["name"] || $_REQUEST["age"] )
  {
     echo "<br> Welcome ". $_REQUEST['name']. "<br />";
     echo "You are ". $_REQUEST['age']. " years old.<br>";
	 echo "You are from". $_REQUEST['address'];
     exit();
  }
?>
  </form>
</body>
</html>

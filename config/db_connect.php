<?php 

//Connect to database
  $conn = mysqli_connect('localhost', 'denissufu', 'Pass2021', 'barak_pizza');

  //Check connection
  if (!$conn) {
  	echo 'Connection error: '. mysqli_connect_error();
  }

?>
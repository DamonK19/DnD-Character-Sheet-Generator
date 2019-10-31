<html>
<body>
<?php

  $con=mysqli_connect("localhost","root","root","test");
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  // Perform query

  $sql = "INSERT INTO characters(cID, pID, character_name, player_name, race_name, background, hit_points, class_name, allignment)
  VALUES(1, 1, '$_POST[cname]', '$_POST[pname]', '$_POST[races]', '$_POST[backgrounds]', 1, '$_POST[classes]', '$_POST[goodVsEvil] $_POST[lawVsChaos]')";

  mysqli_query($con, $sql);

  mysqli_close($con);
?>

</body>
</html>

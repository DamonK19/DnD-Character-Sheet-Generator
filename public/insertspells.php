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

  $sql = "INSERT INTO spells(spell_name, spell_level, spell_description, cID, equipped)
  VALUES($_POST[spell_name], 1, 'test', 1, 1)";

  mysqli_query($con, $sql);

  mysqli_close($con);
?>

</body>
</html>

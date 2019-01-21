<link rel="stylesheet" href="style.css">

<?php ini_set("display_errors",1); error_reporting(E_ALL); ?>

<?php

echo '<font size = "6" ><b><center><br>This is where the Know its Off System will tell you if your system is on or off.</center></b></font>';

date_default_timezone_set("America/Los_Angeles");
$TimeStamp = "The Time is :" . date("h:i:sa") . "</br>";
file_put_contents('knowitsoff.html', $TimeStamp, FILE_APPEND);

  #setting the request for status
  if (isset($_REQUEST['Status']))
  {

  echo "<div><b> Your systems status : " . $_REQUEST['Status'] . "<div></b>";


  #set request variable
  $temp = $_REQUEST['Status'];

  $WriteMyRequest = "<p> Your systems status: " . $temp . "</p>";

  file_put_contents('knowitsoff.html', $WriteMyRequest, FILE_APPEND);

  }


?>


<html>
<head>
<title>Know It's Off System</title>
<body background="background.png">

</body>
</html>

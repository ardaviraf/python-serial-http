<?php

if (isset($_GET['value']) and isset($_GET['userid'])) {

  if (($_GET['userid']=="111") or 
     ($_GET['userid']=="222") or 
     ($_GET['userid']=="333") or 
     ($_GET['userid']=="444") or 
     ($_GET['userid']=="555") or 
     ($_GET['userid']=="666") or 
     ($_GET['userid']=="777") or 
     ($_GET['userid']=="888") or 
     ($_GET['userid']=="999") or 
     ($_GET['userid']=="000") or 
     ($_GET['userid']=="122") or 
     ($_GET['userid']=="133") or 
     ($_GET['userid']=="144") or 
     ($_GET['userid']=="155") or 
     ($_GET['userid']=="166") or 
     ($_GET['userid']=="177") or 
     ($_GET['userid']=="188"))
	{
	$file = trim($_GET['userid']).'.txt';
	$theline=$_GET['value']."-";
	file_put_contents($file, $theline, FILE_APPEND | LOCK_EX);


	echo "OK!";
  	} else {
	  echo "Wrong user ID!";  	
  	}

} else {

  echo "Wrong request!";

}

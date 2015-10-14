<?php

if (isset ($_POST["netlist"]))
{
	$netlistval1 = $_POST["netlist"]; // for ajax
	//$netlistval = "CONTENT"; // without ajax
	$myfile = fopen("netlist.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $netlistval1); 
	fclose($myfile);
	

}

else
{
      $output=shell_exec(' ngspice /var/www/html/webtronix/webtronix-master/netlist.txt');
      //print_r($output);
      echo "<pre>$output</pre>";
    // echo json_encode($output);
     //return $output; 
      //echo"success";

}
?>  

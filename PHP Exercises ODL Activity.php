<?php

echo "PHP exercise 5\n";
echo "<br>";
$around="around";
echo 'What goes ' . $around . ', comes ' . $around . "\n\n";
echo "<br>";
echo "<br>";
echo "PHP exercise 6\n";
echo "<br>";
for ($count = 1; $count <= 12; $count++){
  $squared = $count * $count;
  echo("$count * $count = $squared \n");
  echo "<br>";
}
echo "<br>";
echo "<br>";
echo "PHP exercise 7\n";

for ($row=1; $row <= 7; $row++) 
    { 
        echo "<br>";
	    for ($col=1; $col <= 7; $col++) 
	    { 
		   $p = $col * $row;
		   echo "$p &nbsp;&nbsp;";

		}
		echo "<br>";
	}

// Sir, and ginamit ko po d2 is ung xampp and sublime. for the <br> and the &nbsp;
?>
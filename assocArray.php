<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $monthDays = array('January' => 31,'February'=> 28,'March' =>31,'April' => 30,'May' => 31,'June' => 30,'July' => 31,'August' => 31,'September' => 30,'October' => 31,'November' => 30,'December' =>31);
    echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 31; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 31; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
        ?>
</body>
</html>
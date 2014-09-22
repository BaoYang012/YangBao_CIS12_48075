<?php
	/*
		Bao Yang
		September 15, 2014
		Purpose: First for-loop
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>For Loop Table with Arrays 2D</title>
</head>

<body>
<h1>Trig Table</h1>
	<?php
		//Create Arrays
		$trigTab=array();
		for($col=1;$col<=5;$col++) {
			$trigTab[$col]=array();
		}
		for($angle=$_GET['angStrt'];$angle<=$_GET['angEnd'];$angle+=$_GET['angInc']) {
			//Calculate
			$trigTab[1][$angle]=$angle;
			$trigTab[2][$angle]=number_format($angle*atan(1)/45,4);
			$trigTab[3][$angle]=number_format(sin($trigTab[2][$angle]),4);
			$trigTab[4][$angle]=number_format(cos($trigTab[2][$angle]),4);
			$trigTab[5][$angle]=number_format(tan($trigTab[2][$angle]),4);
		}
    ?>
<table width="200" border="1">
    <tr>
        <th>Degrees</th>
        <th>Radians</th>
        <th>Sine</th>
        <th>Cosine</th>
        <th>Tangent</th>
    </tr>
	<?php
		//For-Loop
		for($angle=$_GET['angStrt'];$angle<=$_GET['angEnd'];$angle+=$_GET['angInc']) {
			echo "<tr>";
			for($col=1;$col<=5;$col++) {
				echo "<td>".$trigTab[$col][$angle]."</td>";
			}
			echo "</tr>";
		}
	?>
</table>
	<?php
		echo "<p>The number of elements in the columns are ".count($trigTab[1])."</p>";
	?>
</body>
</html>
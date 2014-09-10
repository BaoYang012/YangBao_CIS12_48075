<?php
	/*
		Bao Yang
		September 8, 2014
		Purpos: Illustrate Branching Constructs
	*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Grade</title>
</head>

<body>
	<?php
		//Utilize the built in capabilities of PHP to get information passed from a form
		$score=$_GET['score'];
		
		//Determine the Grade
		$grade=($score>=90?'A':
				($score>=80?'B':
				($score>=70?'C':
				($score>=60?'D':'F'))));
		
		//Output the Results
		echo "<h1>A score of $score = $grade</h1>";
	?>
</body>
</html>
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
		//Initialize the input and declare variables
		$score=rand(50,100);
		$grade='';
		
		//Determine the Grade
		if($score>=90) {
			$grade='A';
		} elseif ($score>=80) {
			$grade='B';
		} elseif ($score>=70) {
			$grade='C';
		} elseif ($score>=60) {
			$grade='D';
		} else {
			$grade='F';
		}
		
		//Output the Results
		echo "<h1>A score of $score = $grade</h1>";
	?>
</body>
</html>
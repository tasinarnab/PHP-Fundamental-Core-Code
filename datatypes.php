<?php
	$fonts="verdana";
	$bgcolor="#FB8637";
	$fcolor="#444"
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP ARNAB</title>
	<style>
		 body{margin:0; padding:0; font-family:<?php echo $fonts?>}
		.phpclass{width:900px; margin: 0 auto;background:#ddd; text-align:center;}
		.headerarea , .footerarea{background:<?php echo $fcolor?>; color:<?php echo $bgcolor?>; text-align:center; padding:20px;}
		.headerarea h2 , .footerarea h2{margin:0;}
		.maincontent{min-height:400px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP FUNDAMENTALS</h2>
		</section>
		
		<section class="maincontent">
		1.String 2.Integer 3.Float 4.Boolean 5.Array 6.Object 7.Null 8.Resource
		<br>
		<hr>
		5.Array
		<hr>
		6.Object
		<hr>
		<hr>
		7.NULL
		<hr>
			<?php 
				
				$m = array("arnab","mamun","salam");
				var_dump($m);
				echo"<br/>";
				echo"<br/>";
				class Student{
					function department(){
						return "math";
					}
					function details(){
						 echo $this->department();
					}
				}
				$st = new Student();
				$st -> details();
				echo"<br/>";
				echo"<br/>";
				$n=null;
				var_dump ($n);
			?>
		</section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
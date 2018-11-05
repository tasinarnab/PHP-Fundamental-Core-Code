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
			<?php 
				$tasin = "AMAR CONTACT NUMBER ";
				$a = "01724-365867";
				$b = "365867";
				$c = "01724";
				$add = $b + $c ;
				echo"I AM THE LEGEND";
				echo"<br/>";
				echo"<br/>";
				echo $tasin;
				echo"<br/>";
				echo"<br/>";
				echo $a;
				echo"<br/>";
				echo"<br/>";
				echo "ToTaL=".$add;
				echo"<br/>";
				echo"<br/>";
				$x=100;
				$y=100;
				var_dump($x==$y);
			?>
		</section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
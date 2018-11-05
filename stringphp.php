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
		String PHP
		<hr>
		
			<?php 
				
                $x = "PHP Shikhtesi hmn";
                echo strlen ($x);
                echo "<br/>";
                echo str_word_count ($x);
                echo "<br/>";
                echo strrev ($x);
                echo "<br/>";
                echo strpos ($x , "hmn");
                echo "<br/>";
                echo str_replace ("PHP","JAVA", $x);
			?>
		</section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
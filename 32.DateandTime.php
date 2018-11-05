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
		.phpclass{width:900px; margin: 0 auto;background:#ddd;}
		.headerarea , .footerarea{background:<?php echo $fcolor?>; color:<?php echo $bgcolor?>; text-align:center; padding:20px;}
		.headerarea h2 , .footerarea h2{margin:0;}
		.maincontent{min-height:800px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP FUNDAMENTALS</h2>
		</section>
		
		<section class="maincontent">
		PHP Date and Time
		<br>
		<hr>
		---
        <hr>
            <?php
                //date(format, timestam);
                echo "Today is ".date("d/m/Y")."<br/>";
                echo "Today is ".date("l")."<br/>";
                echo "Time is ".date("h:i:sa")."<br/>";
                date_default_timezone_set('Asia/Dhaka');
                echo " BD Time is ".date("h:i:sa")."<br/>";
                echo "Today is ".date("d/m/Y")."<br/>";
                echo date_default_timezone_get();
            ?>
        <p><?php echo date("Y") ?> Auto dynamic year</p>   
		
		
        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
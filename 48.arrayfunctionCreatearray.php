<?php
	$fonts="verdana";
	$bgcolor="#FB8637";
    $fcolor="#111"
    
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
		.maincontent{min-height:730px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP Array() Function</h2>
		</section>
		
		<section class="maincontent">
        <hr>
		--------------PHP array() Function - Create Array ---------------
        <hr>
        <hr>
		----Index Array ----
        <hr>
            <?php
                $car = array ("Volvo","BMW","Toyota");
                //echo $car[0];
                $length = count($car);
                for ($i=0; $i < $length; $i++) { 
                    echo $car[$i]."<br/>";
                }
            ?>
        <hr>
		----Associative Array ----
        <hr>
            <?php
                $age = array("Abdullah"=>"8","Arnab"=>"26","Samin"=>"15");
                foreach ($age as $key => $value) {
                    echo "Name = ".$key.", Value = ".$value. "<br/>";
                }
            ?>
		<hr>
		----Multidimentional Array ----
        <hr>
            <?php
                $bus = array(
					array("Hanif","100","90"),
					array("National","80","70"),
					array("DeshTravel","60","50")
				);
				//echo $bus[0][1];
				for ($row=0; $row < 3 ; $row++) { 
                    echo "<p>Row Number $row</p>";
                    echo "<ul>";
                        for ($col=0; $col < 3; $col++) { 
                            echo "<li>".$bus[$row][$col]."</li>";
                        }
					echo "</ul>";
				}
            ?>
		<hr>
		----Array_Change_key_case() ----
        <hr>
            <?php
                $name = array(
					"Abul" => "30",
					"Babul" => "20",
					"Chulbul" => "10",
					"Dabul" => "8"
				);
				print("<pre>");
				print_r (array_change_key_case($name,CASE_UPPER));
				print("</pre>");
            ?>
		<hr>
            <?php
                $name = array(
					"Abul" => "30",
					"Babul" => "20",
					"Chulbul" => "10",
					"Dabul" => "8"
				);
				print("<pre>");
				print_r (array_change_key_case($name,CASE_LOWER));
				print("</pre>");
            ?>




        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
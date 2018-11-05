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
		.maincontent{min-height:800px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP FUNDAMENTALS</h2>
		</section>
		
		<section class="maincontent">
		1.Arithmetic operators 2.Assignment operators 3.Comparison 4.Increment 5.Decrement 6.Logical 7.String 8.Array
		<br>
		<hr>
		PHP OPERATORS
        <hr>
		Arithmetic operators & Assignment operators
		<hr>
		
			<?php 
                $x = 10;
                $x +=20;
                echo $x;
        
			?>
        <hr>
		3.Comparison
		<hr>
            <?php
                $x = 100;
                $y =100;
                var_dump($x==$y);
            ?>
        <hr>
        4.Increment 5.Decrement
        <hr>
            <?php
                //pre-increment
                $x = 100;
                echo ++$x; 
                echo "<br/>";
                //post-increment
                $m = 10;
                echo $m++;
                echo "<br/>";
                echo $m;
            ?>
        <hr>
        6.Logical
        <hr>
            
            <?php
                //AND(&&)-duitai shotti hote hobey
                $a=50;
                $b=30;

                if( $a == 50 and $b == 30){
                    echo"I M D LeGeNd";
                }
                else{
                    echo "No U R NO one";
                }
                echo "<br/>";
                //or(||)- jekono ekta shotti holei hobey
                $a=50;
                $b=30;

                if( $a == 500 or $b == 300){
                    echo"I M D LeGeNd";
                }
                else{
                    echo "No U R NO one";
                }
                echo "<br/>";
                //XOR - duita shotti houa jabe na
                $a=50;
                $b=30;

                if( $a == 500 xor $b == 300){
                    echo"I M D LeGeNd";
                }
                else{
                    echo "No U R NO one";
                }
                echo "<br/>";
                //not true(!==)
                $a=50;
                $b=30;

                if( $a !== 500){
                    echo"I M D LeGeNd";
                }
                else{
                    echo "No U R NO one";
                }

            ?>
		<hr>
        7.String OPERATORS
        <hr>
            <?php
                //concatenation
                $x = "T with";
                $y = " D add";
                $z = $x . $y;
                echo $z;
                echo "<br/>";
                $x.=$y;
                echo $x;
            ?>
        <hr>
        8.Array OPERATORS
        <hr>
            <?php
                //union
                $x = array(
                    "a" => "Dhaka",
                    "b" => "Natore"
                );
                $y = array(
                    "c" => "Bogra",
                    "d" => "Rajshahi"
                );
                var_dump ($x+$y);
                echo "<br/>";
                echo "<hr/>";
                //equality 
                $x = array(
                    "a" => "Dhaka",
                    "b" => "Natore"
                );
                $y = array(
                    "c" => "Bogra",
                    "d" => "Rajshahi"
                );
                var_dump ($x == $y);
                echo "<br/>";
                echo "<hr/>";
                //identical 
                $x = array(
                    "a" => "Dhaka",
                    "b" => "Natore"
                );
                $y = array(
                    "c" => "Bogra",
                    "d" => "Rajshahi"
                );
                var_dump ($x === $y);
                echo "<br/>";
                echo "<hr/>";
                //In-equality 
                $x = array(
                    "a" => "Dhaka",
                    "b" => "Natore"
                );
                $y = array(
                    "c" => "Bogra",
                    "d" => "Rajshahi"
                );
                var_dump ($x != $y);
            ?>
        
        
        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
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
		.maincontent{min-height:1900px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP FUNDAMENTALS</h2>
		</section>
		
		<section class="maincontent">
		PHP Functions
		<br>
		<hr>
		User define function
        <hr>
            <?php
                function school(){
                    echo "i m a student";
                }
                school();

            ?>
		<hr>
		User define function with argument
        <hr>
            <?php
                function yo($name="tasin" , $year="333"){
                    echo "$name is a student in $year<br/>";
                }
                yo("Arnab","1992");
                yo();
                yo("Arnab1","1111");
                yo("Arnab2","777");

            ?>
        <hr>
		Function jevabe value return kore
        <hr>
            <?php
                function sum($x,$y){
                    $z = $x+$y;
                    return $z;
                }
                echo "5+10=".sum(5,10);
            ?>
        
        <hr>
		PHP Arrays
        <hr>
        Indexed Array
        <br>
            <?php
                $x=array(5,3,9,10,15);
                echo $x[0];
                echo "<br/>";
                echo count($x);//value count korbe
                /*
                $x[0]=5;
                $x[1]=3;
                $x[2]=9;
                */
            ?>
        <br>
        Loop diye array jevabe kaj kore
        <br>
            <?php
                $x=array(5,3,9,10,15);
                $length=count($x);
                for ($i=0; $i < $length ; $i++) { 
                    echo $x[$i];
                    echo "<br/>";
                }
                
            ?>
        
        <hr>
        Associative array
        <hr>
            <?php
                $age=array("karim"=>"34","larim"=>"345","tarim"=>"349");
                foreach ($age as $x => $value) {
                    echo "key= ".$x. ", value= ".$value; 
                    echo "<br/>";
                }
            ?>
        <hr>
        Multi Dimentional array
        <hr>
            <?php
                $cars=array(
                    array("bmw",15,20),
                    array("audi",56,87),
                    array("lambo",71,90)
                );
                echo $cars[0][0];
            ?>

        <hr>
        Multi Dimentional array with for Loop row column
        <hr>
            <?php
                $cars=array(
                    array("bmw",15,20),
                    array("audi",56,87),
                    array("lambo",71,90),
                    array("Lotus",76,99)
                );
                for ($row=0; $row < 4 ; $row++) { 
                    echo "<p>Row Number $row</p>";
                    echo "<ul>";
                        for ($col=0; $col < 3; $col++) { 
                            echo "<li>".$cars[$row][$col]."</li>";
                        }
                    echo "</ul>";
                }
            ?>
        <hr>
        PHP Sorting Arrays
        <hr>
            <?php
                //$names = array("rakib","mamun","roni","badol");
                $names = array(25,7,89,65);
                sort($names);
                $length = count($names);
                for ($i=0; $i < $length; $i++) { 
                    echo $names[$i];
                    echo"<br/>";
                }
            ?>
        <hr>
        PHP Reverse Sorting Arrays
        <hr>
            <?php
                //$names = array("rakib","mamun","roni","badol");
                $names = array(25,7,89,65);
                rsort($names);
                $length = count($names);
                for ($i=0; $i < $length; $i++) { 
                    echo $names[$i];
                    echo"<br/>";
                }
            ?>
        <hr>
        PHP Assendin order Sorting Arrays
        <hr>
            <?php
                $boyosh=array("jamal"=>"20","kamal"=>"5","aslam"=>"15");
                asort($boyosh);
                foreach ($boyosh as $nam => $number) {
                    echo "nam= ".$nam." Number= ".$number;
                    echo"<br/>";
                }
            ?>
        <hr>
        PHP Assendin order with name ksort Sorting Arrays
        <hr>
            <?php
                $boyosh=array("jamal"=>"20","kamal"=>"25","aslam"=>"15");
                ksort($boyosh);
                foreach ($boyosh as $nam => $number) {
                    echo "nam= ".$nam." Number= ".$number;
                    echo"<br/>";
                }
            ?>
        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
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
		.maincontent{min-height:1000px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP FUNDAMENTALS</h2>
		</section>
		
		<section class="maincontent">
		PHP conditional Statements
		<br>
		<hr>
		1.if 2.if else 3.if elseif
        <hr>
		1.if 2.if else
		<hr>
		
			<?php 
                /*
                if(condition){
                    execution
                }
                */
                $x=10;
                if($x>50){
                    echo "yo yo";
                }
                else {
                    echo "no no";
                }
        
			?>
        <hr>
		3.if elseif
		<hr>
		
			<?php 
                
                $x=10;
                if($x>15){
                    echo "X is greater than 15";
                }
                elseif($x>12) {
                    echo "X is greater than 12";
                }
                elseif ($x > 11) {
                    echo "X is greater than 11";
                }
                else {
                    echo "Plz give a valid value yo";
                }
        
			?>
        <hr>
		PHP switch Statements
		<hr>
		
			<?php 
                /*
                switch(n){
                    case label1:
                    code execute if n=label1;
                    break;

                    case label2:
                    code execute if n=label2;
                    break;

                    case label3:
                    code execute if n=label3;
                    break;
                    ------
                    ------
                    default:
                    sssssss
                }
                */
                $coding = "java";

                switch ($coding) {
                    case 'html':
                        echo "i love html";
                        break;
                    
                    default:
                    echo "i love Programming";
                        break;
                }
        
			?>
        <hr>
		PHP While Loop
		<hr>
            <?php
                $x = 1;
                while ($x <= 5) {
                    echo "The Number is : $x <br/>";
                    $x++;
                }
            
            ?>
        <hr>
		PHP Do While Loop
		<hr>
            <?php
                //agey echo korbe then condition check korbe
                $a = 1;
                do {
                    echo "Do while is done:$a <br/>";
                    $a++;
                } while ($a <= 5);
            
            ?>
        <hr>
		PHP For Loop
		<hr>
            <?php
                /*for(init counter ; test condition; increment counter ){
                    code execution..
                }
                */
               for ($i=0; $i < 6 ; $i++) { 
                   echo "for loop is:$i<br/>";
               } 
            
            ?>

        <hr>
		PHP foreach loop
		<hr>
            <?php
                //foreach ($array as $value)
                $colors = array("blue","red","black");
                foreach ($colors as $color) {
                    echo "$color <br/>";
                }
            
            ?>



        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
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
		------------- Array_Shift() --------Prothom ta remove kore-------
        <hr>
            <?php
                $color_one = array(
                    "a"=>"red",
                    "b"=>"green",
                    "c"=>"black",
                    "d"=>"white"
                );
                array_shift($color_one);

                print("<pre>");
				print_r ($color_one);
				print("</pre>");           
            
            ?>
        <hr>
		------------- Array_Slice() -------range dhorate hobe--------
        <hr>
            <?php
                $color_one = array("red","green","black","white");

                $result = array_slice($color_one,2);

                print("<pre>");
				print_r ($result);
				print("</pre>");           
            
            ?>
		<hr>
		------------- Array_Sum() ---------------
        <hr>
            <?php
				$num = array(10,20,30);
				$result = array_sum($num);
				echo $result;
          
            
            ?>
		<hr>
		------------- Array_unique() ---------------
        <hr>
            <?php
				$num = array(
					"a"=>"red",
					"b"=>"blue",
					"c"=>"green",
					"d"=>"purple",
					"e"=>"red",
					"f"=>"black"
				);
				
				$unique = array_unique($num);
          
				print("<pre>");
				print_r ($unique);
				print("</pre>"); 
            ?>
		<hr>
		------------- Array_unshift() ---------------
        <hr>
            <?php
				$num = array(
					"a"=>"red",
					"b"=>"blue",
					"c"=>"green",
					"d"=>"purple",
					"e"=>"red",
					"f"=>"black"
				);

				print("<pre>");
				print_r ($num);
				print("</pre>"); 
				
				array_unshift($num,"tomato");
          
				print("<pre>");
				print_r ($num);
				print("</pre>"); 
            ?>
		<hr>
		------------- Array_values() ---------------
        <hr>
            <?php
				$num = array(
					"a"=>"red",
					"b"=>"blue",
					"c"=>"green",
					"d"=>"purple",
					"e"=>"red",
					"f"=>"black"
				);

				$result = array_values($num);
          
				print("<pre>");
				print_r ($result);
				print("</pre>"); 
            ?>
		<hr>
		------------- Array_walk() ---------------
        <hr>
            <?php

				function myFunction($value,$key){
					echo "$key comes from $value <br/>";
				}
				$name = array(
					"akbar"=>"Biology",
					"mamun"=>"Physics",
					"kamrul"=>"Math"
				);
				array_walk($name,"myFunction");
				
				
            ?>
        
        

        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
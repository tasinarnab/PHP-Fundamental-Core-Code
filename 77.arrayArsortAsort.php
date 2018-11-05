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
		------------- Arsort() & Asort() ---------------
        <hr>
            <?php

                $name = array(
					"akbar"=>"30",
					"mamun"=>"40",
                    "kamrul"=>"70",
                    "hasan"=>"50"
                );
                arsort($name);
                foreach ($name as $key => $value) {
                    echo "Name: ".$key.", Age: ".$value."<br/>";
                }
                          
            
            ?>
        <hr>
            <?php

                $name = array(
					"akbar"=>"30",
					"mamun"=>"40",
                    "kamrul"=>"70",
                    "hasan"=>"50"
                );
                asort($name);
                foreach ($name as $key => $value) {
                    echo "Name: ".$key.", Age: ".$value."<br/>";
                }
                          
            
            ?>
        <hr>
		------------- Compact() ---------------
        <hr>
            <?php

                $name = "Tasin";
                $dep = "CSE";
                $coder = "PHP";

                $result = compact("name","dep","coder");
                
                print("<pre>");
				print_r ($result);
				print("</pre>"); 
            
            ?>
        <hr>
		------------- Current() , Next() , Prev() & End() ---------------
        <hr>
            <?php

                $name = array("A","B","C","D");
                echo current($name)."<br/>";
                echo next($name)."<br/>";
                echo end($name)."<br/>";
                echo prev($name)."<br/>";
                
                
            
            ?>
        <hr>
		------------- in_array() ---------------
        <hr>
            <?php

               $coder = array("A","B","C","D");
               if(isset($_POST['name'])){
                    $text = $_POST['name'];

                    if(in_array($text,$coder)){
                        echo "$text Exist";
                    }else {
                        echo "$text Does Not Exist";
                    }
               }
            
            ?>

            <form action="" method="post">
                <input type="text" name="name">
                <input type="submit" value="Submit">
            </form>
        

        <hr>
		------------- key(), krsort() & ksort() ---------------
        <hr>
            <?php

               $coder = array("A","B","C","D");
               echo "The current position key is: ".key($coder);
            
            ?>
        <hr>
            <?php

               $coder = array("A","B","C","D");
               next($coder);
               echo "The current position key is: ".key($coder);
            
            ?>
        <hr>
            <?php

               $coder = array(
                   "A"=>"30",
                   "B"=>"15",
                   "C"=>"25",
                   "D"=>"19"
                );
                krsort($coder);

                foreach ($coder as $key => $value) {
                    echo "name: ".$key.", Age: ".$value."<br/>";
                }
               
            
            ?>
        <hr>
            <?php

               $coder = array(
                   "A"=>"30",
                   "B"=>"15",
                   "C"=>"25",
                   "D"=>"19"
                );
                ksort($coder);

                foreach ($coder as $key => $value) {
                    echo "name: ".$key.", Age: ".$value."<br/>";
                }
               
            
            ?>
        <hr>
		------------- Shuffle() ---------------
        <hr>
            <?php

                $color = array("Red","Blue","Green","Yellow");

                print("<pre>");
			    print_r ($color);
			    print("</pre>"); 
            

                shuffle($color);

                
                print("<pre>");
			    print_r ($color);
			    print("</pre>"); 
            
            ?>
        

        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
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
		------------- Array_Merge() ---------------
        <hr>
        ----Index array te Duita array ektate porinoto hobe---
        <hr>
            <?php
                $arr_one = array("red","green");
                $arr_two = array("Blue","black");
                $result = array_merge($arr_one,$arr_two);

                print("<pre>");
				print_r ($result);
				print("</pre>");
            ?>
        <hr>
        ----Associative array te Merge---last er ta overwrite kore
        <hr>
            <?php
                $arr_one = array(
                    "a"=>"red",
                    "b"=>"green"
                );
                $arr_two = array(
                    "c"=>"blue",
                    "b"=>"black"
                );
                $result = array_merge($arr_one,$arr_two);

                print("<pre>");
				print_r ($result);
				print("</pre>");
            ?>
        <hr>
        -------------Array_Multisort()------------
        <hr>
            <?php
                $arr_one = array("red","green","ash");
                $arr_two = array("Blue","zlack","owl");
                array_multisort($arr_one,$arr_two);

                print("<pre>");
				print_r ($arr_one);
                print("</pre>");

                print("<pre>");
				print_r ($arr_two);
				print("</pre>");
            ?>
        <hr>
        -------------Array_Pad()---------Array er element add kore nibe---
        <hr>
            <?php
                $arr_one = array("red","green","ash");
                $result = array_pad($arr_one,5,"blue");

                print("<pre>");
				print_r ($result);
                print("</pre>");

            ?>

        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
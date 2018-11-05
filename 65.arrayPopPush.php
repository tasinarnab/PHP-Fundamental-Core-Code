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
		------------- Array_pop() & Array_push() ---------------
        <hr>
        ---Pop----
        <hr>
            <?php
                $arr_one = array("red","green");
                
                array_pop($arr_one);

                print("<pre>");
				print_r ($arr_one);
				print("</pre>");
            ?>
        <hr>
        ---Push----
        <hr>
            <?php
                $arr_one = array("red","green");
                
                array_push($arr_one,"black");

                print("<pre>");
				print_r ($arr_one);
				print("</pre>");
            ?>
        <hr>
        -----------Array_product()------------
        <hr>
            <?php
                $arr = array(5,5);
                echo array_product($arr);

            ?>
        <hr>
        -----------Array_Replace------------
        <hr>
            <?php
                $color_one = array("red","green");
                $color_two = array("black","white");
                $replace = array_replace($color_one,$color_two);

                print("<pre>");
				print_r ($replace);
				print("</pre>");

            ?>
        <hr>
        -----------Array_Reverse()------------
        <hr>
            <?php
                $color_one = array("red","green","black","white");
                
                $replace = array_reverse($color_one);

                print("<pre>");
				print_r ($color_one);
				print("</pre>");

                print("<pre>");
				print_r ($replace);
				print("</pre>");

            ?>
        <hr>
        -----------Array_Search()------------
        <hr>
            <?php
                $color_one = array("a"=>"red","b"=>"green","c"=>"black","d"=>"white");
                if (isset($_POST['text'])) {
                    global $txt;
                    $txt = $_POST['text'];
                    $result = array_search($txt,$color_one);
                    echo "You have searched by $txt and your key is $result";
                }
                            
                
            ?>
            <form action="" method="post">
                <input type="text" name="text" value="<?php global $txt; echo $txt; ?>">
                <input type="submit" value="Submit">
            </form>
        

        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
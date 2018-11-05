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
		.maincontent{min-height:1200px; padding:30px;}
        input[type="text"]{width:300px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP FUNDAMENTALS</h2>
		</section>
		
		<section class="maincontent">
        <hr>
		<-------------- PHP Explode() & implode() Function ------------->
        <hr>
        <hr>
		<-- PHP Explode()
        <hr>
            <?php
                
                $mystr = "We are learning PHP";
                print_r (explode(" ","$mystr"));
            
            ?>
        <hr>
		<-- PHP Implode()
        <hr>
            <?php
                
                $mystr = array("We", "are", "learning", "PHP");
                echo implode(" ",$mystr);
            
            ?>
        <hr>
		<-- PHP Case Change
        <hr>
            <?php
               if(isset($_POST['text'])){
                   global $txt;
                   $txt = $_POST['text'];
                   echo strtoupper ($txt);
                   //echo strtolower ($txt);
                   //echo ucfirst ($txt);
                } 
                

            ?>
            <form action="44.explodeImplode.php" method="post" >
                <input type="text" name="text" value="<?php global $txt; echo $txt; ?>">
                <input type="submit" value="Submit">
            </form>

        <hr>
		<-- Strip whitespace (or other characters)-->
        <hr>
            <?php
               if(isset($_POST['text'])){
                   global $txt2;
                   $txt2 = $_POST['text'];
                   echo ltrim ($txt," .");
                } 
                
            ?>
            <form action="44.explodeImplode.php" method="post" >
                <input type="text" name="text" value="<?php global $txt2; echo $txt2; ?>">
                <input type="submit" value="Submit">
            </form>
        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
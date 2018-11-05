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
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP FUNDAMENTALS</h2>
		</section>
		
		<section class="maincontent">
        <hr>
		--------------PHP Filters Advanced
        <hr>
            <?php
                $intmax = 300;
                $min = 1;
                $max = 200;
                if(filter_var($intmax,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max)))){
                    echo"It is  valid.";
                }else{
                    echo"Not Valid";
                }
                echo"<br/>";

                $url="http://tasin.com/index.html?q=123";
                if(filter_var($url,FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
                    echo "This url is valid.";
                }else{
                    echo "It has not query string.";
                }
            
            
            ?>
        <hr>
		--------------PHP Error Reporting
        <hr>
            <?php
                //phpinfo();
                echo"uporer slash duita delete kore deklei hobe";
            
            
            ?>
        <hr>
		--------------PHP Error Reporting
        <hr>
            <?php
                error_reporting(E_ERROR | E_WARNING | E_PARSE |E_NOTICE);
                $price=45;
                if($price==45){
                    print"The price is $price";
                }else{
                    print"The price is not 45";
                }
            
            
            ?>
        <hr>
		--------------PHP Error Handling with Exception
        <hr>
            <?php
                
                function numCheck ($num){
                    if($num>1){
                        throw new Exception ("value must be 1 or below");
                    }
                    return true;
                }
                try{
                    numCheck(2);
                    echo"If u see this, the number is 1 or below";
                }
                catch(Exception $e){
                    echo "Message: ".$e->getMessage();
                }
            
            
            ?>
        <hr>
            <?php
                
                function numbCheck ($numb){
                    if($numb!=5){
                        throw new Exception ("Number is not 5");
                    }
                    return true;
                }
                try{
                    numbCheck(5);
                    echo"Yes u have done";
                }
                catch(Exception $f){
                    echo "Error: ".$f->getMessage();
                }
            
            
            ?>

        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
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
		--------------PHP Filters
        <hr>
            <table>
                <tr>
                    <td>Filter Name</td>
                    <td>Filter ID</td>
                </tr>
                <?php
                    foreach(filter_list() as $id =>$filter){
                        echo '<tr><td>' . $filter . '</td><td>' .filter_id($filter) . '</td></tr>';
                    }
                ?>
            </table>
        <br>
        <hr>
		-----------PHP Filters Example senitization
        <hr>   
                <?php
                    $str="<h2>I am Learning</h2>";
                    $newstr=filter_var($str,FILTER_SANITIZE_STRING);
                    echo $newstr;
                ?>
        <hr>
                <?php
                    $int=50.6;
                    if (filter_var($int,FILTER_VALIDATE_INT)) {
                        echo "It is INT value";
                    }else {
                        echo "Not int";
                    }
                
                ?>
        <hr>
                <?php
                    $ip="127.0.0.1";
                    if (filter_var($ip,FILTER_VALIDATE_IP)) {
                        echo "$ip It is IP";
                    }else {
                        echo "$ip Not valid IP";
                    }
                
                ?>
        <hr>
                <?php
                    $mail="tasinarnab@gmail.com";
                    if (filter_var($mail,FILTER_VALIDATE_EMAIL)) {
                        echo "$mail  is valid email";
                    }else {
                        echo "$mail Not valid mail";
                    }
                
                ?>
        <hr>
                <?php
                    $url="http://www.tasinarnab.com";
                    if (filter_var($url,FILTER_VALIDATE_URL)) {
                        echo "$url  is valid website";
                    }else {
                        echo "$url Not valid website";
                    }
                
                ?>



        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
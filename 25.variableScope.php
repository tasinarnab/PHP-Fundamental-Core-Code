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
		.maincontent{min-height:1100px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP FUNDAMENTALS</h2>
		</section>
		
		<section class="maincontent">
		PHP Variable Scope
		<br>
		<hr>
		-----Local Variable------
        <hr>
            <?php
                function test1(){
                    $a=5;
                    echo $a;
                    echo"<br/>";
                }

                function test2(){
                    $b=10;
                    echo $b;
                }
                test1();
                test2();
            ?>
		<hr>
		-----Global Variable------
        <hr>
            <?php
                $x=15;

                function test11(){
                    global $x;
                    $a=5;
                    echo $a;
                    echo"<br/>";
                    echo"Access from function test11=".$x;
                    echo"<br/>";
                }

                function test22(){
                    global $x;
                    $b=10;
                    echo $b;
                    echo"<br/>";
                    echo"Access from function test22=".$x;
                }
                test11();
                test22();
            ?>

        <hr>
		Super Globals [$GLOBALS & $_SERVER]
        <hr>
        $GLOBALS 
        $_SERVER 
        $_REQUEST 
        $_POST 
        $_GET 
        $_FILES 
        $_ENV 
        $_COOKIE 
        $_SESSION 
        <hr>
		Super Globals [$GLOBALS]
        <hr>
            <?php
                $x=5;
                $y=10;
                function sum(){
                    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
                }
                sum();
                echo $z;

            ?>
        <hr>
		Super Globals [$_SERVER]
        <hr>
            <?php
                echo $_SERVER['PHP_SELF'];
                echo"<br/>";
                echo"<br/>";
                echo $_SERVER['SERVER_NAME'];
                echo"<br/>";
                echo"<br/>";
                echo $_SERVER['SCRIPT_NAME'];
                echo"<br/>";
                echo"<br/>";
                echo $_SERVER['HTTP_USER_AGENT'];
                echo"<br/>";
                echo"<br/>";
                echo $_SERVER['SERVER_ADDR'];
            ?>
        <hr>
		Super Globals [$_REQUEST & $_POST]
        <hr>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                User Name:
                <input type="text" name="username">
                <input type="submit" value="Submit">
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_REQUEST['username'];
                    if (empty($name)) {
                        echo "<span style='color:red'>user name er ghor puron korte hobe !!!</span>";
                    }
                    else{
                        echo "<span style='color:green'>You Have Submitted ".$name."</span>";
                    }
                }
            ?>
        <hr>
		Super Globals [$_GET]
        <hr>
            <a href="text.php?msg=Good&txt=Bye">Sent Data</a>
                
            <?php
                
            ?>
        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
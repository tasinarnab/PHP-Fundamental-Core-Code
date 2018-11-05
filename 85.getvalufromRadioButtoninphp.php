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
		.maincontent{min-height:430px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>Form Handling With PHP & JS</h2>
		</section>
		
		<section class="maincontent">
        <hr>
		------------- Getting values from a Radio Button in PHP (Part-03) ---------------
        <hr>

            <?php

                /*
                if(isset($_POST['username'])){
                    echo "User-Name is : " .$_POST['username'];
                }
                */
            
                if(isset($_POST['gender'])){
                    $gen = $_POST['gender'];
                    if($gen == "Male"){
                        echo "You are Male";
                    }elseif ($gen == "Female") {
                        echo "You are female";
                    }else {
                        echo "Others";
                    }
                }
            
            ?>
            
            <form action="" method="post" name="myform" id="myform">
                <table>
                    <tr>
                        <td>Gender : </td>
                        <td>
                            <input type="radio" name="gender" value="Male">Male
                            <input type="radio" name="gender" value="Female">Female
                            <input type="radio" name="gender" value="Others">Others
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Clear">
                        </td>
                    </tr>
                </table>
            </form>

        

        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
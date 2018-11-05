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
		------------- Get Selected Option Value in PHP (Part-07) ---------------
        <hr>

            <?php
                
                if(isset($_POST['submit'])){
                    $coder = $_POST['coder'];
                    echo "Language  : ".$coder ;
                    
                }
            
            ?>
            
            <form action="" method="post" name="myform" id="myform">
                <table>
                    <tr>
                        <td>Language : </td>
                        <td>
                            <select name="coder">
                                <option>Select One</option>
                                <option value="JAVA">JAVA</option>
                                <option value="PHP">PHP</option>
                                <option value="HTML">HTML</option>
                                <option value="C++">C++</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Submit">
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
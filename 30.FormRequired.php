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
		.maincontent{min-height:650px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP FUNDAMENTALS</h2>
		</section>
		
		<section class="maincontent">
		PHP Form Required
		<br>
		<hr>
		-----------
        <hr>
            <?php
                $errname = $erremail = $errwebsite = $errgender = "";
                $name = $email = $website = $comment = $gender = "";

                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(empty($_POST["name"])){
                        $errname = "Name is Required.";
                    }else{
                    $name = validate ($_POST["name"]);
                    }
                    if(empty($_POST["email"])){
                        $erremail = "email is Required.";
                    }else{
                    $email = validate ($_POST["email"]);
                    }
                    if(empty($_POST["website"])){
                        $errwebsite = "website is Required.";
                    }else{
                        $website = validate ($_POST["website"]);
                    }
                    if(empty($_POST["gender"])){
                        $errgender = "gender is Required.";
                    }else{
                        $gender = validate ($_POST["gender"]);
                    }
                    
                    
                    $comment = validate ($_POST["comment"]);
                    

                    echo "Name   : ". $name."<br/>";
                    echo "E-mail : ". $email."<br/>";
                    echo "Website: ". $website."<br/>";
                    echo "Comment: ". $comment."<br/>";
                    echo "Gender : ". $gender."<br/>";
                }

                function validate($data){
                    $data = trim($data);
                    $data = stripcslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>
            <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post">
            <table>
            <p style="color:red">* Required Field</p>
                <tr>
                    <td>Name : </td>
                    <td><input type="text" name="name">*<?php echo $errname; ?></td>
                </tr>
                <tr>
                    <td>E-mail : </td>
                    <td><input type="text" name="email">*<?php echo $erremail; ?></td>
                </tr>
                <tr>
                    <td>Website : </td>
                    <td><input type="text" name="website">*<?php echo $errwebsite; ?></td>
                </tr>
                <tr>
                    <td>Comment : </td>
                    <td><textarea name="comment" cols="40" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Gender : </td>
                    <td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        *<?php echo $errgender; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
            </form>
            
            <?php
                
            ?>
		
        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
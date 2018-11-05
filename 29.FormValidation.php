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
		.maincontent{min-height:450px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP FUNDAMENTALS</h2>
		</section>
		
		<section class="maincontent">
		PHP Form Validation
		<br>
		<hr>
		-----------
        <hr>
            <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post">
            <table>
                <tr>
                    <td>Name : </td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>E-mail : </td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Website : </td>
                    <td><input type="text" name="website"></td>
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
                $name = $email = $website = $comment = $gender = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name    = validate ($_POST["name"]);
                    $email   = validate ($_POST["email"]);
                    $website = validate ($_POST["website"]);
                    $comment = validate ($_POST["comment"]);
                    $gender  = validate ($_POST["gender"]);

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
		
        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
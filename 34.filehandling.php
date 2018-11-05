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
		PHP File Handling
		<br>
		<hr>
		---
        <hr>
            <?php
                echo readfile ("testing.txt");
            ?>
        <hr>
		File Open/Read/Close
        <hr>
            <?php
                $ourfile = fopen("testing.txt","r") or die("File not found");
                echo fread($ourfile,filesize("testing.txt"));
                fclose($ourfile);
            ?>
		<hr>
            <?php
                $ourfile = fopen("testing.txt","r") or die("File not found");
                echo fgets($ourfile,filesize("testing.txt"));
                fclose($ourfile);
            ?>
		<hr>
            <?php
                $ourfile = fopen("testing.txt","r") or die("File not found");
                echo fgetc($ourfile);
                fclose($ourfile);
            ?>
        <hr>
            <?php
                $ourfile = fopen("testing.txt","r") or die("File not found");
                while (!feof($ourfile)){
                    echo fgets($ourfile)."<br/>";
                };
                fclose($ourfile);
            ?>
        <br>
        <hr>
		File Create/Write
        <hr>
            <?php
                $createfile = fopen("new.txt", "w") or die("File not found");
                $one = "Tasin Monzur Khan Arnab\n";
                fwrite($createfile,$one);

                $two = "I M A NooB\n";
                fwrite($createfile,$two);
                fclose($createfile);
            ?>
        <hr>
		37.File Upload
        <hr>
            <?php
                if(isset($_FILES['image'])){
                    $filename = $_FILES['image']['name'];
                    $filetmp = $_FILES['image']['tmp_name'];
                    move_uploaded_file( $filetmp,"img/". $filename);
                    echo "Image Uploaded Successfully";
                }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="image">
                <input type="submit" value="Submit">
            </form>
        <hr>
		PHP Sessions
        <hr>
            <?php
                session_start();
            ?>
            <?php
                $_SESSION['user'] = "Tasin";
                $_SESSION['password'] = "123";
                echo "User-Name is ".$_SESSION['user']."<br/>";
                echo "Password is ".$_SESSION['password']."<br/>";
                session_destroy();
            ?>

        <hr>
		PHP Cookies
        <hr>
            <?php
                if (!isset($_COOKIE['Visited'])) {
                    setcookie("Visited","1",time()+86400,"/") or die("Could not set cookie");
                    echo "This is first visit in website";
                }else{
                    echo "U R old visitor";
                }
                
            ?>
        <hr>
		Delete Cookies
        <hr>
            <?php
                // Shobar upore dite hobe then niche echo
                setcookie('visited',"",time()-3600);
                echo "Cookies Deleted";
            ?>
        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
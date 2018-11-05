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
        #myform{width:370px;border:5px solid #fff;padding:10px;}
        .tblone{width:400px;border:5px solid #fff;margin:20px 0;}
        .tblone td{padding:5px 10px;}
        table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
        table.tblone tr:nth-child(2n){background:#f1f1f1;height:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>Form Handling With PHP & JS</h2>
		</section>
		
		<section class="maincontent">
        <hr>
		------------- Get data from a data table in PHP (Part-10) ---------------
        <hr>

            <?php
            
                if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $gender = $_POST['gender'];
                    $dep = $_POST['dep'];
                    $coder = $_POST['coder'];
                
            
            ?>            

            <table class="tblone">
                <tr>
                    <td colspan="2" align="center">Output</td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    
                        <?php
                            if ($gender=="Male") { ?>
                                <td><?php echo "Male"; ?></td>
                            <?php }elseif ($gender=="Female") { ?>
                                <td><?php echo "Male"; ?></td>
                            <?php } ?>
                        
                    
                </tr>
                <tr>
                    <td>Department:</td>
                    
                        <?php
                            if ($dep=="CSE") { ?>
                                <td><?php echo "CSE"; ?></td>
                            <?php }elseif ($dep=="EEE") { ?>
                                <td><?php echo "EEE"; ?></td>
                            <?php }elseif ($dep=="BBA") { ?>
                                <td><?php echo "BBA"; ?></td>
                            <?php } ?>
                    
                </tr>
                <tr>
                    <td>Coder:</td>
                    <td><?php echo $coder; ?></td>
                </tr>
            </table>
            <?php } ?>
            
            <form action="" method="post" name="myform" id="myform">
                <table>

                    <tr>
                        <td>Name : </td>
                        <td><input type="text" name="name" required="1"></td>
                    </tr>

                    <tr>
                        <td>Gender : </td>
                        <td>
                            <input type="radio" name="gender" value="Male">Male
                            <input type="radio" name="gender" value="Female">Female
                        </td>
                    </tr>

                    <tr>
                        <td>Department : </td>
                        <td>
                            <input type="checkbox" name="dep" value="CSE">CSE
                            <input type="checkbox" name="dep" value="EEE">EEE
                            <input type="checkbox" name="dep" value="BBA">BBA
                        </td>
                    </tr>

                    <tr>
                        <td>Coder : </td>
                        <td>
                            <select name="coder" required="1">
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
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
		------------- Getting values from a Radio Button in javaScript (Part-04) ---------------
        <hr>

            <script>
                function formFunction(){
                    /*
                    var gen = document.myform.gender.value;
                    var showData = "Gender : "+gen;
                    document.getElementById('output').innerHTML = showData;
                    */
                    var gen = document.myform.gender.length;
                    for (i = 0; i < gen; i++) {
                        var checkValue = document.myform.gender[i].checked;
                        if (checkValue) {
                            var checkResult = document.myform.gender.value;
                        }
                    }
                    var showData = "Gender : "+checkResult;
                    document.getElementById('output').innerHTML = showData;
                }
            </script>

            <div id="output"></div>
            
            <form action="" method="post" name="myform" id="myform" onsubmit="formFunction(); return false;">
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
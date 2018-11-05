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
		.maincontent{min-height:730px; padding:30px;}
	</style>
</head>
<body>
	<div class="phpclass">
		<section class="headerarea">
			<h2>PHP Array() Function</h2>
		</section>
		
		<section class="maincontent">
        <hr>
		-------------Array_Column() ---------------
        <hr>
        
            <?php
                $name = array(
                            array(
                                'id'=>'200',
                                'First_Name'=>'Arnab',
                                'Last_Name'=>'Tasin'
                            ),
                            array(
                                'id'=>'201',
                                'First_Name'=>'Arnab2',
                                'Last_Name'=>'Tasin2'
                            ),
                            array(
                                'id'=>'202',
                                'First_Name'=>'Arnab3',
                                'Last_Name'=>'Tasin3'
                            )
                );

                $lastname = array_column($name,'Last_Name','id');
                print("<pre>");
				print_r ($lastname);
				print("</pre>");
            ?>
		<hr>
		-------------Array_Combine() ---------------
        <hr>
            <?php
                $nam = array("Akbor","Babor","Tabor");
                $dept = array("CSE","MATH","EEE");

                $combine = array_combine($nam, $dept);
                
                print("<pre>");
				print_r ($combine);
				print("</pre>");
            ?>
        <hr>
		-------------Array_Count_values() ---------------
        <hr>
            <?php
                $nam = array("Akbor","Babor","Akbor","Babor","Tabor","Tabor","Tabor","Tabor","Tabor");
                $dept = array("CSE","MATH","CSE","MATH","EEE","EEE","EEE","EEE","EEE");

                $count = array_count_values($nam);
                
                print("<pre>");
				print_r ($count);
				print("</pre>");
            ?>
        <hr>
		-------------Array_diff() ------Key = Same---------
        <hr>
            <?php
                $array_one = array(
                    "a"=>"red",
                    "b"=>"blue",
                    "c"=>"green"
                );
                $array_two = array(
                    "a"=>"red",
                    "b"=>"blue"
                );
                $differ = array_diff($array_one,$array_two);
                
                print("<pre>");
				print_r ($differ);
				print("</pre>");
            ?>
        <hr>
		-------------Array_diff_assoc() -------Key = Not Same--------
        <hr>
            <?php
                $array_one = array(
                    "a"=>"red",
                    "b"=>"blue",
                    "c"=>"green"
                );
                $array_two = array(
                    "d"=>"red",
                    "e"=>"blue"
                );
                $differ = array_diff_assoc($array_one,$array_two);
                
                print("<pre>");
				print_r ($differ);
				print("</pre>");
            ?>
        <hr>
		------------- Array_diff_key() ---------------
        <hr>
            <?php
                $array_one = array(
                    "a"=>"red",
                    "b"=>"blue",
                    "c"=>"green",
                    "d"=>"white"
                );
                $array_two = array(
                    "a"=>"red",
                    "b"=>"blue",
                    "d"=>"black"
                );
                $differ = array_diff_key($array_one,$array_two);
                
                print("<pre>");
				print_r ($differ);
				print("</pre>");
            ?>
        <hr>
		------------- Array_intersect ---------------Matching gulo show korbe
        <hr>
            <?php
                $array_one = array(
                    "a"=>"red",
                    "b"=>"blue",
                    "c"=>"green",
                    "d"=>"white"
                );
                $array_two = array(
                    "a"=>"red",
                    "b"=>"blue",
                    "d"=>"black"
                );
                $match = array_intersect($array_one,$array_two);
                
                print("<pre>");
				print_r ($match);
				print("</pre>");
            ?>
        <hr>
		------------- Array_intersect_assoc ---------------key and value both match hobey
        <hr>
            <?php
                $array_one = array(
                    "a"=>"red",
                    "b"=>"blue",
                    "c"=>"green",
                    "d"=>"white"
                );
                $array_two = array(
                    "a"=>"purple",
                    "b"=>"blue",
                    "d"=>"black"
                );
                $match = array_intersect_assoc($array_one,$array_two);
                
                print("<pre>");
				print_r ($match);
				print("</pre>");
            ?>
        <hr>
		------------- Array_intersect_key ---------------Only key match hobey
        <hr>
            <?php
                $array_one = array(
                    "a"=>"red",
                    "b"=>"blue",
                    "c"=>"green",
                    "d"=>"white"
                );
                $array_two = array(
                    "a"=>"purple",
                    "b"=>"blue",
                    "d"=>"black"
                );
                $match = array_intersect_key($array_one,$array_two);
                
                print("<pre>");
				print_r ($match);
				print("</pre>");
            ?>
        <hr>
		------------- Array_key_exists ---------------
        <hr>
            <?php
                $arr = array(
                    "name"=>"Tasin",
                    "age"=>"26"
                );
                if (array_key_exists("name",$arr)) {
                    echo "Key already exists";
                }else {
                    echo "Key does not exists";
                }
            ?>
        <hr>
		------------- Array_keys ---------------
        <hr>
            <?php
                $car = array(
                    "Volvo"=>"xc90",
                    "BMW"=>"Bm89",
                    "Toyota"=>"Highlander"
                );
                $keys = array_keys($car);

                print("<pre>");
				print_r ($keys);
				print("</pre>");
            ?>
        <hr>
		------------- Array_map ---------------
        <hr>
            <?php
                function myFunction($value){
                    return ($value+$value);
                }
                $arr = array(1,2,3,4,5);
                $result = array_map("myFunction",$arr);

                print("<pre>");
				print_r ($result);
				print("</pre>");
            ?>
        <hr>
        <hr>
            <?php
                function myFunctions($upper){
                    $v=strtoupper($upper);
                    return $v;
                }
                $a = array(
                    "Animal"=>"cow",
                    "Animal2"=>"dog"
                );
                $result = array_map("myFunctions",$a);

                print("<pre>");
				print_r ($result);
				print("</pre>");
            ?>


        </section>
		
		<section class="footerarea">
		<h2>(Tasin Arnab)</h2>
		</section>
	</div>
</body>
</html>
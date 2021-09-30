<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/bsicons/bootstrap-icons.css">
	<link rel="stylesheet" href="/opiconic/font/css/open-iconic-bootstrap.css">
	<link rel="stylesheet" href="/bootstrap/4/css/bootstrap.min.css">
	<title id="pageTitle">Check divisiblility by 3, 5, 15</title>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center mt-2">
			<?php
/*				
				// WHILE LOOP
				$x = 1;
				while($x <= 100){
					if($x % 3 == 0){
						echo '<pre style="color: blue;"> Crackle, </pre>';
					} else if($x % 5 == 0){
						echo '<pre style="color: red;"> Pop, </pre>';
					} else if($x % 15 == 0){
						echo '<pre style="color: orange;"> CracklePop, </pre>';
					} else {
						echo '<pre>', $x,', ', '</pre>';						
					}
					$x++;
				}
 
 
				// DO WHILE LOOP
				$x = 1;
				do	{
					if($x % 3 == 0){
						echo '<pre style="color: blue;"> Crackle, </pre>';
					} else if($x % 5 == 0){
						echo '<pre style="color: red;"> Pop, </pre>';
					} else if($x % 15 == 0){
						echo '<pre style="color: orange;"> CracklePop, </pre>';
					} else {
						echo '<pre>', $x,', ', '</pre>';						
					}
					$x++;					
				} while ($x <= 100);
*/				
				
				// FOR LOOP
 				for($x = 1; $x <= 100; $x++){
					if($x % 3 == 0){
						echo '<pre style="color: blue;"> Crackle, </pre>';
					} else if($x % 5 == 0){
						echo '<pre style="color: red;"> Pop, </pre>';
					} else if($x % 15 == 0){
						echo '<pre style="color: orange;"> CracklePop, </pre>';
					} else {
						echo '<pre>', $x,', ', '</pre>';						
					}
				}
				
				// 
 ?>
		</div>
	</div>



	<script src="/jquery/3/jquery.min.js"></script>
	<script src="/popper/2/popper.min.js"></script>
	<script src="/bootstrap/4/js/bootstrap.min.js"></script>
</body>

</html>
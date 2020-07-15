<!DOCTYPE html>
<html>
<head>
	<title>weather </title>
</head>
<body>

	<?php if(is_array($weather) and isset($weather)){ $contador=0;?>

	<?php foreach ($weather as $city) {
		# code...
		$contador++;
	 ?>
	 <?php 
	 		if($contador==1){
	 			echo "<center><h1>FECHA  ".date("d/m/y", strtotime($city->applicable_date))."</center></h1>";
	 			ECHO "<br><center><h1>La temperaturas registradas En London <h1> </center>" ;
	 		}


	 		
        ?>




		<?php echo "<center><h2>".$city->the_temp."</center></h2><br>"; ?>
      		

	 	

	<?php } ?>


	<?php } ?>

</body>
</html>


$query = "
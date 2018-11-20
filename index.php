<!doctype html>
<head>
<title>CreateLog</title>
<style>
#date_1{width:100px;}
#date_2{width:110px;}
</style>
</head>
<body>

<?php

//making a connection 
if(! ($c = mysqli_connect("localhost","borno","123456") and mysqli_select_db( $c, "admission_log" ))){
	die("can't connect");
};
if(isset($_GET['submit'])){
	$date_1 = $_GET['date_1'];
	$date_2 = $_GET['date_2'];
	mysqli_query($c,"INSERT INTO `admission_log`.`log` (`id`, `date`, `TOTAL`, `NOTE`) VALUES ('', '{$date_2}-{$date_1}', '{$_GET['total']}', '{$_GET['note']}');");
	$date_1 = $_GET['date_1'] +1;
	echo "Updated";
}else{echo "....";
$date_1 = "DAY";
	$date_2 = "2018-MONTH";
}
?>


<form method="get" action="">
	<br>
	TOTAL TIME OF STUDY:<br>
	<input type="text" name="total" id=""/><br>
	Date<br>
	
	<input type="text" name="date_1" id="date_1"  value="<?php echo $date_1; ?>"/>
	<input type="text" name="date_2" id="date_2" value="<?php echo $date_2; ?>"/>
	<br>
	
	Note:<br>
	<input type="text" name="note" id=""/>	
	<input type="submit" name="submit" id="" value="submit"/>	
</form>
</body>
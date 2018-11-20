
<?php

//making a connection 
if(! ($c = mysqli_connect("localhost","borno","123456") and mysqli_select_db( $c, "admission_log" ))){
	die("can't connect");
};

$count= 0 ;
$day = 0 ;
$query = mysqli_query($c,"SELECT * from log;");
while($row = mysqli_fetch_array($query)){
	$count= $count+ $row['TOTAL'];
	$day ++;
}

echo "You have studied ".$count." Hours in ".$day." Days. Average ".($count/$day)." hours/day"  ;
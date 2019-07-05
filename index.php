<?php

$con=mysqli_connect("localhost","root","","employee");
$perPage=1;
$pageNumber=1;
$query1="select * from users";


$result=mysqli_query($con, $query1);
$allRows=10;

echo $allRows;

$query2="select * from users";

$result2=mysqli_query($con, $query2);

while($row=mysqli_fetch_array($result2)){
	$name=$row["name"];
	$age=$row["Age"];
	$phone=$row["phone_no"];
	$id=$row["Id"];

	echo $name."<br>".$age."<br>".$phone."<br>".$id."<br>";
}

for($i=0;$i<=$allRows; $i++){
	echo "<a href ='index.php?pageNumber=".$i."'>$i</a>'";
}
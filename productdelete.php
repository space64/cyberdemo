<?php
	$productlist= $_POST["productlist"];
	$count = 0;
	echo "Selected product received on server is/are:</br>";
	foreach($productlist as $productid){
		$count++;
		echo "Product ".$count.": ".$productid."</br>";
	}
?>
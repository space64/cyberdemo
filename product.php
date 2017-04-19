<?php
//echo 'Product ID is ' . htmlspecialchars($_GET["pid"]);
//echo 'Product ID: ';
$pid = htmlspecialchars($_GET["pid"]);	//Lấy mã sản phẩm từ request

//VD dữ liệu trên server (thường sẽ lưu ở database)
$products = array
  (
	  array("lt001","Dell Studio",1800),
	  array("ca002","Volkswagen Beelte",28000),
	  array("ca001","BMW",30000),
	  array("bk001","Honda Airblade",2500)
  );
 //Duyệt tìm theo mã sản phẩm
 for($row = 0; $row < count($products); $row++){
	 if($products[$row][0] == $pid){
		 $data = [ 'pid'=>$pid,'name' => $products[$row][1], 'price' => $products[$row][2] ];
		
		//Trả kết quả về dạng JSON
		header('Content-type: application/json');
		echo json_encode( $data );
		break;
	 }
 }

?>
<?php
$requestData= $_REQUEST;
//VD dữ liệu trên server (thường sẽ lưu ở database)
$products = array();
$products[] = array(1,"a.png","lt001","Dell Studio",1,rand(1000,10000));
$products[] = array(2,"b.png","ca002","Volkswagen Beelte",0,rand(1000,10000));
$products[] = array(3,"c.jpg","ca001","BMW",0,rand(1000,10000));
$products[] = array(4,"d.jpg","bk001","Honda Airblade",1,rand(1000,10000));

$json_data = array(
    "recordsTotal"    => intval( 4 ),
    "recordsFiltered" => intval( 4 ),
    "data"            => $products
);
usleep(1000000);
//Trả kết quả về dạng JSON
header('Content-type: application/json');
echo json_encode($json_data);
?>
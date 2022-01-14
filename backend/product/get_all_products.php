<?php
include('../_conection.php');
$response=new stdClass();
// $response2=new stdClass();
$charge=$_POST['charge'];

// $category_check=$_POST['category_check'];

//$datos=array();
$datos=[];
$i=0;
$sql="";

if($charge==1 ){
	$sql="select * from products where state_prod=1";
}

if($charge==2  ){
	$sql="SELECT * FROM products WHERE category_prod ='bags,backpacks'";
}

if($charge==3 ){
	$sql="SELECT * FROM products WHERE category_prod ='accesories' ";
}

if($charge==4 ){
	$sql="SELECT * FROM products WHERE category_prod ='shirt' ";
}

if($charge==5 ){
	$sql="SELECT * FROM products WHERE category_prod ='shoes,tenis,boots'";
}







//  if ($category_check==1) {
// // 	// $sql="select * from products where state_prod=1";
// 	$sql="select * from products where offer_prod=1";
//  }
// if ($category_check==2) {
// 	// $sql="select * from products where state_prod=1";
// 	$sql="select * from products where offer_prod=0";
// }
// if ($category_check==3) {
// 	// $sql="select * from products where state_prod=1";
// 	$sql="select * from products where offer_prod=1";
// }
// if ($category_check==4) {
// 	// $sql="select * from products where state_prod=1";
// 	$sql="select * from products where offer_prod=1";
// }


	// $sql="select * from products where state_prod=1";


// ="select * from products where state_prod=1";
// $sql="select * from products where offer_prod=0";
// $sql="select * from products where offer_prod between 0 and 1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->code_prod=$row['code_prod'];
	$obj->name_prod=$row['name_prod'];
	$obj->description_prod=$row['description_prod'];
	$obj->price_prod=$row['price_prod'];
	$obj->image_route=$row['image_route'];

	$datos[$i]=$obj;
	$i++;
}


$response->datos=$datos;
//  $response2->offers=$offers;
mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
// echo json_encode($response2);

<?php
include('../_conection.php');
$response=new stdClass();


function state2text($id){
		switch ($id) {
			case '1':
				return 'To Process';
				break;

				case '2':
					return 'To Pay';
					break;

				case '3':
					return 'To Deliver';
					break;
					
					
				case '4':
					return 'Incomimng';
					break;
				
				case '5':
					return 'Delivered';
					break;
			
			default:
				
				break;
		}

}

//$datos=array();
$datos=[];
$i=0;
$sql="select *,ord.state_order from orders ord 
inner join products prods on ord.code_prod=prods.code_prod 
 where ord.state_order!=1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->code_order=$row['code_order'];
	$obj->code_prod=$row['code_prod'];
	$obj->name_prod=utf8_encode($row['name_prod']);
	$obj->image_route=$row['image_route'];
	$obj->date_order=$row['date_order'];
	$obj->address_order=utf8_encode($row['address_order']);
	$obj->phone_order=utf8_encode($row['phone_order']);
	$obj->price_prod=$row['price_prod'];
	$obj->state_order=$row['state_order'];
	$obj->state_order_text=state2text($row['state_order']);
	$obj->card_order=utf8_encode($row['card_order']);
	$datos[$i]=$obj;
	$i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);





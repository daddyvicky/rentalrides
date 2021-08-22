<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM vehicles WHERE status = 'free' 
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND vrate BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["state"])  && !empty($_POST["state"])) 
	{
		$query .= "
		 AND states = '".$_POST["state"]."'
		";
	}
	if(isset($_POST["city"])  && !empty($_POST["city"]))
	{
		$query .= "
		 AND city LIKE '%$_POST[city]%'
		";
	}
	if(isset($_POST["type"])  && !empty($_POST["type"]))
	{
		$type_filter = implode("','", $_POST["type"]);
		$query .= "
		AND vtype IN('".$type_filter."')
		";
	}
	if(isset($_POST["sort"])  && !empty($_POST["sort"]))
	{
		if($_POST["sort"]=="low to high")
		{
			$query .= "
			ORDER BY vrate ASC
			";
		}else if($_POST["sort"]=="high to low"){
			$query .= "
			ORDER BY vrate DESC
			";
		}
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
				<div class="ps-product">
					<div class="ps-product__thumbnail"><a href="product.php?id='. $row['vid']  .'"><img src="admin/images/'. $row['image'] .'" alt=""></a>
					</div>
					<div class="ps-product__container"><a class="ps-product__vendor" href="#">'. $row['uname'] .'</a>
						<div class="ps-product__contet"><a class="ps-product__title" href="product-default.html">'. $row['vname'] .'</a>
							<p class="ps-product__price sale">₹'. $row['vrate'] .'/day</p>
							<center><a class="ps-btn" style="width: 100%; text-align: center;font-size: 13px;padding-left: 25px;padding-right: 25px;" href="product.php?id='. $row['vid']  .'">Rent Now</a></center>
						</div>
					</div>
				</div>
			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Vehicles Found</h3>';
	}
	
	echo json_encode(array($output, $total_row));
}
